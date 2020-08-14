<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;

use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::with('company')->get();
        return view('customers', compact('customers'));
    }

    public function customersActive()
    {
        $customers = Customer::where('active', '=', 'Hoạt động')->with('company')->get();
        return view('customers', compact('customers'));
    }

    public function customersNonActive()
    {
        $customers = Customer::where('active', '=', 'Đã xóa')->with('company')->get();
        return view('customers', compact('customers'));
    }

    public function createCustomer()
    {
        return view('createCustomer');
    }

    public function validateCustomer(CustomerRequest $request)
    {
        $success = "Thêm mới thành công";
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->company_id = $request->company_id;
        $customer->save();

        return view('createCustomer', compact('success'));
    }

    public function editCustomer($id)
    {
        $customer = Customer::findOrFail($id);
        return view('editCustomer',compact('customer'));
    }

    public function updateCustomer(CustomerRequest $request)
    {
        $success = "Chỉnh sửa thành công";
        $customer = Customer::findOrFail($request->id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->company_id = $request->company_id;
        $customer->save();

        return view('createCustomer', compact('success'));
    }

}
