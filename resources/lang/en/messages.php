<?php

return [
    'actiontext' => [
    	'add'          => 'Add',
        'edit'         => 'Edit',
    	'update'       => 'Update',
        'unlock'       => 'Unlock',
    	'action'       => 'Action',
    	'active'       => 'Active',
        'cancel'       => 'Cancel',
    	'save'         => 'Save',
        'search'       => 'Search',
        'back'         => 'Back',
        'refresh'      => 'Refresh',
        'send'         => 'Send',
        'apply'        => 'Apply',
    ],

    'swal' => [
        'head'              => 'Are you sure?',
        'warning'           => 'Are you sure you want to delete this record?',
        'confirm'           => 'Press Delete to confirm.',
        'approvemessage'    => 'Your request has been approved.',
        'approvetitle'      => 'Approved.',
        'rejectmessage'     => 'Your request has been rejected.',
        'rejecttitle'       => 'Rejected.',
        'nodata'            => 'Data not found.',
    ],

    'action' => [
        'addmenu'       => 'Menu has been added successfully.',
        'updatemenu'    => 'Menu has been updated successfully.',
        'deletemenu'    => 'Menu has been deleted successfully.',
        'addcmspages'       => 'Cmspage has been added successfully.',
        'updatecmspages'    => 'Cmspage has been updated successfully.',
        'deletecmspages'    => 'Cmspage has been deletd successfully.'
    ],

    'general' => [
        'success' => 'Request processed successfully',
        'error' => 'An error occurred while processing your request. Please try after sometime.',
        'data_not_found' => 'Requested data does not exist',
        'config_error' => 'There seems to be some configuration error. Please contact your system administrator.',
        'file_not_found' => 'Requested file does not exist',
        'method_not_exist' => 'Requested method does not exist',
        'validation_failed' => 'Something went wrong. Please try after sometime.',
        'expired_login' => 'Your login session has expired. Please login again to continue.',
        'not_valid_url' => 'Please enter valid website url',
        'email_avail' => 'This email is already been taken. Please move forward with a new email.',
        'email_allow' => 'You can take this email address',
        'contact_avail' => 'This contact number is already been taken. Please move forward with a new contact number.',
        'contact_allow' => 'You can take this contact number',
        'total' => 'Total',
        'grand_total' => 'Grand Total',
        'video_added' => 'Video added successfully.',
        'video_failed' => 'Video not upload. Please try after sometime.',
        'not_allow_video_type' => 'This video type is not allowed. Please upload only .mp4 and .mpeg video.',
        'id_not_found' => 'The selected id is invalid',
        'conatct_number_not_found' => 'The selected contact number is invalid',
        'master_data_found' => 'Master details fetched successfully.',
        'empty_file' => 'The file is empty. Please enter valid input and try again.',
        'field_not_match' => 'Upload file in this {0} field not match.',
        'invalid_date' => 'Selected date is invalid. please select valid date and try again.'
    ],
    'login' => [
        'invalid_credentials' => 'Invalid login credentials. Please enter valid credentials to move forward.',
        'success' => 'You have logged into the system successfully',
        'not_found' => 'You have not logged in to the system. please login to continue.',
        'user_not_found' => 'You have not logged in to the system. please login to continue.',
        'no_active_user' => 'Your account is currently deactivated. Please contact your system administrator to activate.',
        'token_expired' => 'Token has expired',
        'account_not_active'=>'This user\'s account is currently deactivated.'
    ],
    'logout' => [
        'success' => 'You have logged out from the system successfully'
    ],
    'forgot_password' => [
        'success' => 'Email with reset instructions has been sent. Please note that the reset link will expire in 24 hours.',
        'already_generated' => 'You have already generated your password. Please use forgot password in case you don\'t remember your password.'
    ],
    'change_password' => [
        'success' => 'Your password has been changed successfully. Please login again to continue.',
        'invalid_token' => 'Invalid forgot password request,<br>Please request with valid data.',
        'token_expired' => 'Your forgot password request has expired.<br>Use Forgot Password again to continue.',
        'token_success' => 'Forgot password request is validated successfully',
        'invalid_old_password' => 'Invalid old password. Please enter valid password.',
        'old_new_pwd_same_err' => 'Old Password and New Password can not be same',
        'user_reset_password_success'=> 'Password for the user has been changed successfully. An email with new password has been sent to the user.'
    ],
    'profile' => [
        'found' => 'Profile details fetched successfully',
        'success' => 'Your profile has been updated successfully'
    ],
    'mail_subjects' => [
        'forgot_password' => 'Forgot Password',
        'reset_password' => 'Reset Password',
        'user_login_details' => 'Login Details'
    ],
    'mail_body' => [
        'greeting_text' => 'Hi ',
        'signature_text' => 'Regards,<br/>',
        'signature_text_new' => 'Regards,',
        'admin_forgot_password' => [
            'paragraph_1' => 'As per your request, please use the <a href="{LINK}" title="Reset Password">link</a> to reset password for your account.',
            'paragraph_1_citizen' => 'As per your request, please use the <a href="{LINK}" title="Reset Password">link</a> to reset password for citizen account.',
            'paragraph_2' => 'If you did not request a password reset, no further action is required.'
        ],
        'admin_reset_password' => [
            'paragraph_1' => 'Your password has been reset successfully by system administrator {SYSTEM_ADMINISTRATOR_FULL_NAME}. Please use the <a href="{LINK}" title="Login">link</a> to login into your account.',
            'paragraph_2' => 'Please use the password <strong>"{PASSWORD}"</strong> to login into your account.'
        ],
        'user_reset_password' => [
            'paragraph_1'=>'Your password has been reset by the system administrator. Please use new below details to access the system.',
            'paragraph_1_citizen'=>'Your citizen password has been reset by the system administrator. Please use new below details to access the system.'
        ]
    ],

    'user' => [
        'deleted' => 'User deleted successfully',
        'change_status' => 'User status has been changed successfully'
    ],

    'priest' => [
        'found' => 'Priest details fetched successfully',
        'added' => 'Priest details added successfully',
        'updated' => 'Priest details updated successfully',
        'deleted' => 'Priest deleted successfully',
        'change_status' => 'Priest status has been changed successfully',
        'email_avail' => 'This email is already been taken. Please move forward with a new email.',
        'email_allow' => 'You can take this email address',
        'not_valid_otp' => 'This OTP is not valid. Please try again.',
        'otp_expire' => 'This OTP is expired. Please try again.',
        'otp_genrate' => 'The OTP has generated and sent to the registered number.'
    ],

    'customer' => [
        'found' => 'Customer details fetched successfully',
        'added' => 'Customer details added successfully',
        'updated' => 'Customer details updated successfully',
        'deleted' => 'Customer deleted successfully',
        'change_status' => 'Customer status has been changed successfully',
        'change_profile' => 'My profile details updated successfully.',
    ],

    'booking' => [
        'otp_verify' => 'The OTP has been verified successfully.',
        'not_valid_otp' => 'This OTP is not valid. Please try again.',
        'otp_expire' => 'This OTP is expired. Please try again.',
        'otp_genrate' => 'The OTP has generated and sent to the registered number.',
        'added' => 'Thank you for choosing Karishye. Your puja booked sucessfully.',
        'found' => 'Booking puja details fetched successfully',
        'updated' => 'Booking puja details updated successfully',
        'deleted' => 'Booking puja deleted successfully',
        'change_status' => 'Booking puja status has been changed successfully',
        'genrate_payment_link' => 'Payment link genrated and send register number and email',
        'assign_priest' => 'The priest is assigned successfully to booked puja.'
    ],

    'generalapi' => [
        'data_not_found' => 'Requested data does not exist',
        'not_valid_otp' => 'This OTP is not valid. Please try again.',
        'otp_expire' => 'This OTP is expired. Please try again.',
        'otp_genrate' => 'The OTP has generated and sent to the registered number.',
        'log_delete' => 'Selected date rage error log deleted successfully.',
        'log_no_found' => 'Selected date rage error log not found!',
        'found' => 'Error Log details fetched successfully'
    ],

    'fcmToken' => [
        'added' => 'FCM Token added successfully'
    ],

    'notification' => [
        'found' => 'Notification fetched successfully',
        'approve' => 'Notification has approved successfully.',
        'decline' => 'Notification has declined successfully.'
    ],
];
