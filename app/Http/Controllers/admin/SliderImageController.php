<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;

class SliderImageController extends Controller
{
    public $req;

    public function __construct(Request $request) {
        $this->req = $request;
    }

    public function index() {
        try {
            return view('admin.slider_image.images');
        } catch(\Exception $e) {
            Log::info('Error on slider image index function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
        }
    }

    public function indexAjax() {
        try {
            $data = SliderImage::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit = route('admin.slider.edit', ['id' => $row->id]);
                    $delete = route('admin.slider.delete', ['id' => $row->id]);
                    return "
                    <a href='{$edit}' class='btn btn-success btn-sm mr-md-1'><i class='fas fa-edit'></i></a>
                    <a href='{$delete}' class='btn btn-danger btn-sm mr-md-1'><i class='fas fa-trash'></i></a>";
                })
                ->rawColumns(['action'])
                ->make(true);
        } catch(\Exception $e) {
            Log::info('Error on slider image indexAjax function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
            return response()->json(['status' => 'error', 'message' => $e->getMessage(), 'code' => 400], 400);
        }
    }

    public function getSliderImages() {
        try {
            $data = SliderImage::all();
            return response()->json(['status' => 'success', 'data' => $data, 'code' => 200], 200);
        } catch(\Exception $e) {
            Log::info('Error on slider image indexAjax function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
            return response()->json(['status' => 'error', 'message' => $e->getMessage(), 'code' => 400], 400);
        }
    }

    public function create(Request $request) {
        try {
            
        } catch(\Exception $e) {
            Log::info('Error on slider image create function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
        }
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'image.*' => 'jpeg,png,jpg,gif,svg',
            ]);
            if($file = $request->hasFile('image')) {
                $file = $request->file('image') ;
                $fileName = strtotime(\Carbon\Carbon::now()).'-'.$file->getClientOriginalName();
                $destinationPath = public_path().'/sliderImages' ;
                $file->move($destinationPath,$fileName);
                SliderImage::create([
                    'image' => $fileName
                ]);
            }
        } catch(\Exception $e) {
            dd($e);
            Log::info('Error on slider image store function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
        }
        return redirect('admin/slider');
    }

    public function edit($id) {
        try {
            $category = SliderImage::where('id', $id)->first();
            return view('admin.category.edit', compact('category'));
        } catch(\Exception $e) {
            Log::info('Error on slider image edit function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
        }
    }

    public function update(Request $request) {
        try {
            $request->validate([
                'image.*' => 'jpeg,png,jpg,gif,svg',
            ]);
            if($file = $request->hasFile('image')) {
                $file = $request->file('image') ;
                $fileName = strtotime(\Carbon\Carbon::now()).'-'.$file->getClientOriginalName();
                $destinationPath = public_path().'/sliderImages' ;
                $file->move($destinationPath,$fileName);
                SliderImage::where('id', $request->image_id)
                ->update(['image' => $fileName]);
            }
        } catch(\Exception $e) {
            Log::info('Error on slider image update function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
        }
        return redirect('admin/slider');
    }

    public function delete($id) {
        try {
            SliderImage::where('id', $id)->delete();
        } catch(\Exception $e) {
            Log::info('Error on slider image delete function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
        }
        return redirect('admin/slider');
    }
}
