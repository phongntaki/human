<?php

namespace App\Http\Controllers;

use App\Customers;
use App\GroupCustomers;
use Illuminate\Http\Request;

use Socialite; 
use Session;
use App\Cities;
use App\Districts;
use App\Wards;
use App\Contactus;
use App\Models\PasswordReset;
use App\Notifications\ResetPassword;
use Mail;
use Carbon\Carbon;

class CustomerController extends Controller
{

    public function login_social($provider, $page_return)
    {
        // echo $page_return;
        Session::put('page_return_login_social', $page_return);
        return redirect("login/redirect/".$provider); 
    }
 
    public function login_redirect ($provider)
    {
        return Socialite::driver($provider)->redirect();  
    }

    public function login_callback($provider)
    {
        $user = Socialite::driver($provider)->user();
        // dd($user);
        if (!empty($user)) {

          $item_user = Customers::where("idloginsocial",'=',$user->id)->first();
          // if(count($item_user) == 0){
          if($item_user == null){
            $item_user = new Customers;
            $item_user->idgroup         = 1;
            $item_user->idloginsocial   = $user->id;
            $item_user->cusfullname     = $user->name;
            if(isset($user->email)){
              $item_user->cusemail        = $user->email;
            }else{
              $item_user->cusemail        = "";
            }
            $item_user->cusimg          = $user->avatar;
            $item_user->status          = 1;
            $item_user->cusaddress      = "";
            $item_user->save();
          }


          Session::put('logined_cus', 1);
          Session::put('logined_cusid', $item_user->id);
          Session::put('logined_cusfullname', $item_user->cusfullname);
          Session::put('logined_cusemail', $item_user->cusemail);
          Session::put('logined_cusphone', $item_user->cusphone);
          Session::put('logined_cusimg', $item_user->cusimg);
          Session::put('logined_cusaddress', $item_user->cusaddress);
        }

        $page_return = Session::get("page_return_login_social");
        return redirect($page_return);
    } 


    public function register_ajax(Request $request){ 
        $fullname         = $request->input('fullname');
        $phone            = $request->input('phone');
        $address          = $request->input('address');
        $email            = $request->input('email');
        $password         = $request->input('password');
        $repassword       = $request->input('repassword');

        $register_error = 0;

        $error = array(
          "success"      => "",
          "fullname"      => "",
          "phone"         => "",
          "address"       => "",
          "email"         => "",
          "password"      => "",
          "repassword"    => "",
          );

        if(empty($fullname)){
          $error["fullname"] = trans('form.err_fullname');
          $register_error = 1;
        }

        if(empty($phone)){
          $error["phone"] = trans('form.err_phone');
          $register_error = 1;
        }

        if(empty($address)){
          $error["address"] = trans('form.err_address');
          $register_error = 1;
        }

        if(empty($email)){
          $error["email"] = trans('form.err_email');
          $register_error = 1;
        }

        if(empty($password)){
          $error["password"] = trans('form.err_password');
          $register_error = 1;
        }

        if(empty($repassword)){
          $error["repassword"] = trans('form.err_repassword');
          $register_error = 1;
        }

        if($repassword != $password){
          $error["repassword"] = trans('form.err_not_same_password');
          $register_error = 1;
        }
        
        if($register_error == 0){
          $item = new Customers;
          $item->cusfullname  = $fullname;
          $item->idgroup      = 1;
          $item->status       = 1;
          $item->cusemail     = $email;
          $item->cusphone     = $phone;
          $item->cusimg       = "";
          $item->cusaddress   = $address;
          $item->cuspass      = sha1($password);
          $item->save();

          $customer_id = $item->id;
          if($customer_id){
            Session::put('logined_cus', 1);
            Session::put('logined_cusid', $item->id);
            Session::put('logined_cusfullname', $item->cusfullname);
            Session::put('logined_cusemail', $item->cusemail);
            Session::put('logined_cusphone', $item->cusphone);
            Session::put('logined_cusimg', $item->cusimg);
            Session::put('logined_cusaddress', $item->cusaddress);
            $error["success"] = 1;
          }else{
            $error["success"] = 0;
          }
        }

        echo json_encode($error);

    }


