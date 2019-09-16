@extends('master')
@section('content')
<div class="page_title_area">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="page_title">
						<h1>Giỏ hàng của bạn</h1>
					</div>
				</div>
				
			</div>
		</div>
	</div>
<div class="shopping-cart margin-bottom-70px">
		<div class="container">
			<div class="row">
				<div class="table-responsive">
					<table class="shop_table">
						<thead>
							<tr>
								<th colspan="3" class="product-name">Product</th>
								<th class="product-quantity">Quantity</th>
								<th class="product-number">Id Number</th>
								<th class="product-price">Price</th>
								<th class="product-subtotal">Sub Total</th>
							</tr>
						</thead>
						<tbody>
                        {{csrf_field()}}
                            @foreach($cart as $cart)
                        
							<tr class="cart_item" id="{{$cart->id}}">
                                <input type=hidden id="idrow" value="{{$cart->rowId}}">
								<td class="product-remove">
									<a href="#" class="remove" title="Remove this item"><img src="source/img/icons/remove.png" alt=""></a>					
								</td>
								<td class="product-thumbnail">
									<a href="#"><img width="134" height="115" src="source/image/{{$cart->options->image}}" alt="Adventure"></a>
								</td>
								<td class="product-info">
									<a href="#">{{$cart->name}} </a>
									
								</td>
								<td class="product-quantity">
									<div class="quantity">
										<input type="number" step="1" min="0" max="99" name="cart" id="qty" value="{{$cart->qty}}" title="Qty" class="qty">
									</div>
								</td>
								<td class="product-number">
									<span>AFN - 924222122</span>
								</td>
								<td class="product-price">
								$<span class="amount">{{$cart->price}}</span>					
								</td>
								<td class="product-subtotal">
									<span class="amount-subtotal" >
                                        <!-- ${{number_format($cart->subtotal,0)}} -->

                                        $<input type="text" class="amount" value="{{number_format($cart->subtotal,0)}}" style="border:0; width: 120px"  readonly>
                                    </span>					
								</td>
							</tr>
						
                            @endforeach
                        </tbody>
                       
					</table>
				</div>
			</div>
			<form action="{{url('checkout')}}" method="post">
			<div class="row">
				<div class="col-md-4">
					<h4>calculate shipping</h4>
					<p class="margin-bottom-50px">At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed.</p>
					
					<div class="calculate-shipping">
						<h4>PROVINCE</h4>
						<select name="province" class="province">
							<option value="">- Select a Country -</option>
							<option>Afghanistan</option>
							
						</select>
						<h4>DISTRICT</h4>
						<select name="district" class="district">
						<option value="">- Select a district -</option>
							<option value="Iowa">Iowa</option>
						</select>
						<h4>WARD</h4>
						<select name="ward" class="ward">
						<option value="">- Select a district -</option>
							<option value="Iowa">Iowa</option>
						</select>
					</div>
					<input type="submit" name="calculate" value="calculate" class="calculate">
				</div>
				
				<div class="col-md-4">
					
				</div>
				
				<div class="col-md-4">
					<div class="cupon-code">
						<h4>CART TOTALS</h4>
							<table>
								<tbody>
                                  
									{{csrf_field()}}
									<tr class="cart-subtotal">
										<th>SUBTOTAL</th>
										<td><span class="subtotal">
                                        $<input type="text" id="subtotal" value="{{$total}}" style="border:0; width: 120px"  readonly>

                                        </span></td>
									</tr>
									<tr class="order-shipping">
										<th>shipping</th>
										<td><span class="shipping">free Shipping</span></td>
									</tr>
									<tr class="order-total">
										<th>order total</th>
										<td><span class="amount"><strong>
                                        $<input type="text" id="order-total" value="{{$total}}" style="border:0; width: 120px"  readonly>
                                        </strong></span></td>
									</tr>			
								</tbody>
							</table>
							@if($total==0)
							
							<input type="button" name="back" value="Back" class="btn-black calculate margin-bottom-100px" onclick="quay_lai_trang_truoc()">
							
							@else
						<input type="submit" name="checkout" value="proceed checkout" class="btn-black calculate margin-bottom-100px">
						@endif
						</form>
					</div>
				</div>
			</div>
        </div>
		<script>
   function quay_lai_trang_truoc(){
       history.back();
   }
</script>
        <script>
    	
		$(document).ready(function(){
 $('.product-quantity').change(function(e){
    e.preventDefault();
    var _token = $('input[name="_token"]').val();
    var trid = $(this).closest('tr').attr('id');
    var tridrow=$('#'+trid).find('#idrow').val();
    var val_change=$('#'+trid).find('#qty').val();
    var price=$('#'+trid).find('.amount').text();
    var new_total=price*val_change;
  

    $('#'+trid).children().find('.amount').val(new_total);

  
    $.ajax({
        
                     url:"{{url('updateCart')}}",
                     method:"POST",
                     data:{tridrow:tridrow,val_change:val_change ,_token:_token },
                     success:function(data)
                     {
                        $('#subtotal').val(data);
                        $('#order-total').val(data);
                     }
                
                  });
                 
                 
               });
 
            });

    </script>
	</div>
    
@stop