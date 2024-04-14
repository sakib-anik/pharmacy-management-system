<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index()
    {
        // echo 'index';
        // die();
        $meta_title = 'Suppliers List';
        $suppliers = Supplier::all();
        return view('admin.suppliers.list', compact('suppliers', 'meta_title'));
    }

    public function create()
    {
        $meta_title = 'Add Suppliers';
        return view('admin.suppliers.add', compact('meta_title'));
    }

    public function store(Request $request)
    {
        $supplier = new Supplier;
        $supplier->suppliers_name = $request->suppliers_name;
        $supplier->suppliers_email = $request->suppliers_email;
        $supplier->contact_number = $request->contact_number;
        $supplier->address = $request->address;
        $supplier->save();
        return redirect('admin/suppliers')->with('success', 'Supplier added successfully.');
    }

    public function edit($id)
    {
        $meta_title = 'Edit Suppliers';
        $supplier = Supplier::find($id);
        return view('admin.suppliers.edit', compact('supplier', 'meta_title'));
    }

    public function update($id, Request $request)
    {
        $supplier = Supplier::find($id);
        $supplier->suppliers_name = $request->suppliers_name;
        $supplier->suppliers_email = $request->suppliers_email;
        $supplier->contact_number = $request->contact_number;
        $supplier->address = $request->address;
        $supplier->save();
        return redirect('admin/suppliers')->with('success', 'Supplier Updated successfully.');
    }

    public function delete($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect('admin/suppliers')->with('success', 'Supplier Deleted Successfully.');
    }
}