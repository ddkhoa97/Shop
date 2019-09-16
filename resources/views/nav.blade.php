<div class="navbar trendify-nav megamenu">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{url('/')}}"  >TRANG CHỦ</a>
                           
                        </li>
                        @foreach($category as $ctg)
                        <li class="dropdown">
                         
                            <a href="{{url('listproduct',$ctg->slug)}}"  >{{$ctg->name_category}}</a>
                            <ul class="dropdown-menu">
                                  @if($ctg->slug == 'pants')
                                @foreach($pants as $ps)
                                <li><a href="{{url('listproductpants',$ps->id)}}">{{$ps->name_pant}}</a></li>      
                                @endforeach()     
                                @endif

                                @if($ctg->slug == 'shorts')
                                @foreach($shorts as $ps)
                                <li><a href="{{url('listproductshorts',$ps->id)}}">{{$ps->name_short}}</a></li>      
                                @endforeach()     
                                @endif

                                @if($ctg->slug == 'shirts')
                                @foreach($shirts as $ps)
                                <li><a href="{{url('listproductshirts',$ps->id)}}">{{$ps->name_shirt}}</a></li>      
                                @endforeach()     
                                @endif
                            </ul>
                          
                        </li>
                        @endforeach
                     
                        <li >
                            <a href="{{url('contact')}}"  >Contact</a>
                          
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

            </div>
            <!-- /.container-fluid -->
        </div>