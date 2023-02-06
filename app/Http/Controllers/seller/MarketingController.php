<?php

namespace App\Http\Controllers\seller;

use Illuminate\Http\Request;
use App\DataTables\MarketingDatatable;
use App\Models\Product;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Models\SellerCampaignAmount;
use App\Models\SellerCampaign;
use App\Models\SellerCampaignProduct;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MarketingController extends Controller
{
    public function index()
    {
        return view('seller.marketing.main');
    }

    public function campaignList(Request $request)
    {
        return view('seller.marketing.campaign.list');
    }

    public function campaignListAjax()
    {
        $data = SellerCampaign::all();
        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                return '<button type="button" class="btn btn-success btn-sm" id="getEditArticleData" data-id="' . $data->id . '" onclick="window.location=\'' . route('seller.marketing.form', $data->id) . '\'">Edit</button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function form(Request $request)
    {
        $products = Product::all();
        if ($request->id) {
            $campaign = SellerCampaign::with('products')->find($request->id);
            $start_time = Carbon::createFromFormat('d/m/Y H:i:s', $campaign->start_time)->timestamp;
            $editable   = $start_time - Carbon::now()->timestamp > 0 ? 0 : 1;
            $productIds = SellerCampaignProduct::where(['campaign_id' => $campaign->id])->pluck('product_id')->toArray();
            $products = Product::wherenotin('id',  $editable ? $productIds : [])->get();
            // dd($campaign);
            return view('seller.marketing.campaign.create-edit', compact('products', 'campaign','editable','productIds'));
        }
        return view('seller.marketing.campaign.create-edit', compact('products'));
    }

    public function productList(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::with('category')->get();
            // dd($data);
            return DataTables::of($data)
                ->addColumn('select', function ($row) {
                    return '<label class="checkbox bounce">
                                <input type="checkbox" id="check_box">
                                    <svg viewBox="0 0 21 21">
                                        <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                    </svg>
                            </label>';
                })
                // ->addColumn('category', function ($data) {
                //     return $data->category->name;
                // })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                    return $btn;
                })
                ->rawColumns(['select', 'action'])
                ->make(true);
        }
    }

    public function manageCampaign(Request $request)
    {
        // return $request->all();
        $campaignAmount = SellerCampaignAmount::where(['seller_id' => Auth::id()])->first();
        $rules = [
            'product'           => 'required|array',
            'product.id.*'      => 'required',
            'product.status.*'  => 'boolean',
            'product.cpc.*'     => 'required|numeric|between:0.25,0.90',
            'no_end_time'       => 'boolean',
        ];
        if (!$request->id || !$request->editable) {
            $rulesAdd = [
                'name'              => 'required|max:255',
                'amount'            => 'required|numeric|min:250|max:' . @$campaignAmount->total_amount ?? 0,
                'start_time'        => 'required|date_format:d/m/Y H:i:s',
                'end_time'          => $request->no_end_time ? '' : 'required|date_format:d/m/Y H:i:s|after:start_time'
            ];
            $rules = array_merge($rules, $rulesAdd);
        }
        // return $campaignAmount;
        $validator = Validator::make($request->all(), $rules, [
            'product.required'          => 'Please select at least 1 product.',
            'amount.max'                => 'The amount must not be greater than your balance.',
            'end_time.required_without' => 'The end time field is required.',
            'product.cpc.*.required'    => 'required',
            'product.cpc.*.between'     => 'must be between 0.25 and 0.90',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->getMessageBag()->toArray()]);
        }

        if (!$request->id || !$request->editable) {
            $campaign = SellerCampaign::updateOrCreate([
                'id' => $request->id
            ], [
                'type'             => $request->type,
                'name'             => $request->name,
                'seller_id'        => Auth::id(),
                'total_amount'     => $request->amount,
                'start_time'       => $request->start_time,
                'no_end_time'      => $request->no_end_time ?? false,
                'end_time'         => $request->end_time,
            ]);
        }

        foreach ($request->product['id'] as $key => $value) {
            SellerCampaignProduct::updateOrCreate([
                'product_id' => $value,
                'campaign_id' => $request->id ?? $campaign->id
            ], [
                'product_id'   => $value,
                'campaign_id'  => $request->id ?? $campaign->id,
                'status'       => @$request->product['status'][$key] ?? false,
                'cpc'          => @$request->product['cpc'][$key] ?? 0.25
            ]);
        }

        // Session::flash("membership", "Membership Page Updated !");
        return response()->json('success');
    }

    public function manageCampaignProduct(Request $request)
    {
        if ($request->ajax()) {
            $rules = [
                'product_id'    => 'required',
                'campaign_id'   => 'required',
                'status'        => 'required|boolean',
                'cpc'           => 'required|numeric|between:0.25,0.90',
            ];


            $validator = Validator::make($request->all(), $rules, [
                'product.cpc.*.required'    => 'required',
                'product.cpc.*.between'     => 'must be between 0.25 and 0.90',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->getMessageBag()->toArray()]);
            }

            $campaignProduct = SellerCampaignProduct::where(['product_id' => $request->product_id, 'campaign_id' => $request->campaign_id])->first();
            if (!$campaignProduct) {
                $campaignProduct = new SellerCampaignProduct();
                $campaignProduct->product_id   = $request->product_id;
                $campaignProduct->campaign_id  = $request->campaign_id;
            }
            $campaignProduct->status       = $request->status;
            $campaignProduct->cpc          = $request->cpc;
            $campaignProduct->save();
            return response()->json('success');
        }
        return 0;
    }

    public function deletecampaignProduct(Request $request)
    {
        if ($request->ajax()) {
            $rules = [
                'product_id'    => 'required',
                'campaign_id'      => 'required'
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->getMessageBag()->toArray()]);
            }

            SellerCampaignProduct::where(['product_id' => $request->product_id, 'campaign_id' => $request->campaign_id])->delete();
            return response()->json('success');
        }
        return 0;
    }
}
