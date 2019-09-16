<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pants;
use App\Product;
use App\Type;
use App\Bill;
use App\Customer;
use App\BillDetail;
class AdminController extends Controller
{
    public function index()
    {
        
        return view('admin.index');
    }
    public function product()
    {
        $result=Product::leftjoin('type','product1.id_type','=','type.id')->select('*','type.id AS id_type','product1.id AS id')->get();
        $type=Type::get();
        return view('admin.product',compact('result','type'));
    }
    public function bill()
    {
        $result=Bill::leftjoin('customer','customer.id','=','bill.id_customer')->select('*','bill.id AS id')->get();
        return view('admin.bill',compact('result'));
    }
    public function customer()
    {
        $result=Customer::get();
        return view('admin.customer',compact('result'));
    }
    
    public function showType(Request $request)
    {
        $id = $request->post('id_type');
        $id_category=$request->post('id_category');
        $data = Type::where('id', '<>', $id)->where('id_category',$id_category)->get();
        $type = Type::where('id', $id)->select('*')->first();
        
    
            $output = '<option value="' . $type->id . '" selected>' . $type->name_type . ' </option>';
       
        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name_type . '</option>';
        }
        
        echo $output;
    }
    public function AddProduct(Request $request)
    {
        $type = $request->post('type');
        $name = $request->post('name');
        $price = $request->post('price');
        $image = $request->post('image');
        $household = $request->post('household');
        $description= $request->post('description');
      
        $result=Product::insert(['name_product'=>$name,'price_product'=>$price,'id_type'=>$type,'description'=>$description,'image'=>$image,'sale'=>0,'household'=>$household]);
        if($result == true)
        {
            return redirect('product')->with('Success', 'Add new product successfully  !');
        }
        else{
            return redirect('product')->with('Fail', 'Add new product Failly  !');
        }
    }
    public function EditProduct(Request $request)
    {
        $type = $request->post('type');
        $name = $request->post('name');
        $price = $request->post('price');
        $image = $request->post('image');
        $household = $request->post('household');
        $description= $request->post('description');
        $id=$request->post('id');
     
       $result=Product::where('id',$id)->update(['name_product'=>$name,'price_product'=>$price,'id_type'=>$type,'description'=>$description,'image'=>$image,'household'=>$household]);

       if($result == true)
       {
           return redirect('product')->with('Success', 'Edit data product successfully  !');
       }
       else{
           return redirect('product')->with('Fail', 'Edit data product Failly  !');
       }
    }
    public function DetailBill($id)
    {
        $id_bill=$id;
      
        $result=BillDetail::leftjoin('bill','bill.id','=','detail_bill.id_bill')->leftjoin('customer','customer.id','=','bill.id_customer')->where('id_bill',$id_bill)->get();
        $id_customer=Bill::where('id',$id)->select('id_customer')->first();
        $total=Bill::where('id',$id)->select('id_customer')->select('total')->first();
        $total=$total['total'];
    //  dd($id_customer['id_customer']);
        $time=Bill::where('id',$id)->select('created_at')->get();
       
        $customer=Customer::where('id','=',$id_customer['id_customer'])->select('*')->get();
        
        return view('admin.detailbill',compact('result','customer','total','time','id_bill'));   
    }
}
