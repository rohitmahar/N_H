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
							   	     <a onclick="return confirm('Are you sure you want to Remove?');" href="{{URL::route('remove_product' ,  $product->id)}}"><span>Delete product</span></a>

					                <div class="list_img">
					                    {{ HTML::image($product->location, null, ['alt' => '', 'class' => 'img-responsive']) }}
					                </div>
								    <div class="list_desc"><h4><a>{{ $product->name}}</a></h4><span class="actual" >
		                             Price : Rs. {{ $product->price}}</span></div>
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


	                         <div class="col-md-10" style="margin-top: 2%; ">
	                         <h3>Delivery Adddress Details</h3>
                                   {{ Form::open([
                                   'route' => 'delivery-post',
                                   'class' => 'form-horizontal'
                                   ]) }}
                                   <?php $productName = ''; ?>
                                   @foreach($userCarts as $product)
                                        <?php
                                        $productName = $productName . $product->name .',';
                                        ?>
                                   @endforeach



                                   @if(Session::has('message'))
                                   {{ Session::get('message') }}
                                   @endif




                                   <fieldset style=" margin-left:15%;">


                                    <!-- Form Name -->
                                    <legend>Delivery Address
                                    <span>


                                        <input type="checkbox" name="delivery_address" id="delivery_address" >
                                    </span>
                                        Same as Registration Address</legend>


                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="address">Address</label>
                                      <div class="col-md-4">
                                        {{ Form::text('address', null, ['id' => 'address', 'class' => 'form-control input-md', 'placeholder' => 'address']) }}

                                        {{ $errors->first('address', '<code>:message</code>') }}
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                       <div class="form-group">
                                       <label class="col-md-4 control-label" for=postal_code>Zip/Postal Code</label>
                                            <div class="col-md-4">
                                                {{ Form::text('postal_code', null, ['id' => 'postal_code', 'class' => 'form-control input-md', 'placeholder' => '']) }}
                                                 {{ $errors->first('postal_code', '<code>:message</code>') }}
                                            </div>
                                        </div>

                                        <div class="col-md-10" style="margin-top: 2%; margin-bottom: 4%;">
                                                                     <h3>Payment Method</h3>

                                                                      <select name="payment_method">
                                                                         <option value="cash_on_delivery">Cash On Delivery</option>
                                                                         <option value="bank_Transfer">Bank Transfer(Chqeue)</option>

                                                                      </select>

                                                                  </div>

                                         <!-- Button -->
                                                   <div class="form-group">
                                                     <label class="col-md-2 control-label" for="submit"></label>
                                                     <div class="col-md-4">
                                                       <input type="submit" value="submit"  class="btn btn-primary"/>
                                                     </div>
                                                   </div>

                                    <Input type="text"  name="product_name" value="{{$productName}}"/>
                                  {{ Form::close() }}
                                  </fieldset>
                                </div>




                           <div class="clearfix"></div>
                            <div class="login_buttons">
							  <div class="check_button"><a href="{{URL::Route('all-product')}}">Continue Shopping</a></div>

							  <div class="login_button"><a href="{{URL::Route('orders')}}">Proceed To Checkout</a></div>

							  <div class="clearfix"></div>
						    </div>
					      <div class="clearfix"></div>
						</ul>
				       </div>







@stop