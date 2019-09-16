@extends('master')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12 margin-top-20px" >
					<div class="trendify-banner">
						<img src="source/img/banner3.jpg" class="img-responsive" alt="image banner">
						<div class="banner-text">
							<h3 class="animate fadeInDown wow" style="visibility: visible; animation-name: fadeInDown;">WE CREATE MODERN CLOTHES</h3>
							<h4 class="animate fadeInDown wow" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">YOUR YOU SATISFIED WITH OUR PRODUCTS?</h4>
							<a class="trendify-btn default-bordered margin-left-0" href="#">See all products</a>
						</div>
					</div>
					<div class="product-listing-view margin-top-20px">
				
						
						<div class="row">
                        @for($i=0;$i< 12; $i++)

                <div class="col-md-3 col-sm-6">
                    <div class="product-single xs-mb-40">
                        <div class="product-img">
                            <img class="img-responsive" alt="Single product" src="source/img/single_1.jpg">
                            <div class="actions">
                                <ul>
                                    <li><a class="zoom" href="source/img/single_1.jpg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="product-details-1.html"><i class="fa fa-expand"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h2>New Look Stripe T-Shirt</h2>
                            
                            <div class="price">
                                <del> $50 </del> $40
                            </div>
                        </div>
                    </div>
                </div>	
                @endfor
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
@stop