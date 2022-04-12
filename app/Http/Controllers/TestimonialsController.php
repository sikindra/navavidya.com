<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File;

class TestimonialsController extends Controller
{
        public function index(){
            $result['data']=Testimonials::all();
            return view('admin.testimonials_list',$result);
        }
        public function index1(){
            $result['data']=Testimonials::all();
            return view('superadmin.testimonials_list',$result);
        }
        function add(){
            return view ('admin.add_testimonials');
        }
        function add1(){
            return view ('superadmin.add_testimonials');
        }
        function edit($id){
            $result['data']=Testimonials::all()->where('id',$id);
            return view('admin.testimonials_update',$result);
        }
        function edit1($id){
            $result['data']=Testimonials::all()->where('id',$id);
            return view('superadmin.testimonials_update',$result);
        }
        function insert(Request $request){
            
            $testim = new Testimonials;
            $testim->name = $request->input('name');
            $testim->person_name = $request->input('person_name');
            $testim->description = $request->input('description');
            $testim->status = $request->input('status');
            

            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('public/assets/img/', $filename);
                $testim->image = $filename;
                    
                
                $notification = array(
                    'message' => 'Successfully get MOde Data',
                    'alert-type' => 'success'
                );
                
            }
            else {
                echo "error";
                $notification = array(
                    'message' => 'Error get testim Data',
                    'alert-type' => 'error'
                );
            }

            $testim->save();
            return redirect()->back()->with('message','Add Successfully');
        }
        function update(Request $request, $id)
        {
            $testim =Testimonials::find($id);
            $testim->name = $request->input('name');
            $testim->person_name = $request->input('person_name');
            $testim->description = $request->input('description');
            $testim->status = $request->input('status');

            if($request->hasfile('image'))
            {
                $destination = 'assets/uploads/testimshops/'.$request->image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('assets/uploads/testimshops/', $filename);
                $testim->image = $filename;
                    
                
                $notification = array(
                    'message' => 'Successfully get testim Data',
                    'alert-type' => 'success'
                );
                
            }
            else {
                echo "error";
                $notification = array(
                    'message' => 'Error get testim Data',
                    'alert-type' => 'error'
                );
            }

            $testim->save();
            return redirect()->back()->with('message','Upload Successfully');   
        }
        function delete($id)
	{
	    	
		$delete = DB::delete('delete from testimonials where id = ?',[$id]);
    	if($delete)
		{
			
            $notification = array(
                'message' => 'Successfully get work Data',
                'alert-type' => 'error'
            );
            
        }
        else {
            echo "error";
            $notification = array(
                'message' => 'Error get work Data',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with('message',' delete Successfully'); 
	}

}

