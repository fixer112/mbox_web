@extends('frontend.layouts.user_panel')

@section('panel_content')

    <div class="aiz-titlebar mt-2 mb-4">
      <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{ translate('Your Custom order') }}</h1>
        </div>
      </div>
    </div>



    <div class="card">
        <div class="card-header row gutters-5">
            <div class="col">
                <h5 class="mb-md-0 h6">{{ translate('All Custom order') }}</h5>
            </div>
            <div class="col-md-3">
                <div class="input-group input-group-sm">
                   
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>
         
             
                        <th width="30%">{{ translate('Customer Name')}}</th>
                        <th data-breakpoints="md">{{ translate('Product Name')}}</th>
                        <th data-breakpoints="md">{{ translate('Product Link')}}</th>
                        <th data-breakpoints="md">{{ translate('Qty')}}</th>
                        <th data-breakpoints="md">{{ translate('Price Offered')}}</th>
                        <th data-breakpoints="md">{{ translate('Accept/Reject')}}</th>
                     
                    </tr>
                </thead>
                <tbody>
                @foreach($listorders as $order)
                        <tr>
                            <td>{{$order->user_name}}</td>
                            <td>
                             {{$order->product_name}}
                            </td>
                            <td>
                            <a href="{{$order->product_slug}}" >Click to View Product</a>
                            </td>
                            <td>
                            {{$order->quantity}}
                            </td>
                             <td>
                           {{$order->offer_price}}
                            </td>
                          
                         
                            <td>
                                  <button type="button" onclick="approve({{$order->id}})" class="btn btn-primary btn-sm">Approve</button>
                               <button type="button" onclick="reject({{$order->id}})" class="btn btn-danger btn-sm">Reject</button>

                            </td>
                       
                         
                        </tr>
                       @endforeach
                </tbody>
            </table>
           
        </div>
    </div>

@endsection
@section('modal')


<div class="modal fade" id="reject-custom-order-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title h6">{{ translate('Custom Order Request')}}</h5>
          <button type="button" class="close" data-dismiss="modal">
          </button>
        </div>
        <div class="modal-body">
          <p>{{translate('Are you sure, You want to reject this?')}}</p>
        </div>
        <div class="modal-footer">
          


          <form method="POST" action="{{route('reject-custom-order')}}">
            @csrf
            <input type="hidden" name="id" id="reject-id">

             <button type="button" class="btn btn-light" data-dismiss="modal">{{translate('Cancel')}}</button>
          <button type="submit" id="reject_link" class="btn btn-primary">{{ translate('reject') }}</button>

        </form>



        </div>
      </div>
    </div>
</div>


<div class="modal fade" id="accept-custom-order-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title h6">{{ translate('Custom Order Request')}}</h5>
          <button type="button" class="close" data-dismiss="modal">
          </button>
        </div>
        <div class="modal-body">
          <p>{{translate('Are you sure, You want to approve this?')}}</p>
        </div>
        <div class="modal-footer">
            <form method="POST" action="{{route('approve-custom-order')}}">
                @csrf
                <input type="hidden" name="id" id="accept-id">
                <button type="button" class="btn btn-light" data-dismiss="modal">{{translate('Cancel')}}</button>
                 <button type="submit" id="reject_link" class="btn btn-primary">{{ translate('approve') }}</button>
            </form>
          
        </div>
      </div>
</div>

@endsection





@section('script')

<script>

function approve(id) {
    document.getElementById('accept-id').value = id
    $('#accept-custom-order-modal').modal('show')
}

function reject(id) {
    document.getElementById('reject-id').value = id
    $('#reject-custom-order-modal').modal('show')
}

</script>
    
@endsection





