@extends('layouts.plain2')

@section('content')

      {{ Form::open([
      'route' => 'login-post',
      'class' => 'form-login'
      ]) }}

      @if(Session::has('message'))
      {{ Session::get('message')}}
      @endif




      <div class="single_top">
      	 <div class="container">
      	    <div class="register">
      			  <div class="col-md-6 login-right">
      			  	<h3>REGISTERED CUSTOMERS</h3>
      				<p>If you have an account with us, please log in.</p>

      				  <div>
      					<span>Email Address<label for="email">*</label></span>
      					    {{ Form::text('email', null, ['id' => 'email', 'placeholder' => 'Enter Your email']) }}
                            {{ $errors->first('email', '<code>:message</code>') }}
      				  </div>
      				  <div>
      					<span>Password<label for="password">*</label></span>
      					    {{ Form::password('password', ['id' => 'password', 'class' => 'password', 'placeholder' => 'Enter Your password']) }}
                            {{ $errors->first('password', '<code>:message</code>') }}
      				  </div>


      				   

      			    <div class="clearfix" style="margin-top: 20px;"> </div>
      			    <a class="forgot" href="#">Forgot Your Password?</a>
      			                            @if(isset($url))
                                                <input type="hidden" name="prev_url" value="{{ $url }}">
                                            @endif
                         				  <label for="submit"></label>
                          				    <input type="submit" value="Login">

      			   </div>
      			    <div class="col-md-6 login-left">
      			  	 <h3>NEW CUSTOMERS</h3>
      				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
      				 <a class="acount-btn" href="{{URL::Route('register-form')}}">Create an Account</a>
      			   </div>
      			   <div class="clearfix"> </div>
      		</div>
           </div>
      </div>



      {{ Form::close() }}
@stop


<div class="top-menu">
            	<ul class="nav pull-right top-menu">
            	 @if(Auth::check())
                        <li><a href="{{ URL::route('logout') }}">Logout</a></li>
                 @endif
            	</ul>
            </div>