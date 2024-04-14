<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Invoice;
use App\Models\Customer;
use App\Models\Medicine;
use App\Models\Supplier;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\MedicinesStock;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $meta_title = 'Dashboard';
        $totalPurchases = Purchase::count();
        $totalInvoices = Invoice::count();
        $totalSuppliers = Supplier::count();
        $totalCustomers = Customer::count();
        $totalMedicines = Medicine::count();
        $totalMedicinesStock = MedicinesStock::count();
        return view('admin.dashboard.list', compact('totalCustomers', 'totalMedicines', 'totalMedicinesStock', 'totalSuppliers', 'totalInvoices', 'totalPurchases', 'meta_title'));
    }

    public function my_account()
    {
        $meta_title = 'Profile Update';
        $myAccount = User::find(Auth::id());
        return view('admin.my_account.update', compact('myAccount', 'meta_title'));
    }

    public function my_account_update(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users,email,' . Auth::id()
        ]);
        $myAccount = User::find(Auth::id());
        $myAccount->name = $request->name;
        $myAccount->email = $request->email;
        if (!empty($request->password))
            $myAccount->password = Hash::make($request->password);
        if (!empty($request->file('profile_image'))) {
            if (!empty($myAccount->profile_image) && file_exists('upload/profile/' . $myAccount->profile_image)) {
                unlink('upload/profile/' . $myAccount->profile_image);
            }
            $file = $request->file('profile_image');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('upload/profile/', $filename);
            $myAccount->profile_image = $filename;
        }
        $myAccount->save();
        return redirect('admin/my_account')->with('success', 'Profile updated successfully.');
    }
}