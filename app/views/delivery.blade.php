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
                                 <h3 class="box-title">Delivery Details</h3>
                               </div><!-- /.box-header -->

	                  	<div class="content-panel">
	                          <table class="table table-hover">


	                              <thead>
	                              <tr>
	                                  <th>User ID</th>
	                                  <th>Product Name</th>
	                                  <th>Address</th>
	                                  <th>Postal code</th>
	                                  <th>Ordered Date</th>
	                              </tr>
	                              </thead>
	                                <tbody>

	                                    @foreach($deliveries as $delivery)
	                                    <tr>
	                                        <td>{{ $delivery->user_id}}</td>
	                                        <td>{{ $delivery->product_name }}</td>
	                                        <td>{{ $delivery->address }}</td>
	                                        <td>{{ $delivery->postal_code }}</td>
	                                        <td>{{ $delivery->created_at }}</td>
	                                    </tr>


	                                    @endforeach
	                                </tbody>
	                          </table>
	                  	  </div><!-- --/content-panel ---->


                </div>
          </div>

   @stop