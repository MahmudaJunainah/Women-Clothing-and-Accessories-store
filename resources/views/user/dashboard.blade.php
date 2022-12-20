@extends('user.layout.layout')

@section('content')

<h1>Welcome {{$name = Auth::user()->name;}}</h1>

		<p>This is your Dashboard. Select tabs from the left hand side as per your needs.</p>
@endsection