<?php

namespace App\Http\Controllers;

use App\Models\Enquiries;
use Illuminate\Http\Request;


class webController extends Controller
{
    //
    public function home()
    {
        return view('index');
    }
    // public function homeData(Request $req){
    //     return $req->post();
    // }

    public function homeData(Request $req){
        $model = new Enquiries();
        $model->name=$req->post('name');
        $model->phone=$req->post('phone');
        $model->email=$req->post('email');
        $model->projectType=$req->post('projectType');
        $model->projectSubType=$req->post('projectSubType');
        $model->details=$req->post('details');
        // $model->companies=$req->post('companies');
        // $model->isExclusive=$req->post('isExclusive');
        // $model->cid=$req->post('cid');
        // $model->rkey=$req->post('rkey');
        $model->status=$req->post('status');
        $model->save();
        return ["Result"=>"Data Inserted Successfully"];
    }
    // public function homeData1(Request $req){
        
    //     $enquiries = new Enquiries;
    //     $enquiries->catagory=$req->post('catagory');
    //     $enquiries->sub_catagory=$req->post('sub_catagory');
    //     $enquiries->details=$req->post('details');
    //     $enquiries->name=$req->post('name');
    //     $enquiries->mobile=$req->post('mobile');
    //     $enquiries->email=$req->post('email');
    //     $enquiries->companies=$req->post('companies');
    //     $enquiries->isExclusive=$req->post('isExclusive');
    //     $enquiries->cid=$req->post('cid');
    //     $enquiries->rkey=$req->post('rkey');
    //     $enquiries->status=$req->post('status');
    //     $enquiries->save();
    //     return ["Result"=>"Data Inserted Successfully"];
    //     // return redirect('/');
    // }


    
    // public function homes(Request $request)
    // {
    //     $catagory = $request->input('catagory');
    //     $sub_catagory = $request->input('sub_catagory');
    //     $details = $request->input('details');
    //     $name = $request->input('name');
    //     $mobile = $request->input('mobile');
    //     $email = $request->input('email');
    //     print_r($catagory);
    //     if($catagory != '' && $sub_catagory != '' && $details != ''&& $name != '' && $mobile != '' && $email != ''){
    //         $data = array('catagory'=>$catagory, 'sub_catagory'=>$sub_catagory, 'details'=>$details, 'name'=>$name, 'mobile'=>$mobile, 'email'=>$email);
    //         print_r($data);
    //         // inserting data 
    //         $value = cost_estimation::insertData($data);
    //     }
    //     else{
    //         // echo 'Fill all fields.';
    //         return view('index');
    //     }
    //     return view('index');
    // }

    public function home2()
    {
        return view('index-2');
    }
    public function aboutus()
    {
        return view('about');
    }
    public function blogging()
    {
        return view('blog');
    }
    public function careers()
    {
        return view('career');
    }
    public function contactus()
    {
        return view('contact');
    }
    public function faqs()
    {
        return view('faq');
    }
    public function portfolios()
    {
        return view('portfolio');
    }
    public function portfolio_detail()
    {
        return view('portfolio-details');
    }
    public function pricings()
    {
        return view('pricing');
    }
    public function web()
    {
        return view('web_development');
    }
    public function blog_details()
    {
        return view('web-details');
    }
    public function service()
    {
        return view('services');
    }
}
