<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\ChildSubCategory;
use App\Models\Category;
use App\Models\SubCategory;
use App\Http\Controllers\Controller;
use App\Models\HsnCode;
use Yajra\DataTables\Facades\DataTables;

class ChildSubCategoryController extends Controller
{
    public function index(Request $request) {
        $categories = SubCategory::get();
        return view('admin.childsubcategory.list', compact('categories'));
    }

    public function list(Request $request) {
        $categories = ChildSubCategory::get();
        if ($request->ajax()) {
            return DataTables::of($categories)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit = route('admin.childsubcategory.edit', ['id' => $row->id]);
                    $delete = route('admin.childsubcategory.delete', ['id' => $row->id]);
                    return "<ul class='d-flex p-0 categsubcategoryory-action'>
                    <li>
                        <a href='{$edit}'>
                            <svg width='21' height='21' viewBox='0 0 21 21' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <path opacity='0.4' d='M13.48 1.38672H5.52C2.07 1.38672 0 3.44672 0 6.90672V14.8567C0 18.3267 2.07 20.3867 5.52 20.3867H13.47C16.93 20.3867 18.99 18.3267 18.99 14.8667V6.90672C19 3.44672 16.93 1.38672 13.48 1.38672Z' fill='#4C6171'/>
                            <path d='M19.0201 1.36504C17.2301 -0.434959 15.4801 -0.474959 13.6401 1.36504L12.5101 2.48504C12.4101 2.58504 12.3801 2.72504 12.4201 2.85504C13.1201 5.30504 15.0801 7.26504 17.5301 7.96504C17.5601 7.97504 17.6101 7.97504 17.6401 7.97504C17.7401 7.97504 17.8401 7.93504 17.9101 7.86504L19.0201 6.74504C19.9301 5.83504 20.3801 4.96504 20.3801 4.07504C20.3801 3.17504 19.9301 2.28504 19.0201 1.36504V1.36504ZM15.8601 8.80704C15.5901 8.67704 15.3301 8.54704 15.0901 8.39704C14.8901 8.27704 14.6901 8.14704 14.5001 8.00704C14.3401 7.90704 14.1601 7.75704 13.9801 7.60704C13.9601 7.59704 13.9001 7.54704 13.8201 7.46704C13.5101 7.21704 13.1801 6.87704 12.8701 6.50704C12.8501 6.48704 12.7901 6.42704 12.7401 6.33704C12.6401 6.22704 12.4901 6.03704 12.3601 5.82704C12.2501 5.68704 12.1201 5.48704 12.0001 5.27704C11.8501 5.02704 11.7201 4.77704 11.6001 4.51704C11.4701 4.23704 11.3701 3.97704 11.2801 3.72704L5.9001 9.10704C5.5501 9.45704 5.2101 10.117 5.1401 10.607L4.7101 13.587C4.6201 14.217 4.7901 14.807 5.1801 15.197C5.5101 15.527 5.9601 15.697 6.4601 15.697C6.5701 15.697 6.6801 15.687 6.7901 15.677L9.7601 15.257C10.2501 15.187 10.9101 14.857 11.2601 14.497L16.6401 9.11704C16.3901 9.03704 16.1401 8.92704 15.8601 8.80704Z' fill='#1F4173'/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href='{$delete}'>
                            <svg width='20' height='22' viewBox='0 0 20 22' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <path d='M18.8236 3.98C17.2136 3.82 15.6036 3.7 13.9836 3.61V3.6L13.7636 2.3C13.6136 1.38 13.3936 0 11.0536 0H8.43358C6.10358 0 5.88358 1.32 5.72358 2.29L5.51358 3.57C4.58358 3.63 3.65358 3.69 2.72358 3.78L0.683576 3.98C0.263576 4.02 -0.0364245 4.39 0.00357552 4.8C0.0435755 5.21 0.403575 5.51 0.823575 5.47L2.86358 5.27C8.10358 4.75 13.3836 4.95 18.6836 5.48H18.7636C19.1436 5.48 19.4736 5.19 19.5136 4.8C19.5286 4.60024 19.4648 4.40253 19.3358 4.24925C19.2069 4.09596 19.023 3.99931 18.8236 3.98V3.98Z' fill='#FFA2A2'/>
                            <path opacity='0.399' d='M16.9837 6.89C16.7437 6.64 16.4137 6.5 16.0737 6.5H3.43366C3.09366 6.5 2.75366 6.64 2.52366 6.89C2.29366 7.14 2.16366 7.48 2.18366 7.83L2.80366 18.09C2.91366 19.61 3.05366 21.51 6.54366 21.51H12.9637C16.4537 21.51 16.5937 19.62 16.7037 18.09L17.3237 7.84C17.3437 7.48 17.2137 7.14 16.9837 6.89V6.89Z' fill='#FD8686'/>
                            <path fill-rule='evenodd' clip-rule='evenodd' d='M7.33391 15.75C7.33391 15.5511 7.41292 15.3603 7.55358 15.2197C7.69423 15.079 7.88499 15 8.08391 15H11.4139C11.6128 15 11.8036 15.079 11.9442 15.2197C12.0849 15.3603 12.1639 15.5511 12.1639 15.75C12.1639 15.9489 12.0849 16.1397 11.9442 16.2803C11.8036 16.421 11.6128 16.5 11.4139 16.5H8.08391C7.88499 16.5 7.69423 16.421 7.55358 16.2803C7.41292 16.1397 7.33391 15.9489 7.33391 15.75ZM6.50391 11.75C6.50391 11.5511 6.58292 11.3603 6.72358 11.2197C6.86423 11.079 7.05499 11 7.25391 11H12.2539C12.4528 11 12.6436 11.079 12.7842 11.2197C12.9249 11.3603 13.0039 11.5511 13.0039 11.75C13.0039 11.9489 12.9249 12.1397 12.7842 12.2803C12.6436 12.421 12.4528 12.5 12.2539 12.5H7.25391C7.05499 12.5 6.86423 12.421 6.72358 12.2803C6.58292 12.1397 6.50391 11.9489 6.50391 11.75Z' fill='#FF0000'/>
                            </svg>
                        </a>
                    </li>
                </ul>";
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.childsubcategory.list', compact('categories'));
    }

    public function store(Request $request) {
        try {
            if(!empty($request->category_id) && !empty($request->category_name)) {
                $category = ChildSubCategory::create(['name' => $request->category_name, 'sub_category_id' => $request->category_id]);
            }
        } catch(\Exception $e) {
            \Log::error('Error on childsubcategoryController categoryMainCreate function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
        }
        return redirect('admin/subcategory');
    }

    public function edit($id) {
        try {
            $category = ChildSubCategory::where('id', $id)->first();
            $categories = SubCategory::get();
            return view('admin.childsubcategory.edit', compact('category', 'categories'));    
        } catch(\Exception $e) {
            \Log::error('Error on childsubcategoryController edit function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
        }
        return redirect('admin/childsubcategory/list');
    }    

    public function update(Request $request, $id) {
        try {
            $data['sub_category_id'] = $request->category_id;
            $data['name'] = $request->category_name;
            SubCategory::where('id', $id)->update($data);
        } catch(\Exception $e) {
            \Log::error('Error on childsubcategoryController edit function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
        }
        return redirect('admin/childsubcategory/list');
    }

    public function delete($id) {
        try {
            ChildSubCategory::where('id', $id)->delete();
        } catch(\Exception $e) {
            \Log::error('Error on childsubcategoryController delete function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
        }
        return redirect('admin/childsubcategory/list');
    }
}
