@extends('user.layout.layout')


@section('content')

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			
			<th>Product Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Payment Status</th>
			<th>Image</th>
            
			
		</tr>
	</thead>
	<tbody>
		@foreach($order as $order)
		<tr>
			<td>{{$order->product_name}}</td>
			<td>{{$order->quantity}}</td>
			<td>
                {{$order->price}}
			</td>
			<td>{{$order->payment_status}}</td>
			<td>
                <img style="height:80px;width:80px;"  src="uploads/{{$order->image}}">
            </td>
			
			
			
		</tr>
        @endforeach
		
	</tbody>
</table>

@endsection



