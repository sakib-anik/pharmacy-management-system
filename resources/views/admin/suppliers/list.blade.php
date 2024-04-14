@extends('admin.layouts.app')
@section('content')
<div class="pagetitle">
    <h1>Suppliers List</h1>
</div>
<section class="section">
    <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ url('admin/suppliers/add') }}" class="btn btn-primary">Add New Supplier</a>
                        </h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Suppliers Name</th>
                                    <th scope="col">Suppliers Email</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($suppliers))
                                @foreach ($suppliers as $supplier)
                                <tr class="text-start">
                                    <th scope="row">{{ $supplier->id }}</th>
                                    <td>{{ $supplier->suppliers_name }}</td>
                                    <td>{{ $supplier->suppliers_email }}</td>
                                    <td>{{ $supplier->contact_number }}</td>
                                    <td>{{ $supplier->address }}</td>
                                    <td>{{ date('d-m-Y H:i:s',strtotime($supplier->created_at)) }}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ url('admin/suppliers/edit/'.$supplier->id) }}"><i class="bi bi-pencil-square"></i></a>
                                        <a class="btn btn-danger" href="{{ url('admin/suppliers/delete/'.$supplier->id) }}" onclick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash"></i></a>
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
