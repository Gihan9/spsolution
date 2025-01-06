<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
            
            
    public function deliveryget(){

        return view("delivery");
    }
    public function deliverystore(Request $request){
        $request->validate([
            'pickup_name'=>'required|min:1|max:20',
            'pickup_address'=>'required|min:1|max:50',
            'pickup_contact'=>'required|numeric|digits:10',
            'pickup_email'=>'required|email',  
            'delivery_address'=>'required|min:1|max:50',
            'delivery_name'=>'required|min:1|max:20',
            'delivery_contact'=>'required|numeric|digits:10',
            'delivery_email'=>'required|email',  
            'Type_of_good'=>'required|min:1|max:20',
            'delivery_provider'=>'required|min:1|max:20',
            'priority'=>'required|min:1|max:20',
            'pickup_date'=>'required|min:1|max:20',
            'pickup_time'=>'required|min:1|max:20',
            'package_description'=>'required|min:1|max:20',
            'length'=>'required|min:1|max:20',
            'height'=>'required|min:1|max:20',
            'width'=>'required|min:1|max:20',
           
            
               
         ]);

         $delivery = new Delivery();
         $delivery->pickup_address = $request->pickup_address;
         $delivery->Pickup_name = $request->Pickup_name;
         $delivery->Pickup_contact = $request->Pickup_contact;
         $delivery->Pickup_email = $request->Pickup_email;
         $delivery->delivery_address = $request->delivery_address;
         $delivery->delivery_contact = $request->delivery_contact;


         $delivery->delivery_email = $request->delivery_email;
         $delivery->Type_of_good = $request->Type_of_good;
         $delivery->status = $request->status;
         $delivery->delivery_provider = $request->delivery_provider;
         $delivery->pickup_date = $request->pickup_date;
         $delivery->Pickup_time = $request->Pickup_time;


         $delivery->package_description = $request->package_description;
         $delivery->length = $request->length;
         $delivery->height = $request->height;
         $delivery->width = $request->width;
         $delivery->weight = $request->weight;
        
        
         $res = $delivery->save();
         if($res){
            $request->session()->put('loginId',$delivery->id);
            
            return redirect('delivery')->with('message','Delivery Deatils Submitted Successfuly ');
            

         }else{
                return back()->with('fail','Something wrong');
         }

    }

    public function deliverydata(){

        
    $data = Delivery::All()->paginate(15);
        return view('deliverydata',compact('data'));

       
    }

    public function deliverydelete(Request $request){

       
       
            $data = Delivery::where('id', '=', '$request->id');
        
            if($data->status == 'pending'){

                DB::table('delivery')->where('id' ,'=',$request->id)->delete();

            }else{
                return back()->with('fail','Already Shipped');
            }
        
    }
}
