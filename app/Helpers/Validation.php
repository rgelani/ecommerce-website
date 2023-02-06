<?php

namespace App\Helpers;


use App\Library\Asynchronous;
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Snowfire\Beautymail\Beautymail;
use App\Http\Controllers\Auth\Json;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;


use Throwable;

class Validation {

    public function __construct() {}

    public static function changePasswordRules() {
        return [
            'old_password'     => 'required|max:'.Config::get('constants.default.password_max_length').'|min:'.Config::get('constants.default.password_min_length'),
            'new_password'     => 'required|max:'.Config::get('constants.default.password_max_length').'|min:'.Config::get('constants.default.password_min_length'),
            'confirm_password' => 'required|max:'.Config::get('constants.default.password_max_length').'|min:'.Config::get('constants.default.password_min_length').'|same:new_password',
        ];
    }

    public static function resetPasswordRules() {
        return [
            'forgot_password_token'=> 'required',
            'new_password'     => 'required|max:'.Config::get('constants.default.password_max_length').'|min:'.Config::get('constants.default.password_min_length'),
            'confirm_password' => 'required|max:'.Config::get('constants.default.password_max_length').'|min:'.Config::get('constants.default.password_min_length').'|same:new_password',
        ];
    }

    public static function loginRules() {
        return [
            'email' => 'required|email|max:'.Config::get('constants.default.length_500'),
            'password' => 'sometimes|max:'.Config::get('constants.default.password_max_length').'|min:'.Config::get('constants.default.password_min_length'),
        ];
    }

    public static function otpGeneratorRules() {
        return [
            'contact_number' => 'required|numeric',
        ];
    }

    public static function loginOTPRules() {
        return [
            'contact_number' => 'required|numeric',
            'otp' => 'required|numeric|digits:'.Config::get('constants.default.otp_length')
        ];
    }

    public static function tokenCheckRules() {
        return [
            'forgot_password_token' => 'required',
        ];
    }

    public static function forgotPasswordRules() {
        return [
            'email' => 'required|email',
        ];
    }

    public static function returnValidationError($validator) {
        Log::channel('stack')->info('Validation '. json_encode($validator->errors()));
        return response()->json(Json::fail_validation_response(["validation_errors" => $validator->errors()]));
    }

    public static function updatePriestRules($request) {
        return [
            'id' => 'required|exists:priest_dtl,id',
            'name' => 'required|max:'.Config::get('constants.default.length_250'),
            'date_of_birth' => 'required',
            'gender' => 'required',
            'email' => 'required|email|unique:priest_dtl,email,'.$request->id.'|max:'.Config::get('constants.default.length_500'),
            'address' => 'required|max:'.Config::get('constants.default.length_500'),
            'phone_code' => 'required|numeric',
            'contact_number' => 'required|numeric',
            'education' => 'required|max:'.Config::get('constants.default.length_100'),
            'experience' => 'nullable',
            'priest_city_for_puja' => 'required',
            'open_to_travel' => 'required',
            'do_virtual_puja' => 'required',
        ];
    }

    public static function masterIdPriestRules($request) {
        $rules = array(
            'id' => 'required|numeric|exists:priest_dtl,id',
        );
        $validator = Validator::make($request, $rules);
            return $validator;
    }

    public static function checkUniqueEmailRules() {
        return [
            'email' => 'required|email|max:'.Config::get('constants.default.length_500'),
        ];
    }

    public static function checkUniqueContactNumberRules() {
        return [
            'contact_number' => 'required|numeric',
        ];
    }

    public static function editdeletePriestRules() {
        return [
            'id' => 'required|numeric|exists:priest_dtl,id',
        ];
    }

    public static function updateUserStatusRules() {
        return [
            'id' => 'required|numeric|exists:priest_dtl,id',
            'status' => 'required|boolean'
        ];
    }

    public static function uploaddeleteVideoRules() {
        return [
            'id' => 'required|numeric|exists:priest_dtl,id',
        ];
    }

