@extends('layouts.master')

@section('title', 'Edit Kegiatan')

@section('content')
<div>
    <div class="section">
        <div class="sectionHead">
            <div>
                <h2>Edit Kegiatan</h2>
            </div>
        </div>

        <div class="bignews-wrapper">

            <form action="{{ route('kegiatan.update', $kegiatan->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- IMAGE SECTION --}}
                <div class="image-section">

                    <div class="image-preview">
                        @if($kegiatan->image)
                            <img src="{{ asset('storage/'.$kegiatan->image) }}" alt="Preview">
                        @else
                            <img src="https://via.placeholder.com/150x150?text=No+Image" alt="No Image">
                        @endif
                    </div>

                    <div class="image-info">
                        <label class="btn-save">
                            Change Image
                            <input type="file" name="image" hidden>
                        </label>
                        <p class="hint" style="padding-top:10px;">
                            Upload max 2MB (JPG, PNG, JPEG)
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
                    </div>

                    <div class="form-group">
                        <label>Tanggal <span>*</span></label>
                        <input type="date"
                               name="date"
                               value="{{ old('date', $kegiatan->date) }}"
                               required>
                    </div>

                    {{-- LINK DISIMPAN KE SLUG --}}
                    <div class="form-group">
                        <label>Link</label>
                        <input type="url"
                               name="slug"
                               placeholder="https://example.com"
                               value="{{ old('slug', $kegiatan->slug) }}">
                    </div>

                    <div class="form-group" style="grid-column: span 2;">
                        <label>Deskripsi <span>*</span></label>
                        <textarea name="desc" rows="5" required>{{ old('desc', $kegiatan->desc) }}</textarea>
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

                    <button type="submit" class="btn-save" style="margin-left:20px;">
                        Update
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
