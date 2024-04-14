@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Customers List</h1>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ url('admin/customers/add') }}" class="btn btn-primary">Add New Customer</a>
                        </h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Doctor Name</th>
                                    <th scope="col">Doctor Address</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($customers))
                                @foreach ($customers as $customer)
                                <tr class="text-start">
                                    <th scope="row">{{ $customer->id }}</th>
                                    <td >{{ $customer->name }}</td>
                                    <td >{{ $customer->contact_number }}</td>
                                    <td >{{ $customer->address }}</td>
                                    <td >{{ $customer->doctor_name }}</td>
                                    <td >{{ $customer->doctor_address }}</td>
                                    <td >{{ date('d-m-Y H:i:s',strtotime($customer->created_at)) }}</td>
                                    <td >
                                        <a class="btn btn-success" href="{{ url('admin/customers/edit/'.$customer->id) }}"><i class="bi bi-pencil-square"></i></a>
                                        <a class="btn btn-danger" href="{{ url('admin/customers/delete/'.$customer->id) }}" onclick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash"></i></a>
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
