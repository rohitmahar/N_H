@extends('layouts.adminMaster')

@section('content')
   <!-- **********************************************************************************************************************************************************
         MAIN CONTENT
         *********************************************************************************************************************************************************** -->
         <!--main content start-->
         <div class="col-md-6" style="margin-left: 33%; margin-top: 3%;">
                             <!-- general form elements -->
                             <div class="box box-primary">
                               <div class="box-header with-border">
             	    {{ Form::open([
                                             'route' => 'uploadBrand-post',
                                             'class' => 'form-horizontal',

                                             ]) }}

                                             @if(Session::has('message'))
                                             {{ Session::get('message') }}
                                             @endif
                                      <fieldset>


                                      <!-- Form Name -->
                                      <legend>Upload  Brand</legend>

                                      <!-- Text input-->
                                      <div class="control-group">
                                        <label class="control-label" for="name">Brand Name</label>
                                        <div class="controls">
                                        {{ Form::text('name', null, ['id' => 'name', 'class' => 'form-control input-mexdium', 'placeholder' => 'Enter Product name']) }}
                                        {{ $errors->first('name', '<code>:message</code>') }}


                                        </div>
                                      </div>

                                      <div class="form-group">
                                         <label class="col-md-2 control-label" for="submit"></label>
                                          <div class="col-md-4">
                                              <input type="submit" value="upload"  class="btn btn-primary"/>
                                          </div>
                                      </div>
                    </fieldset>
                    {{ Form::close() }}
                </div>
            </div>
            </div>
   @stop