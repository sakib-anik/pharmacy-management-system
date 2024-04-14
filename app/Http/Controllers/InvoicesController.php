<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Customer;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
        $meta_title = 'Invoices List';
        $invoices = Invoice::all();
        return view('admin.invoices.list', compact('invoices', 'meta_title'));
    }

    public function create()
    {
        $meta_title = 'Add Invoices';
        $customers = Customer::all();
        return view('admin.invoices.add', compact('customers', 'meta_title'));
    }

    public function store(Request $request)
    {
        $invoice = new Invoice;
        $invoice->customers_id = $request->customers_id;
        $invoice->net_total = $request->net_total;
        $invoice->total_amount = $request->total_amount;
        $invoice->total_discount = $request->total_discount;
        $invoice->invoices_date = $request->invoices_date;
        $invoice->save();
        return redirect('admin/invoices')->with('success', 'Invoice Added Successfully.');
    }

    public function delete($id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();
        return redirect('admin/invoices')->with('success', 'Invoice Deleted Successfully.');
    }

    public function edit($id)
    {
        $meta_title = 'Edit Invoices';
        $invoice = Invoice::find($id);
        $customers = Customer::all();
        return view('admin.invoices.edit', compact('invoice', 'customers', 'meta_title'));
    }

    public function update($id, Request $request)
    {
        $invoice = Invoice::find($id);
        $invoice->customers_id = $request->customers_id;
        $invoice->net_total = $request->net_total;
        $invoice->total_amount = $request->total_amount;
        $invoice->total_discount = $request->total_discount;
        $invoice->invoices_date = $request->invoices_date;
        $invoice->save();
        return redirect('admin/invoices')->with('success', 'Invoice Updated Successfully.');
    }
}