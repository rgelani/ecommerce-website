<?php

namespace App\Models\api;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Throwable;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Login extends Authenticatable
{
    use Notifiable;
    protected $table = 'seller_phone_otp';
    public $timestamps = false;

    protected $fillable = [
        'id', 'seller_id', 'phone_number','otp','otp_expires_time'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function getDetailsByContact_number($contact_number) {
        $number = DB::table('sellers')->select('*')->where(['phone_number' => $contact_number])->first();
        return $number;
    }

    public function addOTP($contact_number,$otp,$otp_expires_time) {
        try{

            $details = $this->getDetailsByContact_number($contact_number);
            $data['seller_id'] = !empty($details->id) ? $details->id : Config::get('constants.default.null');
            $data['phone_number'] = !empty($contact_number) ? $contact_number : Config::get('constants.default.null');
            $data['otp'] = !empty($otp) ? $otp : Config::get('constants.default.null');
            $data['otp_expires_time'] = !empty($otp_expires_time) ? $otp_expires_time : Config::get('constants.default.null');

            // $data->is_active = true;
            $data['created_at'] = date(Config::get('constants.default.system_datetime_format'));
            // $data->created_by = 1;
            $data['updated_at'] = date(Config::get('constants.default.system_datetime_format'));
            // $data->updated_by = 1;

            $insert = Login::create($data);
            return $insert->seller_id;
        } catch (Throwable $t) {
            throw $t;
        }
    }

    public function getValidOTP($request){
        if($request) {
            $query = Login::select('*')
            ->where('phone_number', $request->contact_number)
            ->where('otp', $request->otp)
            ->first();
            return $query;
        }
    }

    public function timeoutOTP($request){
        if($request) {
            $query = Login::select('*')
                ->where('phone_number', $request->phone_number)
                ->where('otp', $request->otp)
                ->where('otp_expires_time', $request->otp_expires_time)
                ->first();
            return $query;
        }
    }

    public function OTPexpire($request){
        if($request) {
            $query = Login::where('id', $request->id)
            ->update(['otp' => Config::get('constants.default.null'),
            'otp_expires_time' => Config::get('constants.default.null')]);
            return $query;
        }
    }

    public function OTPsuccess($request){
        if($request) {
            $query = Login::where('id', $request->id)
            ->update(['otp' => Config::get('constants.default.null'),
            'otp_expires_time' => Config::get('constants.default.null')]);
            if($query){
                $query = DB::table('sellers')->select('*')->where('id', $request->seller_id)->get();
                return $query;
            }
        }
    }
}
