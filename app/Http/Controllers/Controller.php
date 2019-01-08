<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Cart;
use App\Product;
use App\Language;
use Session;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function __construct(){
    	$this->LoginAdmin();
    	$this->Languages();    	
    }
    function LoginAdmin(){
    	if(Auth::check())
        {
            $user = Auth::user();
            view()->share('admin_login',$user);
    	}
    }
    function Languages(){
    	$Languages = Language::all();
    	view()->share('admin_lang',$Languages);
    }
    public function Setlocale($idlocale){
        $lang = Language::find($idlocale);
        if (in_array($lang->char, \Config::get('app.locales'))) {
            \Session::put('locale',$lang->char);
            \Session::put('idlocale',$lang->id);
            \Session::put('currencylocale',$lang->currency);
            \Session::put('curency_codelocale',$lang->curency_code);
            \Session::save();
            $this->reload_cart_with_lang($lang->id);
          }
          return redirect()->back();
    }
    
    public function mail()
    {
        $user = "phongntaki@mail.com";
        $message = "test mail laravel";
        Mail::send('phongntaki@mail.com', function($message){
            $message->to($user->email);
            $message->subject('E-Mail Example');
        });

        dd('Mail Send Successfully');
    }

}
