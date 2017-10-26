<?php

class Payment extends Eloquent{
    protected $table = 'deliveries';
    protected $fillable = ['user_id', 'payment_method'];

    public function users(){
        return $this->belongsTo('User')->withTimestamps();
    }



}