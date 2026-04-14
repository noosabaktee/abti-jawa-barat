@extends('layouts.master')

@section('title', 'Gallery')

@section('content')
<div>
    <style>
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 14px;
        }

        .upload-tile {
            position: relative;
            border: 2px dashed #9fb7c1;
            border-radius: 10px;
            background: #d9e8ee;
            cursor: pointer;
            height: 160px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .upload-tile input[type="file"] {
            display: none;
        }

        .upload-placeholder,
        .upload-preview-wrap {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            padding: 10px;
        }

        .upload-icon {
            font-size: 28px;
            line-height: 1;
            color: #6b8f9d;
            margin-bottom: 8px;
        }

        .upload-filename {
            font-size: 12px;
            color: #335765;
            word-break: break-word;
        }

        .upload-preview-wrap {
            display: none;
            padding: 0;
        }

        .upload-preview-wrap img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            display: block;
        }

        @media (max-width: 1200px) {
            .gallery-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
        }

        @media (max-width: 900px) {
            .gallery-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width: 640px) {
            .gallery-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }
    </style>

    <div class="section">
        <div class="sectionHead">
            <div>
                <h2>Galeri Kegiatan (IHF)</h2>
                <p></p>
            </div>


        </div>

        <div class="sectionBody">
            <form class="" method="POST" action="{{ route('gallery.update', $gallery) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>

                    <div class="field">
                        <label>Judul Kegiatan</label>
                        <input disabled type="text" name="title"
                            value="{{ $gallery->title ?? old('title')}}"
                            placeholder="Nama event / kompetisi / pembinaan...">
                    </div>

                    <div class="field form-group">
                        <label><strong>Tanggal</strong></label>
                        <input disabled type="date" name="date"
                            value="{{ $gallery->date ?? old('date')}}"
                            placeholder="21 January 2026">
                    </div>

                    <div class="divider"></div>

                    <!-- COVER upload -->
                    <div class="field">
                        <div class="labelRow">
                            <label>Cover</label>
                            <span class="hint">jpg/png/webp (Maks 300kb)</span>
                        </div>

                        <!-- <input disabled type="hidden" name="image" value="0"> -->

                        <div class="image-section">
                            <div class="image-preview">
                                <img id="preview-cover"
                                    src="{{ $gallery->cover ? asset('storage/' . $gallery->cover) : 'https://placehold.co/400x400?text=Image' }}"
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

                    <div class="divider"></div>

                    <h4 style="margin:0 0 10px;">Foto Gallery (10 slot)</h4>

                    <!-- Gallery 10 slot -->
                    <div class="gallery-grid">
                        @for ($i = 1; $i <= 10; $i++)
                        <div>
                            <label class="upload-tile" for="image-input-{{ $i }}">
                                <input disabled type="file"
                                    name="image_{{ $i }}"
                                    id="image-input-{{ $i }}"
                                    class="gallery-input"
                                    data-preview-id="preview-{{ $i }}"
                                    data-placeholder-id="placeholder-{{ $i }}"
                                    data-filename-id="filename-{{ $i }}"
                                    accept="image/*">

                                <div id="placeholder-{{ $i }}" class="upload-placeholder">
                                    <div class="upload-icon">+</div>
                                    <div class="upload-filename" id="filename-{{ $i }}">Foto {{ $i }}</div>
                                </div>

                                <div class="upload-preview-wrap" id="preview-wrap-{{ $i }}">
                                    <img id="preview-{{ $i }}" src="{{ $gallery->galleries ? json_decode($gallery->galleries)[$i-1]->image ? asset('storage/' . json_decode($gallery->galleries)[$i-1]->image) : '' : '' }}" alt="Preview Foto {{ $i }}">
                                </div>
                            </label>

                            @error('image_' . $i)
                            <small style="color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        @endfor
                    </div>

                    <div class="note">
                        Untuk performa: isi hanya kegiatan yang dibutuhkan. Yang kosong otomatis fallback ke hardcode.
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
    document.getElementById('cover-input').addEventListener('change', function(e) {
        if (!this.files || !this.files[0]) return;
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview-cover').src = e.target.result;
        }
        reader.readAsDataURL(this.files[0]);
    });

    document.querySelectorAll('.gallery-input').forEach((input) => {
        const previewId = input.dataset.previewId;
        const placeholderId = input.dataset.placeholderId;
        const fileNameId = input.dataset.filenameId;
        const preview = document.getElementById(previewId);
        const placeholder = document.getElementById(placeholderId);
        const filenameEl = document.getElementById(fileNameId);
        const previewWrap = document.getElementById('preview-wrap-' + input.id.replace('image-input-', ''));

        function showExistingPreviewIfAny() {
            if (!preview || !placeholder || !previewWrap) return;
            const src = (preview.getAttribute('src') || '').trim();
            if (!src) return;

            placeholder.style.display = 'none';
            previewWrap.style.display = 'flex';

            if (filenameEl && /^Foto\s+\d+$/i.test(filenameEl.textContent.trim())) {
                const fileNameFromSrc = decodeURIComponent(src.split('/').pop().split('?')[0] || '');
                if (fileNameFromSrc) filenameEl.textContent = fileNameFromSrc;
            }
        }

        showExistingPreviewIfAny();

        input.addEventListener('change', function() {
            if (!this.files || !this.files[0]) return;

            const file = this.files[0];
            const reader = new FileReader();

            reader.onload = function(evt) {
                preview.src = evt.target.result;
                placeholder.style.display = 'none';
                previewWrap.style.display = 'flex';
                filenameEl.textContent = file.name;
            };

            reader.readAsDataURL(file);
        });
    });
</script>

@endsection
