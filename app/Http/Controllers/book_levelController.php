<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book_level;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class book_levelController extends Controller
{
    public function index(){
        $result['book_level']=Book_level::all();
        return view('front.book',$result);
        
    
    }
    public function edit($id){
        $book_level=Book_level::all()->where('bk_evel_id',$id);
        return view('admin.book_level_update',compact("book_level"));
    
    }
    public function edit1($id){
        $book_level=Book_level::all()->where('bk_evel_id',$id);
        return view('superadmin.book_level_update',compact("book_level"));
    
    }
    
    public function update(Request $request)
    {
      
      $bk_evel_id = $request->bk_evel_id;
      $name = $request->name;
      $price = $request->price;
      $book_des = $request->book_des;
      $status = $request->status;
      
             
      
      
      
      if($request->hasfile('image'))
        {  $destination = 'public/assets/uploads/books/'.$request->image;
          if(File::exists($destination))
          {
              File::delete($destination);
          }
          $file = $request->file('image');
          $filename = $file->getClientOriginalName();
          $file ->move('public/assets/uploads/books/',$filename);
          $request->image = $filename;        
          $update = DB::update('update book_levels set image =? where bk_evel_id =?',[$request->image,$bk_evel_id]);
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

      $update = DB::update('update book_levels set name = ?,price = ?, book_des = ?,status = ? where bk_evel_id =?',[$name,$price,$book_des,$status,$bk_evel_id]);
      return redirect()->back()->with('message',' update Successfully');
    }
    function add1(){
      $book=Book::all();
        return view('superadmin.add_book_level',compact("book"));
    }
    function add(){
      $book=Book::all();
        return view('admin.add_book_level',compact("book"));
    }
    public function insert(Request $request){
      
      $book = new Book_level;
      $book->name = $request->input('name');
      $book->price = $request->input('price');
      $book->status = $request->input('status');
      $book->book_des = $request->input('book_des');
      $book->book_id = $request->input('book_id');

      if($request->hasfile('image'))
      {
          $file = $request->file('image');
          $extenstion = $file->getClientOriginalExtension();
          $filename = time().'.'.$extenstion;
          $file->move('public/assets/uploads/books/', $filename);
          $book->image = $filename;
              
          
          $notification = array(
              'message' => 'Successfully get book Data',
              'alert-type' => 'success'
          );
          
      }
      else {
          echo "error";
          $notification = array(
              'message' => 'Error get book Data',
              'alert-type' => 'error'
          );
      }

      $book->save();
      return redirect()->back()->with('message','book_level Successfully');
  }
 
    

    

}
