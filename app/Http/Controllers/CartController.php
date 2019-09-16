<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Cart;
use App\Product;
use App\Customer;
use App\Pants;
use App\Bill;
use App\BillDetail;
class CartController extends Controller
{
    public function cart() {
        $cart = Cart::content();
        $total=Cart::subtotal(0);
      
        return view('cart.cart',compact('cart','total'));
    }
    public function updateCart(Request $request)
    {
      
            $val_change=$_POST['val_change'];
            $tridrow=$_POST['tridrow'];
            Cart::update($tridrow, $val_change);
            $new_total=Cart::subtotal(0);
            echo ($new_total);

    }

    public function addProduct() {

        if (Request::isMethod('post')) {
            
         $product_id = Request::post('id_product');
         $price = Request::post('price');
         $quantity = Request::post('quantity');
         
         $product = Product::find($product_id);
        
        Cart::add(array('id' => $product_id, 'name' => $product->name_product, 'qty' => $quantity, 'price' => $product->price_product,'options' =>['image'=>$product->image]));
        }
        $cart = Cart::content();
        $total=Cart::subtotal();
      
        return view('cart.cart', compact('cart', 'total'));
        }
    public function checkout()
    {
        $ward=$_POST["ward"];
        $district=$_POST["district"];
        $province=$_POST["province"];
        $cart= Cart::content();
        $total=Cart::subtotal(0);
        $items=Cart::count();
        return view('cart.checkout',compact('cart','total','items','ward','district','province'));
    }
    public function finish()
    {
        $ward=$_POST["ward"];
        $district=$_POST["district"];
        $province=$_POST["province"];
        $first_name=$_POST["first-name"];
        $last_name=$_POST["last-name"];
        if($_POST["company-name"] !="" )
        {
            $company_name=$_POST["comnany-name"];
        }
        else{
            $company_name="";
        }
        $address=$_POST["your-address"];
        if($_POST["your-zip"]!= "")
        {
            $zip=$_POST["your-zip"];
        }
        else{
            $zip="";
        }
        $email=$_POST["your-email"];
        $phone=$_POST["phone-number"];
        $payment=$_POST["payment-method"];

        $cart= Cart::content();
        $total=(int)Cart::subtotal();
        $items=Cart::count();

        $result=Customer::where('phone',$phone)->first();
      if($result == NULL)
      {
        $result=Customer::insert(
            ['first_name'=>$first_name,'last_name'=>$last_name,'address'=>$address,'ward'=>$ward,'district'=>$district,'province'=>$province,'zip'=>$zip,'email'=>$email,'phone'=>$phone]
        );
      }
    
     
       
         
        $IDcustomer=Customer::where('phone',$phone)->select('id')->first();
    
        $result=Bill::insert(['id_customer'=>$IDcustomer['id'],'payment'=>$payment,'total'=>$total,'quantity'=>$items]);
        $IDBill=Bill::latest()->select('id')->first();
        
       foreach($cart as $cart){
      $result=BillDetail::insert(['id_bill'=>$IDBill['id'],'id_product'=>$cart->id,'name_product'=>$cart->name,'price_product'=>$cart->price,'quantity'=>$cart->qty,'subtotal'=>$cart->subtotal]);
     $result=Product::where('id',$cart->id)->select('sale','household')->first();
    
        $sale= $result['sale'] +$cart->qty;
      
        $household=$result['household'] - $sale;
      $result=Product::where('id',$cart->id)->update(['sale'=>$sale,'household'=>$household]);
       }
      Cart::destroy();
     
        return view('cart.done');
    }
   
}
