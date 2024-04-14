@extends('admin.layouts.app')
@section('content')
<div class="pagetitle">
    <h1>Medicines List</h1>
</div>
<section class="section">
    <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ url('admin/medicines/add') }}" class="btn btn-primary">Add New Medicine</a>
                        </h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Packing</th>
                                    <th scope="col">Generic Name</th>
                                    <th scope="col">Supplier Name</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($medicines))
                                @foreach ($medicines as $medicine)
                                <tr class="text-start">
                                    <th scope="row">{{ $medicine->id }}</th>
                                    <td >{{ $medicine->name }}</td>
                                    <td >{{ $medicine->packing }}</td>
                                    <td >{{ $medicine->generic_name }}</td>
                                    <td >{{ $medicine->supplier_name }}</td>
                                    <td >{{ date('d-m-Y H:i:s',strtotime($medicine->created_at)) }}</td>
                                    <td >
                                        <a class="btn btn-success" href="{{ url('admin/medicines/edit/'.$medicine->id) }}"><i class="bi bi-pencil-square"></i></a>
                                        <a class="btn btn-danger" href="{{ url('admin/medicines/delete/'.$medicine->id) }}" onclick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash"></i></a>
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
