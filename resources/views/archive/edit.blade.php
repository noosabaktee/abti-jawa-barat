@extends('layouts.master')

@section('title', 'Archives')

@section('content')
<div>
    <div class="section">
        <div class="sectionHead">
            <div>
                <h2>Archives</h2>
                <p></p>
            </div>
            <div class="pill">archives.*</div>
        </div>

        <div class="sectionBody">

            <form class="" method="POST" action="{{ route('archive.update', $archive) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>

                    <div class="grid2">
                        <div class="field">
                            <label>Judul Kategori</label>
                            <input type="text" name="title"
                                value="{{ $archive->title ?? old('title')}}"
                                placeholder="Mutation Regulation">
                        </div>

                        <div class="field">
                            <label>Meta (contoh: “3 dokumen”)</label>
                            <input type="text" name="meta"
                                value="{{ $archive->meta ?? old('meta')}}"
                                placeholder="3 dokumen">
                        </div>
                    </div>

                    <div class="divider"></div>

                    <h4 style="margin:0 0 10px;">Dokumen (10 slot)</h4>

                    
                    @php
                        $docItems = json_decode($archive->doc ?? '[]');
                    @endphp
                    <div class="cardGrid archiveDocGrid">
                        @for ($i = 1; $i <= 10; $i++)
                            @php
                                $docPath = $docItems[$i - 1]->doc ?? null;
                                $docUrl = $docPath ? asset('storage/' . $docPath) : '';
                                $docFilename = $docPath ? basename($docPath) : '';
                            @endphp
                            <div class="itemCard">
                                <div class="itemTop">
                                    <b>Doc #{{ $i }}</b>
                                    <span class="pill">docs.{{ $i }}</span>
                                </div>
    
                                <div class="field">
                                    <label>Nama Dokumen</label>
                                    <input type="text"
                                        name="doc_name_{{ $i }}"
                                        value="{{ old("doc_name_{$i}", json_decode($archive->doc)[$i-1]->name ?? '') }}"
                                        placeholder="Nama dokumen...">
                                </div>
    
                                <div class="field">
                                    <div class="labelRow">
                                        <label>Upload PDF</label>
                                        <span class="hint">PDF (Maks 1mb)</span>
                                    </div>

                                    <label class="archiveUploadBox" for="doc_pdf_{{ $i }}" data-archive-upload-box>
                                        <input
                                            id="doc_pdf_{{ $i }}"
                                            type="file"
                                            name="doc_pdf_{{ $i }}"
                                            accept="application/pdf"
                                            data-existing-url="{{ $docUrl }}"
                                            data-archive-upload-input>

                                        <div class="archiveUploadState archiveUploadPlaceholder" data-archive-upload-placeholder>
                                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M12 3v10"></path>
                                                <path d="m8 9 4 4 4-4"></path>
                                                <path d="M4 15v4h16v-4"></path>
                                            </svg>
                                            <span>Klik untuk upload PDF</span>
                                        </div>

                                        

                                        <div class="archiveUploadState archiveUploadPreview" data-archive-upload-preview hidden>
                                            <a href="{{ $docUrl }}" target="_blank" rel="noopener noreferrer" class="archivePdfLink" data-archive-upload-link>
                                                <div class="archiveUploadPdfIcon">PDF</div>
                                            </a>
                                            <span data-archive-upload-filename>{{ $docFilename }}</span>
                                        </div>
                                    </label>
                                </div>
    
                            </div>
                        @endfor
                        
                    </div>
                    <div class="actions">
                        <button type="submit" class="btn primary">Save Changes</button>
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
</div>

<style>
    .archiveDocGrid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    }

    .archiveUploadBox {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 140px;
        border: 2px dashed #b7ced8;
        border-radius: 14px;
        background: #eef5f8;
        cursor: pointer;
        transition: border-color .15s ease, background-color .15s ease;
        padding: 12px;
    }

    .archiveUploadBox:hover {
        border-color: #8fb3c2;
        background: #e8f1f5;
    }

    .archiveUploadBox input[type="file"] {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

    .archiveUploadState {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #4f6f7d;
        gap: 8px;
        width: 100%;
    }

    .archiveUploadPlaceholder svg {
        width: 38px;
        height: 38px;
        stroke: #7f9aa7;
        fill: none;
        stroke-width: 1.8;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .archiveUploadPlaceholder span,
    .archiveUploadPreview span {
        font-size: 12px;
        font-weight: 700;
        color: #385665;
        word-break: break-word;
    }

    .archiveUploadPdfIcon {
        width: 46px;
        height: 56px;
        border-radius: 8px;
        background: #d61f2c;
        color: #fff;
        font-weight: 900;
        font-size: 13px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 6px 14px rgba(214, 31, 44, .25);
    }

    .archivePdfLink {
        display: inline-flex;
        text-decoration: none;
    }

    @media (max-width: 960px) {
        .archiveDocGrid {
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        }
    }

    @media (max-width: 600px) {
        .archiveDocGrid {
            grid-template-columns: 1fr !important;
        }
    }
</style>

<script>
    (function() {
        var uploadInputs = document.querySelectorAll('[data-archive-upload-input]');

        for (var i = 0; i < uploadInputs.length; i++) {
            (function(input) {
                var box = input.closest('[data-archive-upload-box]');
                if (!box) return;

                var placeholder = box.querySelector('[data-archive-upload-placeholder]');
                var preview = box.querySelector('[data-archive-upload-preview]');
                var filename = box.querySelector('[data-archive-upload-filename]');
                var fileLink = box.querySelector('[data-archive-upload-link]');
                var initialFilename = filename ? filename.textContent.trim() : '';
                var initialFileUrl = (input.getAttribute('data-existing-url') || '').trim();

                function renderState() {
                    var file = input.files && input.files[0];
                    if (file) {
                        if (filename) filename.textContent = file.name;
                        if (fileLink && window.URL && window.URL.createObjectURL) {
                            if (fileLink.dataset.objectUrl) {
                                window.URL.revokeObjectURL(fileLink.dataset.objectUrl);
                            }
                            var objectUrl = window.URL.createObjectURL(file);
                            fileLink.href = objectUrl;
                            fileLink.dataset.objectUrl = objectUrl;
                        }
                        if (placeholder) placeholder.hidden = true;
                        if (preview) preview.hidden = false;
                        return;
                    }

                    if (initialFilename) {
                        if (filename) filename.textContent = initialFilename;
                        if (fileLink) fileLink.href = initialFileUrl || '#';
                        if (placeholder) placeholder.hidden = true;
                        if (preview) preview.hidden = false;
                        return;
                    }

                    if (fileLink) fileLink.href = '#';
                    if (filename) filename.textContent = 'No file chosen';
                    if (placeholder) placeholder.hidden = false;
                    if (preview) preview.hidden = true;
                }

                if (fileLink) {
                    fileLink.addEventListener('click', function(e) {
                        var href = (fileLink.getAttribute('href') || '').trim();
                        if (!href || href === '#') {
                            e.preventDefault();
                        }
                        e.stopPropagation();
                    });
                }

                input.addEventListener('change', renderState);
                renderState();
            })(uploadInputs[i]);
        }
    })();
</script>


@endsection
