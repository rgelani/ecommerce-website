<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class LogisticController extends Controller
{
    public function  panding_payment()
    {
        return view('admin.logistic.index');
    }

    public function  completed_payment()
    {
        return view('admin.logistic.completed-payment');
    }
}
