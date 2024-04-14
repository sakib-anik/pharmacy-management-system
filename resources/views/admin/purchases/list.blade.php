@extends('admin.layouts.app')
@section('content')
<div class="pagetitle">
    <h1>Purchases List</h1>
</div>
<section class="section">
    <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ url('admin/purchases/add') }}" class="btn btn-primary">Add New Purchase</a>
                        </h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Suppliers Name</th>
                                    <th scope="col">Invoices ID</th>
                                    <th scope="col">Voucher Number</th>
                                    <th scope="col">Purchase Date</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Payment Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($purchases))
                                @foreach ($purchases as $purchase)
                                <tr class="text-start">
                                    <th scope="row">{{ $purchase->id }}</th>
                                    <td >{{ $purchase->getSupplierName->suppliers_name }}</td>
                                    <td >{{ $purchase->invoices_id }}</td>
                                    <td >{{ $purchase->voucher_number }}</td>
                                    <td >{{ date('d-m-Y',strtotime($purchase->purchase_date)) }}</td>
                                    <td >{{ $purchase->total_amount }}</td>
                                    <td >{{ ($purchase->payment_status == 1) ? "Pending" : ($purchase->payment_status == 2 ? "Accept" : "Cancel") }}</td>
                                    <td >
                                        <a class="btn btn-success" href="{{ url('admin/purchases/edit/'.$purchase->id) }}"><i class="bi bi-pencil-square"></i></a>
                                        <a class="btn btn-danger" href="{{ url('admin/purchases/delete/'.$purchase->id) }}" onclick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection
