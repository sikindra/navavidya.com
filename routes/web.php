<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ModeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\WorkshopPaymentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\CourseLevelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\book_levelController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\SyllebusController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaytmController;
use App\Http\Controllers\SuperAdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front/index');
});

Route::get('/document', function () {
    return view('front/document1');
});

Route::get('/school_enquery', function () {
    return view('front/school_enquery');
});

Route::post('/email_verification',[StudentController::class,'email_verification']);
Route::get('/verification',[StudentController::class,'verification']);
Route::get('/registers',[StudentController::class,'register']);
Route::post('register/submit',[StudentController::class,'submit']);
Route::post('school_register/submit',[StudentController::class,'school_register']);
Route::post('liveclass/submit',[StudentController::class,'liveclass']);



Route::post('frogot_password',[StudentController::class,'frogot_password']);
Route::post('school_frogot_password',[SchoolController::class,'frogot_password']);
Route::get('school_frogot_password_change/{id}',[SchoolController::class,'frogot_password_change']);
Route::get('frogot_password_change/{id}',[StudentController::class,'frogot_password_change']);
Route::post('frogot_password_change',[StudentController::class,'frogot_password_update']);
Route::post('school_frogot_password_change',[SchoolController::class,'frogot_password_update']);
Route::get('/course_offer',[DiscountController::class,'index']);
Route::post('add_to_cart',[BookController::class,'add_to_cart']);
Route::post('add_to_cart1',[CourseLevelController::class,'add_to_cart1']);

Route::get('search/{str}',[BookController::class,'search']);
Route::post('apply_coupon_code',[BookController::class,'apply_coupon_code']);
Route::post('apply_coupon_code1',[CourseLevelController::class,'apply_coupon_code1']);
Route::post('remove_coupon_code1',[CourseLevelController::class,'remove_coupon_code1']);
Route::post('remove_coupon_code',[BookController::class,'remove_coupon_code']);
Route::post('book/place_order',[BookController::class,'place_order']);
Route::get('/book',[BookController::class,'show']);
Route::get('/book/{id}',[BookController::class,'bookcat']);
Route::get('/book_list/{id}',[BookController::class,'list']);
Route::get('/order_placed',[BookController::class,'order_placed']);
Route::post('place_order1',[BookController::class,'place_order1']);

Route::post('book/razorpay',[BookController::class,'razorpay']);
Route::get('/order_fail',[BookController::class,'order_fail']);

Route::post('front/getCat',[CourseController::class,'getCat1']);
Route::post('front/getSub',[CourseController::class,'getSub1']);
Route::get('/',[HomeController::class,'get']); 

Route::get('/contact',[ContactController::class,'index']);

Route::get('/Record_Class/{course_id}/{id}',[CourseLevelController::class,'level']);
Route::post('contact/submit',[ContactController::class,'submit']);
Route::get('/Live_Classes/{course_id}/{id}',[CourseLevelController::class,'live']);
Route::get('superadmin',[SuperAdminController::class,'index']);
Route::post('superadmin/auth',[SuperAdminController::class,'auth'])->name('superadmin.auth');

