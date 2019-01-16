<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Input;

use App\Cate;
use App\Product;
use App\ProductImage;
use App\News;
use App\Slide;
use App\Banking;
use App\Soft;
use App\Socical;
use App\Order;
use App\OrderProduct;
use App\Customers;
use App\Contact;
use App\Language;
use App\Cities;
use App\Districts;
use App\Wards;
use App\Shippings;
use App\Payments;
use App\Translate;
use App\ModProduct;
use App\ListProduct;
use App\ModNews;
use App\ListNew;
use App\ProductStt;
use App\Contactus;
use App\Advert;
use App\Specialgroup;
use App\Project;
use App\Advisory;
use App\User;
use Auth;
use Cart;
use Session;

class HomeController extends Controller {

	public $idlang = 0;
    function __construct(){ 
		$this->middleware(function ($request, $next) {
			$this->idlang = session()->get('idlocale') ;
            return $next($request);
        });
    }
    public function public_var(){ 

            $modnews    = ModNews::where('idlang', $this->idlang)->orderBy('modnumber', 'desc')->get();
            foreach ($modnews as $itemmod => $valuemod) {
                $listnews   = ListNew::where('listidmod', $valuemod->id)->orderBy('listnumber', 'desc')->get();
                $news_special = array();
                foreach ($listnews as $itemlist => $valuelist) {
                    $news   = News::where('idlistnew', $valuelist->id)->orderBy('newnumber', 'desc')->get();
                    $listnews[$itemlist]["news"] = $news; 
                    if(empty($news_special)){
                        $news_special = $news;
                        $listnews[$itemlist]["news_special"] = $news_special;
                    }
                } 
                $modnews[$itemmod]["listnews"] = $listnews; 
            }


            $modproducts    = ModProduct::select('modproducts.*', DB::raw('translates.trname as trname'))
                                ->join("translates","translates.trid", "=", "modproducts.id")
                                ->where('translates.tridlang', $this->idlang)
                                ->where('translates.trcate', 1)
                                ->orderBy('modnumber', 'asc')->get();
            foreach ($modproducts as $itemmod => $valuemod) {
                $listproducts   = ListProduct::select('listproducts.*', DB::raw('translates.trname as trname'))
                                ->join("translates","translates.trid", "=", "listproducts.id")
                                ->where('translates.tridlang', $this->idlang)
                                ->where('listproducts.listidmod', $valuemod->id)
                                ->where('translates.trcate', 2)
                                ->orderBy('listnumber', 'desc')->get();
                foreach ($listproducts as $itemlist => $valuelist) {
                    $products   = Product::select('*', DB::raw('products.id as idproduct'))
                                            ->join("productdetail","productdetail.idproduct", "=", "products.id")
                                            ->where('idlist', $valuelist->id)
                                            ->where('idlang', $this->idlang)
                                            ->where('hide', 0)
                                            ->orderBy('products.id', 'desc')->get();
                    $listproducts[$itemlist]["products"] = $products;
                } 
                $modproducts[$itemmod]["listproducts"] = $listproducts; 
            }
            


            $contact = Contact::find(Session::get('idlocale'));


            $listnews       = ListNew::select('listnews.*')
                            ->join("modnews","modnews.id", "=", "listnews.listidmod")
                            ->where('modnews.idlang', $this->idlang)
                            ->orderBy('listnumber', 'desc')->get();



            $listproducts   = ListProduct::select('listproducts.*', DB::raw('translates.trname as trname'))
                        ->join("translates","translates.trid", "=", "listproducts.id")
                        ->where('translates.tridlang', $this->idlang)
                        ->where('translates.trcate', 2)
                        ->orderBy('listnumber', 'desc')->get();



            $listproducts_cat   = ListProduct::select('listproducts.*', DB::raw('translates.trname as trname'))
                            ->join("translates","translates.trid", "=", "listproducts.id")
                            ->where('translates.tridlang', $this->idlang)
                            ->where('translates.trcate', 2)
                            ->orderBy('id', 'desc')->skip(0)->take(3)->get();
            foreach ($listproducts_cat as $itemlist => $valuelist) {
                $products   = Product::join("productdetail","productdetail.idproduct", "=", "products.id")
                                        ->where('idlist', $valuelist->id)
                                        ->where('idlang', $this->idlang)
                                        ->where('hide', 0)
                                        ->orderBy('products.id', 'desc')->skip(0)->take(3)->get();
                $listproducts_cat[$itemlist]["products"] = $products;
            }

            $socials    = Socical::where('idlang', $this->idlang)->where('hide', 2)->orderBy('id', 'desc')->get();

            $languages  = Language::orderBy('id', 'desc')->get();
            $lasted_news = News::orderBy('created_at','DESC')->take(10)->get();
            $most_news = News::orderBy('view_count','DESC')->take(5)->get();
            $khuyenmai = News::orderBy('created_at','DESC')->take(10)->get();
            $slide_active = News::orderBy('created_at','DESC')->take(1)->get();
            $slide_no_active = News::orderBy('created_at','DESC')->skip(1)->take(9)->get();
            // echo "<pre>";
            // echo $slide_no_active;
            // echo "</pre>";
            // exit();

            $adverts_main    = Advert::where('idlang', $this->idlang)->where('hide', 2)->where('area', 4)->orderBy('sort', 'asc')->get();
            $adverts_top    = Advert::where('idlang', $this->idlang)->where('hide', 2)->where('area', 1)->orderBy('sort', 'asc')->get();
            $adverts_center = Advert::where('idlang', $this->idlang)->where('hide', 2)->where('area', 2)->orderBy('sort', 'asc')->get();
            $adverts_bottom = Advert::where('idlang', $this->idlang)->where('hide', 2)->where('area', 3)->orderBy('sort', 'asc')->get();
            $new_tag = News::all();

            $tag_arr=array();
            foreach($new_tag as $tags){
                if($tags->newtag !=''){
                    $tag = explode(", ", $tags->newtag);
                    for($c=0;$c<count($tag);$c++){
                        $check = in_array($tag[$c], $tag_arr);
                        if(!$check){
                            array_push($tag_arr,$tag[$c]);
                        }
                        
                    }
                }                                   
  
            }
           
            $tag_list = $tag_arr;
            $result = array(
                "adverts_main"=>$adverts_main,
                "adverts_top"=>$adverts_top,
                "adverts_center"=>$adverts_center,
                "adverts_bottom"=>$adverts_bottom,
                "lasted_news"=>$lasted_news ,
                "socials"=>$socials,
                "languages"=>$languages,                
                "modnews"=>$modnews,
                "modproducts"=>$modproducts,
                "contact"=>$contact,
                "listnews"=>$listnews,
                "most_news"=>$most_news,
                "listproducts"=>$listproducts,
                "khuyenmai"=>$khuyenmai,
                "slide_active"=>$slide_active,
                "slide_no_active"=>$slide_no_active,
                "listproducts_cat"=>$listproducts_cat,
                "tag_list"=>$tag_list,
                );
            
            return $result;
    }
    public function error_404()
	{  
        $public_var = $this->public_var();

		return view('home.404',array_merge($public_var, [ ]) );
	}

