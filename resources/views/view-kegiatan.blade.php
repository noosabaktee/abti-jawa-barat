@extends('layouts.master')

@section('title', 'View Kegiatan')

@section('content')
<div>
    <div class="section">
        <div class="sectionHead">
            <div>
                <h2>View Kegiatan</h2>
            </div>
        </div>

        <div class="bignews-wrapper">

            <div class="image-section">

                {{-- IMAGE --}}
                <div class="image-preview">
                    @if($kegiatan->image)
                        <img src="{{ asset('storage/' . $kegiatan->image) }}" alt="Preview">
                    @else
                        <img src="https://via.placeholder.com/150x150?text=No+Image" alt="No Image">
                    @endif
                </div>

                {{-- DETAIL --}}
                <div class="image-form">

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" disabled value="{{ $kegiatan->name }}">
                    </div>

                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" disabled value="{{ $kegiatan->slug }}">
                        
                    </div>

                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" disabled
                               value="{{ \Carbon\Carbon::parse($kegiatan->date)->format('d/m/Y') }}">
                    </div>

                    {{-- DESKRIPSI (DITAMBAHKAN) --}}
                    <div class="form-group" style="grid-column: span 2;">
                        <label>Deskripsi</label>
                        <textarea rows="6" disabled>{{ $kegiatan->desc }}</textarea>
                    </div>

                </div>

            </div>

            <div class="form-footer">
                <a href="{{ route('kegiatan.index') }}" class="btn-upload">
                    Kembali
                </a>
            </div>

        </div>

    </div>
</div>
@endsection
