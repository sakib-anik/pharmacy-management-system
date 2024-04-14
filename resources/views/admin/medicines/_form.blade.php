@if (!empty($medicine))
<form action="{{ url('admin/medicines/edit',$medicine->id) }}" method="post" enctype="multipart/form-data">
@else
<form action="{{ url('admin/medicines/add') }}" method="post" enctype="multipart/form-data">
@endif
                            @csrf
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Medicine Name<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="name" value="{{ old('name',!empty($medicine) ? $medicine->name : '') }}" type="text" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Packing<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="packing" type="text" value="{{ old('packing',!empty($medicine) ? $medicine->packing : '') }}" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Generic Name<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="generic_name" value="{{ old('generic_name',!empty($medicine) ? $medicine->generic_name : '') }}" type="text" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Supplier Name<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="supplier_name" value="{{ old('supplier_name',!empty($medicine) ? $medicine->supplier_name : '') }}" type="text" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label"></label><div class="col-sm-9"><input type="submit" class="btn btn-primary" value="Submit"></div></div>
                        </form>
