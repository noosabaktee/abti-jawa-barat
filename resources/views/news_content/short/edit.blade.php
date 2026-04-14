@extends('layouts.master')

@section('title', 'News Content')

@section('content')
<div>
    <div class="section">
        <div class="sectionHead">
            <div>
                <h2>Add Shorts</h2>
                <p></p>
            </div>


        </div>


        <div class="sectionBody">





            <form class="" method="POST" action="{{ route('short.update', $short) }}">
                @csrf
                @method('PUT')

                <div class="">

                    <div class="field">
                        <label>Title</label>
                        <input type="text" name="title"
                            value="{{ $short->title ?? old('title') }}"
                            placeholder="Title of the short">
                    </div>
                    <div class="field">
                        <label>URL</label>
                        <input type="text" name="url"
                            value="{{ $short->url ?? old('url') }}"
                            placeholder="https://www.youtube.com/shorts/...">
                    </div>
                </div>
                {{-- FOOTER --}}
                <div class="form-footer" style="margin-top: 30px; display: flex; align-items: center;">
                    <a href="{{ route('news-content.index') }}" class="btn-upload" style="text-decoration: none;">
                        Kembali
                    </a>

                    <button type="submit"
                        class="btn-save"
                        style="margin-left:20px; border: none; cursor: pointer;">
                        Save Changes
                    </button>
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
            <div class="note">
                Catatan: link youtube wajib disertakan lengkap <i>dengan https://...</i>.
            </div>

        </div>
    </div>
</div>

<div id="customAlert" class="alert-overlay">
    <div class="alert-box">
        <h3 id="alertTitle">Konfirmasi</h3>
        <p id="alertMessage">Yakin mau hapus data ini?</p>

        <div class="alert-actions">
            <button id="cancelBtn" class="btn btn-edit">Batal</button>
            <button id="confirmBtn" class="btn btn-delete">Hapus</button>
        </div>
    </div>
</div>

@endsection