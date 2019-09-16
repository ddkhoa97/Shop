@extends('master')

@section('content')
<div class="page_title_area" style="margin-bottom:10px"> 
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="page_title" >
                        <h1>Thanh toán </h1> 
                        
					</div>
				</div>
				
			</div>
		</div>
    </div>
    <div class="checkout margin-bottom-70px">
		<div class="container">
			<div class="row" >
				<form action="finish" method="Post">
                {{csrf_field()}}
					<div class="col-md-6"   >
						<div class="billing margin-bottom-50px ">
						
							<div class="info-sec">
							
								
								<div class="first-name col-md-6 no-padding-left">
									<label for="first-name">first name <span class="required">*</span></label><br>
									<input type="text" name="first-name" value="" id="first-name">
								</div>
								
								<div class="last-name col-md-6 no-padding-left no-padding-right">
									<label for="last-name">Last name <span class="required">*</span></label><br>
									<input type="text" name="last-name" value="" id="last-name">
								</div>
								
								<div class="company-name">
									<label for="company-name">Company name</label><br>
									<input type="text" name="company-name" value="" id="company-name">
								</div>
								
								<div class="your-address">
									<label for="company-name">Address<span class="required">*</span></label>
									<input type="text" name="your-address" placeholder="enter your address" id="your-address">
								</div>
								
								
								
								<div class="town-city">
									<label for="company-name">Ward<span class="required">*</span></label>
									<input type="text" name="ward" placeholder="Ward" id="ward" value="{{$ward}}" readonly>
								</div>
								
								<div class="your-state col-md-6 no-padding-left">
									<label for="your-state">District <span class="required">*</span></label><br>
									<input type="text" name="district" placeholder="District" value="{{$district}}" id="district" readonly>
								</div>
								
								
                                <div class="country-name  col-md-6 no-padding-left no-padding-right">
									<label for="country-name1">Province<span class="required">*</span></label><br>
									<input type="text" name="province" value="{{$province}}" placeholder="Province" id="province" readonly>
                                </div>
                                <div class="your-zip ">
									<label for="your-zip">zip / Postal Code </label><br>
									<input type="text" name="your-zip" value="" placeholder="zip / postal code" id="your-zip">
								</div>
								<div class="your-email col-md-6 no-padding-left">
									<label for="your-email">Email Address<span class="required">*</span></label>
									<input type="text" name="your-email" placeholder="email" id="your-email">
								</div>
								
								<div class="phone-number col-md-6 no-padding-left no-padding-right">
									<label for="phone-number">Phone Number <span class="required">*</span></label><br>
									<input type="text" name="phone-number" value="" placeholder="+84" id="phone-number">
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-md-6" style="margin-top:17px">
                    <div class="payment">
						<h3>payment method</h3>
						<div class="payment-method">
							<table>
								<tbody>
									<tr class="">
										<th>
											<img src="source/img/payment/p1.png" alt="">
											<input type="radio" name="payment-method" id="paypal" value="paypal">
										</th>
										<th>
											<img src="source/img/payment/p2.png" alt="">
											<input type="radio" name="payment-method" id="visa" value="visa">
										</th>
										<th>
											<img src="source/img/payment/p3.png" alt="">
											<input type="radio" name="payment-method" id="mastercard" value="mastercard">
										</th>
										<th>
											<img src="source/img/payment/p4.png" alt="">
											<input type="radio" name="payment-method" id="direct-bank" value="direct-bank">
                                        </th>
                                        <th>
											<div>Cash on Delivery</div>
											<input type="radio" name="payment-method" id="COD" value="cod" checked>
										</th>
										
									</tr>		
								</tbody>
							</table>
							<span>PayPal</span>
							<p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed. More information here.</p>
							
						</div>
						<!-- <div class="cupon-code text-right margin-top-20px">
							<input type="submit" name="checkout" value="place an order" class="btn-black calculate">
						</div> -->
					</div>
					<div class="cart-totals" style="margin-top:20px" >
						<h3>  Cart totals</h3>
						<div class="info-sec">
							<table>
								<tbody>
                                   
									<tr class="cart-subtotal">
										<td colspan="3">SUBTOTAL</td>
										<td class="subtotal">${{$total}}</td>
                                    </tr>
                                    <tr class="cart-subtotal">
										<td colspan="3">QUANTITY</td>
										<td class="subtotal">{{$items}}</td>
									</tr>
                                    @foreach($cart as $cart)
									<tr class="product-info">
										<td colspan="3">
										<span class="quantity">{{$cart->qty}}x</span>
										<span class="product-name">{{$cart->name}}</span>
										<span class="apn-number">AFN- 2212451241</span>
										</td>
										<td>${{$cart->subtotal(0)}}</td>
									</tr>
									
								
                                    @endforeach		
                                    
                                    <tr class="order-shipping">
										<th colspan="3">shipping</th>
										<td class="shipping">free Shipping</td>
									</tr>
									<tr class="order-total">
										<th colspan="3">order total</th>
										<td class="amount"><strong>${{$total}}</strong></td>
                                    </tr>	
								</tbody>
                            </table>
                           
							<div class="cupon-code margin-top-20px ">
                            <input type="button" name="back" value="back" class="btn-black calculate no-margin-right" onclick="quay_lai_trang_truoc()">
                           &nbsp; &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
								<input type="submit" name="checkout" value="Done" class="btn-black calculate">
							</div>
						</div>
					</div>
				</div>
                </form>
               

			</div>
			
			<div class="row">
			
				
				<div class="col-md-6">
				
				</div>
			</div>
		</div>
	</div>
    <script>
   function quay_lai_trang_truoc(){
       history.back();
   }
</script>
@stop