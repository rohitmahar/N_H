@extends('layouts.plain')

@section('content')

    	<div class="col-md-9 w_content">
    		<div class="women">
    			<a href="#"><h4><span>{{ count($products) }}</span> - products found </h4></a>
    			<ul class="w_nav">
    						<li>Sort : </li>
    		     			<li><a class="active" href="#">popular</a></li> |
    		     			<li><a href="#">new </a></li> |
    		     			<li><a href="#">discount</a></li> |
    		     			<li><a href="#">price: Low High </a></li>
    		     			<div class="clear"></div>
    		     </ul>
    		     <div class="clearfix"></div>
    		</div>
    		<!-- grids_of_4 -->
    		{{$products->links()}}

        <div class="row">
            @foreach($products as $product)



                <div class="col-md-3">

                    <div class="panel panel-default">
                        <div class="content_box" style="height: 400px;">
                            <div class="view view-fifth" style="height: 235px;">
                                <a href="{{URL::route('productDetail',$product->id)}}">
                                    {{ HTML::image($product->location, null, ['alt' => '', 'class' => 'adjust-image']) }}
                                    <div class="mask1">
                                        <div class="info"> </div>
                                    </div>
                                </a>
                            </div>




                            <h5>
                                <a href="{{URL::route('productDetail',$product->id)}}">
                                    {{ $product->name}}
                                </a>
                            </h5>
                            <h6>{{$product->detail}}</h6>
                            <h6>Nrs. {{$product->price}}</h6>
                        </div>
                    </div>

                </div>



            @endforeach




    	        <div class="clearfix"></div>
    	        {{$products->links()}}

    	    </div>
        </div>
    </div>
</div>
@stop

