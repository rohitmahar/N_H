@extends('layouts.adminMaster')

@section('content')

<section id="main-content">
             <section class="wrapper site-min-height" style="background-color:#fff; margin-left:18%; margin-top:3%; ">
             	<div class="col-md-5" style="margin-left: 20%">
 {{ Form::model(Auth::user(),[
 'route' => 'setting-post',
 'class' => 'form-horizontal'
 ]) }}

 @if(Session::has('message'))
 {{ Session::get('message') }}
 @endif


 <fieldset>

  <!-- Form Name -->
  <legend>Edit Profile</legend>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="first_name">First Name</label>
    <div class="col-md-6">
      {{ Form::text('first_name', null, ['id' => 'first_name', 'class' => 'form-control input-md', 'placeholder' => 'FIrst Name']) }}
      {{ $errors->first('first_name', '<code>:message</code>') }}
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="last_name">Last Name</label>
    <div class="col-md-6">
      {{ Form::text('last_name', null, ['id' => 'last_name', 'class' => 'form-control input-md', 'placeholder' => 'Last Name']) }}

      {{ $errors->first('last_name', '<code>:message</code>') }}
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="address">Address</label>
    <div class="col-md-6">
      {{ Form::text('address', null, ['id' => 'address', 'class' => 'form-control input-md', 'placeholder' => 'address']) }}

      {{ $errors->first('address', '<code>:message</code>') }}
    </div>
  </div>


  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-4">
      <input type="submit" value="Update"  class="btn btn-primary"/>
    </div>
  </div>

</fieldset>

{{ Form::close() }}

<div class="col-md-12">

{{ Form::model(Auth::user(),[
  'route' => 'setting-post',
  'class' => 'form-horizontal'
  ]) }}


  @if(Session::has('message'))
  {{ Session::get('message') }}
  @endif

  <div >

    <!-- currentpassword input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="password_confirmation">Enter Current Password</label>
      <div class="col-md-6">
        {{ Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => 'form-control input-md', 'placeholder' => 'Current password']) }}

        {{ $errors->first('password', '<code>:message</code>') }}
      </div>
    </div>

   <!-- new Password input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="password">Enter new Password</label>
      <div class="col-md-6">
       {{ Form::password('password',  ['id' => 'password', 'class' => 'form-control input-md', 'placeholder' => 'New Password']) }}

     </div>
   </div>

   <div class="form-group">
         <label class="col-md-4 control-label" for="password_confirmation">Retype Password</label>
         <div class="col-md-6">
          {{ Form::password('password_confirmation',  ['id' => 'password_confirmation', 'class' => 'form-control input-md', 'placeholder' => 'Retype Password']) }}

        </div>
   </div>

   <!-- Button -->
     <div class="form-group">
       <label class="col-md-4 control-label" for="submit"></label>
       <div class="col-md-4">
         <input type="submit" value="Update Password"  class="btn btn-primary"/>
       </div>
     </div>
 </div>


 {{Form::close()}}

      	</div>

   		</section><! --/wrapper -->
         </section><!-- /MAIN CONTENT -->


@stop