<?php

namespace App\DataTables\Seller;

use App\Models\Line_item;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ReadyToShipOrderDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('delivary_patner', function ($row) {
                return 'Delivary';
            })
            ->addColumn('address', function ($row) {
                return @$row->order->address->address1 . "," . @$row->order->address->address2 . "," . @$row->order->address->address3;
            })
            ->addColumn('created_at', function ($row) {
                return ($row->created_at)->format('d-m-Y');
            })->addColumn('lebal_invoice', function ($row) {
                return "<a href='" . route('seller.order.lebal_invoice.single', ['id' => $row->id]) . "'>lebal invoice</a>";
            })->addColumn('manifest', function ($row) {
                return "<a href='" . route('seller.order.manifest.single', ['id' => $row->id]) . "'>manifest</a>";
            })->rawColumns(['manifest', 'lebal_invoice']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Seller/Order $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Line_item $model)
    {

        $model = $model->with(['seller', 'product', 'variant', 'order'])->where(['seller_id' => Auth::guard('seller')->user()->id, 'status' => '1'])->newQuery();
        return $model;
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
            ->setTableId('myTable')
            ->setTableAttributes(['class' => 'table cm_table'])
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
            Column::make('order_id')->title('order_id'),
            Column::make('sku')->title('sku'),
            Column::make('title')->title('Product')->name('title'),
            Column::make('product_id')->title('Product')->name('product_id'),
            Column::make('delivary_patner')->title('Delivary Patner'),
            Column::make('selling_price')->title('Ikart price'),
            Column::make('MRP')->title('MRP'),
            Column::make('tax_total')->title('GST'),
            Column::make('shiping_charge')->title('Shipping_charge'),
            Column::make('shiping_charge')->title('total_Amount'),
            Column::make('address')->title('Shipping Address'),
            Column::make('created_at')->title('Order Date'),
            Column::make('manifest')->title('manifest'),
            Column::make('lebal_invoice')->title('Lebal Invoice'),

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Seller/Order_' . date('YmdHis');
    }
}