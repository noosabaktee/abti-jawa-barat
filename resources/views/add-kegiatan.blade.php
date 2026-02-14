@extends('layouts.master')

@section('title', 'Add Kegiatan')

@section('content')
<div>
    <div class="section">
        <div class="sectionHead">
            <div>
                <h2>Tambah Kegiatan</h2>
            </div>
        </div>

        <div class="bignews-wrapper">

            <form action="{{ route('kegiatan.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                {{-- IMAGE SECTION --}}
                <div class="image-section">

                    <div class="image-preview">
                        <img id="previewImage"
                             src="https://via.placeholder.com/150x150?text=No+Image"
                             alt="Preview"
                             style="max-width:150px;">
                    </div>

                    <div class="image-info">
                        <label class="btn-save">
                            Upload Image
                            <input type="file"
                                   name="image"
                                   id="imageInput"
                                   accept="image/*"
                                   hidden>
                        </label>

                        <p class="hint" style="padding-top:10px;">
                            Max 2MB (JPG, JPEG, PNG)
                        </p>
                    </div>

                </div>

                {{-- FORM FIELD --}}
                <div class="form-grid">

                    <div class="form-group">
                        <label>Nama Kegiatan <span>*</span></label>
                        <input type="text"
                               name="name"
                               value="{{ old('name') }}"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal <span>*</span></label>
                        <input type="date"
                               name="date"
                               value="{{ old('date') }}"
                               required>
                    </div>

                    <div class="form-group" style="grid-column: span 2;">
                        <label>Deskripsi <span>*</span></label>
                        <textarea name="desc"
                                  rows="5"
                                  required>{{ old('desc') }}</textarea>
                    </div>

                </div>

                {{-- ERROR VALIDATION --}}
                @if ($errors->any())
                    <div style="color:red; margin-top:15px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- FOOTER --}}
                <div class="form-footer">
                    <a href="{{ route('kegiatan.index') }}" class="btn-upload">
                        Kembali
                    </a>

                    <button type="submit"
                            class="btn-save"
                            style="margin-left:20px;">
                        Simpan
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

{{-- PREVIEW SCRIPT --}}
<script>
document.getElementById('imageInput').addEventListener('change', function(e) {

    const file = e.target.files[0];

    if (!file) return;

    // Validasi ukuran client-side (optional safety)
    if (file.size > 2048 * 1024) {
        alert('File terlalu besar. Maks 2MB.');
        e.target.value = '';
        return;
    }

    const reader = new FileReader();

    reader.onload = function(event) {
        document.getElementById('previewImage').src = event.target.result;
    };

    reader.readAsDataURL(file);
});
</script>

@endsection
