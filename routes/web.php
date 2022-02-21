<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webController;
// use App\View\Components\cost_estimation;

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

Route::get('/', [webController::class,'home']);
Route::post('/submitdata', [webController::class,'homeData']);
Route::get('/home1', [webController::class,'home2']);
Route::get('/about-us', [webController::class,'aboutus']);
Route::get('/blog', [webController::class,'blogging']);
Route::get('/services', [webController::class,'service']);
Route::get('/career', [webController::class,'careers']);
Route::get('/contact-us', [webController::class,'contactus']);
Route::get('/faq', [webController::class,'faqs']);
Route::get('/portfolio', [webController::class,'portfolios']);
Route::get('/portfolio_info', [webController::class,'portfolio_detail']);
Route::get('/pricing', [webController::class,'pricings']);
Route::get('/development', [webController::class,'web']);
Route::get('/blog-info', [webController::class,'blog_details']);


// Route::get('', function () {
// });