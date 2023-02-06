<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MenuController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $query = menu::where(['is_delete' => 'N']);

            return datatables()->of($query)
                    ->addcolumn('active', function($row){
                        $checked = '';
                        if($row->is_active == 'Y'){
                            $checked = 'checked';
                        }
                        $switch = '';
                        $switch .= '<div class="form-switch">
                                    <input data_id = "'.encrypt($row->id).'" data_url="'.route("seller.menu_publish").'"
                                     datatableId="menu_datatable"
                                     class="publishRecord form-check-input" type="checkbox" '.$checked.'>
                                </div>';
                        return $switch;
                    })
                    ->addColumn('action', function($row) {
                        $button = '';
                            $button .= '<div class="d-flex justify-content-end flex-shrink-0 action-btns">';
                            $button .=  '<a href="'.route('seller.menu_edit',encrypt($row->id)).'" class="btn-icon edit-bg btn-active-color-primary me-1" title="Edit">
                                    <img src="'.asset('seller-assets/image/edit.svg').'" alt="Edit">
                                </a>';
                            $button .= '<a href="'.route('seller.menu_delete',encrypt($row->id)).'" datatableId="menu_datatable" msgTitle="'. trans('messages.swal.head').'" message="'. trans('messages.swal.warning').'" class="deleteRecord btn-icon delete-bg btn-active-color-primary me-1" title="Delete">
                                <img src="'.asset('seller-assets/image/delete.svg').'" alt="Delete">
                            </a>';
                            $button .= '</div">';
                        return $button;
                        })
                    ->rawColumns(['action','active'])
                    ->make(true);
        }
        return view('seller.menu.list');
    }

    public function create() {
        $actions = trans('messages.actiontext.add');
        $url = route('seller.menu_store');
        return view('seller.menu.create',compact('url','actions'));
    }

    public function store(Request $request) {
        try{
            $model = new menu();

            if(empty($model)){
                return redirect()->back()->with('error','Record Not Found');
            }
            $count = menu::count();

            $create = [
                'seller_id' => Auth::guard('seller')->user()->id,
                'title' => $request->title,
                'slug' => $request->slug,
                'parent_id' => $request->parent_id ?? 0,
                'icon_class' => $request->icon_class,
                'is_active' => $request->is_active ? $request->is_active : 'Y',
            ];
            menu::create($create);
            return redirect()->route('seller.menu')->with('success', trans('messages.action.addmenu'));
        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($eid) {
        $actions = trans('messages.actiontext.update');
        $mode = "edit";
        $model= menu::find(decrypt($eid));
        $url = route('seller.menu_update');
        return view('seller.menu.create', compact('model', 'actions', 'url','mode'));
    }

    public function update(Request $request) {
        try{

            $model = menu::find(decrypt($request->eid));

            if(empty($model)){
                return redirect()->back()->with('error','Record id is invalid');
            }

            $update = [
                'seller_id' => Auth::guard('seller')->user()->id,
                'title' => $request->title,
                'slug' => $request->slug,
                'parent_id' => $request->parent_id ?? 0,
                'icon_class' => $request->icon_class,
                'is_active' => $request->is_active ? $request->is_active : $model->is_active,
            ];

            menu::find($model->id)->update($update);
            return redirect()->route('seller.menu')->with('success', trans('messages.action.updatemenu'));
        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function delete(Request $request,$id) {
        menu::find(decrypt($id))->update(['is_delete' => 'Y']);
        return redirect()->route('seller.menu')->with('success', trans('messages.action.deletemenu'));
    }

    public function publish(Request $request){
        $id = decrypt($request->id);
        if($request->action == 'N'){
                menu::find($id)->update(['is_active' => $request->action]);
                return ['data' => 'success'];
                // return redirect()->route('seller.menu')->with('success', trans('messages.action.deletemenu'));
        } else {
            menu::find($id)->update(['is_active' => $request->action]);
            return ['data' => 'success'];
        }
    }
}
