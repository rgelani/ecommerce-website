<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\CmsPages;
use App\Models\General;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CmsPagesController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $query = CmsPages::where(['is_delete' => 'N']);
            return datatables()->of($query)
                    ->addcolumn('active', function($row){
                        $checked = '';
                        if($row->is_active == 'Y'){
                            $checked = 'checked';
                        }
                        $switch = '';
                        $switch .= '<div class="form-switch">
                                    <input data_id = "'.encryptId($row->id).'" data_url="'.route('seller.cmspages_publish').'" datatableId="cmspages_datatable"  class="publishRecord form-check-input" type="checkbox" '.$checked.'>
                                </div>';
                        return $switch;
                    })
                    ->addColumn('action', function($row) {
                        $button = '';
                            $button .= '<div class="d-flex justify-content-end flex-shrink-0 action-btns">';
                            $button .=  '<a href="'.route('seller.cmspages_edit',encryptId($row->id)).'" class="btn-icon edit-bg btn-active-color-primary me-1" title="Edit">
                                    <img src="'.asset('seller-assets/image/edit.svg').'" alt="Edit">
                                </a>';
                            $button .= '<a href="'.route('seller.cmspages_delete',encryptId($row->id)).'" datatableId="cmspages_datatable" msgTitle="'. trans('messages.swal.head').'" message="'. trans('messages.swal.warning').'" class="deleteRecord btn-icon delete-bg btn-active-color-primary me-1" title="Delete">
                                <img src="'.asset('seller-assets/image/delete.svg').'" alt="Delete">
                            </a>';
                            $button .= '</div">';
                        return $button;
                        })
                    ->rawColumns(['action','active'])
                    ->make(true);
        }
        return view('seller.cmspages.list');
    }

    public function create() {
        $actions = trans('messages.actiontext.add');
        $url = route('seller.cmspages_store');
        return view('seller.cmspages.create',compact('url','actions'));
    }

    public function store(Request $request) {
        try{
            $model = new CmsPages();

            if(empty($model)){
                return redirect()->back()->with('error','Record Not Found');
            }
            $count = CmsPages::latest()->first();
            $slug = strtolower($request->title);
            $custom_slug = General::createSlug($slug);
            $create = [
                'id' => $count->id + 1,
                'seller_id' => Auth::guard('seller')->user()->id,
                'title' => $request->title,
                'slug' => $custom_slug,
                'description' => $request->description,
                'is_active' => $request->is_active ? $request->is_active : 'Y',
            ];
            CmsPages::create($create);
            return redirect()->route('seller.cmspages')->with('success', trans('messages.action.addcmspages'));
        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($eid) {
        $actions = trans('messages.actiontext.update');
        $mode = "edit";
        $model= CmsPages::find(decryptId($eid));
        $url = route('seller.cmspages_update');
        return view('seller.cmspages.create', compact('model', 'actions', 'url','mode'));
    }

    public function update(Request $request) {
        try{

            $model = CmsPages::find(($request->eid));

            if(empty($model)){
                return redirect()->back()->with('error','Record id is invalid');
            }
            $slug = strtolower($request->title);
            $custom_slug = General::createSlug($slug);
            $update = [
                'seller_id' => Auth::guard('seller')->user()->id,
                'title' => $request->title,
                'slug' => $custom_slug,
                'description' => $request->description,
                'is_active' => $request->is_active ? $request->is_active : $model->is_active,
            ];

            CmsPages::find($model->id)->update($update);
            return redirect()->route('seller.cmspages')->with('success', trans('messages.action.updatecmspages'));
        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function delete(Request $request,$id) {
        CmsPages::find(decryptId($id))->update(['is_delete' => 'Y']);
        return redirect()->route('seller.cmspages')->with('success', trans('messages.action.deletecmspages'));
    }

    public function publish(Request $request){
        $id = decryptId($request->id);
        if($request->action == 'N'){
                CmsPages::find($id)->update(['is_active' => $request->action]);
                return ['data' => 'success'];
        } else {
            CmsPages::find($id)->update(['is_active' => $request->action]);
            return ['data' => 'success'];
        }
    }
}
