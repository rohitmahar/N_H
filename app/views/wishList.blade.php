@extends('layouts.plain2')

@section('content')

        <div class="col-md-8" style="margin-left: 15%;">
						<ul class="sub-icon1 list">
						  <h3>Recently added items ({{ count($userCarts) }})</h3>

						 </ul>
						   <?php
						   $totalcost = 0;
                            ?>

						  @foreach($userCarts as $product )
						  <div class="shopping_cart">
							  <div class="cart_box">
							   	 <div class="message">
							   	     <a href="{{URL::route('remove_product', $product->id)}}" class="btn1 btn2 btn-primary1"><span>Delete product</span></a>

					                <div class="list_img">
					                    {{ HTML::image($product->location, null, ['alt' => '', 'class' => 'img-responsive']) }}
					                </div>
								    <div class="list_desc"><h4><a>{{ $product->name}}</a></h4><span class="actual">
		                             Price : {{ $product->price}}</span></div>
		                             <?php
		                             $totalcost = $totalcost + $product->price;
		                             ?>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>

	                        </div>
	                      @endforeach
	                        <div class="total">
	                        	<div class="total_left">CartSubtotal : </div>
	                        	<div class="total_right">Nrs.{{$totalcost}}</div>
	                        	<div class="clearfix"> </div>
	                        </div>










@stop