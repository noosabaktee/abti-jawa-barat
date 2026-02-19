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





            <form class="" method="POST" action="{{ route('short.store') }}">
                @csrf
                <div class="">

                    <div class="field">
                        <label>Title</label>
                        <input type="text" name="title"
                            value="{{ old('title') }}"
                            placeholder="Title of the short">
                    </div>
                    <div class="field">
                        <label>URL</label>
                        <input type="text" name="url"
                            value="{{ old('url') }}"
                            placeholder="https://www.youtube.com/shorts/...">
                    </div>
                </div>
                <div class="actions">
                    <button type="submit" id="saveBtn" class="btn primary">Save Changes</button>
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