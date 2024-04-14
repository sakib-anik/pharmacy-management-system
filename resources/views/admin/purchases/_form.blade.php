<form action="{{ !empty($purchases) ? url('admin/purchases/edit',$purchases->id) : url('admin/purchases/add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Suppliers Name<span class="text-danger"> *</span></label><div class="col-sm-9">
                                <select name="suppliers_id" id="" class="form-control">
                                    <option value="">Select Suppliers Name</option>
                                    @if (!empty($suppliers))
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{ $supplier->id }}" {{ !empty($purchases) ? (($supplier->id == $purchases->suppliers_id) ? "selected" : "" ) : "" }}>{{ $supplier->suppliers_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Invoices ID<span class="text-danger"> *</span></label><div class="col-sm-9">
                                <select name="invoices_id" id="" class="form-control">
                                    <option value="">Select Invoices ID</option>
                                    @if (!empty($invoices))
                                        @foreach ($invoices as $invoice)
                                            <option value="{{ $invoice->id }}" {{ !empty($purchases) ? (($invoice->id == $purchases->invoices_id) ? "selected" : "" ) : "" }}>{{ $invoice->id }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Voucher Number<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="voucher_number" type="text" value="{{ old('voucher_number', !empty($purchases) ? $purchases->voucher_number : '') }}" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Purchase Date<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="purchase_date" value="{{ old('purchase_date', !empty($purchases) ? $purchases->purchase_date : '') }}" type="date" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Total Amount<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="total_amount" value="{{ old('total_amount', !empty($purchases) ? $purchases->total_amount : '') }}" type="text" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Payment Status<span class="text-danger"> *</span></label><div class="col-sm-9">
                                <select name="payment_status" id="" class="form-control">
                                    <option value="">Select Payment Status</option>
                                    <option value="1" {{ !empty($purchases) ? ((1 == $purchases->payment_status) ? "selected" : "" ) : "" }}>Pending</option>
                                    <option value="2" {{ !empty($purchases) ? ((2 == $purchases->payment_status) ? "selected" : "" ) : "" }}>Accept</option>
                                    <option value="3" {{ !empty($purchases) ? ((3 == $purchases->payment_status) ? "selected" : "" ) : "" }}>Cancel</option>
                                </select>
                            </div></div>

    <div class="row mb-3"><label for="" class="col-sm-3 col-form-label"></label><div class="col-sm-9"><input type="submit" class="btn btn-primary" value="{{ !empty($purchases) ? "Update" : "Submit" }}"></div></div>
                        </form>
