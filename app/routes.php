<?php
// ======================= UNAUTHENCTIATED GROUP ROUTES

function pre($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

Route::group(['before' => 'guest'], function(){

    Route::get('register', [
        'as'    => 'register-form',
        'uses'  => 'UserController@register'
    ]);

    Route::get('login', [
        'as'    => 'login-form',
        'uses'  => 'UserController@login'
    ]);




    // CSRF protection group
    Route::group(['before' => 'csrf'], function(){

        Route::post('register-post', [
            'as'    => 'register-post',
            'uses'  => 'userController@registerPost'
        ]);



        Route::post('login-post', [
            'as'    => 'login-post',
            'uses'  => 'UserController@loginPost'
        ]);

    });

});

// =================================== AUTHENTICATED GROUP
Route::group(['before' => 'auth'], function(){

    Route::get('dashboard', [
        'as'    => 'dashboard',
        'uses'  => 'UserController@getDashboard'
    ]);

     

    Route::get('delivery', [
        'as'    => 'delivery',
        'uses'  =>  'PaymentController@delivery'
    ]);

    Route::get('admin', function(){
        return View::make('layouts.adminMaster');
    });

    Route::get('remove_product/{productId}', [
        'as'    => 'remove_product',
        'uses'  => 'ProductController@removeProduct'
    ]);

    Route::get('deleteProduct/{productId}}', [
        'as'    => 'deleteProduct',
        'uses'  => 'ProductController@deleteProduct'
    ]);



    Route::get('viewProduct', function(){
        $products = Product::all();
        return View::make('viewProduct')->with("allProducts", $products);
    });

    Route::get('logout', [
        'as'    => 'logout',
        'uses'  => 'UserController@logout'
    ]);

    Route::get('page', function(){
        return View::make('page');
    });

    Route::get('orders', [
        'as' => 'orders',
        'uses' => 'PaymentController@orders'

    ]);

    Route::get('carts', [
        'as'    => 'carts',
        'uses'  => 'CartController@displayCart'
    ]);

    Route::get('wishList', [
        'as'    => 'wishList',
        'uses'  => 'CartController@displayWishList'
    ]);


    Route::get('upload-products' ,[
        'as'  => 'upload-products',
        'uses' => 'ProductController@uploadProduct'
    ]);

    Route::get('viewUploadedProducts',[
        'as' => 'viewUploadedProducts' ,
        'uses' => 'ProductController@viewUploadedProducts'
    ]);


    Route::get('uploadBrand',[
        'as' => 'uploadBrand',
        'uses'  => 'brandController@uploadBrand'
    ]);

    Route::get('uploadCategory',[
        'as' => 'uploadCategory',
        'uses'  => 'categoryController@uploadCategory'
    ]);



    Route::get('uploadCategory', function(){
        return View::make('uploadCategory');
    });

    Route::get('updateUser', [
        'as'    => 'updateUser',
        'uses'  =>'userController@updateUserPost'
    ]);




    Route::get('Profile', 'UserController@userProfile');

    Route::get('viewUsers',[
        'as' => 'viewUsers',
        'uses' => 'UserController@viewUsers']);



    Route::get('setting', [
        'as'    => 'setting',
        'uses'  =>'userController@setting'
    ]);


    Route::get('cart/{userId}', [
        'as'    => 'cart',
        'uses'  =>  'CartController@addToCart'
    ]);

    Route::get('wishList/{userId}', [
        'as'    => 'wishList',
        'uses'  =>  'CartController@addToWishList'
    ]);




    Route::get('upload-file',[
        'as'    => 'upload-image-form',
        'uses'  => 'FileController@getUploadForm'
    ]);

    Route::post('upload-post',[
        'as'    => 'upload-image',
        'uses'  =>  'FileController@postUploadImage'
    ]);



//    Route::get('delivery/{deliveryId}', [
//        'as'    => 'cart',
//        'uses'  => 'PaymentController@addToDelivery'
//    ]);




//    // CSRF ROUTES
//    Route::group(['before' => 'csrf'], function(){
//
//
//
//    });

    Route::post('uploadProduct-post', [
        'as'    => 'uploadProduct-post',
        'uses'  => 'ProductController@productPost'
    ]);


    Route::post('uploadBrand-post', [
        'as'    => 'uploadBrand-post',
        'uses'  => 'BrandController@brandPost'
    ]);

    Route::post('uploadCategory-post', [
        'as'    => 'uploadCategory-post',
        'uses'  => 'CategoryController@categoryPost'
    ]);



    Route::post('setting-post', [
        'as'    => 'setting-post',
        'uses'  => 'UserController@settingPost'
    ]);

    Route::post('delivery-post', [
        'as'    => 'delivery-post',
        'uses'  => 'PaymentController@deliveryPost'
    ]);







});

Route::get('index', function(){
    return View::make('index');
});


Route::get('template', function(){
    return View::make('layouts.master');
});



Route::get('all-product', [
    'as'    => 'all-product',
    'uses'  => 'ProductController@viewProduct'
]);


Route::get('product-detail/{productId}',[
    'as'    => 'productDetail',
    'uses'  =>  'ProductController@getProduct'

]);

Route::get('brand/{brand}', [
    'as'    => 'brand',
    'uses'  => 'ProductController@viewProductByBrand'
]);

Route::get('size/{size}', [
    'as'    => 'size',
    'uses'  => 'ProductController@viewProductBySize'
]);

Route::get('/', [
    'as'    => 'index',
    'uses'  => 'ProductController@viewLatestProducts'
]);

Route::get('contact', [
    'as'    => 'contact',
    'uses'  =>'userController@contact'
]);



