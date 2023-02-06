<?php

namespace App\DataTables;

use App\Models\Product;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProductDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $edit = route('seller.product.edit', [$row->id]);
                $delete = (route('seller.product.delete', ['product' => $row->id]));
                return "<div class='d-flex justify-content-center'style='width:70px;'>
                            <a href='{$edit}' class='edit_btn'>
                                Edit
                            </a>
                        </div>
                        <div class='d-flex justify-content-center'style='width:70px;'>
                        <a href='javascript:;' class='edit_btn' onClick='deleteProduct(`{$delete}`)'>
                            Delete
                        </a>
                    </div>";
            })
            ->addColumn('product_image', function ($row) {
                $src = asset('storage/product/' . explode(',', $row->productImage->src ?? '')[0]);

                return "<div class='product_img_and_name' onclick='product_view({$row->id})' >
                    <div class='product_img' data-bs-toggle='modal' data-bs-target='#product_modal' data-product={$row->id}>
                        <img src='{$src}' alt='product'>
                    </div>
                    <span>{$row->title}</span>
                </div>";
            })
            ->addColumn('category', function ($row) {
                return '';
            })
            ->addColumn('no_of_variant', function ($row) {
                return $row->variants->count();
            })
            ->addColumn('total_order', function ($row) {
                return '';
            })
            ->addColumn('return_order', function ($row) {
                return '';
            })
            ->addColumn('panalty', function ($row) {
                return '';
            })
            ->addColumn('sales', function ($row) {
                return '';
            })

            ->addColumn('qc_status', function ($row) {

                if ($row->qc_status == 1) {
                    $data = '<div class="qc_status">
                    <div class="qc_status_img">
                        <img src="' . asset('seller-assets/image/product_view/settings.png') . '" alt="icon">
                    </div>
                    <span class="table_cm_text pause_text">Pending</span>
                            </div>';
                } elseif ($row->qc_status == 2) {

                    $data = '';
                } elseif ($row->qc_status == 3) {
                    $data = '<div class="qc_status">
                        <div class="qc_status_img">
                            <img src="' . asset('seller-assets/image/product_view/tick.png') . '" alt="icon">
                        </div>
                        <span class="table_cm_text pass_text">Pass</span>
                    </div>';
                } elseif ($row->qc_status == 4) {
                    $data = ' <div class="qc_status">
                        <div class="qc_status_img">
                            <img src="' . asset('seller-assets/image/product_view/error.png') . '" alt="icon">
                        </div>
                        <span class="table_cm_text error_text">Error</span>
                    </div>';
                } elseif ($row->qc_status == 5) {
                    $data = '';
                } elseif ($row->qc_status == 6) {
                    $data = '<div class="qc_status">
                        <div class="qc_status_img">
                            <img src="' . asset('seller-assets/image/product_view/darft.png') . '" alt="icon">
                        </div>
                        <span class="table_cm_text darft_text">Draft</span>
                    </div>';
                }
                return $data;
            })
            ->addColumn('status', function ($row) {
                return '';
            })
            ->addColumn('rating', function ($row) {
                return "<div class='qc_status'>
                            <div class='qc_status_img'>
                                <img src='" . asset('seller-assets/image/product_view/star.png') . "' alt='icon'>
                            </div>
                            <span class='table_cm_text'>4.2</span>
                        </div>";
            })
            ->rawColumns(['action', 'category', 'product_image', 'total_order', 'no_of_variant', 'return_order', 'panalty', 'sales', 'qc_status', 'status', 'rating']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Product $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Product $model)
    {
        $model = $model->with(['variants', 'productImage'])->newQuery();
        if (request('qc_status') && request('qc_status') != 0) {

            return $model = $model->where('qc_status', request('qc_status'));
        } else {
            return $model;
        }
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        $jsScript = "data.qc_status = $('input[name=qc_status]').val();";
        return $this->builder()
            ->setTableId('product-table')
            ->columns($this->getColumns())
            ->minifiedAjax('', $jsScript)
            ->dom('Bfrtip')

            ->buttons(
                Button::make('create'),
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('DT_RowIndex')
                ->title('#')
                ->exportable(false)
                ->printable(false),
            Column::make('product_image')->title('Product')->name('title'),
            Column::make('category')->title('Category'),
            Column::make('no_of_variant')->title('No.Of variant'),
            Column::make('quantity')->title('Stock'),
            Column::make('selling_price')->title('iKart’s price'),
            Column::make('GST')->title('GST%'),
            Column::make('local_delivery_charge')->title('Shipping charges'),
            Column::make('MRP')->title('Amount'),
            Column::make('total_order')->title('Total Order'),
            Column::make('return_order')->title('Return Order'),
            Column::make('panalty')->title('panalty'),
            Column::make('sales')->title('Sales'),
            Column::make('qc_status')->title('Q/C Status'),
            Column::make('status')->title('Status'),
            Column::make('rating')->title('Rating'),
            Column::make('action')->computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Product_' . date('YmdHis');
    }
}