    public static function addPujaSamagriRules() {
        return [
            'puja_samagri_meta_data_name' => 'required|max:'.Config::get('constants.default.length_250'),
            'puja_samagri_meta_data_description' => 'nullable',
            'puja_samagri_meta_data_unit_of_measurement' => 'nullable',
            'puja_samagri_meta_data_minimum_lot_size' => 'nullable',
            'puja_samagri_meta_data_price_per_lot_size' => 'nullable',
            'puja_samagri_meta_data_karishye_provide_this' => 'nullable'
        ];
    }

    public static function updatePujaSamagriRules() {
        return  [
            'id' => 'required|exists:puja_samagri_meta_data,id',
            'puja_samagri_meta_data_name' => 'required|max:'.Config::get('constants.default.length_250'),
            'puja_samagri_meta_data_description' => 'nullable',
            'puja_samagri_meta_data_unit_of_measurement' => 'nullable',
            'puja_samagri_meta_data_minimum_lot_size' => 'nullable',
            'puja_samagri_meta_data_price_per_lot_size' => 'nullable',
            'puja_samagri_meta_data_karishye_provide_this' => 'nullable'
        ];
    }

    public static function editdeletePujaSamagriRules() {
        return [
            'id' => 'required|numeric|exists:puja_samagri_meta_data,id',
        ];
    }

    public static function masterIdPujaSamagriRules($request) {
        $rules = array(
            'id' => 'required|numeric|exists:puja_samagri_meta_data,id',
        );
        $validator = Validator::make($request, $rules);
            return $validator;
    }

    public static function updatePujaSamagriStatusRules() {
        return [
            'id' => 'required|numeric|exists:puja_samagri_meta_data,id',
            'status' => 'required|boolean'
        ];
    }


    public static function bulkUploadRules($request) {
        $extension = explode('/', explode(':', substr($request->file, 0, strpos($request->file, ';')))[1])[1];
        $validator = Validator::make(
            [
                'file' => $request->file,
                'extension' => $extension
            ],
            [
                'file' => 'required',
                'extension' => 'required|in:csv',
            ]
        );
        return $validator;
    }

    public static function excelFileRules() {
        return [
            '*.Samagri_Name'=>'required|max:'.Config::get('constants.default.length_250'),
            '*.Unit_Of_Measurement'=>'nullable',
            '*.Minimum_Lot_Size'=>'nullable',
            '*.Price_Per_Lot_(INR)'=>'nullable',
            '*.Is_Karishye_Provide?'=>'nullable',
            '*.Samagri_Description'=>'nullable',
        ];
    }

    /* Pujari Application Code */
    public static function addPujariApplicationRules() {
        return [
            'pujari_application_name' => 'required|max:'.Config::get('constants.default.length_250'),
            'pujari_application_surname' => 'max:'.Config::get('constants.default.length_250'),
            'pujari_application_qualification' => 'required|max:'.Config::get('constants.default.length_250'),
            'pujari_application_experience' => 'nullable',
            'pujari_application_date_of_birth' => 'required',
            'pujari_application_gender' => 'required',
            'pujari_application_language_id' => 'required',
            'pujari_application_address' => 'required|max:'.Config::get('constants.default.length_250'),
            'pujari_application_contact_number' => 'required|unique:pujari_application|numeric',
            'pujari_application_email' => 'required|email|unique:pujari_application|max:'.Config::get('constants.default.length_250'),
            'pujari_application_photo' => 'sometimes',
            'pujari_application_video' => 'sometimes',
            'pujari_appli_pujari_city_for_puja' => 'required',
            'pujari_application_open_to_travel' => 'required',
            'pujari_application_do_virtual_pujas' => 'required',
        ];
    }

    public static function editdeletePujariApplicationRules() {
        return [
            'id' => 'required|numeric|exists:pujari_application,id',
        ];
    }

    public static function updatePujariApplicationRules($request) {
        return [
            'id' => 'required|exists:pujari_application,id',
            'pujari_application_name' => 'required|max:'.Config::get('constants.default.length_250'),
            'pujari_application_surname' => 'max:'.Config::get('constants.default.length_250'),
            'pujari_application_qualification' => 'required|max:'.Config::get('constants.default.length_250'),
            'pujari_application_experience' => 'nullable',
            'pujari_application_date_of_birth' => 'required',
            'pujari_application_gender' => 'required',
            'pujari_application_language_id' => 'required',
            'pujari_application_address' => 'required|max:'.Config::get('constants.default.length_250'),
            'pujari_application_contact_number' => 'required|unique:pujari_application,pujari_application_contact_number,'.$request->id.'|numeric',
            'pujari_application_email' => 'required|email|unique:pujari_application,pujari_application_email,'.$request->id.'|max:'.Config::get('constants.default.length_250'),
            'pujari_application_photo' => 'sometimes',
            'pujari_application_video' => 'sometimes',
            'pujari_appli_pujari_city_for_puja' => 'required',
            'pujari_application_open_to_travel' => 'required',
            'pujari_application_do_virtual_pujas' => 'required'
        ];
    }

