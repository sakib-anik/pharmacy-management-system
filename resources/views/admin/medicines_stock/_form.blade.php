<form action="{{ !empty($medicines_stock) ? url('admin/medicines_stock/edit',$medicines_stock->id) : url('admin/medicines_stock/add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Medicine Name<span class="text-danger"> *</span></label><div class="col-sm-9">
                                <select name="medicine_id" id="" class="form-control">
                                    <option value="">Select Medicine Name</option>
                                    @if (!empty($medicines))
                                        @foreach ($medicines as $medicine)
                                            <option value="{{ $medicine->id }}" {{ !empty($medicines_stock) ? (($medicine->id == $medicines_stock->medicines_id) ? "selected" : "" ) : "" }}>{{ $medicine->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Batch ID<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="batch_id" type="text" value="{{ old('batch_id', !empty($medicines_stock) ? $medicines_stock->batch_id : '') }}" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Expiry Date<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="expiry_date" value="{{ old('expiry_date', !empty($medicines_stock) ? $medicines_stock->expiry_date : '') }}" type="date" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Quantity<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="quantity" value="{{ old('quantity', !empty($medicines_stock) ? $medicines_stock->quantity : '') }}" type="text" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">MRP<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="mrp" value="{{ old('mrp', !empty($medicines_stock) ? $medicines_stock->mrp : '') }}" type="text" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Rate<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="rate" value="{{ old('rate', !empty($medicines_stock) ? $medicines_stock->rate : '') }}" type="text" class="form-control" required></div></div>

    <div class="row mb-3"><label for="" class="col-sm-3 col-form-label"></label><div class="col-sm-9"><input type="submit" class="btn btn-primary" value="{{ !empty($medicines_stock) ? "Update" : "Submit" }}"></div></div>
                        </form>
