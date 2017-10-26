<!-- start sidebar -->

 <div class="container">
 <div class="women_main">


	<div class="col-md-3">
	  <div class="w_sidebar">

		<section class="sky-form">
					<h4>Products</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">

							    <?php
							    $brands = Brand::all();
							    ?>

							    @foreach($brands as $brand)
							        <label class="checkbox"><a href="{{URL::route('brand', $brand->name)}}">{{ ucfirst($brand->name)  }}</a></label>
							    @endforeach

							</div>
						</div>
		</section>


	  </div>
   </div>