    public static function updatePujariApplicationStatusRules() {
        return [
            'id' => 'required|numeric|exists:pujari_application,id',
            'status' => 'required|boolean'
        ];
    }

    /* Puja Validation */

    public static function addPujaRules() {
        return [
            'puja_meta_data_puja_name' => 'required|max:'.Config::get('constants.default.length_250'),
            'puja_meta_data_description' => 'sometimes',
            'puja_meta_data_duration' => 'nullable',
            'puja_meta_data_base_price' => 'nullable|numeric|max:'.Config::get('constants.default.budget_length'),
            'puja_language_id' => 'required',
            'puja_categories' => 'nullable',
            'puja_samagri' => 'sometimes',
            'is_popular' => 'sometimes'
        ];
    }


    public static function excelPujaFileRules() {
        return [
            '*.Name'=>'required|max:'.Config::get('constants.default.length_250'),
            '*.Description'=>'sometimes|max:'.Config::get('constants.default.length_2500'),
            '*.Language'=>'required',
            '*.Puja_Durestion'=>'sometimes|numeric|max:'.Config::get('constants.default.length_100'),
            '*.Puja_Budget'=>'sometimes|numeric|max:'.Config::get('constants.default.budget_length'),
            '*.Language'=>'sometimes',
        ];
    }

    public static function editdeletePujaRules() {
        return [
            'id' => 'required|numeric|exists:puja_meta_data,id',
        ];
    }

    public static function updatePujaRules() {
        return  [
            'id' => 'required|exists:puja_meta_data,id',
            'puja_meta_data_puja_name' => 'required|max:'.Config::get('constants.default.length_250'),
            'puja_meta_data_description' => 'sometimes',
            'puja_meta_data_duration' => 'nullable',
            'puja_meta_data_base_price' => 'nullable|numeric|max:'.Config::get('constants.default.budget_length'),
            'puja_language_id' => 'required',
            'puja_categories' => 'nullable',
            'puja_samagri' => 'sometimes',
            'is_popular' => 'sometimes'
        ];
    }

    public static function masterIdPujaRules($request) {
        $rules = array(
            'id' => 'required|numeric|exists:puja_meta_data,id',
        );
        $validator = Validator::make($request, $rules);
            return $validator;
    }

    public static function updatePujaStatusRules() {
        return [
            'id' => 'required|numeric|exists:puja_meta_data,id',
            'status' => 'required|boolean'
        ];
    }

    /* Pujas Booking Validation */
    public static function addBookingRules() {
       return [
            'first_name' => 'nullable|max:'.Config::get('constants.default.length_250'),
            'last_name' => 'nullable',
            'phone_code' => 'required|numeric',
            'contact_number' => 'required|numeric',
            'email' => 'required|email|max:'.Config::get('constants.default.length_250'),
            'puja' => 'required',
            'special_requirements' => 'sometimes|max:'.Config::get('constants.default.length_500'),
            'veda_preference' => 'nullable',
            'agama_preference' => 'nullable',
            'whom_puja' => 'required',
            'language' => 'required',
            'event_start_date_time' => 'nullable',
            'event_end_date_time' => 'nullable',
            'event_budget' => 'nullable|numeric',
            'puja_mode' => 'required',
            'address' => 'sometimes|max:'.Config::get('constants.default.length_250'),
            'city' => 'nullable',
            'state' => 'nullable',
            'country' => 'required',
            'pincode' => 'required|numeric'
        ];
    }