    function save_custommer_info(Request $request){ 
        $fullname         = $request->input('fullname');
        $phone            = $request->input('phone');
        $register_error = 0;

        $error = array(
          "fullname"      => "",
          "phone"      => "", 
          );

        if(empty($fullname)){
          $error["fullname"] = trans('form.err_fullname');
          $register_error = 1;
        }

        if(empty($phone)){
          $error["phone"] = trans('form.err_phone');
          $register_error = 1;
        }
 
        
        if($register_error == 0){
          $customer = Customers::find(Session::get("logined_cusid"));
          $customer->cusfullname   = $fullname;
          $customer->cusphone      = $phone; 
          $customer->save();
        }

        echo json_encode($error);
    }


    function save_custommer_address(Request $request){ 
        $address                = $request->input('address');
        $select_city            = $request->input('select_city');
        $select_district        = $request->input('select_district');
        $select_ward            = $request->input('select_ward');
        $register_error = 0;

        $error = array(
          "fulladdress"      => "",
          "address"          => "",
          "select_city"      => "", 
          "select_district"  => "", 
          );

        if(empty($address)){
          $error["address"] = trans('form.err_address');
          $register_error = 1;
        }

        if(empty($select_city)){
          $error["select_city"] = trans('form.err_select_city');
          $register_error = 1;
        }

        if(empty($select_district)){
          $error["select_district"] = trans('form.err_select_district');
          $register_error = 1;
        }
  
        
        if($register_error == 0){

          $city       = Cities::find($select_city);
          $district   = Districts::find($select_district);

          if($select_ward != ""){
            $ward        = Wards::find($select_ward);
            $fulladdress = $address.", ".$ward->name.", ".$district->name.", ".$city->name;
          }else{
            $fulladdress = $address.", ".$district->name.", ".$city->name;
          }


          $customer = Customers::find(Session::get("logined_cusid"));
          $customer->cusaddress   = $fulladdress;
          $customer->save();
          
          if($fulladdress != ""){
            $error["fulladdress"] = "";
          }
        }

        echo json_encode($error);
    }


    function save_custommer_pass(Request $request){ 
        $oldPassword       = $request->input('oldPassword');
        $newPassword       = $request->input('newPassword');
        $rePassword        = $request->input('rePassword');
        $register_error = 0;

        $error = array(
          "oldPassword"       => "",
          "newPassword"       => "",
          "rePassword"        => "", 
          );


        $customer = Customers::find(Session::get("logined_cusid"));

        if(sha1($oldPassword) != $customer->cuspass){
          $error["oldPassword"] = trans('form.err_old_pass_not_same');
          $register_error = 1;
        }

        if(empty($oldPassword)){
          $error["oldPassword"] = trans('form.err_address');
          $register_error = 1;
        }

        if(empty($newPassword)){
          $error["newPassword"] = trans('form.err_password');
          $register_error = 1;
        }

        if(empty($rePassword)){
          $error["rePassword"] = trans('form.err_password');
          $register_error = 1;
        }

        if($rePassword != $newPassword){
          $error["rePassword"] = trans('form.err_password');
          $register_error = 1;
        }
  
        
        if($register_error == 0){
          $customer->cuspass   = sha1($newPassword);
          $customer->save();
        }

        echo json_encode($error);
    }

    function logout(){
      Session::put('logined_cus', 0);
      Session::put('logined_cusid', "");
      Session::put('logined_cusfullname', "");
      Session::put('logined_cusemail', "");
      Session::put('logined_cusphone', "");
      Session::put('logined_cusimg', "");
      Session::put('logined_cusaddress', "");
      return redirect("");
    }



    // ===============================*********************=+++++++++++++++++++++==================




