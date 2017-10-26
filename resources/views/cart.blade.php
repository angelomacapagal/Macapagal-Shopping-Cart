@extends('layouts.app')

@section('content')

	<table class="table table-striped">
		<tr>
			<td>Name</td> 
			<td>Description</td>
			<td>Price</td>
			<td>Image</td>
		</tr>
		@foreach($carts as $cart)
			<tr>
				<td>{{ $cart->name }}</td> 
				<td>{{ $cart->description }}</td> 
				<td>{{ $cart->price }}</td> 
				<td>
					<img src="{{ $cart->img }}" height="50px" width="50px">
			    </td>
				<td>
					<a href="/deletecart/{{ $cart->id }}">
						<button class="btn-danger">Delete</button>
					
				</td>
			</tr>
	@endforeach
	</table>

@endsection