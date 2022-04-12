<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class BannerController extends Controller
{
    function add ()
    {
        $logo=Banner::where('type', 'L')->orderBy('id', 'desc')->take(1)
        ->get();
        $banner1=Banner::where('type', 's1')->orderBy('id', 'desc')->take(1)
        ->get();
        $banner2=Banner::where('type', 's2')->orderBy('id', 'desc')->take(1)
        ->get();
        $banner3=Banner::where('type', 's3')->orderBy('id', 'desc')->take(1)
        ->get();
        return view('admin.banner',compact("logo","banner1","banner2","banner3"));
        
    }
     function add1()
    {
        $logo=Banner::where('type', 'L')->orderBy('id', 'desc')->take(1)
        ->get();
        $banner1=Banner::where('type', 's1')->orderBy('id', 'desc')->take(1)
        ->get();
        $banner2=Banner::where('type', 's2')->orderBy('id', 'desc')->take(1)
        ->get();
        $banner3=Banner::where('type', 's3')->orderBy('id', 'desc')->take(1)
        ->get();
        return view('superadmin.banner',compact("logo","banner1","banner2","banner3"));
        
    }
    function banner_update(Request $request)
    {
      
      $id = $request->id;
      $type = $request->type;
      
      
      
    if($request->hasfile('img_name'))
        { 
            
            $destination = 'public/assets/img/index_img/'.$request->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('img_name');
            $filename = $file->getClientOriginalName();
            $file ->move('public/assets/img/index_img/',$filename);
            $request->img_name = $filename;        
            $update = DB::update('update banners set img_name =? where id =?',[$request->img_name,$id]);
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
      $update = DB::update('update banners set type = ?
                where id =?',[$type,$id]);
    
      return redirect()->back()->with('message',' update Successfully');
    }
}
