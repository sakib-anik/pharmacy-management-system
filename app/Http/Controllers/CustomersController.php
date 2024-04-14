<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function customers(Request $request)
    {
        $meta_title = 'Customers List';
        $customers = Customer::all();
        return view('admin.customers.list', ['customers' => $customers, 'meta_title' => $meta_title]);
        // echo 'EC';
        // die();
    }

    public function add_customers(Request $request)
    {
        $meta_title = 'Add Customer';
        // echo 'ADD';
        // die();
        return view('admin.customers.add', compact('meta_title'));
    }

    public function insert_add_customers(Request $request)
    {
        // dd($request->all());
        $customer = new Customer;
        $customer->name = trim($request->name);
        $customer->contact_number = trim($request->contact_number);
        $customer->address = trim($request->address);
        $customer->doctor_name = trim($request->doctor_name);
        $customer->doctor_address = trim($request->doctor_address);
        $customer->save();
        return redirect('admin/customers')->with('success', 'Customer created successfully.');
    }

    public function edit_customers($id)
    {
        $meta_title = 'Edit Customer';
        $customer = Customer::find($id);
        return view('admin.customers.edit', compact('customer', 'meta_title'));
    }

    public function update_customers($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->name = trim($request->name);
        $customer->contact_number = trim($request->contact_number);
        $customer->address = trim($request->address);
        $customer->doctor_name = trim($request->doctor_name);
        $customer->doctor_address = trim($request->doctor_address);
        $customer->save();
        return redirect('admin/customers')->with('success', 'Customer Updated Successfully.');
    }

    public function delete_customers($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('admin/customers')->with('success', 'Customer Deleted Successfully.');
    }
}