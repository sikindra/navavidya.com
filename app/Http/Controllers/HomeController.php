<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Book;
use App\Models\Testimonials;
use App\Models\Feature;
use App\Models\Mode;
use App\Models\Book_level;


class HomeController extends Controller
{
    public function get(){
        $index1=Course::all()->where('cat_id', '=', 1);
        $index=Course::all()->where('cat_id', '=', 2);
        $book=Book::all()->where('status', '=', 'A');
        $testimonials=Testimonials::all();
        $features=Feature::all();
        $mode=Mode::all()->where('status', '=', 'A');
        $book_level=Book_level::all()->where('status', '=', '1');
       
        return view('front.index',compact("index","index1","book","testimonials","features","mode","book_level"));
    }
    public function get1(){
        $index=Course::all()->where('cat_id', '=', 2);
        $book=Book::all()->where('status', '=', 'A');
        $testimonials=Testimonials::all();
        $features=Feature::all();
        $mode=Mode::all()->where('status', '=', 'A');
       
        return view('Dashboard.index',compact("index","book","testimonials","features","mode"));
    }
    function demo(){
        $index1=Course::where('cat_id', '2')->orderBy('course_id', 'asc')->take(1)
        ->get();
        $index=Course::where('cat_id', '2')->orderBy('course_id', 'asc')->take(25)
        ->get();
        
        return view('front.demo',compact("index","index1"));
        

    }
    
    
}
