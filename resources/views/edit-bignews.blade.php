@extends('layouts.master')

@section('title', 'Edit Big News')

@section('content')
<div class="section">
    <div class="sectionHead">
        <h2>Edit Big News</h2>
    </div>

    <div class="bignews-wrapper">

        <form action="{{ route('big_news.update', $bignews) }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- IMAGE SECTION --}}
            <div class="image-section">

                <div class="image-preview">
                    @if($bignews->image)
                        <img id="previewImage"
                             src="{{ asset('storage/'.$bignews->image) }}"
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
                        Max 2MB (JPG, JPEG, PNG, WEBP)
                    </p>
                </div>

            </div>

            {{-- FORM FIELD --}}
            <div class="form-grid">

                <div class="form-group">
                    <label>Title <span>*</span></label>
                    <input type="text"
                           name="title"
                           value="{{ old('title', $bignews->title) }}"
                           required>

                    @error('title')
                        <small style="color:red;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Slug</label>
                    <input type="text"
                           value="{{ $bignews->slug }}"
                           readonly>
                </div>

                <div class="form-group" style="grid-column: span 2;">
                    <label>Content</label>
                    <textarea name="content" rows="5">
{{ old('content', $bignews->content) }}
                    </textarea>

                    @error('content')
                        <small style="color:red;">{{ $message }}</small>
                    @enderror
                </div>

            </div>

            {{-- FOOTER --}}
            <div class="form-footer">
                <a href="{{ route('big_news.index') }}" class="btn-upload">
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
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('imageInput');
    const preview = document.getElementById('previewImage');

    if (input && preview) {
        input.addEventListener('change', function(e){
            const file = e.target.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function(){
                preview.src = reader.result;
            };
            reader.readAsDataURL(file);
        });
    }
});
</script>

@endsection
