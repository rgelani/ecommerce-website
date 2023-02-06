<?php

namespace App\Services\Login;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;
use App\Models\api\Login;
use Exception;
use App\Helpers\Validation;
use Carbon\Carbon;
use App\Http\Controllers\Auth\Json;

class LoginService
{

    /* Store FCM Token and device information */

    public function generateOTP($request)
    {
        config(['logging.channels.customlog.path' => storage_path('logs/Customer/Services/genrateOTP-' . \Carbon\Carbon::now('Asia/Kolkata') . '.log')]);
        Log::channel('customlog')->info('REQUEST (DATA): genrateOTP :: CustomerService.php' . json_encode($request));

        if (!empty($request)) {
            $otp = rand(1000, 9999);
            $otp_expires_time = Carbon::now(Config::get('constants.default.time_zone'))->addSeconds(120);
            $message = $otp . " is your Ikart verification code. Thank you.";
            /* Twilio SMS Services Code */
            $url = Config::get('constants.twilio_sms.twilio_url');
            $id = Config::get('constants.twilio_sms.Account_SID');
            $token = Config::get('constants.twilio_sms.Auth_token');
            $pram = [
                'From' => Config::get('constants.twilio_sms.to_number'),
                'To' => '+' . $request['contact_number'],
                'Body' => $message
            ];
            $post = http_build_query($pram);
            $x = curl_init($url);
            curl_setopt($x, CURLOPT_POST, true);
            curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($x, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($x, CURLOPT_USERPWD, "$id:$token");
            curl_setopt($x, CURLOPT_POSTFIELDS, $post);
            $y = curl_exec($x);
            $statusCode = curl_getinfo($x, CURLINFO_RESPONSE_CODE);
            curl_close($x);
            $response = json_decode($y);


            // $response = [
            //     "test" => 'ddd',
            //     "body" => "Sent from your Twilio trial account - 5695 is your Ikart verification code. Thank you.",
            //     "num_segments"=> "1",
            //     "direction"=> "outbound-api",
            //     "from"=> "+12137723286",
            //     "date_updated"=> "Thu, 13 Oct 2022 08:12:51 +0000",
            //     "price"=> null,
            //     "error_message"=> null,
            //     "uri"=> "/2010-04-01/Accounts/ACd9382b998c906126e13c851178439d40/Messages/SM07e2a36e713c3733e195aaf841302677.json",
            //     "account_sid"=> "ACd9382b998c906126e13c851178439d40",
            //     "num_media"=> "0",
            //     "to"=> "+918347731828",
            //     "date_created"=> "Thu, 13 Oct 2022 08:12:51 +0000",
            //     "status"=> "queued",
            //     "sid"=> "SM07e2a36e713c3733e195aaf841302677",
            //     "date_sent"=> null,
            //     "messaging_service_sid"=> null,
            //     "error_code"=> null,
            //     "price_unit"=> "USD",
            //     "api_version"=> "2010-04-01",
            //     "subresource_uris"=> [
            //         "media"=> "/2010-04-01/Accounts/ACd9382b998c906126e13c851178439d40/Messages/SM07e2a36e713c3733e195aaf841302677/Media.json"
            //     ]
            // ];

            // $statusCode = 200;

            Log::channel('customlog')->info('RESPONSE (DATA): genrateOTP :: CustomerService.php' . json_encode($response));
            if (!empty($response) && $statusCode == '201' || $statusCode == '200' || $response == 'queued') {
                $otp_dtl = new Login();
                $otpData = $otp_dtl->addOTP($request['contact_number'],$otp,$otp_expires_time);
                return $otpData;
            } else {
                return $response;
            }
        }
    }

    public function checkOTP($request){
        if(!empty($request)){
            $priest_dtl = new Login();
            $validOTP = $priest_dtl->getValidOTP($request);
            return $validOTP;
        }
    }

    public function checkOTPExpire($request){
        if(!empty($request)){
            $otp_dtl = new Login();
            $validOTP = $otp_dtl->timeoutOTP($request);
            if(isset($validOTP) && !empty($validOTP)){
                $otp_expires_time = $validOTP->otp_expires_time;
                if($otp_expires_time <= Carbon::now(Config::get('constants.default.time_zone'))) {
                    $otp_dtl = new Login();
                    $otpData = $otp_dtl->OTPexpire($validOTP);
                    return $otpData;
                } else{
                    return $validOTP;
                }
            }else{
                return response()->json(Json::fail_validation_response([], trans('messages.general.validation_failed')));
            }
        }
    }

    public function successOTP($request){
        if(!empty($request)){
            $otp_dtl = new Login();
            $validOTP = $otp_dtl->OTPsuccess($request);
            if($validOTP){
               return $validOTP;
            }else{
                return null;
            }
        }
    }
}
