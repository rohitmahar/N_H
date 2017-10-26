d@include('layouts.adminPlain')

@section('adminContent')

@foreach($users as $user)
        <li>{{ $user->first_name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->address }}</li>
        <hr/>
    @endforeach
@stop

