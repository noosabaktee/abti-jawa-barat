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

            <form class="" method="POST" action="{{ route('profile-club.update', $ProfileClub) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="">
                    <div class="field">
                        <label>Nama Klub</label>
                        <input type="text" name="name"
                            value="{{ $ProfileClub->name ?? old('name') }}"
                            placeholder="Nama klub...">
                    </div>

                    <div class="field">
                        <label>Kota/Kab</label>
                        <input type="text" name="city"
                            value="{{ $ProfileClub->city ?? old('city') }}"
                            placeholder="Bandung / Bogor / ...">
                    </div>

                    <div class="field">
                        <label>Direktur Klub</label>
                        <input type="text" name="director"
                            value="{{ $ProfileClub->director ?? old('director') }}"
                            placeholder="Nama direktur...">
                    </div>

                    <div class="field">
                        <label>Administrator</label>
                        <input type="text" name="admin"
                            value="{{ $ProfileClub->admin ?? old('admin') }}"
                            placeholder="Nama admin...">
                    </div>

                    <div class="field">
                        <label>Direktur Teknik</label>
                        <input type="text" name="technical_director"
                            value="{{ $ProfileClub->technical_director ?? old('technical_director') }}"
                            placeholder="Nama direktur teknik...">
                    </div>

                    <div class="field">
                        <label>Venue Latihan</label>
                        <input type="text" name="training_venue"
                            value="{{ $ProfileClub->training_venue ?? old('training_venue') }}"
                            placeholder="GOR / Lapangan...">
                    </div>

                    <div class="field">
                        <label>E-mail</label>
                        <input type="text" name="email"
                            value="{{ $ProfileClub->email ?? old('email') }}"
                            placeholder="email@domain.com">
                    </div>

                    <div class="field">
                        <label>Contact Person</label>
                        <input type="text" name="contact_person"
                            value="{{ $ProfileClub->contact_person ?? old('contact_person') }}"
                            placeholder="+62... / nama">
                    </div>

                    <div class="field" style="grid-column:1/-1;">
                        <label>Link</label>
                        <input type="text" name="link"
                            value="{{ $ProfileClub->link ?? old('link') }}"
                            placeholder="https://...">
                    </div>
                </div>

                <div class="divider"></div>

                <div class="field">
                        <div class="labelRow">
                            <label>Logo</label>
                            <span class="hint">jpg/png/webp (Maks 300kb)</span>
                        </div>

                        <!-- <input type="hidden" name="image" value="0"> -->

                        <div class="image-section">
                            <div class="image-preview">
                                <img id="preview-image"
                                    src="{{ $ProfileClub->logo ? Storage::url($ProfileClub->logo) : 'https://placehold.co/400x400?text=Image' }}"
                                    width="150">
                            </div>

                            <div class="image-info">
                                <label class="btn-upload">
                                    Upload Image
                                    <input type="file"
                                        name="logo"
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

                <div class="actions">
                    <button id="saveBtn" class="btn primary" type="submit">Save Changes</button>
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