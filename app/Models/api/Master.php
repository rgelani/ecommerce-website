<?php

namespace App\Models\api;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Throwable;
use DB;
use Carbon\Carbon;

class Master extends Authenticatable
{
    use Notifiable;
    protected $table = 'master_app_info';
    public $timestamps = false;

    protected $fillable = [
        'id', 'contact_number', 'udid','platform','brand','model','app_version','fcm_token','is_active'
    ];

    protected $hidden = [
        'created_on', 'updated_on', 'created_by', 'updated_by'
    ];

    public function getDetailsByContact_number($contact_number) {
        $data = Master::firstorNew(['contact_number' => $contact_number]);
        return $data;
    }

    public function addFCMToken($operation, $FCMToken_data) {
        try{
            $data = $this->getDetailsByContact_number($FCMToken_data['contact_number']);
            $data->contact_number = !empty($FCMToken_data['contact_number']) ? $FCMToken_data['contact_number'] : Config::get('constants.default.null');
            $data->udid = !empty($FCMToken_data['udid']) ? $FCMToken_data['udid'] : Config::get('constants.default.null');
            $data->platform = !empty($FCMToken_data['platform']) ? $FCMToken_data['platform'] : Config::get('constants.default.null');
            $data->brand = !empty($FCMToken_data['brand']) ? $FCMToken_data['brand'] : Config::get('constants.default.null');
            $data->model = !empty($FCMToken_data['model']) ? $FCMToken_data['model'] : Config::get('constants.default.null');
            $data->app_version = !empty($FCMToken_data['app_version']) ? $FCMToken_data['app_version'] : Config::get('constants.default.null');
            $data->fcm_token = !empty($FCMToken_data['fcm_token']) ? $FCMToken_data['fcm_token'] : Config::get('constants.default.null');
            $data->is_active = true;
            $data->created_on = date(Config::get('constants.default.system_datetime_format'));
            $data->created_by = 1;
            $data->updated_on = date(Config::get('constants.default.system_datetime_format'));
            $data->updated_by = 1;

            Log::channel('stack')->info('Query '. json_encode($data));
            $data->save();
            return $data->id;
        } catch (Throwable $t) {
            throw $t;
        }
    }
}
