@extends('admin.layout.layout')


@section('content')
<h2>All orders<small></small></h2>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			
			<th>Customer Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Product Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Payment Status</th>
            <th>Delivery Status</th>
			<th>Image</th>
            
			
		</tr>
	</thead>
	<tbody>
		@foreach($order as $order)
		<tr>
			<td>{{$order->name}}</td>
			<td>{{$order->email}}</td>
			<td>
                {{$order->address}}
			</td>
			<td>{{$order->phone}}</td>
            <td>{{$order->product_name}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->payment_status}}</td>
            <td>{{$order->delivery_status}}</td>
			<td>
                <img style="height:80px;width:80px;"  src="uploads/{{$order->image}}">
            </td>
			
			<!--<td>
                {{$order->product_title}}
			</td>-->
			<!--<td>-->
            
			
		</tr>
        @endforeach
		
	</tbody>
</table>

@endsection



