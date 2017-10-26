@extends('layouts.adminMaster')

@section('content')

    @if(Session::has('message'))
        {{ Session::get('message') }}
    @endif


    <div class="col-md-6" style="margin-left: 33%; margin-top: 3%;">
                        <!-- general form elements -->
                        <div class="box box-primary">
                          <div class="box-header with-border">
                            <h1>Welcome, {{ Auth::user()->first_name.' '.Auth::user()->last_name }}</h1>
                                  @if(Auth::user()->level == 1)
                                             <li><a href="{{ URL::to('all-users') }}">View all users</a></li>
                                  @endif
                          </div>
                        </div>
    </div>



@stop
