<?php


class CartController  extends BaseController{

    public function addToCart($productId){

        $product = Product::find($productId);

        $product->users()->attach(Auth::user()->id);

        return Redirect::back();


    }

    public function displayCart(){

        $user = Auth::user();
        $userCarts = $user->products;

        return View::make('carts', compact('userCarts'));

    }


    public function addToWishList($productId){

        $product = Product::find($productId);

        $product->users()->attach(Auth::user()->id);

        return Redirect::back();


    }

    public function displayWishList(){

        $user = Auth::user();
        $userWishList = $user->products;

        return View::make('wishList', compact('userWishList'));

    }


} 