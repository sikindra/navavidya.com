<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Franchise;
use App\Models\fchange_phone;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class FranchiseController extends Controller
{
    public function index()
    {
        $result['data']=Franchise::all();
        return view('superadmin.franchise_list',$result);
    }
    function add()
    {
        return view ('superadmin.add_franchise');
    }
    public function insert(Request $request){
      
        $franchise = new Franchise;
        $franchise->f_name = $request->input('f_name');
        $franchise->l_name = $request->input('l_name');
        $franchise->email = $request->input('email');
        $franchise->phone = $request->input('phone');
        $franchise->city = $request->input('city');
        $franchise->alternate_phone = $request->input('alternate_phone');
        $franchise->assembly_cons = $request->input('assembly_cons');
        $franchise->district = $request->input('district');
        $franchise->model = $request->input('model');
        $franchise->state = $request->input('state');
        $franchise->password = Hash::make('f_name');
        $franchise->pincode = $request->input('pincode');
        
  
        if($request)
        {
            
            $notification = array(
                'message' => 'Successfully get franchise Data',
                'alert-type' => 'success'
            );
            
        }
        else {
            echo "error";
            $notification = array(
                'message' => 'Error get franchise Data',
                'alert-type' => 'error'
            );
        }
  
        $franchise->save();
        return redirect()->back()->with('message','franchise_level Successfully');
    }
    public function update(Request $request){
      
       
        $id = $request->id;
        $f_name = $request->f_name;
        $l_name = $request->l_name;
        $email = $request->email;
        $phone = $request->phone;
        $city = $request->city;
        $alternate_phone = $request->alternate_phone;
        $assembly_cons = $request->assembly_cons;
        $district = $request->district;
        $model = $request->model;
        $state = $request->state;
        $pincode = $request->pincode;
        
        
               
        
        
        
        if($request)
          {  
               $notification = array(
                  'message' => 'Successfully Employee get  Data',
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
  
        $update = DB::update('update franchises set f_name = ?, l_name = ?,email = ?,phone = ?,city = ?, alternate_phone = ?,assembly_cons = ?,district = ?,model = ?,state = ?,pincode = ? where id =?',[$f_name,$l_name,$email,$phone,$city,$alternate_phone,$assembly_cons,$district,$model,$state,$pincode,$id]);
        return redirect()->back()->with('message','update Successfully');
    }
    function edit($id){
        $result['data']=Franchise::all()->where('id', '=', $id);
        return view('superadmin.franchise_update',$result);
    }

    function phone(){
        $result['data']=fchange_phone::all();
        return view('superadmin.franchise_ch_number',$result);
       
    }
    function phone_insert(Request $request){
      
        $franchise = new fchange_phone;
        $franchise->current_phone = $request->input('current_phone');
        $franchise->new_phone = $request->input('new_phone');
        
        
  
        if($request)
        {
            
            $notification = array(
                'message' => 'Successfully get franchise Data',
                'alert-type' => 'success'
            );
            
        }
        else {
            echo "error";
            $notification = array(
                'message' => 'Error get franchise Data',
                'alert-type' => 'error'
            );
        }
  
        $franchise->save();
        return redirect()->back()->with('message','add Successfully');
    }

   
}
