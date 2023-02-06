<?php

namespace App\Services\Master;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;
use App\Models\api\Master;
use Exception;
use App\Helpers\Validation;
use App\Http\Controllers\Auth\Json;

class MasterService {
    public function __construct() {

    }



    /* Store FCM Token and device information */
    public function addFCMTokenData($operation,$add_FCMToken_data) {
        $FCMToken_data = $this->getFCMTokenData($operation, $add_FCMToken_data);
        Log::channel('stack')->info('Request : add :: MasterService.php '. json_encode($FCMToken_data));
        if(!empty($FCMToken_data)){
            $fcmToken_dtl = new Master();
            $fcmToken = $fcmToken_dtl->addFCMToken($operation, $FCMToken_data);
            return $fcmToken;
        }
    }

    public function getFCMTokenData($operation, $request) {
        if (!empty($operation) && !empty($request)) {
            $fcmToken_data_val = array(
                'contact_number' => !empty($request['contact_number']) ? $request['contact_number']: Config::get('constants.default.null'),
                'udid' => !empty($request['app_device_dtl']['udid']) ? $request['app_device_dtl']['udid']: Config::get('constants.default.null'),
                'platform' => !empty($request['app_device_dtl']['platform']) ? $request['app_device_dtl']['platform']: Config::get('constants.default.null'),
                'brand' => !empty($request['app_device_dtl']['brand']) ? $request['app_device_dtl']['brand']: Config::get('constants.default.null'),
                'model' => !empty($request['app_device_dtl']['model']) ? $request['app_device_dtl']['model']: Config::get('constants.default.null'),
                'app_version' => !empty($request['app_device_dtl']['app_version']) ? $request['app_device_dtl']['app_version']: Config::get('constants.default.null'),
                'fcm_token' =>  !empty($request['app_device_dtl']['fcm_token']) ? $request['app_device_dtl']['fcm_token'] : Config::get('constants.default.null'),
                'is_active' =>  !empty($request['is_active']) ? strtolower($request['is_active']) : Config::get('constants.default.null')
            );

            $fcmToken_data = $this->getFCMTokenStatus($operation, $request, $fcmToken_data_val);
            return $fcmToken_data;
        }
    }

    public function getFCMTokenStatus($operation, $request_data, $fcmToken_data) {
        if (!empty($operation) && $operation==Config::get('constants.operations.add')) {
            $fcmToken_data['is_active'] = Config::get('constants.default.true');
        }
        // if (!empty($operation) && $operation==Config::get('constants.operations.change_status')) {
        //     $is_active = $request_data['is_active'];
        //     unset($fcmToken_data);
        //     $fcmToken_data = array();
        //     $fcmToken_data['is_active'] = $is_active;
        // }
        return $fcmToken_data;
    }


}