    // ====================index=================
	public function index()
	{ 
        $mod_new = ModNews::orderBy('modnumber','desc')->get();
        $public_var = $this->public_var();
		return view('home.index', array_merge($public_var, [
                                                            "index_modnew" =>$mod_new,
                                                            ] ));
	}

    // ====================news=================
	public function news($slug)
	{ 
        $itemnews	= News::select('news.*')
        					->join("listnews","listnews.id", "=", "news.idlistnew")
        					->join("modnews","modnews.id", "=", "listnews.listidmod")
        					->where('modnews.idlang', $this->idlang)
        					->where('news.slug', $slug)
        					->get()->first();        

        if(empty($itemnews)){
           $itemnews    = News::select('news.*')
                            ->join("modnews","modnews.id", "=", "news.idmodnew")
                            ->where('modnews.idlang', $this->idlang)
                            ->where('news.slug', $slug)
                            ->get()->first();  
        }
		if(empty($itemnews)){
			return redirect("");
		}else{ 
            $new_in_list_active = News::where('idlistnew',$itemnews->idlistnew)
                                        ->where('id','<>',$itemnews->id)
                                        ->orderBy('created_at','DESC')
                                        ->take(4)
                                        ->get();  
	    	$new_in_list_item = News::where('idlistnew',$itemnews->idlistnew)
                                        ->where('id','<>',$itemnews->id)
                                        ->orderBy('created_at','DESC')
                                        ->skip(3)
                                        ->take(4)
                                        ->get();	

            $itemnews->view_count = $itemnews->view_count +1;
            $itemnews->save();
            $public_var = $this->public_var();
            return view('home.news',array_merge($public_var, [ 
                                                            'new_in_list_active'=>$new_in_list_active, 
        													'new_in_list_item'=>$new_in_list_item, 
                                                            'itemnews'=>$itemnews, 
                                                             ]));
		}
	}

