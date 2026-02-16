@extends('layouts.master')

@section('title', 'Edit Kegiatan')

@section('content')
<div class="section">
    <div class="sectionHead">
        <h2>Edit Kegiatan</h2>
    </div>

    <div class="bignews-wrapper">

        <form action="{{ route('kegiatan.update', $kegiatan) }}"
      method="POST"
      enctype="multipart/form-data">    
            @csrf
            @method('PUT')

            {{-- IMAGE SECTION --}}
            <div class="image-section">

                <div class="image-preview">
                    @if($kegiatan->image)
                        <img id="previewImage"
                             src="{{ asset('storage/'.$kegiatan->image) }}"
                             alt="Preview"
                             width="150">
                    @else
                        <img id="previewImage"
                             src="https://via.placeholder.com/150x150?text=No+Image"
                             alt="No Image"
                             width="150">
                    @endif
                </div>

                <div class="image-info">
                    <label class="btn-save">
                        Change Image
                        <input type="file" name="image" id="imageInput" hidden>
                    </label>

                    @error('image')
                        <p style="color:red;">{{ $message }}</p>
                    @enderror

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
                           value="{{ old('name', $kegiatan->name) }}"
                           required>

                    @error('name')
                        <small style="color:red;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tanggal <span>*</span></label>
                    <input type="date"
                           name="date"
                           value="{{ old('date', \Carbon\Carbon::parse($kegiatan->date)->format('Y-m-d')) }}"
                           required>

                    @error('date')
                        <small style="color:red;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group" style="grid-column: span 2;">
                    <label>Deskripsi <span>*</span></label>
                    <textarea name="desc" rows="5" required>{{ old('desc', $kegiatan->desc) }}</textarea>

                    @error('desc')
                        <small style="color:red;">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- FOOTER --}}
            <div class="form-footer">
                <a href="{{ route('kegiatan.index') }}" class="btn-upload">
                    Kembali
                </a>

                <button type="submit" class="btn-save" style="margin-left:20px;">
                    Update
                </button>
            </div>

        </form>

    </div>
</div>

{{-- JS Preview Image --}}
<script>
document.getElementById('imageInput').addEventListener('change', function(e){
    const reader = new FileReader();
    reader.onload = function(){
        document.getElementById('previewImage').src = reader.result;
    }
    reader.readAsDataURL(e.target.files[0]);
});
</script>

@endsection