    public function ProfileCus($id){
        $customer = Customers::find($id);
        return view('admin.customer.profile',['customer'=>$customer]);
    }
    public function ListgrNews(){
        $grcus = GroupCustomers::all();
        return view('admin.customer.group',['grcus'=>$grcus]);
    }
    public function AddgrNews(Request $request){
        session(['actionuser' => 'add']);        
        $this->validate($request,[
                'listname' => 'required',
                'nnnumber' => 'numeric',
                'nnavatarfile' => 'image|max:500000',                
            ],[
                'listname.required' => 'Bạn cần thêm tên nhóm khách hàng',
                'nnnumber.numeric'     => 'Hiện thị phải là số',
                'nnavatarfile.image' => 'Avatar phải là hình ảnh',
                'nnavatarfile.max' => 'Avatar dung lượng quá lớn',

            ]);
        $gruop = new GroupCustomers;
        $gruop->listname = $request->listname;
        $gruop->listnumber = $request->nnnumber;
        if($request->hasFile('nnavatarfile')){
                $file = $request->file('nnavatarfile');
                $nameimg = $file->getClientOriginalName(); 
                $hinh = "imageEnzi".str_random(6)."_".$nameimg;
                while(file_exists("public/img/customers/".$hinh))
                {
                    $hinh = "imageEnzi".str_random(6)."_".$nameimg;
                }
                $file->move("public/img/customers",$hinh);
                $gruop->listimg = $hinh;
            }else{
                $gruop->listimg = "no-img.png";
            }
        $gruop->save();
        return redirect('admin/customers/listgr')->with('thongbao','thêm thành công');
    }
    public function EditgrNews(Request $request){
        session(['actionuser' => 'edit','editid'=>$request->ennidlistpro]);   
        $this->validate($request,[
                'elistname' => 'required',
                'ennnumber' => 'numeric',
                'ennavatarfile' => 'image|max:500000',                
            ],[
                'elistname.required' => 'Bạn cần thêm tên Loại sản phẩm',
                'ennnumber.numeric'     => 'Hiện thị phải là số',
                'ennavatarfile.image' => 'Avatar phải là hình ảnh',
                'ennavatarfile.max' => 'Avatar dung lượng quá lớn',

            ]);
        $gruop = GroupCustomers::find($request->ennidlistpro);
        $gruop->listname = $request->elistname;
        $gruop->listnumber = $request->ennnumber;
        if($request->hasFile('ennavatarfile')){
            $file = $request->file('ennavatarfile');
            $nameimg = $file->getClientOriginalName(); 
            $hinh = "imageEnzi".str_random(6)."_".$nameimg;
            while(file_exists("public/img/customers/".$hinh))
            {
                $hinh = "imageEnzi".str_random(6)."_".$nameimg;
            }
            $file->move("public/img/customers",$hinh);
            // removefile
            $imgold = $request->ennimguserold;
            if($imgold !="no-img.png"){
                while(file_exists("public/img/customers/".$imgold))
                {
                    unlink("public/img/customers/".$imgold);
                }
            }
            
            $gruop->listimg = $hinh;
        }
        $gruop->save();
        return redirect('admin/customers/listgr')->with('thongbao','sửa thành công');
    }
    public function DeletegrNews(Request $request){
        $cus = Customers::where('idgroup',$request->dennidlistpro)->count();
        if($cus == 0){
            $gruop = GroupCustomers::find($request->dennidlistpro);
            $gruop->delete();
            $imgold = $request->dennimglistpro;
                if($imgold !="no-img.png"){
                    while(file_exists("public/img/customers/".$imgold))
                    {
                        unlink("public/img/customers/".$imgold);
                    }
                }
            return redirect('admin/customers/listgr')->with('thongbao','Xóa thành công');
        }else{
            return redirect('admin/customers/listgr')->with('loi','Xóa không thành công, Bạn cần xóa các khách hàng thuộc nhóm này');

        }
        

    }
    //  Customer ==================================
    public function ListCus(){
        $customers = Customers::where('idgroup','<>',2)->orderBy('id','desc')->get();
        // echo "<pre>";
        // echo $customers;
        // echo "</pre>";
        // exit();
        $grcus = GroupCustomers::all();
        return view('admin.customer.customers',['customers'=>$customers,'group'=>$grcus]);
    }
     public function Listsp(){
        $customers = Customers::where('idgroup',2)->get();
        $grcus = GroupCustomers::all();
        return view('admin.customer.supports',['customers'=>$customers,'group'=>$grcus]);
    }
    public function AddCus(Request $request){
      if(isset($request->type)){
        $type = 'sp';
      } else{
        $type = 'cus';
      }
        session(['actionuser' => 'add']);        
        $this->validate($request,[
                'nnfullname' => 'required',
                'nnmailcus' => 'required',
                'nnaddcus' => 'required',
                'nnphonecus' => 'required|numeric',
                'nnfacebook' => 'required',
                'nnavatarfile' => 'image|max:500000',                
            ],[
                'nnfullname.required' => 'Bạn cần thêm tên khách hàng',
                'nnmailcus.required' => 'Bạn cần thêm email khách hàng',
                'nnphonecus.required' => 'Bạn cần thêm số điện thoại khách hàng',
                'nnaddcus.required' => 'Bạn cần thêm địa chỉ khách hàng',
                'nnfacebook.required' => 'Bạn cần thêm facebook khách hàng hoặc để #',
                'nnphonecus.numeric'     => 'Số điện thoại phải là số',
                'nnavatarfile.image' => 'Avatar phải là hình ảnh',
                'nnavatarfile.max' => 'Avatar dung lượng quá lớn',

            ]);
        $customer = new Customers;
        $customer->idgroup = "1";
        $customer->cusfullname = $request->nnfullname;
        $customer->birthday = $request->nnbirthday;
        $customer->cusemail = $request->nnmailcus;
        $customer->cusphone = $request->nnphonecus;
        $customer->cusaddress = $request->nnaddcus;
        $customer->education = $request->nneducation;
        $customer->language_jp = $request->nnlanguage_jp;
        $customer->language_other = $request->nnLanguageOther;
        $customer->introduce = $request->nnIntroduce;
        $customer->desire = $request->nnDesire;
        $customer->status = "1";
        
        $customer->cusface = $request->nnfacebook;
        $customer->cuspass = "";
        if($request->hasFile('nnavatarfile')){
            $file = $request->file('nnavatarfile');
            $nameimg = $file->getClientOriginalName(); 
            $hinh = "imageEnzi".str_random(6)."_".$nameimg;
            while(file_exists("public/img/customers/".$hinh))
            {
                $hinh = "imageEnzi".str_random(6)."_".$nameimg;
            }
            $file->move("public/img/customers",$hinh);
            $customer->cusimg = $hinh;
        }else{
            $customer->cusimg = "no-img.png";
        }
        $customer->save();
        if($type=='cus') {
        return redirect('admin/customers/list')->with('thongbao','thêm thành công');
      } else {
        return redirect('admin/customers/supports')->with('thongbao','thêm thành công hỗ trợ viên');
      }
    }

