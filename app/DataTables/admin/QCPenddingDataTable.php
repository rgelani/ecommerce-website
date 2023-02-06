<?php

namespace App\DataTables\admin;

use App\Models\Product;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class QCPenddingDataTable extends DataTable
{


    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('product_image', function ($row) {
                $src = asset('storage/product/' . explode(',', $row->productImage->src)[0]);


                return "<div class='product_img_and_name' onclick='product_view({$row->id})' >
                    <div class='product_img' data-bs-toggle='modal' data-bs-target='#product_modal' data-product={$row->id}>
                        <img src='{$src}' alt='product' height='50px'>
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

            ->addColumn('seller_name', function ($row) {
                return '';
            })->editColumn('action', static function ($row) {
                return "<label class='checkbox bounce'>
                <input type='checkbox' class='product_checkbox' name='product[]' value={$row->id} />
                <svg viewBox='0 0 21 21'>
                     <polyline points='5 10.75 8.5 14.25 16 6'>
                     </polyline>
                </svg>
           </label>";
            })
            ->rawColumns(['action', 'category', 'product_image', 'seller_name', 'no_of_variant']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Product $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Product $model)
    {
        return $model = $model->with(['variants', 'productImage'])->where('qc_status', 1)->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('qcpendding-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
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
                ->title('Sr. No')
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
            Column::make('created_at')->title('Upload Date'),
            Column::make('seller_name')->title('Seller name'),
            // Column::make('sku')->title('SKU_Id'),
            Column::make('id')->title('Product_ID'),
            // Column::make('')->computed('action')
            Column::make('action')->computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('checkbox-action'),
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