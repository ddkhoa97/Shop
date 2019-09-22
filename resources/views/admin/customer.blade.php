@extends('admin.master')
@section('content')
<div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data Customer</h4>
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
                            <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending" style="width: 115px;">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 191px;">Customer's Name</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 141px;">Address</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 141px;">Ward</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 141px;">District</th>
                            
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 112px;">Province</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 141px;">Zip</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 141px;">Email</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 141px;">Phone</th>
                           </thead>
                      <tbody>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        @foreach($result as $r)
                      <tr role="row" >
                            <td >{{$r->id}}</td>
                            <td>{{$r->last_name}} {{$r->first_name}}</td>
                            <td>{{$r->address}}</td>
                            <td>{{$r->ward}}</td>
                            <td>{{$r->district}}</td>
                          <td>{{$r->province}}</td>
                          <td>{{$r->zip}}</td>
                          <td>{{$r->email}}</td>
                          <td>{{$r->phone}}</td>
                           
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