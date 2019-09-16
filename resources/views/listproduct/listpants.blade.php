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
                            
                           @foreach($result as $r)

							<div class="col-md-3 col-sm-6" >
								<div class="product-single xs-mb-40" id="{{$r->id_product}}">
									<div class="product-img">
										<img class="img-responsive" alt="Single product" src="source/image/{{$r->image}}">
										<div class="actions">
											<ul>
												<li><a class="zoom" href="source/image/{{$r->image}}"><i class="fa fa-search"></i></a></li>
												<li><a href="#"><i class="fa fa-heart-o"></i></a></li>
												<li>
											<a class="" href="#" data-toggle="modal" data-role="detailproduct">
													<i class="fa fa-expand"></i>
													</a>
													</li>
											</ul>
										</div>
									</div>
									<div class="product-info" >
										<div data-target="name"><h2 >{{$r->name_product}}</h2></div>
										<div class="star-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-full"></i></li>
											</ul>
										</div>
										<div class="price" data-target="price">
										{{$r->price_product}}
										</div>
										<input type="hidden"  data-target="description" value="{{$r->description}}" >
										<input type="hidden" id="image" data-target="image" value="{{$r->image}}" >
									</div>
								</div>
							</div>	

		
							<div class="modal fade" id="detail" tabindex="-1" role="dialog">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<a class="close" href="#" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
												
												<div class="modal-body col-md-12">
													<div class="col-md-5 no-padding-left">
													<form action="{{url('addToCart')}}" method="POST"> 
															{{csrf_field()}}
													<img src="" id="imageproduct"  class="img-responsive">
													</div>
													<div class="col-md-7">
														<div class="right-content">
														<h2><input id="name" style="border:0px; margin-top:10px;" readonly></h2>
															<div class="rated">
																<ul>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li class="un-rated"><i class="fa fa-star"></i></li>
																</ul>
																<span>(24 reviews)</span>
															</div>
														
															<span class="amount off">$399</span>
															<span class="amount">$<input id="price" name="price" style="border:0px; " readonly></span><br>
															<span class="sku">available in stock</span>
															<h4>DESCRIPTION</h4>
															<p><input id="description" style="border:0px; " read></p>
																
															<div class="clear-fix"></div>
															<div class="moz-quantity-level margin-top-20px">
														
																<div class="quantity">
																	<label>Quantity</label>
																	<input type="number" step="1" min="0" max="99" name="quantity" value="1" title="Qty" class="qty">
																</div>
																<div class="add-to-cart">
																	<button type="submit" class="trendify-btn black-bordered">Add To Cart</a>
																</div>
																<input type="hidden" id="id_product" name="id_product">
																
																</form>
															</div>
															<div class="clear-fix"></div>
															<div class="margin-top-20px">
																<span class="item-number"><b>Product Number:</b>  #41121120</span>
																<span class="item-tag"><b>Tags:</b>  elegant, men, suits, beige, modern</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
							@endforeach
						</div>
						
					</div>
					
				</div>
			</div>
		</div>

	<script>
	$(document).ready(function(){
		$(document).on('click','a[data-role= detailproduct]',function(){
		
			var id = $(this).closest(".product-single").attr("id");
			
			var name  = $('#'+id).find('div[data-target=name]').text();
			name=name.toUpperCase();
			var price  = $('#'+id).find('div[data-target=price]').text();
			var image  = $('#'+id).find('input[data-target=image]').val();
			var description  = $('#'+id).find('input[data-target=description]').val();
			price=parseInt(price);
		
			$("#imageproduct").attr("src","source/image/"+image);
			$("#name").val(name);
			$("#price").val(price);
			$("#id_product").val(id);
			$('#description').val(description);
			$('#detail').modal('toggle');
		});
	
   
	});
	</script>
@stop