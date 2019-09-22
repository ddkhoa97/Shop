@extends('admin.master')
@section('content')
<div class="content-wrapper">

          <div class="row">
              <div class="col-lg-12">
              
                  <div class="card px-2">
                      <div class="card-body">
                          <div class="container-fluid">
                         
                          <button class="btn btn-outline-danger ti-arrow-left" onclick="quay_lai_trang_truoc()"> Back</button> </a>
                          
                            <h3 class="text-right my-5">Invoice&nbsp;&nbsp;#{{$id_bill}}</h3>
                         
                            <hr>
                        
                          </div>
                          @foreach($customer as $ctm)
                          <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-3 pl-0">
                              <p class="mt-5 mb-2"><b>{{$ctm->last_name}} {{$ctm->first_name}}</b></p>
                              <p>{{$ctm->address}}, {{$ctm->ward}}, {{$ctm->district}} {{$ctm->province}}</p>
                          
                              <p>{{$ctm->zip}}</p>
                              <p>{{$ctm->email}}</p>
                              <p>{{$ctm->phone}}</p>
                            </div>
                            
                         
                         
                            <div class="col-lg-3 pl-0">
                              @foreach($time as $time)
                              <p class="mb-0 mt-5">Invoice Date : {{$time->created_at}}</p>
                              @endforeach()
                              <p>Due Date : 25th Jan 2017</p>
                            </div>
                          </div>
                          @endforeach()
                          <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                            <div class="table-responsive w-100">
                                <table class="table">
                                  <thead>
                                    <tr class="bg-dark text-white">
                                        <th>#</th>
                                        <th>Name Product</th>
                                        <th class="text-right">Quantity</th>
                                        <th class="text-right">Unit cost</th>
                                        <th class="text-right">Total</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                               <?php  $i=1; ?>
                                  @foreach($result as $r)
                                  
                                    <tr class="text-right">
                                      <td class="text-left">{{$i}}</td>
                                      <td class="text-left">{{$r->name_product}}</td>
                                      <td>{{$r->quantity}}</td>
                                      <td>${{$r->price_product}}</td>
                                      <td>${{$r->subtotal}}</td>
                                    </tr>
                                   <?php $i++ ?>
                                   
                                    @endforeach()
                                  </tbody>
                                
                                </table>
                              </div>
                          </div>
                          
                          <div class="container-fluid mt-5 w-100">
                            <!-- <p class="text-right mb-2">Sub - Total amount: $12,348</p>
                            <p class="text-right">vat (10%) : $138</p> -->
                         
                            <h4 class="text-right mb-5">Total : ${{$total}}</h4>
                       
                            <hr>
                          </div>
                          <div class="container-fluid w-100">
                        
                            <a href="{{url('PrintPDF', $id_bill)}}" class="btn btn-primary float-right mt-4 ml-2"><i class="mdi mdi-printer mr-1"></i>Print</a>
                            <a href="#" class="btn btn-success float-right mt-4"><i class="mdi mdi-telegram mr-1"></i>Send Invoice</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>

      

        <script>
   function quay_lai_trang_truoc(){
       history.go(-1);
   }
</script>


@stop