    public static function updateBookingRules($request) {
       return [
            'id' => 'required|exists:pujas_booking,id',
            'first_name' => 'required|max:'.Config::get('constants.default.length_250'),
            'last_name' => 'nullable|max:'.Config::get('constants.default.length_250'),
            'phone_code' => 'required|numeric',
            'contact_number' => 'required|numeric',
            'email' => 'required|email|max:'.Config::get('constants.default.length_250'),
            'puja' => 'required',
            'veda_preference' => 'sometimes',
            'agama_preference' => 'sometimes',
            'whom_puja' => 'required',
            'event_start_date_time' => 'sometimes',
            'event_end_date_time' => 'sometimes',
            'event_budget' => 'nullable|numeric',
            'language' => 'required',
            'puja_mode' => 'required',
            'address' => 'sometimes|max:'.Config::get('constants.default.length_250'),
            'city' => '',
            'state' => '',
            'country' => 'required',
            'pincode' => 'required|numeric'
        ];
    }

    public static function bookingOTPGeneratorRules() {
        return [
            'first_name' => 'required|max:'.Config::get('constants.default.length_250'),
            'last_name' => 'nullable|max:'.Config::get('constants.default.length_250'),
            'phone_code' => 'required|numeric',
            'contact_number' => 'required|numeric',
            'email' => 'required|email|max:'.Config::get('constants.default.length_250')
        ];
    }

    public static function BookingOTPRules() {
        return [
            'contact_number' => 'required|numeric',
            'otp' => 'required|numeric|digits:'.Config::get('constants.default.otp_length')
        ];
    }

    public static function addBookingCustomerRules() {
        return [
            '*.customer_name'=>'required|max:'.Config::get('constants.default.length_250'),
            '*.customer_gender'=>'required',
            // '*.customer_date_of_birth'=>'sometimes',
            // '*.customer_time_of_birth'=>'sometimes',
            // '*.customer_place_of_birth'=>'sometimes',
            // '*.customer_gotra'=>'sometimes',
            // '*.customer_nakshtra'=>'sometimes'
        ];
    }

    public static function addPriestBookingRules(){
        return [
            'booking_id' => 'required|exists:pujas_booking,id',
            'priest_id' => 'required|exists:priest_dtl,id',
        ];
    }

    public static function addCustomerMemberRules() {
        return [
            '*.cust_member_first_name'=>'required|max:'.Config::get('constants.default.length_250'),
            '*.cust_member_last_name'=>'nullable',
            '*.cust_member_gender' => 'required',
            '*.cust_member_date_of_birth'=>'sometimes',
            '*.cust_member_time_of_birth'=>'sometimes',
            '*.cust_member_place_of_birth'=>'sometimes',
            '*.cust_member_gotra'=>'sometimes|max:'.Config::get('constants.default.length_250'),
            '*.cust_member_nakshtra'=>'sometimes',
            '*.cust_member_relationship'=>'required'
        ];
    }

    public static function bookingMemberListRules() {
        return [
            'id' => 'required|numeric|exists:booking_customer_map,booking_id',
        ];
    }

    public static function masterIdBookingRules($request) {
        $rules = array(
            'id' => 'required|numeric|exists:pujas_booking,id',
        );
        $validator = Validator::make($request, $rules);
            return $validator;
    }

    public static function addCustomerRules() {
       return [
            'first_name' => 'sometimes|max:'.Config::get('constants.default.length_250'),
            'last_name' => 'nullable',
            'phone_code' => 'required|numeric',
            'contact_number' => 'required|numeric',
            'email' => 'nullable|email|max:'.Config::get('constants.default.length_250')
        ];
    }

    public static function updateCustomerRules($request) {
       return [
            'id' => 'required|exists:registration,id',
            'first_name' => 'nullable|max:'.Config::get('constants.default.length_250'),
            'last_name' => 'nullable',
            'phone_code' => 'required|numeric',
            'contact_number' => 'required|numeric',
            'email' => 'nullable|email|unique:registration,email,'.$request->id.'|max:'.Config::get('constants.default.length_250'),
            'date_of_birth' => 'nullable',
            'time_of_birth' => 'nullable',
            'place_of_birth' => 'nullable',
            'gotra' => 'nullable',
            'nakshtra' => 'nullable',
            'customer_member' => 'nullable',
        ];
    }

    public static function editdeleteCustomerRules() {
        return [
            'id' => 'required|numeric|exists:registration,id',
        ];
    }

