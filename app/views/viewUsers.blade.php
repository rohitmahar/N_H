
@extends('layouts.adminMaster')

@section('content')



<section class="content" style="margin-left:18%; ">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">All User Details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>


    @foreach($users as $user)


      <tr>
        <td>{{$user->id}}</td>
        <td>{{ucfirst($user->first_name)}}</td>
        <td>{{ucfirst($user->last_name)}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->phone_no}}</td>
        <td>{{$user->email}}</td>


      </tr>
    @endforeach

    </tbody>
    </table>
</div>
</div>
</div>
</div>
</section>


@stop

