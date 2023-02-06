<?php
return [
   "general" => [
      "seller_panel" => "Ikart Seller Panel",
      "admin_panel" => "Ikart Admin Panel",
      "site" => "Ikart",
      "GST_CHECK_URL" => "https://apisetu.gov.in/gstn/v2/taxpayers/",
      "API_URL" => env('API_URL') . "/api/",
   ],
   'response_code' => [
      'success' => 0,
      'error' => 1,
      'data_not_found' => 2,
      'config_error' => 3,
      'unknown_file' => 4,
      'unknown_method' => 5,
      'validation_failed' => 6,
      'expired_login' => 7,
      'exception_exit' => 8,
  ],
  'default' => [
      'db_offset' => 0,
      'db_limit' => 10,
      'php_sleep_seconds' => 5,
      'language' => 'en',
      'is_active_flag' => TRUE,
      'is_validate_fields' => TRUE,
      'frontend_time_format' => 'H:i',
      'frontend_date_format' => 'Y-m-d',
      'system_time_format' => 'H:i:s',
      'system_date_format' => 'Y-m-d',
      'system_datetime_format' => 'Y-m-d H:i:s',
      'forgot_password_token_expire_sec' => 86400,
      'sender_name' => env('MAIL_FROM_NAME', 'Administrator'),
      'from_name' => env('MAIL_FROM_NAME', 'Exception Handler'),
      'from_email' => env('MAIL_FROM_ADDRESS', 'mail@schmucker.dk'),
      'session_name' => env('SYSTEM_SESSION_NAME', 'karishye_session'),
      'send_exception_mail' => env('IS_SEND_EXCEPTION_MAIL', true),
      'send_exception_slack_msg' => env('IS_SEND_EXCEPTION_SLACK', true),
      'file_store_path' => env('FILE_STORE_PATH', 'uploads/karishye/videos/'),
      'length_500'=>500,
      'length_250'=>250,
      'length_100'=>100,
      'length_2500'=>2500,
      'length_10'=>10,
      'length_20'=>20,
      'length_12'=>12,
      'length_4'=>4,
      'password_max_length'=>20,
      'password_min_length'=>6,
      'contact_number_max_length'=>10,
      'contact_number_min_length'=>6,
      'null'=>null,
      'blank_string'=>'',
      'true' =>true,
      'false' =>false,
      'token_type'=>'bearer',
      'image_thumbnail_size'=>'250*150',
      'image_tile_size'=>'300*300',
      'image_quality'=>20,
      'session_desktop_timeout'=>12000,
      'session_mobile_tablet_timeout'=>10512000,
      'time_zone' => 'Asia/Kolkata',
      'otp_length' => 4,
      'phone_code' => '+91',
      'empty_file' => '000',
      'phone_code_length' => 2,
      'budget_length' => 1000000,

  ],
  'roles' => [
      'super_admin' => 'SUPER_ADMIN',
      'priest' => 'PRIEST'
  ],
  'operations' => [
      'add' => 'ADD',
      'update' => 'UPDATE',
      'delete' => 'DELETE',
      'change_status' => 'CHANGE_STATUS'
  ],
  'query_params' => [
      'asc' => 'ASC',
      'desc' => 'DESC',
      'globalFilter' => 'globalFilter',
      'customFilters' => 'customFilters',
      'sortField' => 'sortField',
      'sortOrder' => 'sortOrder',
      'rows' => 'rows',
      'first' => 'first',
      'search' => 'search',
      'sort_by'=>'sort_by',
      'sort_order'=>'sort_order',
      'limit'=>'limit',
      'offset'=>'offset'
  ],

  'twilio_sms' => [
      'twilio_url' => "https://api.twilio.com/2010-04-01/Accounts/ACd9382b998c906126e13c851178439d40/Messages.json",
      'SID' => "MGb48e48d7a5ec634698c8e6201aef2a40",
      'Account_SID' => "ACd9382b998c906126e13c851178439d40",
      'Auth_token' => "4b873cd4696ef1d855a8ab238a626387",
      'to_number' => "12137723286",
      // 'to_number' => "+919674483249",
      'whatsAPP_number' => ""
  ],

  /* Bulk SMS (Service) API */
//   'fast2sms' => [
//       'url' => "https://www.fast2sms.com/dev/bulkV2",
//       'authorization' => "8kwa70eVCOYgDAS9buohGtN4pjTBJE2URM3rzZfFHic6d5xmIPlexT7uaD03J6bnFLUHr45zdgXmIc2i",
//       'route' => "v3",
//       'sender_id' => "FTWSMS",
//       'language' => "english",
//       'flash' => '0'
//   ],

    // /* OTP Services */
    // 'fast2sms' => [
    //     'url' => "https://www.fast2sms.com/dev/bulkV2",
    //     'authorization' => "8kwa70eVCOYgDAS9buohGtN4pjTBJE2URM3rzZfFHic6d5xmIPlexT7uaD03J6bnFLUHr45zdgXmIc2i",
    //     'route' => "otp"
    // ],

  'razorpay' => [
      'razorpay_url' => "https://api.razorpay.com/v1/payment_links/",
      'Key_ID' => "rzp_test_yTLwbtGDktSD6C",
      'Key_Secret' => "Hpz1TzNNeP5BLOK92Yp8f4dg"
  ],

  "mail" => [
      'from_email' => '',
      'from_name' => 'Ikart',
      'admin_template' => 'mail.adminemail',
      'client_template' => 'mail.customeemail',
      'clent_subject' => 'Thanks for your enquiry',
      'admin_subject' => 'New Booking Karishye',
      'error_subject' => 'Error occured.',
      'otp_subject' => 'New Booking Otp For Karishye',
      'otp_template' => 'mail.emailotp',
      'emailSender' => '',
      'error_template' => 'mail.error_mail',
      'error_emailSender' => '',
      // 'emailSender' => 'neharajputa87@gmail.com, 99graphicsdesign21@gmail.com, chaitanya@karishye.co, dinesh@karishye.co',
  ],

  "image_path" =>[
      "category_image" => '/categoryImages/'
  ]
]
?>
