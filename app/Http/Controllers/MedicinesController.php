<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\MedicinesStock;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{
    public function medicines()
    {
        $meta_title = 'Medicines List';
        $medicines = Medicine::all();
        return view('admin.medicines.list', compact('medicines', 'meta_title'));
    }

    public function add_medicines()
    {
        $meta_title = 'Add Medicine';
        return view('admin.medicines.add', compact('meta_title'));
    }

    public function store_medicines(Request $request)
    {
        // if (!empty($id)) {
        //     $medicine = Medicine::find($id);
        //     $medicine->name = $request->name;
        //     $medicine->packing = $request->packing;
        //     $medicine->generic_name = $request->generic_name;
        //     $medicine->supplier_name = $request->supplier_name;
        //     $medicine->save();
        //     return redirect('admin/medicines')->with('success', 'Medicine Updated successfully.');
        // } else {
        $medicine = new Medicine;
        $medicine->name = $request->name;
        $medicine->packing = $request->packing;
        $medicine->generic_name = $request->generic_name;
        $medicine->supplier_name = $request->supplier_name;
        $medicine->save();
        return redirect('admin/medicines')->with('success', 'Medicine added successfully.');
        // }
    }

    public function add_update($id, Request $request)
    {
        $medicine = Medicine::find($id);
        $medicine->name = $request->name;
        $medicine->packing = $request->packing;
        $medicine->generic_name = $request->generic_name;
        $medicine->supplier_name = $request->supplier_name;
        $medicine->save();
        return redirect('admin/medicines')->with('success', 'Medicine Updated successfully.');
    }

    public function edit_medicines($id)
    {
        $meta_title = 'Edit Medicine';
        $medicine = Medicine::find($id);
        return view('admin.medicines.edit', compact('medicine', 'meta_title'));
    }

    public function medicines_delete($id)
    {
        $medicine = Medicine::find($id);
        $medicine->delete();
        return redirect('admin/medicines')->with('success', 'Medicine deleted successfully.');
    }

    public function medicines_stock_list()
    {
        // echo 'string';
        // die();
        $meta_title = 'Medicines Stock List';
        $medicines_stock = MedicinesStock::all();
        return view('admin.medicines_stock.list', compact('medicines_stock', 'meta_title'));
    }

    public function medicines_stock_add()
    {
        $meta_title = 'Add Medicines Stock';
        $medicines = Medicine::all();
        return view('admin.medicines_stock.add', compact('medicines', 'meta_title'));
    }

    public function medicines_stock_store(Request $request)
    {
        // dd($request->all());
        $medicine_stock = new MedicinesStock;
        $medicine_stock->medicines_id = $request->medicine_id;
        $medicine_stock->batch_id = $request->batch_id;
        $medicine_stock->expiry_date = $request->expiry_date;
        $medicine_stock->quantity = $request->quantity;
        $medicine_stock->mrp = $request->mrp;
        $medicine_stock->rate = $request->rate;
        $medicine_stock->save();
        return redirect('admin/medicines_stock')->with('success', 'Medicines Stock Saved Successfully.');
    }

    public function medicines_stock_delete($id)
    {
        $medicines_stock = MedicinesStock::find($id);
        $medicines_stock->delete();
        return redirect('admin/medicines_stock')->with('success', 'Medicines Stock Deleted Successfully.');
    }

    public function medicines_stock_edit($id)
    {
        $meta_title = 'Edit Medicines Stock';
        $medicines = Medicine::all();
        $medicines_stock = MedicinesStock::find($id);
        return view('admin.medicines_stock.edit', compact('medicines', 'medicines_stock', 'meta_title'));
    }

    public function medicines_stock_update($id, Request $request)
    {
        $medicines_stock = MedicinesStock::find($id);
        $medicines_stock->medicines_id = $request->medicine_id;
        $medicines_stock->batch_id = $request->batch_id;
        $medicines_stock->expiry_date = $request->expiry_date;
        $medicines_stock->quantity = $request->quantity;
        $medicines_stock->mrp = $request->mrp;
        $medicines_stock->rate = $request->rate;
        $medicines_stock->save();
        return redirect('admin/medicines_stock')->with('success', 'Medicines Stock Updated Successfully.');
    }
}