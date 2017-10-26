<?php

class Delivery extends Eloquent{
    protected $table = 'deliveries';
    protected $fillable = ['address', 'postal_code', 'user_id', 'product_name', 'payment_method', 'status', 'delivery_date'];

    public function users(){
        return $this->belongsTo('User')->withTimestamps();
    }

    public function product(){
        return $this->belongsToMany('Product')->withTimestamps();
    }

}