    public function EditCus(Request $request){
       if(isset($request->type)){
        $type = 'sp';
      } else{
        $type = 'cus';
      }
      
        session(['actionuser' => 'edit','editid'=>$request->ennidCustomer]);   
        session(['actionuser' => 'add']);        
        $this->validate($request,[
                'ennfullname' => 'required',
                'ennmailcus' => 'required',
                'ennaddcus' => 'required',
                'ennphonecus' => 'required|numeric',
                'ennfacebook' => 'required',
                'ennavatarfile' => 'image|max:500000',                
            ],[
                'ennfullname.required' => 'Bạn cần thêm tên ứng viên',
                'ennmailcus.required' => 'Bạn cần thêm email ứng viên',
                'ennphonecus.required' => 'Bạn cần thêm số điện thoại ứng viên',
                'ennaddcus.required' => 'Bạn cần thêm địa chỉ ứng viên',
                'ennfacebook.required' => 'Bạn cần thêm facebook ứng viên hoặc để #',
                'ennphonecus.numeric'     => 'Số điện thoại phải là số',
                'ennavatarfile.image' => 'Avatar phải là hình ảnh',
                'ennavatarfile.max' => 'Avatar dung lượng quá lớn',

            ]);
        $customer = Customers::find($request->ennidCustomer);
        $customer->cusfullname = $request->ennfullname;
        $customer->sex = $request->ennsex;
        $customer->birthday = $request->ennbirthday;
        $customer->cusemail = $request->ennmailcus;
        $customer->cusphone = $request->ennphonecus;
        $customer->cusaddress = $request->ennaddcus;
        $customer->education = $request->enneducation;
        $customer->language_jp = $request->ennlanguage_jp;
        $customer->language_other = $request->ennLanguageOther;
        $customer->introduce = $request->ennIntroduce;
        $customer->desire = $request->ennDesire;
        $customer->status = "1";
        $customer->cusface = $request->ennfacebook;
        // $customer->cuspass = "phongst";
        if($request->hasFile('ennavatarfile')){
            $file = $request->file('ennavatarfile');
            $nameimg = $file->getClientOriginalName(); 
            $hinh = "imageEnzi".str_random(6)."_".$nameimg;
            while(file_exists("public/img/customers/".$hinh))
            {
                $hinh = "imageEnzi".str_random(6)."_".$nameimg;
            }
            $file->move("public/img/customers",$hinh);
            // removefile
            $imgold = $request->ennimguserold;
            if($imgold !="no-img.png" && ($imgold !='')){
                while(file_exists("public/img/customers/".$imgold))
                {
                    unlink("public/img/customers/".$imgold);
                }
            }
            
            $customer->cusimg = $hinh;
        }
        $customer->save();
        if($type=='cus') {
          return redirect('admin/customers/list')->with('thongbao','sửa thành công');
        } else {
          return redirect('admin/customers/supports')->with('thongbao','sửa thành công thông tin hỗ trợ viên');
        }
    }