    public static function updateCustomerStatusRules() {
        return [
            'id' => 'required|numeric|exists:registration,id',
            'status' => 'required|boolean'
        ];
    }

    public static function checkPujaLanguageRules($request) {
        $validator = Validator::make(
            [
                'language' => strtolower($request->language)
            ],
            [
                'language' => 'required',
            ]
        );
        return $validator;
    }

    public static function cronRules() {
        return [
            'start_date' => 'required',
            'end_date' => 'sometimes'
        ];
    }

    public static function getStatesRules() {
        return [
            'id' => 'required|exists:countries,id',
        ];
    }

    public static function getCitiesRules() {
        return [
            'id' => 'required|exists:states,id',
        ];
    }

    /*  Payment status */

    public static function paymentStatusRules() {
        return [
            'id' => 'required|numeric|exists:pujas_booking,id',
            'amount'=> 'nullable|numeric',
            'status' => 'required'
        ];
    }

    /* Booking Puja Samagri */
    public static function addBookingPujaSamagriRules() {
        return [
            'booking_id' => 'required|numeric',
            'puja_id' => 'required|numeric',
            'puja_samagri' => 'required'
        ];
    }

    public static function editdeleteBookingPujaSamagriRules() {
        return [
            'id' => 'required|numeric|exists:booking_puja_samagri_map,booking_id',
            'puja_id' => 'required|numeric|exists:puja_meta_data,id',
        ];
    }

    public static function updateBookingPujaSamagriRules() {
        return [
            'id' => 'required|numeric|exists:booking_puja_samagri_map,booking_id',
            'booking_id' => 'required|numeric|exists:puja_meta_data,id',
            'puja_id' => 'required|numeric',
            'puja_samagri' => 'required'
        ];
    }

    /* For Customer Member */

    public static function addCustomerMembersRules() {
        return [
             'first_name' => 'required|max:'.Config::get('constants.default.length_250'),
             'last_name' => 'nullable',
             'gender' => 'required',
             'date_of_birth' => 'sometimes',
             'time_of_birth' => 'sometimes',
             'place_of_birth' => 'sometimes',
             'gotra' => 'sometimes',
             'nakshtra' => 'sometimes',
             'relationship' => 'sometimes',
         ];
     }

     public static function updateCustomerMemberRules($request) {
        return [
             'id' => 'required|exists:customer_member,id',
             'first_name' => 'required|max:'.Config::get('constants.default.length_250'),
             'last_name' => 'nullable',
             'gender' => 'required',
             'date_of_birth' => 'sometimes',
             'time_of_birth' => 'sometimes',
             'place_of_birth' => 'sometimes',
             'gotra' => 'sometimes',
             'nakshtra' => 'sometimes',
             'relationship' => 'sometimes',
         ];
     }

     public static function editdeleteCustomerMemberRules() {
         return [
             'id' => 'required|numeric|exists:customer_member,id',
         ];
     }

     public static function fetchCustomerMemberRules() {
         return [
             'id' => 'required|numeric|exists:registration,id',
         ];
     }

    /* Puja Categories */

    public static function addPujaCategoriesRules() {
        return [
             'category_name' => 'nullable|max:'.Config::get('constants.default.length_250'),
             'category_code' => 'nullable|max:'.Config::get('constants.default.length_250'),
             'category_description' => 'nullable',
             'category_image' => 'nullable'
         ];
    }

    public static function editdeletePujaCategoriesRules() {
        return [
            'id' => 'required|numeric|exists:puja_categories,id',
        ];
    }

    public static function updatePujaCategoriesRules() {
        return [
             'id' => 'required|exists:puja_categories,id',
             'category_name' => 'nullable|max:'.Config::get('constants.default.length_250'),
             'category_code' => 'nullable|max:'.Config::get('constants.default.length_250'),
             'category_description' => 'nullable',
             'category_image' => 'nullable'
         ];
    }

    public static function chnageStatusRules(){
        return [
            'id' => 'required|exists:pujari_application,id',
            'status' => 'required',
        ];
    }

    /* My Booking API */
    public static function myBookingRules(){
        return [
            'phone_code' => 'required|numeric',
            'contact_number' => 'required|numeric',
        ];
    }

