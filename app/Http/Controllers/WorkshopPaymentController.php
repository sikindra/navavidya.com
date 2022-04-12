<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop_payment;

class WorkshopPaymentController extends Controller
{
    public function index()
    {
        $result['data']=Workshop_payment::all();
        return view('superadmin.workshop_paymentList',$result);
    }
}