Route::group(['middleware'=>'superadmin_auth'],function()
{
    Route::get('superadmin/dashboard',[SuperAdminController::class,'dashboard']); 
    Route::get('superadmin/category',[CategoryController::class,'index1']);
    Route::get('superadmin/mode_list',[ModeController::class,'index1']);
    Route::get('superadmin/course_list',[CourseController::class,'get1']);
    Route::get('superadmin/course_delete/{id}',[CourseController::class,'course_delete']);
    Route::get('superadmin/add_course',[CourseController::class,'index1']);
    Route::get('superadmin/feature_list',[FeatureController::class,'index1']);
    Route::get('superadmin/testimonials_list',[TestimonialsController::class,'index1']);
    Route::get('superadmin/book',[BookController::class,'index1']);
    Route::get('superadmin/book_level/{id}',[BookController::class,'edit1']);
    Route::get('superadmin/franchise_list',[FranchiseController::class,'index']);
    Route::get('superadmin/school_list',[SchoolController::class,'index']);
    Route::get('superadmin/workshop_list',[WorkshopController::class,'index']);
    Route::get('superadmin/workshop_paymentList',[WorkshopPaymentController::class,'index']);
    Route::get('superadmin/employee',[EmployeeController::class,'index']);
    Route::get('superadmin/add_modeList',[ModeController::class,'Add1']);
    Route::get('superadmin/mode_update/{id}',[ModeController::class,'update1']);
    Route::get('superadmin/add_category',[CategoryController::class,'Add1']);
    Route::post('superadmin/add/insert',[ModeController::class,'insert']);
    Route::get('superadmin/subcategory',[SubcategoryController::class,'index']);
    Route::get('superadmin/subcategory_view/{id}',[SubcategoryController::class,'view1']);
    Route::get('superadmin/subcategory_list/{type_id}/{id}',[SubcategoryController::class,'list1']);
    Route::get('superadmin/add_subcategory/{type_id}/{id}',[SubcategoryController::class,'add_subcategory']);
    Route::post('superadmin/sub_insert',[SubcategoryController::class,'sub_insert']);
    
    
    Route::get('superadmin/subcategory_update/{id}',[SubcategoryController::class,'edit1']);
    Route::post('superadmin/sub_update/{id}',[SubcategoryController::class,'update']);
    Route::get('superadmin/course_update/{id}',[CourseController::class,'edit1']);
    Route::post('superadmin/course_update/',[CourseController::class,'update']);
    Route::get('superadmin/edit_view/{id}',[CourseLevelController::class,'edit_view1']);
    Route::post('superadmin/view_update',[CourseLevelController::class,'view_update']);
    Route::get('superadmin/add_level/{id}',[CourseLevelController::class,'add1']);
    Route::post('superadmin/insert_level',[CourseLevelController::class,'insert']);
    Route::get('superadmin/list_of_request',[ContactController::class,'get1']);
    Route::get('superadmin/address',[ContactController::class,'add1']);
    Route::get('superadmin/banner',[BannerController::class,'add1']);
    Route::post('superadmin/adderss/insert',[ContactController::class,'insert']);
    Route::post('superadmin/getCat',[CourseController::class,'getCat']);
    Route::post('superadmin/getSub',[CourseController::class,'getSub']);
    Route::post('superadmin/addcourse/insert',[CourseController::class,'insert']);
    Route::get('superadmin/student_data',[CategoryController::class,'student_data']);
    Route::get('superadmin/student_data/{str}',[CategoryController::class,'student_data1']);
    Route::get('superadmin/payment_data/{str}',[CategoryController::class,'payment_data1']);
    Route::post('superadmin/getstudentCat',[CategoryController::class,'getstudentCat']);
    Route::get('superadmin/payment_data',[CategoryController::class,'payment_data']);
    Route::get('superadmin/syllebus/{id}',[SyllebusController::class,'syllebus1']);
    Route::get('superadmin/add_chapter/{id}',[ChapterController::class,'getchapter1']);
    Route::post('superadmin/chapter_insert',[ChapterController::class,'chapter_insert']);
    Route::get('superadmin/edit_chapter/{id}',[ChapterController::class,'edit_chapter1']);
    Route::post('superadmin/update_chapter',[ChapterController::class,'update_chapter']);
    Route::get('superadmin/chapter_delete/{id}',[ChapterController::class,'chapter_delete']);
    Route::get('superadmin/addsyl_chapter/{id}',[ChapterController::class,'addsyl_chapter1']);
    Route::post('superadmin/syllebus_insert/',[SyllebusController::class,'syllebus_insert']);
    Route::get('superadmin/syllebus_list/{id}',[SyllebusController::class,'syllebus_list']);
    Route::get('superadmin/edit_syllebus_list/{id}',[SyllebusController::class,'edit_syllebus_list']);
    Route::post('superadmin/update_syllebus',[SyllebusController::class,'update_syllebus']);
    Route::get('superadmin/syllebus_list_delete/{id}',[SyllebusController::class,'syllebus_list_delete']);
    Route::post('superadmin/banner_update',[BannerController::class,'banner_update']);
  

    Route::get('superadmin/course_level',[CourseLevelController::class,'index']);
    Route::get('superadmin/view_level/{id}/{class}',[CourseLevelController::class,'view1']);
    Route::get('superadmin/mode_delete/{id}',[ModeController::class,'delete1']);
    Route::put('superadmin/edit/{id}',[ModeController::class,'edit']);
    Route::post('superadmin/category_insert',[CategoryController::class,'insert']);
    Route::get('superadmin/category_delete/{id}',[CategoryController::class,'delete1']);
    Route::get('superadmin/category_update/{id}',[CategoryController::class,'edit1']);
    Route::put('superadmin/cat/update/{id}',[CategoryController::class,'update']);
    Route::get('superadmin/add_employee',[EmployeeController::class,'add']);
    Route::post('superadmin/employee/insert',[EmployeeController::class,'insert']);
    Route::get('superadmin/employee_edit/{id}',[EmployeeController::class,'edit']);
    Route::put('superadmin/employee/update/{id}',[EmployeeController::class,'update']);
    Route::get('superadmin/book_level_update/{id}',[book_levelController::class,'edit1']);
    Route::post('superadmin/book_level/update/',[book_levelController::class,'update']);
    Route::get('superadmin/add_book_level',[book_levelController::class,'add1']);
    Route::post('superadmin/add_book_level/insert',[book_levelController::class,'insert']);
    Route::get('superadmin/add_book',[BookController::class,'add']);
    Route::post('superadmin/add_book/insert',[BookController::class,'insert']);
    Route::get('superadmin/add_franchise',[FranchiseController::class,'add']);
    Route::post('superadmin/add_franchise/insert',[FranchiseController::class,'insert']);
    Route::get('superadmin/franchise_update/{id}',[FranchiseController::class,'edit']);
    Route::post('superadmin/franchise_update/',[FranchiseController::class,'update']);
    Route::get('superadmin/franchise_ch_number/',[FranchiseController::class,'phone']);
    Route::post('superadmin/franchise_ch_number/insert',[FranchiseController::class,'phone_insert']);
    Route::get('superadmin/add_school',[SchoolController::class,'add1']);
    Route::post('superadmin/school_add',[SchoolController::class,'insert']);
    Route::get('superadmin/add_workshop',[WorkshopController::class,'add']);
    Route::post('superadmin/workshop_insert',[WorkshopController::class,'insert']);
    Route::post('superadmin/workshop_insert',[WorkshopController::class,'insert']);
    Route::get('superadmin/workshop_delete/{id}',[WorkshopController::class,'delete']);
    Route::get('superadmin/workshop_update/{id}',[WorkshopController::class,'edit']);
    Route::get('superadmin/add_feature',[FeatureController::class,'add1']);
    Route::post('superadmin/feature_insert',[FeatureController::class,'insert']);
    Route::post('superadmin/feature_update',[FeatureController::class,'update']);
    Route::get('superadmin/feature_delete/{id}',[FeatureController::class,'delete']);
    Route::get('superadmin/feature_update/{id}',[FeatureController::class,'edit1']);
    Route::get('superadmin/add_testimonials/',[TestimonialsController::class,'add1']);
    Route::get('superadmin/testimonials_update/{id}',[TestimonialsController::class,'edit1']);
    Route::post('superadmin/testim_insert',[TestimonialsController::class,'insert']);
    Route::post('superadmin/testi_update/{id}',[TestimonialsController::class,'update']);
    Route::get('superadmin/testimonials_delete/{id}',[TestimonialsController::class,'delete']);
    Route::get('superadmin/edit_profile',[SuperAdminController::class,'edit_profile']);
    Route::put('superadmin/update_profile',[SuperAdminController::class,'update_profile']);
    Route::post('superadmin/update_profile1',[SuperAdminController::class,'update_profile1']);
    Route::get('superadmin/orders',[OrderController::class,'index1']);
    Route::get('superadmin/course_details',[OrderController::class,'course_details']);
    Route::get('superadmin/admin_list',[AdminController::class,'admin_list']);
    Route::get('superadmin/admin_update/{id}',[AdminController::class,'admin_update']);
    Route::put('superadmin/admin_user_update',[AdminController::class,'admin_user_update']);
    Route::get('superadmin/admin_add',[AdminController::class,'admin_add']);
    Route::post('superadmin/insert_admin',[AdminController::class,'insert_admin']);
    Route::get('superadmin/admin_delete/{id}',[AdminController::class,'admin_delete']);
    
    
    
    
    Route::get('superadmin/course_order_details/{id}',[OrderController::class,'course_order_details']);
    
    Route::get('superadmin/order_details/{id}',[OrderController::class,'order_details1']);
    Route::get('superadmin/update_payment_status/{ststus}/{id}',[OrderController::class,'update_payment_status1']);
    Route::get('superadmin/update_orders_status/{ststus}/{id}',[OrderController::class,'update_orders_status1']);
    Route::post('superadmin/order_details/{id}',[OrderController::class,'update_track_details1']);
    Route::post('superadmin/student_data/insert',[StudentController::class,'student_data_insert']);
    

    Route::get('superadmin/logout', function () {
        session()->forget('SUPERADMIN_LOGIN');
        session()->forget('SUPERADMIN_ID');
        return redirect('superadmin');
    }); 
}); 
    


