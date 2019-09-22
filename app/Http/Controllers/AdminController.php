<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pants;
use App\Product;
use App\Type;
use App\Bill;
use App\Customer;
use App\BillDetail;
use PDF;
class AdminController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    public function index()
    {
        $bill=Bill::count();
        $quantity=BillDetail::count('quantity');
        $total=Bill::sum('total');
        $customer=Customer::count();
          $Jan = Bill::whereMonth('created_at', 1)->sum('total');
            $Feb = Bill::whereMonth('created_at', 2)
                ->sum('total') + 0;
            $Mar = Bill::whereMonth('created_at', 3)
                ->sum('total') + 0;
            $Apr = Bill::whereMonth('created_at', 4)
                ->sum('total') + 0;
            $May = Bill::whereMonth('created_at', 5)
                ->sum('total') + 0;

                
            $Jun = Bill::whereMonth('created_at', 6)
                ->sum('total') + 0;
            $Jul = Bill::whereMonth('created_at', 7)
                ->sum('total') + 0;
            $Aug = Bill::whereMonth('created_at', 8)
                ->sum('total') + 0;
            $Sept = Bill::whereMonth('created_at', 9)
                ->sum('total') + 0;
            $Oct = Bill::whereMonth('created_at', 10)
                ->sum('total') + 0;
            $Nov = Bill::whereMonth('created_at', 11)
                ->sum('total') + 0;
            $Dec = Bill::whereMonth('created_at', 12)
                ->sum('total') + 0;
            $Month = array(
                $Jan,
                $Feb,
                $Mar,
                $Apr,
                $May,
                $Jun,
                $Jul,
                $Aug,
                $Sept,
                $Oct,
                $Nov,
                $Dec
                
            );
            $time = date("m");
            $time = (int) $time;
            for ($i = 0; $i < 12; $i ++) {
                if ($i >= $time) {
                    $Month[$i] = 0;
                }
            }
            $result = json_encode(array(
                 
                    [
                        "Jan",
                        $Month[0]
                    ],
                    [
                        "Feb",
                        $Month[1]
                    ],
                    [
                        "Mar",
                        $Month[2]
                    ],
                    [
                        "Apr",
                        $Month[3]
                    ],
                    [
                        "May",
                        $Month[4]
                    ],
                    [
                        "Jun",
                        $Month[5]
                    ],
                    [
                        "Jul",
                        $Month[6]
                    ],
                    [
                        "Aug",
                        $Month[7]
                    ],
                    [
                        "Sept",
                        $Month[8]
                    ],
                    [
                        "Oct",
                        $Month[9]
                    ],
                    [
                        "Nov",
                        $Month[10]
                    ],
                    [
                        "Dec",
                        $Month[11]
                    
                ]
            ));
           
        return view('admin.index',compact('bill','quantity','total','customer','result'));
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
    
        $time=Bill::where('id',$id)->select('created_at')->get();
       
        $customer=Customer::where('id','=',$id_customer['id_customer'])->select('*')->get();
        
        return view('admin.detailbill',compact('result','customer','total','time','id_bill'));   
    }
    public function PrintPDF($id)
    { 
        
        $id_bill=$id;
      
        $result=BillDetail::leftjoin('bill','bill.id','=','detail_bill.id_bill')->leftjoin('customer','customer.id','=','bill.id_customer')->where('id_bill',$id_bill)->get();
        $id_customer=Bill::where('id',$id)->select('id_customer')->first();
        $total=Bill::where('id',$id)->select('id_customer')->select('total')->first();
        $total=$total['total'];
    
        $time=Bill::where('id',$id)->select('created_at')->get();
       
        $customer=Customer::where('id','=',$id_customer['id_customer'])->select('*')->get();
        
      $pdf = PDF::loadView('admin.dpf',compact('result','customer','total','time','id_bill'));   
      
        return $pdf->download('data.pdf');
     
    }
}
