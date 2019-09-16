@extends('admin.master')
@section('content')
<div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data Bill</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><div id="order-listing_filter" class="dataTables_filter">
                                </div></div></div><div class="row"><div class="col-sm-12">
                                    <table id="order-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
                      <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending" style="width: 115px;">ID Bill</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 191px;">Customer's Name</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 141px;">Quantity</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 108px;">Total</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending" style="width: 152px;">Payment</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 112px;">Province</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 112px;">Date</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 112px;">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 118px;">Actions</th></tr>
                      </thead>
                      <tbody>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        @foreach($result as $r)
                      <tr role="row" >
                            <td >{{$r->id}}</td>
                            <td>{{$r->last_name}} {{$r->first_name}}</td>
                            <td>{{$r->quantity}}</td>
                            <td>{{$r->total}}</td>
                            <td>{{$r->payment}}</td>
                           
                          <td>{{$r->province}}</td>
                          <td>
                              @if($r->created_at == NULL)
                              {{''}}
                              @else
                          {{date("d/m/Y", strtotime($r->created_at)) }}
                          @endif
                          </td>
                            <td>
                              <label class="badge badge-info">On hold</label>
                            </td>
                            <td>
                              <a href="{{url('detailBill',$r->id)}}" class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                     @endforeach
                      
                    </table></div></div></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@stop