    // ======================list new=============
	public function list_news($slug)
    {
        $list = ListNew::where('slug',$slug)->first();
        if(!empty($list)){
            $total = News::where('idlistnew',$list->id)->count();
            $listnews_cat = News::where('idlistnew',$list->id)->where('status','<>',0)->orderBy('created_at','DESC')->take(10)->get();
            $public_var = $this->public_var();
            return view('home.listnews',array_merge($public_var, [ 
                                                    'listnew'=>$list,
                                                    'listnews_cat'=>$listnews_cat,
                                                    "total" => $total,
                                                    ]));
        } else {
            $mod = ModNews::where('slug',$slug)->first();
            if(!empty($mod)){                
                $public_var = $this->public_var();
                $total = News::where('idmodnew',$mod->id)->count();
                $modnews_cat = News::where('idmodnew',$mod->id)->where('status','<>',0)->orderBy('created_at','DESC')->take(10)->get();
                return view('home.modnews',array_merge($public_var, [ 
                                                                    'modnew' =>$mod,
                                                                    'modnews_cat'=>$modnews_cat,
                                                                    "total" => $total,
                                                                    ]));
            } else {
                return redirect()->Route('error_404');
            }
            
        }
    }

	public function search()
	{        

        $key = Input::get('key', ""); 

        $news = News::where('status','<>',0)->where('newsname',"like",'%'.$key.'%')->take(20)->get();
        $public_var = $this->public_var();
        return view('home.search',array_merge($public_var, [ 											
            												'news_serch'=>$news,
            												'key'=>$key,		
                                                            ] ));
	}
    public function tags($tag)
    {        

        $key = str_replace("-"," ",$tag);

        $news = News::where('status','<>',0)->where('newtag',"like",'%'.$key.'%')->get();

        $public_var = $this->public_var();
        return view('home.search',array_merge($public_var, [                                            
                                                            'news'=>$news,
                                                            'tags'=>$key,        
                                                            ] ));
    }

	// ======================`kout========================
	public function checkout() 
	{
		if(session('logined_cus') == 1){
			return redirect('thanhtoan');
		}else{
			$carts = Cart::content();
	        $cities 	= Cities::orderBy('name', 'desc')->get(); 
            // ================================   
			// ================================   
 
 
            $public_var = $this->public_var();
            return view('home.checkout',array_merge($public_var, [  
													'carts'=>$carts, 
													'cities'=>$cities ]) );
		}
	}
	public function order_not_account(Request $request){
        Session::put('logined_cus', 0);
		Session::put('logined_cusid', 1);
	}

	public function select_distict_ajax(Request $request){
		$idcity 	= $request->input('idcity');
        $districts 	= Districts::where('idcity',$idcity)->orderBy('name', 'desc')->get();
        $html = "<option value=''>".trans('shipping.select_district')."</option>";
        foreach ($districts as $item) {
        	$html.="<option value=".$item->id.">".$item->name."</option>";
        }
        echo $html;
	}
	public function select_ward_ajax(Request $request){
		$iddistrict 	= $request->input('iddistrict');
        $wards 	= Wards::where('iddistrict',$iddistrict)->orderBy('name', 'desc')->get();
        $html = "<option value=''>".trans('shipping.select_ward')."</option>";
        foreach ($wards as $item) {
        	$html.="<option value=".$item->id.">".$item->name."</option>";
        }
        echo $html;
	}
	
