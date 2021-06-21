@extends('layout.primary')

@section('sidebar')
    @parent

@endsection

@section('content')
<form method="POST" action="{{ route('coffee.store') }}">
    @csrf
    <div class="form-group">
        <label for="">Nama Kopi</label>
        <input type="text" class="form-control" name="Name">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="input_file_span">Pilih Gambar</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="input_file" name="FileName"
                aria-describedby="input_file_span" onchange=loadFile()>
            <label class="custom-file-label" for="input_file" id="input_file_label">Choose file</label>
        </div>
    </div>

    <div class="form-group">
        <label for="input_desc">Deskripsi</label>
        <textarea id="input_desc" name="Description" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

<script>
        function loadFile(){
            var fullPath = document.getElementById('input_file').value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                    document.getElementById('input_file_label').innerHTML = filename
                }
    };
</script>
