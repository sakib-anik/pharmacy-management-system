@extends('admin.layouts.app')
@section('content')
<div class="pagetitle">
    <h1>Medicines Stock List</h1>
</div>
<section class="section">
    <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ url('admin/medicines_stock/add') }}" class="btn btn-primary">Add New Medicine Stock</a>
                        </h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Medicine Name</th>
                                    <th scope="col">Batch ID</th>
                                    <th scope="col">Expiry Date</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">MRP</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($medicines_stock))
                                @foreach ($medicines_stock as $medicines_stock_item)
                                <tr class="text-start">
                                    <th scope="row">{{ $medicines_stock_item->id }}</th>
                                    <td>{{ $medicines_stock_item->getMedicineName->name }}</td>
                                    <td>{{ $medicines_stock_item->batch_id }}</td>
                                    <td>{{ date('d-m-Y',strtotime($medicines_stock_item->expiry_date)) }}</td>
                                    <td>{{ $medicines_stock_item->quantity }}</td>
                                    <td>{{ $medicines_stock_item->mrp }}</td>
                                    <td>{{ $medicines_stock_item->rate }}</td>
                                    <td>{{ date('d-m-Y H:i:s',strtotime($medicines_stock_item->created_at)) }}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ url('admin/medicines_stock/edit/'.$medicines_stock_item->id) }}"><i class="bi bi-pencil-square"></i></a>
                                        <a class="btn btn-danger" href="{{ url('admin/medicines_stock/delete/'.$medicines_stock_item->id) }}" onclick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash"></i></a>
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
