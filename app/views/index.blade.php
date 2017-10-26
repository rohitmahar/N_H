@extends('layouts.plain2')

@section('content')






<div class="image" style="width: 100%; , length:400px;" >
  
<img src="assets\buyShop\images\pick.jpg" style="width: 100%; , length:400px;" />
    		


    			<div class="button">
    			      <a href="{{URL::Route('all-product')}}" class="hvr-shutter-out-horizontal">Shop Now</a>
    			    </div>

</div>
<div class="clearfix"></div>



	<h3 class="m_2 women">Latest Products</h3>
        <div style="margin-left: 42%">
            {{$products->links()}}
        </div>
	<div class="container" style="margin-left: 8%">

	   @foreach($products as $product)

						<div class="col_1_of_3">
							<div class="shop-holder">
		                         <div class="product-img" style="height:250px;">
		                            <a href="{{URL::route('productDetail',$product->id)}}">
		                                {{ HTML::image($product->location, null, ['alt' => '', 'class' => 'adjust-image-index']) }}
		                               		                            </a>
		                            <a href="{{URL::route('productDetail',$product->id)}}" class="button "></a>
		                         </div>
		                    </div>

                            <div class="shop-holder" style="width: 206px; height: 65px; text-align: center;">
		                            <h5>
                                        <a href="{{URL::route('productDetail',$product->id)}}">
                                        {{ $product->name}}
                                        </a>
                                    </h5>

                                    <h6>NRs. {{$product->price}}</h6>
		                    </div>
						</div>


	   @endforeach
	   <div class="clearfix"></div>
    </div>

@stop