    public function DeleteCus(Request $request){
      $cus = Customers::find($request->dennidCustomer);
      $cus->delete();
      $imgold = $request->dennimgCustomer;
          if($imgold !="no-img.png" && ($imgold!='')){
              while(file_exists("public/img/customers/".$imgold))
              {
                  unlink("public/img/customers/".$imgold);
              }
          }
      if( $cus->idgroup ==1){
        return redirect('admin/customers/list')->with('thongbao','Xóa thành công');
      } else {
        return redirect('admin/customers/supports')->with('thongbao','Xóa thành công hỗ trợ viên');
      }
        

    }
    
    
        // feedback===============================
    public function feedback(){
      $feedback = Contactus::all();
      return view('admin.customer.feedback',['feedback'=>$feedback]);
    }
    public function DelFeedback(Request $request){
        $con = Contactus::find($request->dennidCustomer);
        $con->delete();
        return redirect('admin/customers/feedback')->with('thongbao','Xóa thành công');
    }

    public function send_mail_reset_pass(){
      return view('customer.email');
    }

    public function post_send_mail_reset_pass(Request $request){
      $customer = Customers::where('cusemail',$request->email)->first();
      if($customer!=null){
        $checkExistInPasswordReset = PasswordReset::where('email',$customer->cusemail)->first();

        if($checkExistInPasswordReset != null){
          //If exist then update
          $passwordReset = PasswordReset::where('email',$customer->cusemail)->update(
            ['token' => str_random(60)]
          );

        }
        else{
          //If not exist then create
          $passwordReset = PasswordReset::create(array('email' => $customer->cusemail, 'token' => str_random(60)));
        }

        //Finish Create or update then Send mail
        //Select email, token from PasswordReset after Created, Updated
        $select = PasswordReset::where('email',$customer->cusemail)->first();
        $mail = $select->email;
        $token = $select->token;
        $content = url('').'/password/reset/'.$token;

        Mail::send('customer.maildb', array('email'=>$mail,'content'=>$content), function($message) use ($mail){
          $message->to($mail, 'Visitor')->subject('Password Reset Mail!');
        });
        return redirect()->route('send-mail-reset-pass')
            ->with('status','We have e-mailed your password reset link!');
      }else{
        echo "<script type='text/javascript'>alert('Không tồn tại mail bạn đã nhập');</script>";
        return view('customer.email');
      }
    }

    public function showResetForm($token){
      return view('customer.reset',['token'=>$token]);
    }

    public function resetPass(Request $request){
      $this->validate(request(), [
          'email' => 'required|email',
          'password' => 'required|confirmed'
      ]);
      $token = $request->token;
      $mail = $request->email;
      $passwordReset = PasswordReset::where('token', $token)->where('email', $mail)->firstOrFail();
      if(Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()){
        $delete = PasswordReset::where('token', $token);
        $delete->delete();
        return response()->json([
          'message' => 'This password reset token is invalid.',
        ],422);
      }
      $customer = Customers::where('cusemail',$passwordReset->email)->firstOrFail();
      $updatePasswordCustomer = $customer->where('cusemail',$request->email)->update(['cuspass' => sha1($request->password)]);
      $delete = PasswordReset::where('token', $token);
      $delete->delete();
      return redirect()->route('login')
            ->with('status','Password reset success!');
    }
}
