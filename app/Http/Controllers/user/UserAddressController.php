<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserAddress;

class UserAddressController extends Controller
{
    public function getAddresses($id) {
        try {
            $addresses = UserAddress::where('user_id', $id)->get();
            return response()->json([
                'addresses' => $addresses,
                'status' => 'success',
                'code' => 200
            ], 200);
        } catch(\Exception $e) {
            \Log::error('getAddresses : Error : '.$e->getMessage(). ' | Line : '.$e->getLine());
            return response()->json([
                'status' => 'error',
                'code' => 400
            ], 400);
        }
    }

    public function store(Request $request) {
        try {
            $user_id = $request->id;
            $address = $request->address;
            $is_default = 1;
            UserAddress::where('user_id', $user_id)->update([
                'is_default'=> 0
            ]);
            $userAddress = UserAddress::create([
                'user_id' => $user_id,
                'address' => $address,
                'is_default' => 1
            ]);
            return response()->json([
                'addresses' => $userAddress,
                'status' => 'success',
                'code' => 200
            ], 200);
        } catch(\Exception $e) {
            \Log::error('store user address : Error : '.$e->getMessage(). ' | Line : '.$e->getLine());
            return response()->json([
                'status' => 'error',
                'code' => 400
            ], 400);
        }
    }

    public function deleteAddress($id) {
        try {
            $addresses = UserAddress::where('id', $id)->delete();
            return response()->json([
                'status' => 'success',
                'code' => 200
            ], 200);
        } catch(\Excetion $e) {
            \Log::error('delete user address : Error : '.$e->getMessage(). ' | Line : '.$e->getLine());
            return response()->json([
                'status' => 'error',
                'code' => 400
            ], 400);
        }
    }
}