	// =============================login=========================
	public function login()
	{ 
		if(session('logined_cusid') != "" && session('logined_cus') == 1){
			return redirect('user');
		}
		
		// ================================  
		// ================================   
        $public_var = $this->public_var();
        return view('home.login',array_merge($public_var, []) );
	}

    public function postlogin(Request $request)
    { 
        // echo "<pre>";
        // echo $request;
        // echo "</pre>";
        // echo "<script type='text/javascript'>alert('zz);</script>";
        $email      = $request->input('email');
        $password   = sha1($request->input('password'));
        echo "<script type='text/javascript'>alert('$email');</script>";
        echo "<script type='text/javascript'>alert('$password');</script>";
        
        
        $checkLogin = Customers::where("cusemail",'=',$email)->where("cuspass",'=',$password)->first();
        echo "<pre>";
        echo $checkLogin;
        echo "</pre>";
        if($checkLogin!=null){
            echo "<script type='text/javascript'>alert('$email');</script>";
            Session::put('logined_cus', 1);
            Session::put('logined_cusid', $checkLogin->id);
            Session::put('logined_cusfullname', $checkLogin->cusfullname);
            Session::put('logined_cusemail', $checkLogin->cusemail);
            Session::put('logined_cusphone', $checkLogin->cusphone);
            Session::put('logined_cusimg', $checkLogin->cusimg);
            Session::put('logined_cusaddress', $checkLogin->cusaddress);
            return redirect()->route('gioi_thieu')->with(['flash_level'=>'success','flash_message'=>'Login Success']);
        }else{
            echo "<script type='text/javascript'>alert('$password');</script>";
            return redirect()->route('login')->with(['flash_level'=>'success','flash_message'=>'Login Fail']);
        }
    }

	public function login_ajax(Request $request){
		$email 		= $request->input('email');
		$password 	= sha1($request->input('pass'));

		$checkLogin = Customers::where("cusemail",'=',$email)->where("cuspass",'=',$password)->where("status",'=',1)->first();
		if(count($checkLogin) == 1){
          	Session::put('logined_cus', 1);
			Session::put('logined_cusid', $checkLogin->id);
			Session::put('logined_cusfullname', $checkLogin->cusfullname);
			Session::put('logined_cusemail', $checkLogin->cusemail);
			Session::put('logined_cusphone', $checkLogin->cusphone);
			Session::put('logined_cusimg', $checkLogin->cusimg);
			Session::put('logined_cusaddress', $checkLogin->cusaddress);


              // ==============save info to order =============== 
              Session::put('pay_name', $checkLogin->cusfullname);
              Session::put('pay_phone', $checkLogin->cusphone);
              Session::put('pay_address', $checkLogin->cusaddress);

              Session::put('shipping_name', session('pay_name'));
              Session::put('shipping_phone', session('pay_phone'));
              Session::put('shipping_address', session('pay_address'));
              Session::put('same_address', 1);
              Session::put('shipping_error', 0); 
              // =============================

			echo 1;
		}else{
			echo 0;
		}
	}	


	public function ok()
	{  
		// ================================  
        $public_var = $this->public_var();
        return view('home.ok',array_merge($public_var, [ ]) );
	}


	public function register()
	{ 
		if(session('logined_cusid') != "" && session('logined_cus') == 1){
			return redirect('user');
		}

		// ================================   
		// ================================ 
  
        $public_var = $this->public_var();
        return view('home.register',array_merge($public_var, [ ]) );
	}

