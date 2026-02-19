@extends('layouts.master')

@section('title', 'Event')

@section('content')
<div>
    <div class="section">
        <div class="sectionHead">
            <div>
                <h2>Event</h2>
                <p></p>
            </div>
            <div class="pill">events</div>
        </div>

        <div class="sectionBody">
            <form method="POST" action="{{ route('event.update', $event) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="">

                    <div class="field">
                        <label>ID (optional)</label>
                        <input disabled type="text" name="event_id"
                            value="{{ $event->event_id ?? old('event_id') }}"
                            placeholder="ev-001">
                    </div>

                    <div class="field">
                        <label>Nama Event</label>
                        <input disabled type="text" name="name"
                            value="{{ $event->name ?? old('name') }}"
                            placeholder="Nama event...">
                    </div>

                    <div class="field">
                        <label>Category (comma)</label>
                        <input disabled type="text" name="category"
                            value="{{ $event->category ?? old('category') }}"
                            placeholder="INDOOR,BEACH,WHEELCHAIR">
                    </div>

                    <div class="field">
                        <label>Lokasi</label>
                        <input disabled type="text" name="loc"
                            value="{{ $event->loc ?? old('loc') }}"
                            placeholder="Kota Bandung">
                    </div>

                    <div class="grid2">
                        <div class="field"><label>Athletes</label>
                            <input disabled type="text" name="athletes" value="{{ $event->athletes ?? old('athletes') }}" placeholder="168">
                        </div>
                        <div class="field"><label>Coaches</label>
                            <input disabled type="text" name="coaches" value="{{ $event->coaches ?? old('coaches') }}" placeholder="28">
                        </div>
                        <div class="field"><label>Teams</label>
                            <input disabled type="text" name="teams" value="{{ $event->teams ?? old('teams') }}" placeholder="14">
                        </div>
                        <div class="field"><label>Management</label>
                            <input disabled type="text" name="management" value="{{ $event->management ?? old('management') }}" placeholder="18">
                        </div>
                        <div class="field" style="grid-column:1/-1;"><label>Audience Offline / Day</label>
                            <input disabled type="text" name="audience_offline" value="{{ $event->audience_offline ?? old('audience_offline') }}" placeholder="750">
                        </div>
                    </div>

                    <div class="field">
                        <label>Website</label>
                        <input disabled type="text" name="website"
                            value="{{ $event->website ?? old('website') }}"
                            placeholder="https://...">
                    </div>

                    <div class="field">
                        <label>Administrator</label>
                        <input disabled type="text" name="administrator"
                            value="{{ $event->administrator ?? old('administrator') }}"
                            placeholder="Sekretariat...">
                    </div>

                    <div class="divider"></div>

                    <!-- Logo upload -->
                    <div class="field">
                        <div class="labelRow">
                            <label>Logo</label>
                            <span class="hint">jpg/png/webp (Maks 300kb)</span>
                        </div>

                        <!-- <input disabled type="hidden" name="image" value="0"> -->

                        <div class="image-section">
                            <div class="image-preview">
                                <img id="preview-logo"
                                    src="{{ $event->logo ? asset('storage/'.$event->logo) : 'https://via.placeholder.com/150x150' }}"
                                    width="150">
                            </div>

                            <div class="image-info">
                                <label class="btn-upload">
                                    Upload Image
                                    <input disabled type="file"
                                        name="logo"
                                        id="logo-input"
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

                    <!-- Cover upload -->
                    <div class="field">
                        <div class="labelRow">
                            <label>Cover</label>
                            <span class="hint">jpg/png/webp (Maks 300kb)</span>
                        </div>

                        <!-- <input disabled type="hidden" name="image" value="0"> -->

                        <div class="image-section">
                            <div class="image-preview">
                                <img id="preview-cover"
                                    src="{{ $event->cover ? asset('storage/'.$event->cover) : 'https://via.placeholder.com/150x150' }}"
                                    width="150">
                            </div>

                            <div class="image-info">
                                <label class="btn-upload">
                                    Upload Image
                                    <input disabled type="file"
                                        name="cover"
                                        id="cover-input"
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
    document.getElementById('logo-input').addEventListener('change', function(e) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview-logo').src = e.target.result;
        }
        reader.readAsDataURL(this.files[0]);
    });

    document.getElementById('cover-input').addEventListener('change', function(e) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview-cover').src = e.target.result;
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>

@endsection