<?php

namespace App\Http\Controllers\user\api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Exception;
use Queue;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\Json;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Services\Master\MasterService;
use App\Helpers\Validation;


class MasterController extends Controller
{

    public function __construct(MasterService $masterServices)
    {
        $this->masterServices = $masterServices;
    }

    public function getFCMToken(Request $request){
        config(['logging.channels.customlog.path' => storage_path('logs/Master/Controller/' . date("Y") . '/' . date("m") . '/' . date("d") . '/' . 'laravel.log')]);
        Log::channel('customlog')->info('ENTRY : getFCMToken :: MasterController.php');
        DB::beginTransaction();
        try {
            $operation = Config::get('constants.operations.add');
            $validator_device = Validator::make($request->all(), Validation::checkFCMTokenRules());
                if ($validator_device->fails()) {
                    return Validation::returnValidationError($validator_device);
                }
            if (!empty(request()->json()->get('app_device_dtl'))) {
                $validator_device = Validator::make(request()->json()->get('app_device_dtl'), Validation::checkFCMTokenDeviceRules());
                if ($validator_device->fails()) {
                    return Validation::returnValidationError($validator_device);
                }
            }
            $fcmToken_detail = $request->all();
            if (!empty($fcmToken_detail)) {
                $addFCMToken = $this->masterServices->addFCMTokenData($operation,$fcmToken_detail);
                if(!empty($addFCMToken)){
                    DB::commit();
                    Log::channel('customlog')->info('RESPONSE : getFCMToken :: MasterController.php'.json_encode($addFCMToken));
                    Log::channel('customlog')->info('EXIT : getFCMToken :: MasterController.php');
                    // return response(["status" => 200, 'message' => 'Data inster successfully!']);
                    return response()->json(Json::response(['id' => $addFCMToken], trans('Data inster successfully!')));
                }
            } else {
                Log::channel('customlog')->debug('ERROR : getFCMToken :: MasterController.php ' . json_encode($fcmToken_detail));
                return response()->json(Json::fail_validation_response([], trans('Oops something went wrong, Please try again later !')));
            }
        } catch (Exception $e){
            return response()->json(Json::error_response(['error' => $e], trans('Oops something went wrong, Please try again later !')));
        }
    }
}
