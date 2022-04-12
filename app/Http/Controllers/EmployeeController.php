<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index()
    {
        $result['data']=Employee::all();
        return view('superadmin.employee', $result);
    }
    public function add()
    {
       
        return view('superadmin.add_employee');
    }
    public function insert(Request $request)
    {
        $emp = new Employee;
        $emp->first_name = $request->input('first_name');
        $emp->last_name = $request->input('last_name');
        $emp->phone = $request->input('phone');
        $emp->email = $request->input('email');
        $emp->address1 = $request->input('address1');
        $emp->address2 = $request->input('address2');
        $emp->city = $request->input('city');
        $emp->country = $request->input('country');
        $emp->pincode = $request->input('pincode');
        $emp->password = Hash::make('password');
        
      
        

        if($request->Employee)
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

        $emp->save();
        return redirect()->back()->with('message',' Add Successfully');
        
    }
    public function edit($id)
    {
        $result['data']=Employee::all()->where('id',$id);
        return view('superadmin.employee_edit', $result);
    }
    public function update(Request $request, $id)
    {
        $emp =Employee::find($id);
        $emp->first_name = $request->input('first_name');
        $emp->last_name = $request->input('last_name');
        $emp->phone = $request->input('phone');
        $emp->email = $request->input('email');
        $emp->address1 = $request->input('address1');
        $emp->address2 = $request->input('address2');
        $emp->city = $request->input('city');
        $emp->country = $request->input('country');
        $emp->pincode = $request->input('pincode');
        $emp->password = Hash::make('password');
        $emp->state = $request->input('state');
        
      
        

        if($request->Employee)
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

        $emp->update();
        return redirect()->back()->with('message',' update Successfully');
        
    }
    
}
