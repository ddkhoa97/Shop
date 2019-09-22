@extends('admin.master')
@section('content')

<div class="content-wrapper">

   @if (session('Success'))
<div class="alert alert-success">
   {{ session('Success') }}
</div>
@endif
@if (session('Fail'))
<div class="alert alert-danger">
   {{ session('Fail') }}
</div>
@endif
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data Product 
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal-2">Add</button>
            </h4>
              
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
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 191px;">Image</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 141px;">Name Product</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 108px;">Price</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending" style="width: 152px;">Type</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending" style="width: 152px;">Sale</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending" style="width: 152px;">Household</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 112px;">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 118px;">Actions</th></tr>
                      </thead>
                      <tbody>
                        
                      {{csrf_field()}}
                        
                        
                        
                        
                        
                        
                        
                        @foreach($result as $r)
                      <tr role="row" class="odd" id="{{$r->id}}">
                            <td >{{$r->id}}</td>
                            <td ><img src="source/image/{{$r->image}}"> </td>
                            <input type="hidden" value="{{$r->image}}" data-target="img" >
                            <input type="hidden" value="{{$r->id_type}}" data-target="id_type" >
                            <input type="hidden" value="{{$r->id_category}}" data-target="id_category" >
                            <td data-target="name_product">{{$r->name_product}}</td>
                            <td data-target="price_product">{{$r->price_product}}</td>
                            <td data-target="name_type">{{$r->name_type}}</td>
                            <td>{{$r->sale}}</td>
                            <td data-target="household">{{$r->household}}</td>
                           <input data-target="description" type="hidden" value="{{$r->description}}">
                            <td>
                              <label class="badge badge-info">On hold</label>
                            </td>
                            <td>
                            
                              <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-role="edit" >Edit</button>

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

               
                
               
                  <!-- Modal starts -->
                 
                  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-2">Edit Data Product</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                     
            
                  <form class="forms-sample" method="POST" action="{{url('EditProduct')}}">
                  {{csrf_field()}}
                  <input type="hidden" id="Id" name="id">
                  <div class="form-group">         
                  <input type="file" class="dropify" name="image"  >
                 
                <div class="dropify-preview"><span class="dropify-render">
                   
                </span>
</div>
  
</div>
                    <div class="form-group">
                   
                      <label for="Name">Name</label>
                      <input type="text" class="form-control" id="Name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="Price">Price</label>
                      <input type="number" class="form-control" id="Price" name="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                      <label for="Type">Type</label>
                      <!-- <input type="text" class="form-control" id="Type" placeholder="Type"> -->
                      <select  class="form-control" id="Type" name="type">
                    
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="Description">Description</label>
                      <input type="text" class="form-control" name="description" id="Description" placeholder="Description">
                    </div>
                    <div class="form-group">
                      <label for="Household">Household</label>
                      <input type="number" class="form-control" id="Household" name="household" placeholder="Household">
                    </div>
                 
                    <button type="submit" class="btn btn-primary btn-icon-text" style="float:right">Submit</button>
                 
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                 
                  </form>
               
           
                        </div>
                       
                      </div>
                    </div>
                  </div>
                  <!-- Modal Ends -->
                     <!-- Modal starts -->
                   
                  <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-2">Add new product</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                       
                        <form class="forms-sample" method="POST" action="{{url('AddProduct')}}"> 
                        {{csrf_field()}}
                       
                  <div class="form-group">         
                  <input type="file" class="dropify"  name="image" >
                 
                <div class="dropify-preview"><span class="dropify-render">
                   
                </span>
</div>
  
</div>
                    <div class="form-group">
                   
                      <label for="Name">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="Price">Price</label>
                      <input type="number" class="form-control" name="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                      <label >Type</label>
                     
                      <select  class="form-control" name="type" >
                      @foreach($type as $type)
                      <option value="{{$type->id}}">{{$type->name_type}}</option>
                      @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="Description">Description</label>
                      <input type="text" class="form-control" name="description" placeholder="Description">
                    </div>
                    <div class="form-group">
                      <label for="Household">Household</label>
                      <input type="number" class="form-control" name="household" placeholder="Household">
                    </div>
                 
                    <button type="submit" class="btn btn-primary btn-icon-text" style="float:right">Submit</button>
                 
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                 
                  </form>
                        </div>
                        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-success">Submit</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        </div> -->
                      </div>
                    </div>
                  </div>
                  <!-- Modal Ends -->
             
             
                  <script>
	$(document).ready(function(){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
		$(document).on('click','button[data-role=edit]',function(e){
      e.preventDefault()
      var id = $(this).closest("tr").attr("id");
      var name_product  = $('#'+id).find('td[data-target=name_product]').text();
      var price_product  = $('#'+id).find('td[data-target=price_product]').text();
      var img_product  = $('#'+id).find('input[data-target=img]').val();
    
      var id_type  = $('#'+id).find('input[data-target=id_type]').val();
      var id_category  = $('#'+id).find('input[data-target=id_category]').val();
      var household  = $('#'+id).find('td[data-target=household]').text();
      var description  = $('#'+id).find('input[data-target=description]').val();
      // $(".dropify-render").children('img').attr("src","source/image/"+img_product);
      
      var _token = $('input[name="_token"]').val();
      
      $.ajax({
        url:"{{url('showType')}}",
        method:"POST",
        data:{id_type:id_type,id_category:id_category, _token:_token},
        success:function(result)
        {
        $('#Type').html(result);
        
        }

      })
    
      $('#Name').val(name_product);
      $('#Price').val(price_product);
      
      $('#Household').val(household);
      $('#Id').val(id);
      $('#Description').val(description);
      $('#edit').modal('toggle');
	
		});

	});
	</script>
@stop