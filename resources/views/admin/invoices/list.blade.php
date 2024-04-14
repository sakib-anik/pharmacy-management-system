@extends('admin.layouts.app')
@section('content')
<div class="pagetitle">
    <h1>Invoices List</h1>
</div>
<section class="section">
    <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ url('admin/invoices/add') }}" class="btn btn-primary">Add New Invoice</a>
                        </h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Net Total</th>
                                    <th scope="col">Invoices Date</th>
                                    <th scope="col">Customers Name</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Total Discount</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($invoices))
                                @foreach ($invoices as $invoice)
                                <tr class="text-start">
                                    <th scope="row">{{ $invoice->id }}</th>
                                    <td >{{ $invoice->net_total }}</td>
                                    <td >{{ date('d-m-Y',strtotime($invoice->invoices_date)) }}</td>
                                    <td >{{ $invoice->getCustomersName->name }}</td>
                                    <td >{{ $invoice->total_amount }}</td>
                                    <td >{{ $invoice->total_discount }}</td>
                                    <td >{{ date('d-m-Y H:i:s',strtotime($invoice->created_at)) }}</td>
                                    <td >
                                        <a class="btn btn-success" href="{{ url('admin/invoices/edit/'.$invoice->id) }}"><i class="bi bi-pencil-square"></i></a>
                                        <a class="btn btn-danger" href="{{ url('admin/invoices/delete/'.$invoice->id) }}" onclick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash"></i></a>
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
