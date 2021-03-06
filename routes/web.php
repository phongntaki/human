<?php

Route::get('/',['as'=>'index','uses'=>'HomeController@index']);
Route::get('/loai-tin/{slug}',['as'=>'list_news','uses'=>'HomeController@list_news']);
Route::get('/chi-tiet/{slug}',['as'=>'news','uses'=>'HomeController@news']);
Route::get('/user',['as'=>'pay','uses'=>'HomeController@user']);
Route::get('/error_404',['as'=>'error_404','uses'=>'HomeController@error_404']);
Route::get('/not_found_content',['as'=>'not_found_content','uses'=>'HomeController@not_found_content']);

Route::get('/ok',['as'=>'ok','uses'=>'HomeController@ok']);
Route::get('/register', 'HomeController@register');
Route::post('register',['as'=>'register','uses'=>'HomeController@postRegister']);
Route::get('/login', 'HomeController@login');
Route::post('login',['as'=>'login','uses'=>'HomeController@postLogin']);
Route::get('/logout', 'CustomerController@logout');


Route::get('loadmoremod', ['as' => 'loadmoremod', 'uses' => 'HomeController@loadmore_news_in_mod']);
Route::get('loadmorelist', ['as' => 'loadmorelist', 'uses' => 'HomeController@loadmore_news_in_list']);

Route::get('search', ['as' => 'search', 'uses' => 'HomeController@search']);
Route::get('tags/{tag}', ['as' => 'tags', 'uses' => 'HomeController@tags']);

Route::get('lien-he', ['as' => 'lien_he', 'uses' => 'HomeController@lien_he']);
Route::post('lien-he', ['as' => 'lien_he', 'uses' => 'HomeController@post_lien_he']);
Route::get('mail/send', 'MailController@send');
Route::get('gioi-thieu', ['as' => 'gioi_thieu', 'uses' => 'HomeController@gioi_thieu']);
Route::get('hinh-thanh', ['as' => 'hinh_thanh', 'uses' => 'HomeController@hinh_thanh']);
Route::get('linh-vuc', ['as' => 'linh_vuc', 'uses' => 'HomeController@linh_vuc']);
Route::get('my-profile', ['as' => 'my_profile', 'uses' => 'HomeController@my_profile']);
Route::post('my-profile', ['as' => 'my_profile', 'uses' => 'HomeController@post_my_profile']);

// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset.token');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('send-mail-reset-pass', ['as' => 'send-mail-reset-pass', 'uses' => 'CustomerController@send_mail_reset_pass']);
Route::post('send-mail-reset-pass', ['as' => 'send-mail-reset-pass', 'uses' => 'CustomerController@post_send_mail_reset_pass']);
Route::get('password/reset/{token}', 'CustomerController@showResetForm')->name('password.reset.token');
Route::post('password/reset', 'CustomerController@resetPass')->name('password.reset');

Route::get('/login_social/{provider?}/{page_return?}', 'CustomerController@login_social');
Route::get('/login/redirect/{provider?}', 'CustomerController@login_redirect');
Route::get('/login/callback/{provider?}', 'CustomerController@login_callback');
 

Route::get('select_distict_ajax',['as'=>'select_distict_ajax', 'uses'=>'HomeController@select_distict_ajax']);
Route::get('select_ward_ajax',['as'=>'select_ward_ajax', 'uses'=>'HomeController@select_ward_ajax']);

Route::get('login_ajax',['as'=>'login_ajax', 'uses'=>'HomeController@login_ajax']);
Route::get('register_ajax',['as'=>'register_ajax', 'uses'=>'CustomerController@register_ajax']);
Route::get('order_not_account',['as'=>'order_not_account', 'uses'=>'HomeController@order_not_account']);
Route::get('save_custommer_info',['as'=>'save_custommer_info', 'uses'=>'CustomerController@save_custommer_info']);
Route::get('save_custommer_address',['as'=>'save_custommer_address', 'uses'=>'CustomerController@save_custommer_address']);
Route::get('save_custommer_pass',['as'=>'save_custommer_pass', 'uses'=>'CustomerController@save_custommer_pass']);
Route::get('save_contact',['as'=>'save_contact', 'uses'=>'HomeController@save_contact']);
Route::get('get_post_ajax',['as'=>'get_post_ajax', 'uses'=>'HomeController@get_post_ajax']);

// ==============*********************++++++++++++++++++++***********************

Route::get('mail', 'Controller@mail');
Route::get('setlocale/{locale}','Controller@Setlocale');


