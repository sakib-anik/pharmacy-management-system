@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h5>Edit Customer</h5>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Customer</h5>
                        <form action="{{ url('admin/customers/edit/'.$customer->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Name<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="name" type="text" value="{{ $customer->name }}" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Contact Number<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="contact_number" value="{{ $customer->contact_number }}" type="text" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Address</label><div class="col-sm-9"><textarea name="address" id="" class="form-control">{{ $customer->address }}</textarea></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Doctor Name<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="doctor_name" type="text" class="form-control" value="{{ $customer->doctor_name }}" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Doctor Address</label><div class="col-sm-9"><textarea name="doctor_address" id="" class="form-control">{{ $customer->doctor_address }}</textarea></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label"></label><div class="col-sm-9"><input type="submit" class="btn btn-primary" value="Update"></div></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
