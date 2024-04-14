@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h5>Add Invoices</h5>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Invoices</h5>
                        <form action="{{ url('admin/invoices/add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Customers Name<span class="text-danger"> *</span></label><div class="col-sm-9"><select name="customers_id" type="text" class="form-control" required>
                                <option value="">Select Customers Name</option>
                                @if (!empty($customers))
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                    @endforeach
                                @endif
                                </select>
                                </div>
                            </div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Net Total<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="net_total" type="text" class="form-control" required value="{{ old('net_total') }}"></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Invoices Date<span class="text-danger"> *</span></label><div class="col-sm-9"><input type="date" id="" name="invoices_date" class="form-control" value="{{ old('invoices_date') }}"></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Total Amount<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="total_amount" type="text" class="form-control" required value="{{ old('total_amount') }}"></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Total Discount<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="total_discount" value="{{ old('total_discount') }}" id="" class="form-control"></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label"></label><div class="col-sm-9"><input type="submit" class="btn btn-primary" value="Submit"></div></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