    public function postRegister(Request $request)
    { 
        $this->validate(request(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        $fullname      = $request->input('fullname');
        $email      = $request->input('email');
        $password   = sha1($request->input('password'));

        

        
        $checkRegister = Customers::where("cusemail",'=',$email)->first();
        $cus = new Customers();
        $cus->idgroup = 1;
        $cus->cusfullname = $fullname;
        $cus->cusemail = $email;
        $cus->cusphone = "";
        $cus->cusimg = "";
        $cus->status = 1;
        $cus->cusaddress = "";
        $cus->sex = "0";
        $cus->birthday = null;
        $cus->education = null;
        $cus->language_jp = null;
        $cus->language_other = null;
        $cus->introduce = null;
        $cus->desire = null;
        $cus->cusface = "";
        $cus->cuspass = $password;
        $cus->idloginsocial = "";
        $cus->theme = 1;
        $cus->site_name = "";
        $cus->site_map = "";
        $cus->site_url = "";
        $cus->slogan_intro = "";
        $cus->fanpage = "";
        $cus->cusvideos = "";
        $cus->theme_background = "";
        // echo "<pre>";
        // echo $checkRegister;
        // echo 1111;
        // echo "</pre>";
        // echo "<script type='text/javascript'>alert('$fullname');</script>";
        // echo "<script type='text/javascript'>alert('$email');</script>";
        // echo "<script type='text/javascript'>alert('$password');</script>";
        // echo "<script type='text/javascript'>alert('$checkRegister');</script>";
        if($checkRegister==null){
            $cus->save();
            $public_var = $this->public_var();
            echo "<script type='text/javascript'>alert('Register Success');</script>";
            return view('home.login',array_merge($public_var, [ ]) );
        } else{
            $public_var = $this->public_var();
            echo "<script type='text/javascript'>alert('Register Fail');</script>";
            return view('home.register',array_merge($public_var, [ ]) );
        }
        // auth()->login($user);
        // $public_var = $this->public_var();
        // echo "<script type='text/javascript'>alert('Register Success');</script>";
        // return view('home.login',array_merge($public_var, [ ]) );
    }

	function get_client_ip() {
	    $ipaddress = '';
	    if (isset($_SERVER['HTTP_CLIENT_IP']))
	        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED'];
	    else if(isset($_SERVER['REMOTE_ADDR']))
	        $ipaddress = $_SERVER['REMOTE_ADDR'];
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
	}

	// ===============user===================
	public function user()
	{ 
		if(session('logined_cusid') == "" || session('logined_cus') != 1 ){
			return redirect("login");
		}

		$customer 	= Customers::find(Session::get("logined_cusid"));
        $cities 	= Cities::orderBy('name', 'desc')->get();

        // ================================   
		// ================================  
  
        $public_var = $this->public_var();
        return view('home.user',array_merge($public_var, [ 
											'customer'=>$customer,
											'cities'=>$cities ]) );
	}

	// ===============contact===================
	public function contact()
	{    
        // ================================  
		// ================================   
        $public_var = $this->public_var();
        return view('home.contact',array_merge($public_var, [ ]) );
	}


    function save_contact(Request $request){ 
        $name         	= $request->input('name');
        $email          = $request->input('email');
        $content        = $request->input('content');
        $register_error = 0;

        $error = array(
          "name"       => "",
          "email"      => "", 
          "content"    => "", 
          );

        if(empty($name)){
          $error["name"] = trans('form.err_fullname');
          $register_error = 1;
        }

        if(empty($email)){
          $error["email"] = trans('form.err_email');
          $register_error = 1;
        }

        if(empty($content)){
          $error["content"] = trans('form.err_content');
          $register_error = 1;
        }
 
        
        if($register_error == 0){
          $contact = new Contactus;
          $contact->name   		= $name;
          $contact->email       = $email; 
          $contact->content     = $content; 
          $contact->save();
        }

        echo json_encode($error);
    }

    public function loadmore_news_in_mod(Request $rq){
        $modid = $rq->modid;
        $skip = $rq->skip;
        $take = $rq->take;
        $modnew = ModNews::where('id',$modid)->first();
        $modnews_cat = News::where('idmodnew',$modid)->where('status','<>',0)->orderBy('created_at','DESC')->skip($skip)->take($take)->get();
        return view('home.content_news_ajax',compact('modnews_cat','modnew'));  
    }
    public function loadmore_news_in_list(Request $rq){
        $listid = $rq->listid;
        $skip = $rq->skip;
        $take = $rq->take;
        $listnew = ListNew::where('id',$listid)->first();
        $listnews_cat = News::where('idlistnew',$listid)->where('status','<>',0)->orderBy('created_at','DESC')->skip($skip)->take($take)->get();
        return view('home.content_news_ajax_list',compact('listnews_cat','listnew'));
    }

    public function lien_he(){
        $public_var = $this->public_var();
        return view('home.lienhe',array_merge($public_var, [ ]) );
        
    }

    public function gioi_thieu(){
        $public_var = $this->public_var();
        return view('home.gioithieu',array_merge($public_var, [ ]) );
    }
    public function hinh_thanh(){
        $public_var = $this->public_var();
        return view('home.hinhthanh',array_merge($public_var, [ ]) );
    }
    public function linh_vuc(){
        $public_var = $this->public_var();
        return view('home.linhvuc',array_merge($public_var, [ ]) );
    }
    public function my_profile(){
        if(Session::get('logined_cus') == 1){
            $cusEmail = Session::get('logined_cusemail');
            $cus_data = Customers::where("cusemail",'=',$cusEmail)->first();
            // echo '<pre>';
        // echo $cusId;
        // echo '<br>';
        // echo $cusId->id;
        // echo '</pre>';
            $public_var = $this->public_var();
            return view('home.myprofile',array_merge($public_var, [ ]), compact('cus_data'));
        } else{
            // echo "<script type='text/javascript'>alert('zz22222');</script>";
            return redirect()->route('login')->with(['flash_level'=>'success','flash_message'=>'Login Fail']);
        }
    }

    public function post_my_profile(Request $request){
        // echo "<script type='text/javascript'>alert('zz000');</script>";
        $cus_data = Customers::where("cusemail",'=',Session::get('logined_cusemail'))->first();
        $cus_data->cusfullname = $request->txtname;
        $cus_data->sex = $request->sex;
        $cus_data->birthday = $request->birthday;
        $cus_data->cusphone = $request->phone;
        $cus_data->cusaddress = $request->address;
        $cus_data->education = $request->nnHocVan;
        $cus_data->language_jp = $request->nnLanguageJP;
        $cus_data->language_other = $request->nnLanguageOther;
        $cus_data->introduce = $request->nnIntroduce;
        $cus_data->desire = $request->nnDesire;

        $cus_data->idgroup = "1";
        $cus_data->cusemail = Session::get('logined_cusemail');
        // $cus_data->cusimg = "";
        if($request->hasFile('hnnavatarfile')){
            echo "<script type='text/javascript'>alert('zz111');</script>";
            $file = $request->file('hnnavatarfile');
            $nameimg = $file->getClientOriginalName(); 
            $hinh = "imageEnzi".str_random(6)."_".$nameimg;
            while(file_exists("public/img/customers/".$hinh))
            {
                $hinh = "imageEnzi".str_random(6)."_".$nameimg;
            }
            $file->move("public/img/customers",$hinh);
            $imgold = $cus_data->cusimg;
            if($imgold !="no-img.png" && ($imgold !='')){
                while(file_exists("public/img/customers/".$imgold))
                {
                    unlink("public/img/customers/".$imgold);
                }
            }
            $cus_data->cusimg = $hinh;
        }else{
            if($cus_data->cusimg!="no-img.png" && ($cus_data->cusimg !='')){
                $cus_data->cusimg = $cus_data->cusimg;
            }else{
                $cus_data->cusimg = "no-img.png";
            }
        }
        $cus_data->status = "1";

        $cus_data->save();
        Session::put('logined_cusfullname', $request->txtname);
        Session::put('logined_cusphone', $request->phone);
        Session::put('logined_cusaddress', $request->address);
        return redirect('gioi-thieu')->with('thongbao','Update Success');

    }
}
