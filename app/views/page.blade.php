@extends('layouts.plain')

@section('content')

    	<div class="col-md-9 w_content">
    		<div class="women">
    			<a href="#"><h4><span>{{ count($products) }}</span> - products found </h4></a>

    		     <div class="clearfix"></div>
    		</div>
    		<!-- grids_of_4 -->
    		<div class="margin-adjust">
    		{{$products->links()}}
            </div>
        <div class="row">
            @foreach($products as $product)

                <div class="col-md-3">

                    <div class="panel panel-default">
                        <div class="content_box" style="height: 350px;">
                            <div class="view view-fifth" style="height: 235px;">
                                <a href="{{URL::route('productDetail',$product->id)}}">
                                    {{ HTML::image($product->location, null, ['alt' => '', 'class' => 'adjust-image']) }}

                                </a>
                            </div>



                            <div class="view view-fifth" style="height: 165px">
                            <h5>
                                <a href="{{URL::route('productDetail',$product->id)}}">
                                    {{ $product->name}}
                                </a>
                            </h5>

                            <h6>NRs. {{$product->price}}</h6>
                            </div>
                        </div>
                    </div>

                </div>



            @endforeach

                <div class="clearfix"></div>
                	<div class="margin-adjust">
                	    {{$products->links()}}
                	</div>
            </div>


    	</div>

    	    </div>
    	</div>
@stop
