<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

use App\Models\Contact_us;

class ContactController extends Controller
{
    function index()
    {
        $result['contact']=Contact::all();
        return view('front/contact',$result);
    }

    function submit(Request $request)
    {
     $details = [
      'name' => $request->name,
      'email' => $request->email,
      'phone' => $request->phone,
      'message' => $request->message
     ];
     
    Mail::to("sikindranavavision@gmail.com")->send(new TestMail($details));
    //Mail::to("sikindra420@gmail.com")->send(new TestMail($details));
     
     Contact_us::create($request->all());

     return redirect()->back()->with('success', 'Message has been sent...');
    }
    function get()
    {
        
        return view('admin.list_of_request');
    }
     function get1()
    {
        
        return view('superadmin.list_of_request');
    }
    function add(){
        return view('admin.address');
    }
    function add1(){
        return view('superadmin.address');
    }
    public function insert(Request $request)
    {
        $cont = new Contact;
        $cont->location = $request->input('location');
        $cont->name = $request->input('name');
        $cont->address1 = $request->input('address1');
        $cont->address2 = $request->input('address2');
        $cont->city = $request->input('city');
        $cont->state = $request->input('state');
        $cont->pincode = $request->input('pincode');
        $cont->phone = $request->input('phone');
        $cont->status = $request->input('status');
        $cont->alt_phone = $request->input('alt_phone');
        $cont->email_id = $request->input('email_id');
        $cont->alt_email = $request->input('alt_email');
        
        
      
        

        if($request->contloyee)
        {
           
            
            $notification = array(
                'message' => 'Successfully contloyee get  Data',
                'alert-type' => 'success'
            );
            
        }
        else {
            echo "error";
            $notification = array(
                'message' => 'Error get mode Data',
                'alert-type' => 'error'
            );
        }

        $cont->save();
        return redirect()->back()->with('message',' Add Successfully');
        
    }

}
