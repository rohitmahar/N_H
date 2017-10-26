<?php

 class Category extends Eloquent{
     protected $table = 'categories';
     protected $fillable = ['name'];

     public function products(){
         return $this->belongsToMany('Product')->withTimestamps();
     }

 }