Route::group(['middleware' => 'locale'], function(){
    Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('user.change-language');
});

Route::get('auth/login','UserController@GetLoginAdmin');
Route::post('auth/login','UserController@PostLoginAdmin');

Route::group(['prefix'=>'admin','middleware'=>'controller'],function(){
    // Route::get('/','OrderController@HomeAdmin');
    Route::get('/','NewsController@ListNews');

    Route::group(['prefix'=>'auth'],function(){
        Route::get('logout','UserController@GetLogoutAdmin');
        Route::post('changepass','UserController@ChangePassAdmin');

    });
    Route::group(['prefix'=>'contact'],function(){
        Route::get('/','LanguageController@getContactEdit');
        Route::post('/','LanguageController@postContactEdit'); 
    });
    Route::group(['prefix'=>'maketing'],function(){
        Route::get('list','MakettingController@ListMaketting');
        Route::post('list','MakettingController@AddMaketting');
        Route::post('list/edit','MakettingController@EditMaketting');
        Route::post('sendmail','MakettingController@sendmail'); 
    });
    Route::group(['prefix'=>'user'],function(){
        Route::get('listuser','UserController@ListUser');
        Route::post('listuser','UserController@AddUserAdmin');
        Route::post('listuser/edit','UserController@EditUserAdmin'); 
        Route::post('listuser/delete','UserController@DeleteAdmin'); 
    });
    Route::group(['prefix'=>'lang'],function(){
        Route::get('list','LanguageController@ListLang');
        Route::post('list','LanguageController@AddLang');
        Route::post('list/edit','LanguageController@EditLang'); 
    });
    Route::group(['prefix'=>'advert'],function(){
        Route::get('list','AdvertController@ListAdvert');
        Route::post('list','AdvertController@AddAdvert');
        Route::post('list/edit','AdvertController@EditAdvert'); 
        Route::post('list/delete','AdvertController@DeleteAdvert'); 
    });
    Route::group(['prefix'=>'slide'],function(){
        Route::get('list','SlideController@ListSlide');
        Route::post('list','SlideController@AddSlide');
        Route::post('list/edit','SlideController@EditSlide'); 
        Route::post('list/delete','SlideController@DleteSlide'); 
    });
    Route::group(['prefix'=>'specialgroup'],function(){
        Route::get('list','SpecialGroupController@ListGroup'); 
        Route::get('list/edit','SpecialGroupController@EditGroup');
    });
    Route::group(['prefix'=>'socical'],function(){
        Route::get('list','SocicalController@ListSocical');
        Route::post('list','SocicalController@AddSocical');
        Route::post('list/edit','SocicalController@EditSocical'); 
        Route::post('list/delete','SocicalController@DeleteSocical'); 
    });
    Route::group(['prefix'=>'modnews'],function(){
        Route::get('list','ModNewsController@ListModNews');
        Route::post('list','ModNewsController@AddModNews');
        Route::post('list/edit','ModNewsController@EditModNews'); 
        Route::post('list/delete','ModNewsController@DeleteModNews'); 
    });
    Route::group(['prefix'=>'listnews'],function(){
        Route::get('list','ListNewController@List2News');
        Route::post('list','ListNewController@AddListNews');
        Route::post('list/edit','ListNewController@EditListNews'); 
        Route::post('list/delete','ListNewController@DeleteListNews'); 
    });
    Route::group(['prefix'=>'news'],function(){
        Route::get('listnews/{idmod}','NewsController@GetListNews');
        Route::get('list','NewsController@ListNews');
        Route::post('list','NewsController@AddNews');
        Route::post('list/edit','NewsController@EditNews'); 
        Route::post('list/delete','NewsController@DeleteNews'); 
    });
    Route::group(['prefix'=>'customers'],function(){
        Route::get('listgr','CustomerController@ListgrNews');
        Route::post('listgr','CustomerController@AddgrNews');
        Route::post('listgr/edit','CustomerController@EditgrNews'); 
        Route::post('listgr/delete','CustomerController@DeletegrNews'); 
        Route::get('list','CustomerController@ListCus');
        Route::get('supports','CustomerController@Listsp');
        Route::post('list','CustomerController@AddCus');
        Route::post('list/edit','CustomerController@EditCus'); 
        Route::post('list/delete','CustomerController@DeleteCus'); 
        Route::get('profile/{id}','CustomerController@ProfileCus');
                
        Route::get('feedback','CustomerController@Feedback');
        Route::post('feedback/delete','CustomerController@DelFeedback');
    });
});