Route::get('admin',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');
Route::get('/demo',[HomeController::class,'demo']);
Route::get('school',[SchoolController::class,'index']);
Route::group(['middleware'=>'admin_auth'],function()
{
    
    Route::post('admin/admin_profile',[AdminController::class,'admin_profile']);
    Route::get('admin/dashboard',[AdminController::class,'dashboard']);
    Route::get('admin/category',[CategoryController::class,'index']);
    Route::get('admin/mode_list',[ModeController::class,'index']);
    Route::get('admin/course_list',[CourseController::class,'get']);
    Route::get('admin/add_course',[CourseController::class,'index']);
    Route::get('admin/feature_list',[FeatureController::class,'index']);
    Route::get('admin/testimonials_list',[TestimonialsController::class,'index']);
    Route::get('admin/book',[BookController::class,'index']);
    Route::get('admin/book_level/{id}',[BookController::class,'edit']);
    Route::get('admin/course_delete/{id}',[CourseController::class,'course_delete']);
   
   
  
    Route::get('admin/add_modeList',[ModeController::class,'Add']);
    Route::get('admin/mode_update/{id}',[ModeController::class,'update']);
    Route::get('admin/add_category',[CategoryController::class,'Add']);
    Route::post('admin/add/insert',[ModeController::class,'insert']);
    Route::get('admin/subcategory',[SubcategoryController::class,'index']);
    Route::get('admin/subcategory_view/{id}',[SubcategoryController::class,'view']);
    Route::get('admin/subcategory_list/{type_id}/{id}',[SubcategoryController::class,'list']);
     Route::get('admin/add_subcategory/{type_id}/{id}',[SubcategoryController::class,'add_subcategory1']);
    Route::post('admin/sub_insert',[SubcategoryController::class,'sub_insert']);
    Route::get('admin/subcategory_update/{id}',[SubcategoryController::class,'edit']);
    Route::post('admin/sub_update/{id}',[SubcategoryController::class,'update']);
    Route::get('admin/course_update/{id}',[CourseController::class,'edit']);
    Route::post('admin/course_update/',[CourseController::class,'update']);
    Route::get('admin/edit_view/{id}',[CourseLevelController::class,'edit_view']);
    Route::post('admin/view_update',[CourseLevelController::class,'view_update']);
    Route::get('admin/add_level/{id}',[CourseLevelController::class,'add']);
    Route::post('admin/insert_level',[CourseLevelController::class,'insert']);
   
    Route::get('admin/address',[ContactController::class,'add']);
    Route::get('admin/banner',[BannerController::class,'add']);
    Route::post('admin/adderss/insert',[ContactController::class,'insert']);
    Route::post('admin/getstudentCat',[CategoryController::class,'getstudentCat']);
    Route::post('admin/getCat',[CourseController::class,'getCat']);
    Route::post('admin/getSub',[CourseController::class,'getSub']);
    Route::post('admin/addcourse/insert',[CourseController::class,'insert']);
    
   
    
    Route::get('admin/syllebus/{id}',[SyllebusController::class,'syllebus']);
    Route::get('admin/add_chapter/{id}',[ChapterController::class,'getchapter']);
    Route::post('admin/chapter_insert',[ChapterController::class,'chapter_insert']);
    Route::get('admin/edit_chapter/{id}',[ChapterController::class,'edit_chapter']);
    Route::post('admin/update_chapter',[ChapterController::class,'update_chapter']);
    Route::get('admin/chapter_delete/{id}',[ChapterController::class,'chapter_delete']);
    Route::get('admin/addsyl_chapter/{id}',[ChapterController::class,'addsyl_chapter']);
    Route::post('admin/syllebus_insert/',[SyllebusController::class,'syllebus_insert']);
    Route::get('admin/syllebus_list/{id}',[SyllebusController::class,'syllebus_list']);
    Route::get('admin/edit_syllebus_list/{id}',[SyllebusController::class,'edit_syllebus_list']);
    Route::post('admin/update_syllebus',[SyllebusController::class,'update_syllebus']);
    Route::get('admin/syllebus_list_delete/{id}',[SyllebusController::class,'syllebus_list_delete']);
    Route::post('admin/banner_update',[BannerController::class,'banner_update']);
  

    Route::get('admin/course_level',[CourseLevelController::class,'index']);
    Route::get('admin/view_level/{id}/{class}',[CourseLevelController::class,'view']);
    Route::get('admin/mode_delete/{id}',[ModeController::class,'delete']);
    Route::put('admin/edit/{id}',[ModeController::class,'edit']);
    Route::post('admin/category_insert',[CategoryController::class,'insert']);
    Route::get('admin/category_delete/{id}',[CategoryController::class,'delete']);
    Route::get('admin/category_update/{id}',[CategoryController::class,'edit']);
    Route::put('admin/cat/update/{id}',[CategoryController::class,'update']);
   
    Route::get('admin/book_level_update/{id}',[book_levelController::class,'edit']);
    Route::post('admin/book_level/update/',[book_levelController::class,'update']);
    Route::get('admin/add_book_level',[book_levelController::class,'add']);
    Route::post('admin/add_book_level/insert',[book_levelController::class,'insert']);
    Route::get('admin/add_book',[BookController::class,'add']);
    Route::post('admin/add_book/insert',[BookController::class,'insert']);
   
   
   
    
   
   
   
    Route::get('admin/add_feature',[FeatureController::class,'add']);
    Route::post('admin/feature_insert',[FeatureController::class,'insert']);
    Route::post('admin/feature_update',[FeatureController::class,'update']);
    Route::get('admin/feature_delete/{id}',[FeatureController::class,'delete']);
    Route::get('admin/feature_update/{id}',[FeatureController::class,'edit']);
    Route::get('admin/add_testimonials/',[TestimonialsController::class,'add']);
    Route::get('admin/testimonials_update/{id}',[TestimonialsController::class,'edit']);
    Route::post('admin/testim_insert',[TestimonialsController::class,'insert']);
    Route::post('admin/testi_update/{id}',[TestimonialsController::class,'update']);
    Route::get('admin/testimonials_delete/{id}',[TestimonialsController::class,'delete']);
    Route::get('admin/edit_profile',[AdminController::class,'edit_profile']);
    Route::put('admin/update_profile',[AdminController::class,'update_profile']);
    Route::get('admin/orders',[OrderController::class,'index']);
    Route::get('admin/order_details/{id}',[OrderController::class,'order_details']);
    Route::get('admin/update_payment_status/{ststus}/{id}',[OrderController::class,'update_payment_status']);
    Route::get('admin/update_orders_status/{ststus}/{id}',[OrderController::class,'update_orders_status']);
    Route::post('admin/order_details/{id}',[OrderController::class,'update_track_details']);




    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        return redirect('admin');
    }); 
    
});
Route::get('/feature',[FeatureController::class,'show']);
Route::get('/course_placed',[CourseLevelController::class,'course_placed']);
Route::get('admin/updatepassword',[AdminController::class,'updatepassword']);

