<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class cost_estimation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'mobile', 'email', 'catagory', 'sub_catagory', 'details', 'status'
    ];

    
    public static function insertData($data){
        
        $value=DB::table('enquiry_tb')->where(
            'name', $data['name'],
            'mobile', $data['mobile'],
            'email', $data['email'],
            'catagory', $data['catagory'],
            'sub_catagory', $data['sub_catagory'],
            'details', $data['details']
        )->get();

            // Insert Data Querry

            DB::insert('INSERT into enquiry_tb (id, name, mobile, email, catagory, sub_catagory, details) values (?, ?, ?, ?, ?, ?, ?)', [
                // 'id' => 'id',
                'name' => 'name',
                'mobile' => 'mobile',
                'email' => 'email',
                'catagory' => 'catagory',
                'sub_catagory' => 'sub_catagory',
                'details' => 'details'
            ]);



        $insertid = DB::table('enquiry_tb')->insertGetId($data);
        return $insertid;
        if($value->count() == 0){
            $insertid = DB::table('enquiry_tb')->insertGetId($data);
            return $insertid;
        }else{
          return 0;
        }
   
    }

    
}
