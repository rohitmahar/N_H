@extends('layouts.adminMaster')

@section('content')


<section class="content" style="margin-left:18%; ">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Uploaded Product details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Code</th>
                        <th>Price</th>
                        <th>Image Location</th>
                        <th>Product Description</th>
                        <th>Option</th>
                      </tr>
                    </thead>
                    <tbody>


                    @foreach(product::all() as $product)
                      <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->code}}</td>
                        <td>Rs. {{$product->price}}</td>
                        <td>{{$product->location}}</td>
                        <td>{{$product->detail}}</td>
                        <td>
                            <div class="message">
                   <a onclick="return confirm('Are you sure you want to Remove?');" href="{{URL::route('deleteProduct', $product->id)}}" class="btn1 btn2 btn-primary1"><span>Delete product</span></a>
                            </div>
                        </td>

                      </tr>
                    @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@stop