    /* Get Booking Priest API */
    public static function getBookingPriestRule(){
        return [
            'id' => 'required|exists:pujas_booking,id',
        ];
    }

    public static function updateBookingCustomerRules(){
        return [
            'booking_id' => 'required|exists:pujas_booking,id',
        ];
    }

    public static function bookingCustomerRules(){
        return [
            '*.customer_name'=>'required|max:'.Config::get('constants.default.length_250'),
            '*.customer_gender'=>'required',
            '*.customer_date_of_birth'=>'nullable',
            '*.customer_time_of_birth'=>'nullable',
            '*.customer_place_of_birth'=>'nullable',
            '*.customer_gotra'=>'nullable',
            '*.customer_nakshtra'=>'nullable'
        ];
    }
    public static function bookingCustomerMemberRules(){
        return [
            '*.cust_member_first_name'=>'required|max:'.Config::get('constants.default.length_250'),
            '*.cust_member_last_name'=>'nullable|max:'.Config::get('constants.default.length_250'),
            '*.cust_member_gender'=>'required',
            '*.cust_member_date_of_birth'=>'nullable',
            '*.cust_member_time_of_birth'=>'nullable',
            '*.cust_member_place_of_birth'=>'nullable',
            '*.cust_member_gotra'=>'nullable',
            '*.cust_member_nakshtra'=>'nullable',
            '*.cust_member_reltionship'=>'nullable'
        ];
    }

    public static function addAdditionalBookingRules(){
        return [
            'first_name' => 'required|max:'.Config::get('constants.default.length_250'),
            'last_name' => 'required|max:'.Config::get('constants.default.length_250'),
            'phone_code' => 'required',
            'contact_number' => 'required|numeric',
            'email' => 'required|email',
            'date_of_birth' => 'nullable',
            'time_of_birth' => 'nullable',
            'place_of_birth' => 'nullable',
            'gotra' => 'nullable',
            'nakshtra' => 'nullable',
            'language'=>'nullable',
            'special_requirement' => 'nullable'
        ];
    }

    public static function editdeleteAdditionalBookingRules() {
        return [
            'id' => 'required|numeric|exists:additional_booking,id',
        ];
    }

    /* Festival OTP */
    public static function festivalOTPGeneratorRules() {
        return [
            'phone_code' => 'nullable|numeric',
            'contact_number' => 'nullable|numeric',
        ];
    }

    public static function festivalOTPRules() {
        return [
            'contact_number' => 'nullable|numeric',
            'otp' => 'nullable|numeric|digits:'.Config::get('constants.default.otp_length')
        ];
    }

    /* Application Priest Booking List API Validation */
    public static function getAppListPriestRule() {
        return [
            'priest_id' => 'required|numeric|exists:priest_dtl,id',
            'date' => 'nullable|date_format:Y-m-d'
        ];
    }

      /* Application Priest Booking Count API Validation */
      public static function getAppCountPriestBookingRule() {
        return [
            'priest_id' => 'required|numeric|exists:priest_dtl,id',
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d'
        ];
    }

    /* Delete Error Log API Validation */
    public static function getErrorLogRules() {
        return [
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d'
        ];
    }

    /* Edit Error Log API Validation */
    public static function editErrorLogRules() {
        return [
            'id' => 'required|numeric|exists:Payload_API,id',
        ];
    }

    /* FCM Token API Validation */
    public static function checkFCMTokenRules() {
        return [
            'contact_number' => 'required|numeric|exists:sellers,phone_number',
        ];
    }

    /* FCM Token API Device Validation */
    public static function checkFCMTokenDeviceRules() {
        return [
            'udid' => 'required',
            'platform' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'app_version' => 'required',
            'fcm_token' => 'required',
        ];
    }

    /* Notification Count API Validation */
    public static function countNotificationRules() {
        return [
            'priest_id' => 'required|numeric|exists:priest_dtl,id',
        ];
    }

    /* Notification Status API Validation */
    public static function NotificationStatusRules() {
        return [
            'priest_id' => 'required|numeric|exists:priest_dtl,id',
            'booking_id' => 'required|numeric|exists:pujas_booking,id',
            'status' => 'required'
        ];
    }
}