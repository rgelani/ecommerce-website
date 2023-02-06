<?php

namespace App\Http\Controllers\admin;

use App\DataTables\admin\QCPenddingDataTable;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApprovalController extends Controller
{
    public function index(QCPenddingDataTable $dataTable)
    {
        return $dataTable->render('admin.product_approval.single_product_listing');
    }

    public function bulk_product_approval()
    {
        return view('admin.product_approval.bulk_product_approval');
    }

    public function qcPendingToProgress(Request $request)
    {
        Product::whereIn('id', $request->product)->update(['qc_status' => '2']);
        return response()->json();
    }

    public function qcProcess()
    {
        $products = Product::with(['variants', 'productImage'])->where(['qc_status' => '2'])->paginate(9);
        return view('admin.product_approval.qc_process', compact('products'));
    }

    public function qcProcessSubmit(Request $request)
    {
        Product::whereIn('id', $request->product_checkbox)->update(['qc_status' => $request->status]);
        return response()->json();
    }

    public function qcPass()
    {
        $products = Product::with(['variants', 'productImage'])->where(['qc_status' => '3'])->paginate(9);
        return view('admin.product_approval.qc_pass', compact('products'));
    }

    public function qcError()
    {
        $products = Product::with(['variants', 'productImage'])->where(['qc_status' => '4'])->paginate(9);
        return view('admin.product_approval.qc_error', compact('products'));
    }

    public function qcFailed()
    {
        $products = Product::with(['variants', 'productImage'])->where(['qc_status' => '5'])->paginate(9);
        return view('admin.product_approval.qc_failed', compact('products'));
    }
}