Route::post('Student/auth',[StudentController::class,'auth'])->name('student.auth');
Route::group(['middleware'=>'student_auth'],function()
{
    
Route::post('student/student_profile',[StudentController::class,'student_profile']);
Route::get('Student/payment_details',[StudentController::class,'payment_details']);     
Route::get('Student/dashboard',[StudentController::class,'dashboard']);    
Route::get('Student/joined_courses',[StudentController::class,'joined_courses']);
Route::get('Student/my_order',[StudentController::class,'my_order']);
Route::get('Student/order_details/{id}',[StudentController::class,'order_details']);
Route::get('Student/order_payment_details/{id}',[StudentController::class,'order_payment_details']);
Route::get('Student/edit_profile',[StudentController::class,'edit_profile']);
Route::put('Student/update_profile',[StudentController::class,'update_profile']);
Route::get('/show_cart',[CourseLevelController::class,'show_cart']);
Route::get('/course_cart',[CourseLevelController::class,'course_cart']);
Route::get('/join_level/{id}',[CourseLevelController::class,'join_level']);
Route::post('/join_level',[CourseLevelController::class,'add_tocart']);
Route::post('/add_to_cart_course',[CourseLevelController::class,'add_to_cart_course']);
Route::post('/confirm_join',[CourseLevelController::class,'confirm_join']);
Route::post('course/place_order1',[CourseLevelController::class,'place_order']);
Route::post('/course/razorpay',[CourseLevelController::class,'razorpay']);
Route::get('Student/pdf_genrate/{name}/{id}',[StudentController::class,'pdf_genrate']);
Route::get('Student/pdf/{name}/{id}',[StudentController::class,'pdf']);
Route::get('cart',[BookController::class,'cart']);
Route::get('checkout',[BookController::class,'checkout']);

    Route::get('Student/logout', function () {
        session()->forget('STUDENT_LOGIN');
        session()->forget('STUDENT_ID');
        return redirect('https://navavidya.com/test/');
    });
    Route::get('St_logout', function () {
        session()->forget('STUDENT_LOGIN');
        session()->forget('STUDENT_ID');
        session()->forget('USER_TEMP_ID');
        return redirect('https://navavidya.com/test/');
    });
});

Route::post('school/auth',[SchoolController::class,'auth'])->name('school.auth');
Route::group(['middleware'=>'school_auth'],function()
{
    Route::get('school/dashboard', function () {
        return view('school/dashboard');
    });
    
    Route::get('school/logout', function () {
        session()->forget('SCHOOL_LOGIN');
        session()->forget('SCHOOL_ID');
        return redirect('https://navavidya.com/test/');
    });
    Route::get('logout', function () {
        session()->forget('SCHOOL_LOGIN');
        session()->forget('SCHOOL_ID');
        return redirect('https://navavidya.com/test/');
    });
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//Paytm Payment
Route::post('paytm-payment',[PaytmController::Class, 'paytmPayment'])->name('paytm.payment');
Route::post('paytm-callback',[PaytmController::Class, 'paytmCallback'])->name('paytm.callback');
Route::get('paytm-purchase',[PaytmController::Class, 'paytmPurchase'])->name('paytm.purchase');








