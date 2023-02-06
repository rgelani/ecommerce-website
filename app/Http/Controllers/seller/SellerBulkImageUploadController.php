<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\SellerBulkImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SellerBulkImageUploadController extends Controller
{
    public function index()
    {
        $bulkImageListing = SellerBulkImage::select('id')->where('seller_id', Auth::user()->id)->get();
        return view('seller.bulk-product-gallary.index', compact('bulkImageListing'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photos' => 'required',
        ]);

        $productImagUpload = null;

        if ($request->hasfile('photos')) {
            foreach ($request->file('photos') as $key => $file) {
                $name = preg_replace('/\s+/', '', time() . '_' . Str::random(30) . '_' . $file->getClientOriginalExtension());
                $file->storeAs('uploads/bulk-uploaded-images', $name, 'public');

                $productImagUpload = SellerBulkImage::create([
                    'seller_id' => Auth::user()->id,
                    'photos' => $name,
                ]);
            }
        }

        if ($productImagUpload) {
            return redirect()->back()->with('success', 'Multiple File has been uploaded Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong with bulk upload');
        }
    }

    public function imageUrl(Request $request)
    {
        $seller = auth()->user();
        return SellerBulkImage::select('photos')->where('seller_id', $seller->id)->where('id', $request->id)->first();
    }

    public function bulkImageUploader(Request $request)
    {
        $requestUpdatedData = request()->except('_token');

        $productImageGet = SellerBulkImage::where('seller_id', Auth::user()->id)->pluck('photos')->first();
        $explodeImages = explode(',', $productImageGet);
        $flipped = array_flip($explodeImages);

        if ($request->hasfile('images') && !empty($requestUpdatedData['old'])) {

            Log::info('new request images is coming and also old images not empty');

            $returnUpdateImagesResponse = $this->updateImage($request->file('images'));
            $filterReturnResponse = $this->filterImage($flipped, $requestUpdatedData['old']);
            $mergeArray = array_merge($filterReturnResponse, $returnUpdateImagesResponse);
            $finalUploadImages = implode(',', $mergeArray);

        } else if ($request->hasfile('images') && !array_key_exists('old', $requestUpdatedData)) {

            Log::info('old image delete and only new images uploads');

            $this->deleteStorageImage($explodeImages);
            $returnUpdateImagesResponse = $this->updateImage($request->file('images'));
            $finalUploadImages = implode(',', $returnUpdateImagesResponse);

        } else if (!$request->hasfile('images') && !empty($requestUpdatedData['old'])) {
            Log::info('open edit modal but not update any old images or not added any new images');

            $filterReturnResponse = $this->filterImage($flipped, $requestUpdatedData['old']);
            $finalUploadImages = implode(',', $filterReturnResponse);

        } else if (!array_key_exists('old', $requestUpdatedData)) {

            Log::info('all images clear');

            $this->deleteStorageImage($explodeImages);
            $finalUploadImages = null;
        }

        $sellerProductsCreate = SellerBulkImage::updateOrCreate(
            [
                'seller_id' => Auth::user()->id,
            ],
            [
                'photos' => $finalUploadImages,
            ]
        );

        if ($sellerProductsCreate) {
            return response(['msg' => 'Saved Changes successfully', 'status' => 200]);
        } else {
            return response(['msg' => 'Something went wrong with uploading bulk image', 'status' => 422]);
        }
    }

    public function filterImage($flipped, $oldImageArray)
    {
        //get difference images value
        $arrayDiff = array_diff($flipped, $oldImageArray);
        $flippedDiffImages = array_flip($arrayDiff);

        //delete difference images into storage
        $this->deleteStorageImage($flippedDiffImages);

        //collect same value into two arrays using array Intersect
        $result = array_intersect($flipped, $oldImageArray);
        return $flipped = array_flip($result);
    }

    public function updateImage($images)
    {
        foreach ($images as $file) {
            $name = preg_replace('/\s+/', '', time() . '_' . Str::random(30) . '_' . $file->getClientOriginalExtension());
            $file->storeAs('uploads/bulk-uploaded-images', $name, 'public');
//            $name = time() . '_' . str_replace(" ", "_", $file->getClientOriginalName());
//            $file->move(public_path() . 'uploads/bulk-uploaded-images/', $name);
            $imgUpdateData[] = $name;
        }
        return $imgUpdateData;
    }

    public function deleteStorageImage($explodeImages)
    {
        foreach ($explodeImages as $singleImage) {
            File::delete(public_path('storage/uploads/bulk-uploaded-images/' . $singleImage));
        }
    }

    public function preloadedImages(Request $request)
    {
        if ($request->ajax()) {

            $sellerBulkImages = SellerBulkImage::where('seller_id', Auth::user()->id);

            $images = $sellerBulkImages->pluck('photos')->first();

            if($images){
                $explodes = explode(',', $images);

                $number = 0;
                $path = [];
                foreach ($explodes as $explode) {
                    $image = [
                        'id' => $number++,
                        'src' => asset('storage/uploads/bulk-uploaded-images/' . $explode),
                    ];
                    array_push($path, $image);
                }
            }else{
                $path = [];
            }

            return $path;
        }
    }
}
