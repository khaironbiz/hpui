<div class="p2">
    <div class="form-group">
        <input type="text" name="name" id="name" value="{{ $data->nama_op }}" class="form-control"
            placeholder="name product">
    </div>
    <div class="form-group">
        <input type="text" name="name" id="name" value="{{ $data->id_profesi }}" class="form-control"
               placeholder="name product">
    </div>
    <div class="form-group mt-2">
        <button class="btn btn-warning" onClick="update({{ $data->id }})">Update</button>
    </div>
</div>
