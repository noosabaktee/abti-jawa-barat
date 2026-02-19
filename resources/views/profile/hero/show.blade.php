@extends('layouts.master')

@section('title', 'Profile')

@section('content')
<div>
    <div class="section">
        <div class="sectionHead">
            <div>
                <h2>Database Klub</h2>
                <p></p>
            </div>
            <div class="pill">clubs.*</div>
        </div>

        <div class="sectionBody">

            <form class="" method="POST" action="{{ route('profile-hero.update', $ProfileHero) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="field">
                    <label>Title / Narasi</label>
                    <input type="text" name="title"
                        value="{{ $ProfileHero->title ?? old('title') }}"
                        placeholder="Judul / overlay text">
                </div>
                <div class="field">
                    <label>Type</label>
                    <select name="type" id="cars">
                        <option value="indoor" {{ ($ProfileHero->type ?? old('type')) == 'indoor' ? 'selected' : '' }}>Indoor</option>
                        <option value="beach" {{ ($ProfileHero->type ?? old('type')) == 'beach' ? 'selected' : '' }}>Beach</option>
                    </select>
                </div>

                <div class="field">
                    <label>Description (optional)</label>
                    <textarea disabled name="desc" rows="3"
                        placeholder="Deskripsi singkat...">{{ $ProfileHero->desc ?? old('desc') }}</textarea>
                </div>

                <div class="divider"></div>

                <div class="field">
                    <div class="labelRow">
                        <label>Image</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                    </div>

                    <!-- <input type="hidden" name="image" value="0"> -->

                    <div class="image-section">
                        <div class="image-preview">
                            <img id="preview-image"
                                src="{{ $ProfileHero->image ? Storage::url($ProfileHero->image) : 'https://placehold.co/400x400?text=Image' }}"
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
                </div>
     
            </form>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
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