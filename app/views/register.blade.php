@extends('layouts.plain2')

@section('content')

       {{ Form::open([
       'route' => 'register-post',
       'class' => 'form-horizontal'
       ]) }}

       @if(Session::has('message'))
       {{ Session::get('message') }}
       @endif





<div class="single_top">
	 <div class="container">
	     <div class="register">
		  	  <form>
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					 <div>
						<span>First Name<label for="first_name">*</label></span>
						{{ Form::text('first_name', null, ['id' => 'first_name', 'placeholder' => 'First Name']) }}
                        {{ $errors->first('first_name', '<code>:message</code>') }}
					 </div>
					 <div>
						<span>Last Name<label for="last_name">*</label></span>
						{{ Form::text('last_name', null, ['id' => 'last_name', 'placeholder' => 'Last Name']) }}
                        {{ $errors->first('last_name', '<code>:message</code>') }}
					 </div>
					 <div>
						 <span>Address<label for="address">*</label></span>
						 {{ Form::text('address', null, ['id' => 'address', 'placeholder' => 'address']) }}
                         {{ $errors->first('address', '<code>:message</code>') }}
					 </div>

					 <div>
                     <span>Postal Code<label for="postal_code">*</label></span>
                        {{ Form::text('postal_code', null, ['id' => 'postal_code', 'placeholder' => 'Postal code']) }}
                        {{ $errors->first('postal_code', '<code>:message</code>') }}
                     					 </div>

					 <div>
                         <span>Phone Number<label for="phone_no">*</label></span>
                         {{ Form::text('phone_no', null, ['id' => 'phone_no', 'placeholder' => 'phone number']) }}
                         {{ $errors->first('phone_no', '<code>:message</code>') }}
                     </div>

					 <div>
                        <span>Age<label for="age">*</label></span>
                        {{ Form::text('age', null, ['id' => 'age', 'placeholder' => 'age']) }}
                         {{ $errors->first('age', '<code>:message</code>') }}

                     </div>

                     <div>
                        <span>Email Address<label for="email">*</label></span>
                        {{ Form::text('email', null, ['id' => 'email',  'placeholder' => 'email']) }}
                        {{ $errors->first('email', '<code>:message</code>') }}
                     </div>



			     </div>
			     <div class="clearfix"> </div>
				     <div class="register-bottom-grid">
						    <h3>LOGIN INFORMATION</h3>
							 <div>
								<span>Password<label for="password">*</label></span>
								{{ Form::password('password', ['id' => 'password', 'class' => 'password', 'placeholder' => 'password']) }}
                                {{ $errors->first('password', '<code>:message</code>') }}

							 </div>
							 <div>
								<span>Confirm Password<label for="password_confirmation">*</label></span>
								{{ Form::password('password_confirmation',  ['id' => 'password_confirmation', 'class' => 'password', 'placeholder' => 'Retype Password']) }}
							 </div>
							 <div class="clearfix"> </div>
					 </div>
				</form>
				<div class="clearfix"> </div>

				    <label for="submit"></label>

					   <input  class="acount-btn" type="submit" value="Register">
					   <div class="clearfix"> </div>





		   </div>
     </div>
</div>
{{ Form::close() }}

@stop

