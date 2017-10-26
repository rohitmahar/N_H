<?php

class Product extends Eloquent{
    protected $fillable = ['name','code', 'brand', 'detail', 'price', 'location'];

    public function getall(){

        return Product::all();

    }

    public function users(){
        return $this->belongsToMany('User')->withTimestamps();
    }



}