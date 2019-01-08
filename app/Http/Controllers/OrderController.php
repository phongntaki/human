<?php

namespace App\Http\Controllers;

use App\Order;
use App\Customers;
use App\Advert;
use App\ProductDetail;
use App\Shipping;
use App\Payment;
use App\Warehouse;
use App\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Counter;
use App\News;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function HomeAdmin(){
        $time_now = time();
        $time_out = 120;
        $ip_address = $_SERVER['REMOTE_ADDR'];

        $online  = Counter::whereraw("(UNIX_TIMESTAMP(last_visit)+$time_out) > $time_now ")->count();

        $visit = Counter::all()->count(); 

        $day       = Counter::whereraw(" DAYOFMONTH(last_visit) = DAYOFMONTH(CURDATE())  AND YEAR(last_visit) = YEAR(CURDATE()) ")->count();
        $yesterday = Counter::whereraw(" DAYOFMONTH(last_visit) = DAYOFMONTH(CURDATE()) - 1  AND YEAR(last_visit) = YEAR(CURDATE()) ")->count();
        $week      = Counter::whereraw(" WEEKOFYEAR(last_visit) = WEEKOFYEAR(CURDATE())  AND YEAR(last_visit) = YEAR(CURDATE()) ")->count();
        $lastweek  = Counter::whereraw(" WEEKOFYEAR(last_visit) = WEEKOFYEAR(CURDATE()) - 1  AND YEAR(last_visit) = YEAR(CURDATE()) ")->count();
        $month     = Counter::whereraw(" MONTH(last_visit) = MONTH(CURDATE())  AND YEAR(last_visit) = YEAR(CURDATE()) ")->count();
        $year      = Counter::whereraw(" YEAR(last_visit) = YEAR(CURDATE()) ")->count();
 

        $ads = Advert::all()->count() ? : 0;
        $customer = Customers::all()->count() ? : 0;
        $order = Order::all()->count() ?:1;
        $newc = Order::where('order_status',1)->count();
        $news = News::all()->count() ? : 0;
        $news_all = News::all();
        $news_count =0;
        foreach($news_all as $n){
            $news_count = $news_count + $n->view_count;
        }
        $new = ($newc ? $newc  : 0)/$order*100;
        $handc = Order::where('order_status',2)->count();
        $hand = ($handc ? $handc : 0/$order)*100;
        $successc = Order::where('order_status',3)->count();
        $success = ($successc ? $successc : 0)/$order*100;
        $delc = Order::where('order_status',4)->count();
        $del = ($delc ? $delc : 0)/$order*100;
        $orderlist = Order::where('order_status',1)->orderBy('created_at','asc')->get() ? : 1;
        $process = Order::where('order_status',2)->count();


       return view('admin.index', ['listorder'=>$orderlist,'ads'=>$ads,'customer'=>$customer,'order'=>$order,'new'=>$new,'hand'=>$hand,'success'=>$success,'del'=>$del,'online'=>$online,'visit'=>$visit,'day'=>$day,'yesterday'=>$yesterday,'week'=>$week,'lastweek'=>$lastweek,'month'=>$month,'year'=>$year,'process'=>$process,'news'=>$news,'news_count'=>$news_count ]); 
    }

}
