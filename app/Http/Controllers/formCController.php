<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class formCController extends Controller
{
    public function show_form()
    {
        
        // session()->put('username','Ramu');  /**like this we can assign value to session**/
        $customers = Customer::query()->paginate(10);
        
        return view('customer.sign_in',compact('customers'));
        // return session()->get('username');    /**like this we can get value from session**/
    }

    public function customercreate(Request $request){
        // $request->validate(([
        //     'name' => 'required',
        //     'email' => 'required',
        // ]));
        $customer = new Customer();
        $customer->name = 'fjhadkf'; //$request->get('name');
        $customer->email = $request->get('email');
        $customer->password = $request->get('password');
        $customer->address1 = $request->get('add1');
        $customer->address2 = $request->get('add1');
        // dd($customer);
        $customer->save();
        session()->forget('username'); /**like this we can remove/delete value from session */
        session()->flush(); /**like this we can remove/delete all values from session */

        return redirect()->route('customer.signin')->with('success', 'Record created successfully.'); 
         /**with and flash messages are same  
          * with('success', 'Record created successfully.');
          * flash('success', 'Record created successfully.');
          * session()->flash('success', 'Record created successfully.');
          we can call it in blade 
           */
    }
    public function customeredit($id){
        $customer = Customer::find($id);
        $edit = true;
        return view('customer.sign_in',compact('customer','edit'));
    }
    public function customerupdate(Request $request, $id)
    {
        $customer = Customer::find($id);
        // $customer->name = $request->get('name');
        // $customer->email = $request->get('email');
        // $customer->password = $request->get('password');
        // $customer->address1 = $request->get('add1');
        // $customer->address2 = $request->get('add1');
        // $customer->save();
        $customer->update(
            [
                // 'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => $request->get('password'),
                'address1' => $request->get('add1'),
                'address2' => $request->get('add1'),
            ]
            );
        return redirect()->route('customer.signin')->with('success', 'Record updated successfully.');
    }
    public function customerdelete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customer.signin')->with('success', 'Record deleted successfully.');
    }
    
}
 