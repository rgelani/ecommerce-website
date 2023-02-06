<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class General extends Model
{
    use HasFactory,HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;


    public static function ValidateGSTNUMBER($gst_number){
        if(!empty($gst_number)){
            $endpoint = Config::get('constants.general.GST_CHECK_URL');
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $endpoint.$gst_number);
            curl_setopt($ch, CURLOPT_POST, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec ($ch);
            $err = curl_error($ch);  //if you need
            curl_close ($ch);
            return $response;
        }
    }

    public static function createSlug($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
     }
}