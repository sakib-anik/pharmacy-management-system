<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    public function index()
    {
        $meta_title = 'Purchases List';
        $purchases = Purchase::all();
        return view('admin.purchases.list', compact('purchases', 'meta_title'));
    }

    public function create()
    {
        $meta_title = 'Add Purchases';
        $invoices = Invoice::all();
        $suppliers = Supplier::all();
        return view('admin.purchases.add', compact('suppliers', 'invoices', 'meta_title'));
    }

    public function store(Request $request)
    {
        $purchase = new Purchase;
        $purchase->suppliers_id = $request->suppliers_id;
        $purchase->invoices_id = $request->invoices_id;
        $purchase->voucher_number = $request->voucher_number;
        $purchase->purchase_date = $request->purchase_date;
        $purchase->total_amount = $request->total_amount;
        $purchase->payment_status = $request->payment_status;
        $purchase->save();
        return redirect('/admin/purchases')->with('success', 'Purchase added successfully.');
    }

    public function edit($id, Request $request)
    {
        $meta_title = 'Edit Purchases';
        $invoices = Invoice::all();
        $suppliers = Supplier::all();
        $purchases = Purchase::find($id);
        return view('admin.purchases.edit', compact('purchases', 'suppliers', 'invoices', 'meta_title'));
    }

    public function update($id, Request $request)
    {
        $purchase = Purchase::find($id);
        $purchase->suppliers_id = $request->suppliers_id;
        $purchase->invoices_id = $request->invoices_id;
        $purchase->voucher_number = $request->voucher_number;
        $purchase->purchase_date = $request->purchase_date;
        $purchase->total_amount = $request->total_amount;
        $purchase->payment_status = $request->payment_status;
        $purchase->save();
        return redirect('/admin/purchases')->with('success', 'Purchase updated successfully.');
    }

    public function delete($id, Request $request)
    {
        $purchases = Purchase::find($id);
        $purchases->delete();
        return redirect('/admin/purchases')->with('success', 'Purchase deleted successfully.');
    }
}