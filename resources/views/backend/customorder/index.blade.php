@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
	<div class="align-items-center">
			<h1 class="h3">{{translate('All CUSTOM ORDERS')}}</h1>
	</div>
</div>


<div class="card">
    <div class="card-header d-block d-lg-flex">
        <h5 class="mb-0 h6">{{translate('CUSTOM ORDERS')}}</h5>
        <div class="">
        
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th data-breakpoints="lg">User ID</th>
                        <th data-breakpoints="lg">User Name</th>
                         <th data-breakpoints="lg">Quantity</th>
                            <th data-breakpoints="lg">Price Offer</th>
                             <th data-breakpoints="lg">Product Id</th>
                              <th data-breakpoints="lg">Product Name</th>
                   
                 
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $key => $customer)
                 
                        <tr>
                        
                            <td>{{$customer->user_id}}</td>
                             <td>{{$customer->user_name}}</td>
                             <td>{{$customer->quantity}}</td>
                             <td>{{$customer->offer_price}}</td>
                             <td>{{$customer->product_id}}</td>
                              <td>{{$customer->product_name}}</td>
                       
                        </tr>
                   
                @endforeach
            </tbody>
        </table>
    
    </div>
</div>



@endsection

