@extends('layouts.adminMaster')

@section('content')
   <div class="col-md-6" style="margin-left: 33%; margin-top: 3%;">
                    <!-- general form elements -->
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">Upload Product</h3>
                      </div><!-- /.box-header -->
             	    {{ Form::open([
                                             'route' => 'uploadProduct-post',
                                             'class' => 'form-horizontal',
                                             'enctype'   => 'multipart/form-data'
                                             ]) }}

                                             @if(Session::has('message'))
                                             {{ Session::get('message') }}
                                             @endif
                                      <fieldset>





                                      <!-- Text input-->
                                      <div class="control-group">
                                        <label class="control-label" for="name">Product Name</label>
                                        <div class="controls">
                                        {{ Form::text('name', null, ['id' => 'name', 'class' => 'form-control input-mexdium', 'placeholder' => 'Enter Product name']) }}
                                        {{ $errors->first('name', '<code>:message</code>') }}


                                        </div>
                                      </div>

                                      <!-- Text input-->
                                          <div class="control-group">
                                           <label class="control-label" for="code">Product Code</label>
                                           <div class="controls">
                                           {{ Form::text('code', null, ['id' => 'code', 'class' => 'form-control input-mexdium', 'placeholder' => 'Enter Product code']) }}
                                           {{ $errors->first('code', '<code>:message</code>') }}


                                           </div>
                                         </div>

                                      <!-- Text input-->


                                      <div class="control-group">
                                        <label class="control-label" for="brand">Brand</label>
                                        <div class="controls">
                                          <select id="brand" name="brand" class="input-large">
                                            @foreach (brand::all() as $brand)
                                                <option>{{$brand->name}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>










                                      <!-- Text input-->
                                      <div class="control-group">
                                        <label class="control-label" for="price">Price</label>
                                        <div class="controls">
                                           {{ Form::text('price', null, ['id' => 'price', 'class' => 'form-control input-mexdium', 'placeholder' => 'Enter Product price']) }}
                                           {{ $errors->first('price', '<code>:message</code>') }}


                                        </div>
                                      </div>

                                      <!-- Textarea -->
                                      <div class="control-group">
                                        <label class="control-label" for="detail">Details</label>
                                        <div class="controls">
                                          {{ Form::textarea('detail', null, ['id' => 'detail', 'class' => 'form-control input-mexdium', 'placeholder' => 'Enter Product Detail']) }}
                                          {{ $errors->first('detail', '<code>:message</code>') }}

                                        </div>
                                      </div>

                                       <div class="control-group">
                                            <label class="control-label" for="image">Product Image</label>
                                            <div class="controls">
                                                <input type="file"  class="btn btn-theme04" name="image"/>
                                                {{ $errors->first('image', '<code>:message</code>') }}
                                            </div>
                                        </div>

                                      <!-- Button -->

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

@stop


