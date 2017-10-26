@extends('layouts.adminPlain')

@section('content')

<div class="col-md-10"  style="margin-top: 200px; margin-left: 400px;">

{{ Form::open([
    'route' => 'upload-image',
    'enctype'   => 'multipart/form-data'

]) }}

<input type="file" name="image"/>
<input type="submit" value="Upload"/>

{{ Form::close() }}

</div>

@stop
