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
use App\Services\Login\LoginService;
use App\Helpers\Validation;


class LoginController extends Controller
{

    public function __construct(LoginService $loginServices)
    {
        $this->loginServices = $loginServices;
    }

    public function generateOTP(Request $request)
    {
        config(['logging.channels.customlog.path' => storage_path('logs/Login/Controller/' . date("Y") . '/' . date("m") . '/' . date("d") . '/' . 'laravel.log')]);
        Log::channel('customlog')->info('ENTRY : generateOTP :: LoginController.php');
        DB::beginTransaction();
        try {
            $validator_login = Validator::make($request->all(), Validation::otpGeneratorRules());
            if ($validator_login->fails()) {
                return Validation::returnValidationError($validator_login);
            }
            $contact = $request->all();
            if (!empty($contact)) {
                $contactNumber = $this->loginServices->generateOTP($contact);
                if (!empty($contactNumber)) {
                    DB::commit();
                    Log::channel('customlog')->info('RESPONSE : generateOTP :: LoginController.php' . json_encode($contactNumber));
                    Log::channel('customlog')->info('EXIT : generateOTP :: LoginController.php');
                    return response()->json(Json::response(['data' => $contactNumber], trans('OTP generated sucessfully and send given number.')));
                } else {
                    Log::channel('customlog')->debug('ERROR : generateOTP :: LoginController.php ');
                    return response()->json(Json::error_response(['data' => $contactNumber], trans('Oops something went wrong, Please try again later !')));
                }
            } else {
                Log::channel('customlog')->debug('ERROR : generateOTP :: LoginController.php ');
                return response()->json(Json::fail_validation_response([], trans('Oops something went wrong, Please try again later !')));
            }
        } catch (Exception $e) {
            return response()->json(Json::error_response(['error' => $e], trans('Oops something went wrong, Please try again later !')));
        }
    }

    public function verifyOTP(Request $request){
        Log::channel('stack')->info('ENTRY : verifyOTP :: LoginController.php');
        DB::beginTransaction();
        try {
            Log::channel('stack')->debug('REQUEST : verifyOTP :: LoginController.php ' . json_encode($request->all()));
            $validator = Validator::make($request->all(), Validation::loginOTPRules());
            if ($validator->fails()) {
                return Validation::returnValidationError($validator);
            }
            $checkOTP = $this->loginServices->checkOTP($request);
            if($checkOTP != "[]" && !empty($checkOTP)){
                DB::commit();
                $OTPexpire = $this->loginServices->checkOTPExpire($checkOTP);
                if(!empty($OTPexpire)){
                    DB::commit();
                    $OTPsuccess = $this->loginServices->successOTP($OTPexpire);
                        if(!empty($OTPsuccess)){
                            DB::commit();
                            Log::channel('stack')->info('EXIT : verifyOTP :: LoginController.php');
                            return response()->json(Json::response($OTPsuccess, trans('messages.login.success')));
                        }else{
                            Log::channel('stack')->info('EXIT : verifyOTP :: LoginController.php');
                            return response()->json(Json::error_response([], trans('messages.priest.not_valid_otp')));
                        }
                } else {
                    Log::channel('stack')->info('EXIT : checkOTPExpire :: LoginController.php');
                    return response()->json(Json::error_response($OTPexpire, trans('messages.priest.otp_expire')));
                }
            }else{
                Log::channel('stack')->info('EXIT : verifyOTP :: LoginController.php');
                return response()->json(Json::error_response([], trans('messages.priest.not_valid_otp')));
            }
        }
        catch(Exception $e) {
            return $e;
            // return $this->commonService->returnException($request,  $e);
        }
    }
}
