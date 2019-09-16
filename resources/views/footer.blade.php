<div class="container">
           
            <div class="seperator margin-bottom-50px"></div>
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="single-widget">
                        <h2>Thông tin liên hệ</h2>
                        <p>Phone: 0869-0869-72</p>
                       
                        <p>E-mail:trieuthienhkhoa@gmail.com</p>
                        <p>Fanpage: <a href="https://bom.to/e3JmQ"  target="_blank">  Nhấn vào đây </a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="single-widget">
                        <h2>Categories</h2>
                        <ul class="tags" >
                   
                            @foreach($category as $ctg)
                           
                            <li><a href="{{url('listproduct')}}{{$ctg->slug}}">{{$ctg->name_category}}</a></li>
                            @endforeach()



                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="single-widget">
                        <h2>Popular Tags</h2>
                        <ul class="tags">
                            <li><a href="#">Fashion</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                <img src="source/img/brand.png" width="200px"  />
            </div>

           
        </div>

        <div class="copyright">
            <p class="text-center">&copy; Design by 2DK</p>
        </div>