@extends('layouts.master')

@section('title', 'Add Big News')

@section('content')
<div>
    <div class="section">
        <div class="sectionHead">
            <div>
                <h2>Add Big News</h2>
            </div>
        </div>

        <div class="bignews-wrapper">

            <form action="{{ route('big_news.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data">
                @csrf

                {{-- IMAGE --}}
                <div class="image-section">
                    <div class="image-preview">
                        <img id="preview-image"
                             src="https://via.placeholder.com/150x150"
                             width="150">
                    </div>

                    <div class="image-info">
                        <label class="btn-upload">
                            Upload Image
                            <input type="file"
                                   name="image"
                                   id="image-input"
                                   hidden>
                        </label>

                        <p class="hint">
                            Max 2MB (JPG, PNG, WEBP)
                        </p>

                        @error('image')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                {{-- TITLE --}}
                <div class="form-group">
                    <label>Title <span>*</span></label>
                    <input type="text"
                           name="title"
                           value="{{ old('title') }}"
                           required>

                    @error('title')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>

                {{-- CONTENT --}}
                <div class="form-group">
                    <label>Content</label>
                    <textarea name="content" rows="6">{{ old('content') }}</textarea>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn-save">
                        Save
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

{{-- PREVIEW SCRIPT --}}
<script>
document.getElementById('image-input').addEventListener('change', function(e) {
    const reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('preview-image').src = e.target.result;
    }
    reader.readAsDataURL(this.files[0]);
});
</script>

@endsection
