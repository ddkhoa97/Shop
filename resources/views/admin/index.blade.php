@extends('admin.master')
@section('content')

<div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                            <div class="card bg-gradient-primary text-white text-center card-shadow-primary">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Total Purchase</h6>
                                    <h2 class="mb-0">{{$quantity}}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                            <div class="card bg-gradient-danger text-white text-center card-shadow-danger">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Total View</h6>
                                    <h2 class="mb-0">28893</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                            <div class="card bg-gradient-warning text-white text-center card-shadow-warning">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Total Income</h6>
                                    <h2 class="mb-0">{{$total}}</h2>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                            <div class="card bg-gradient-info text-white text-center card-shadow-primary">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Total Bill</h6>
                                    <h2 class="mb-0">{{$bill}}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                            <div class="card bg-gradient-success text-white text-center card-shadow-danger">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Total Customer</h6>
                                    <h2 class="mb-0">{{$customer}}</h2>
                                </div>
                            </div>
                        </div>
                     
                    </div>
              
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">  <select style="width:10%; float:right" class="form-control"></select>
                               <div id="container" style="width:100%; height:400px;" data-chart="{{$result}}"></div>
                               
                                
                            </div>
                        </div>
                      
                      
                    </div>
                    <div class="row grid-margin">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Order status</h4>
                                    <!-- <div class="d-flex table-responsive">
                                        <div class="btn-group mr-2">
                                            <button class="btn btn-sm btn-primary"><i class="mdi mdi-plus-circle-outline"></i> Add</button>
                                        </div>
                                        <div class="btn-group mr-2">
                                            <button type="button" class="btn btn-light"><i class="mdi mdi-alert-circle-outline"></i></button>
                                            <button type="button" class="btn btn-light"><i class="mdi mdi-delete-empty"></i></button>
                                        </div>
                                        <div class="btn-group mr-2">
                                            <button type="button" class="btn btn-light"><i class="mdi mdi-printer"></i></button>
                                        </div>
                                        <div class="btn-group ml-auto mr-2 border-0 d-none d-md-block">
                                            <input type="text" class="form-control" placeholder="Search Here">
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light"><i class="mdi mdi-cloud"></i></button>
                                            <button type="button" class="btn btn-light"><i class="mdi mdi-dots-vertical"></i></button>
                                        </div>
                                    </div> -->
                                    <div class="table-responsive mt-2">
                                        <table class="table mt-3 border-top">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Bill</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                    <th>Order Time</th>
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>50014</td>
                                                    <td>David Grey</td>
                                                    <td>Italy</td>
                                                    <td>$6300</td>
                                                    <td>$2100</td>
                                                    
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row mt-4">
                                        <p class="mb-3 mb-sm-0">Showing 1 to 20 of 20 entries</p>
                                        <nav>
                                            <ul class="pagination pagination-primary mb-0">
                                                <li class="page-item"><a class="page-link"><i class="mdi mdi-chevron-left"></i></a></li>
                                                <li class="page-item active"><a class="page-link">1</a></li>
                                                <li class="page-item"><a class="page-link">2</a></li>
                                                <li class="page-item"><a class="page-link">3</a></li>
                                                <li class="page-item"><a class="page-link">4</a></li>
                                                <li class="page-item"><a class="page-link"><i class="mdi mdi-chevron-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-4 grid-margin grid-margin-md-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center flex-wrap">
                                        <img class="img-md rounded" src="source2/www.urbanui.com/serein/template/images/faces/face1.jpg" alt="">
                                        <div class="wrapper ml-4">
                                            <p class="font-weight-medium">Tim Cook</p>
                                            <p class="text-muted">timcook@gmail.com</p>
                                            <p class="text-info mb-0 font-weight-medium">Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin grid-margin-md-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center flex-wrap">
                                        <img class="img-md rounded" src="source2/www.urbanui.com/serein/template/images/faces/face2.jpg" alt="">
                                        <div class="wrapper ml-4">
                                            <p class="font-weight-medium">Sarah Graves</p>
                                            <p class="text-muted">Sarah@gmail.com</p>
                                            <p class="text-info mb-0 font-weight-medium">Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center flex-wrap">
                                        <img class="img-md rounded" src="source2/www.urbanui.com/serein/template/images/faces/face3.jpg" alt="">
                                        <div class="wrapper ml-4">
                                            <p class="font-weight-medium">David Grey</p>
                                            <p class="text-muted">David@gmail.com</p>
                                            <p class="text-info mb-0 font-weight-medium">Support Lead</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
           
            
          
                       

                <script>

              document.addEventListener('DOMContentLoaded', function () {
                var data_chart = $('#container').data('chart');
               
                Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
     title: {
       text: 'Total Income'
     },
     
     xAxis: {
       type: 'category',
      
       labels: {
         rotation: -45,
         style: {
           fontSize: '13px',
           fontFamily: 'Verdana, sans-serif'
         }
       },
       title: {
         text: 'Tháng',
         frontSize:'20px'
       }
     },
     yAxis: {
       min: 0,
       title: {
         text: 'Income '
       }
     },
     legend: {
       enabled: false
     },
     tooltip: {
       pointFormat: ''
     },
     series: [{
       name: 'Population',
       data: data_chart,
       dataLabels: {
         enabled: true,
       
       }
     }]
});
});
</script>
                @stop