@extends('layouts.plain2')

@section('content')
<div class="single_top">
	 <div class="container">
	      <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>

							    {{ HTML::image($product->location, null, ['alt' => '', 'class' => 'etalage_thumb_image img-responsive']) }}
							    {{ HTML::image($product->location, null, ['alt' => '', 'class' => 'etalage_source_image img-responsive']) }}

							</li>
							{{--<li>--}}
								{{--<img class="etalage_thumb_image" src="assets/buyShop/images/s3.jpg" class="img-responsive"  />--}}
								{{--<img class="etalage_source_image" src="assets/buyShop/images/s3.jpg"class="img-responsive"  />--}}
							{{--</li>--}}

						</ul>
						 <div class="clearfix"></div>
				  </div>


				  <div class="desc1 span_3_of_2">
				  	<ul class="back">
                	  <li><i class="back_arrow"> </i><a href="{{URL::route('all-product')}}"><h4>Back</h4></a></li>
                    </ul>

					<h1>{{$product->name}}</h1>
					<ul class="price_single">
					  <li class="head"><h2>Rs. {{$product->price}}</h2></li>

					  <div class="clearfix"></div>
					</ul>
					<p>{{$product->detail}}</p>
				     <div class="dropdown_top">


						 <div class="clearfix"></div>
			         </div>

			         @if(Auth::check())
			            {{--if logged in--}}
			            <a href="{{URL::route('cart', $product->id)}}" class="btn1 btn2 btn-primary1"><span>Add To Cart</span></a>

				     @else
				        {{--if not logged in--}}
				        <a href="{{URL::route('login-form')}}" class="btn1 btn2 btn-primary1"><span>Login Required to add To Cart</span></a>
				     @endif

				</div>


          	    <div class="clearfix"></div>
          	   </div>

   </div>

@stop