@extends('layouts.master')

@section('title', 'View Anggota')

@section('content')
<div>
    <div class="section">
        <div class="sectionHead">
            <div>
                <h2>View Anggota ABTI</h2>
            </div>
        </div>

        <div class="bignews-wrapper">

            <div class="image-section">

                {{-- LOGO --}}
                <div class="image-preview">
                    @if($anggota->logo)
                        <img src="{{ asset('storage/' . $anggota->logo) }}" alt="Logo">
                    @else
                        <img src="https://via.placeholder.com/150x150?text=No+Logo" alt="No Logo">
                    @endif
                </div>

                {{-- DETAIL --}}
                <div class="image-form">

                    <div class="form-group">
                        <label>Kota/Kab</label>
                        <input type="text" disabled value="{{ $anggota->city }}">
                    </div>

                    <div class="form-group">
                        <label>Ketua</label>
                        <input type="text" disabled value="{{ $anggota->lead_name }}">
                    </div>

                    <div class="form-group">
                        <label>Sekretaris</label>
                        <input type="text" disabled value="{{ $anggota->sec_name }}">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" disabled value="{{ $anggota->email ?? '-' }}">
                    </div>

                    <div class="form-group" style="grid-column: span 2;">
                        <label>Link Website</label>
                        <input type="text" disabled value="{{ $anggota->link ?? '-' }}">
                    </div>

                </div>

            </div>

            <div class="form-footer">
                <a href="{{ route('anggota.index') }}" class="btn-upload">
                    Kembali
                </a>
            </div>

        </div>

    </div>
</div>
@endsection
