@extends('layouts.plain2')

@section('content')

<?php
$delivery = delivery::first();

?>


<div class="container" style="margin-top: 5%;">

<h1 style="text-align: center;">Your Order has been received.</h1>
<h2 style="text-align: center;">Thank you for your purchase!</h2>
<h2 style="text-align: center;">Your order id is: {{$delivery->id}}</h2>
<h3 style="text-align: center;">You will receive an order confirmation email details of your order.</h3>


<a href="{{URL::route('all-product')}}" class="btn1 btn2 btn-primary1" style=" float: right;  margin-top: 5%;"><span>Continue Shopping</span></a>
</div>

@stop