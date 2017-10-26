<div class="header_top">
	<div class="container">
         <div class="cssmenu">
			<ul>
			    @if(Auth::check())
                	{{--if logged in--}}
                    <a href="{{URL::route('delivery')}}" class="ative">My Account</a>
                @else
                    {{--if not logged in--}}
                    <a href="{{URL::route('login-form')}}" class="active">Login</a>
                @endif

			</ul>
		 </div>
	</div>
</div>
<div class="wrap-box"></div>
<div class="header_bottom">
	    <div class="container" style="background: #d3d3d3;">
			<div class="col-xs-9 header-bottom-left">
				<div class="col-xs-3 logo">
					<h1><a href="{{URL::Route('index')}}"><span>Naasla </span>Handicraft</a></h1>
				</div>
				<div class="col-xs-7 menu">
		            <ul class="megamenu skyblue" style="width:150%;">

		             <?php
                    	$brands = Brand::all();
                    ?>
                    @foreach($brands as $brand)
                    <li class="grid"><a  class="color4" href="{{URL::route('brand', $brand->name)}}">{{ ucfirst($brand->name)  }}</a></li>
                    							    @endforeach

				    <li><a class="color2" href="{{URL::route('contact')}}">Contact</a></li>
			  </ul>
			</div>
		</div>

		<div class="col-xs-3 header-bottom-right">
        	       <ul class="icon1 sub-icon1 profile_img">
        	                 @if(Auth::check())
        					 <li><a class="active-icon c1" href="{{ URL::route('carts') }} "> </a>
            			     </li>

            			      @endif
        		   </ul>


                     <div class="clearfix"></div>
                  </div>
                <div class="clearfix"></div>
        	 </div>
        </div>