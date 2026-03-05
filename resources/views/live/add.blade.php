@extends('layouts.master')

@section('title', 'Add Live')

@section('content')
<div>
    <div class="section">
        <div class="sectionHead">
            <div>
                <h2>Tambah Live</h2>
            </div>
        </div>

        <div class="bignews-wrapper">

            <form action="{{ route('live.store') }}"
                method="POST"
                enctype="multipart/form-data">
                @csrf



                {{-- FORM FIELD --}}
                <div class="field">
                    <label>Title</label>
                    <input type="text" name="title"
                        value="{{old('title')}}"
                        placeholder="Judul Live...">
                </div>
                <div class="field">
                    <label>Link</label>
                    <input type="text" name="link"
                        value="{{old('link')}}"
                        placeholder="Link Live...">
                </div>

                <div class="form-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">

                    <div class="form-group">
                        <label style="display: block; margin-bottom: 5px; ">Date <span>*</span></label>
                        <input type="date"
                            name="date"
                            value="{{ old('date') }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label style="display: block; margin-bottom: 5px; ">Time <span>*</span></label>
                        <input type="time"
                            name="time"
                            value="{{ old('time') }}"
                            required>
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
                <div class="form-footer" style="margin-top: 30px; display: flex; align-items: center;">
                    <a href="{{ route('live.index') }}" class="btn-upload" style="text-decoration: none;">
                        Kembali
                    </a>

                    <button type="submit"
                        class="btn-save"
                        style="margin-left:20px; border: none; cursor: pointer;">
                        Save Changes
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

{{-- PREVIEW & TEXT SCRIPT --}}
<script>
    document.getElementById('imageInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (!file) return;

        // Validasi ukuran client-side
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

        // Ganti teks tombol saat file dipilih
        document.getElementById('labelText').innerText = 'Change Image';
    });
</script>

@endsection