<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DbController extends Controller
{
    public function index(){
        // $all = DB::table('employee')->select('name', 'email', 'status')->get();
        // $all = DB::table('employee')->pluck('name', 'email');
        // $single = DB::table('employee')->first();
        //  $orderBy = DB::table('employee')->orderBy('id', 'DESC')->get();
        //  $orderBy = DB::table('employee')->orderBy('id', 'DESC')->limit(1)->get();
        // $count = DB::table('employee')->count();
        // $offset = DB::table('employee')->orderBy('id', 'DESC')->offset(1)->limit(1)->get();
        // $min = DB::table('employee')->min('id');
        $min = DB::table('employee')->max('id');
        
        dd($min);
    }

    public function join(){
        $result = DB::table('order')
        ->join('users', 'users.id', '=', 'order.user_id')
        ->select('users.name', 'order.id', 'order.amount', 'order.order_date')
        ->where('status', 1)
        ->get();
        dd($result);
    }
}
