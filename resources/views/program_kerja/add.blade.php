@extends('layouts.master')

@section('title', 'Program Kerja')

@section('content')
<div>
    <div class="section">
        <div class="sectionHead">
            <div>
                <h2>Program Kerja</h2>
                <p></p>
            </div>
        </div>

        <div class="sectionBody">
            <div class="">
                <div class="">
                    <div class="field">
                        <label>Title</label>
                        <input type="text" name="pk_title_1"
                            value="coba test"
                            placeholder="Judul program kerja">
                    </div>

                    <div class="grid2">
                        <div class="field">
                            <label>Hero Meta</label>
                            <input type="text" name="pk_meta_1"
                                value="Test Coba - Tests"
                                placeholder="PROGRAM KERJA • 2026">
                        </div>

                        <div class="field">
                            <label>Category</label>
                            <input type="text" name="pk_category_1"
                                value="rakernas"
                                placeholder="Pembinaan / Kompetisi / SDM">
                        </div>

                        <div class="field">
                            <label>Year</label>
                            <input type="text" name="pk_year_1"
                                value="2021"
                                placeholder="2026">
                        </div>

                        <div class="field">
                            <label>Doc URL</label>
                            <input type="text" name="pk_doc_1"
                                value=""
                                placeholder="https://...pdf">
                        </div>
                    </div>

                    <div class="field">
                        <label>Hero Desc</label>
                        <textarea name="pk_desc_1" rows="4"
                            placeholder="Deskripsi detail untuk hero">Ini adalah uji coba</textarea>
                    </div>

                    <div class="field">
                        <label>Thumbnail Text</label>
                        <input type="text" name="pk_thumb_text_1"
                            value="Coba uji"
                            placeholder="Teks overlay thumbnail (opsional)">
                    </div>

                    <div class="divider"></div>

                    <div class="field">
                        <div class="labelRow">
                            <label>Thumbnail Image</label>
                            <span class="hint">jpg/png/webp (Maks 300kb)</span>
                        </div>

                        <input type="hidden" name="pk_img_clear_1" value="0">

                        <div class="uploader">
                            <div class="preview" data-preview-wrap></div>

                            <div class="uploadBar" data-uploadbar>
                                <input
                                    type="file"
                                    name="pk_img_1"
                                    accept="image/*"
                                    data-preview-input
                                    data-upload-input
                                    data-current="/uploads/home.programs.1.image_1769656452.png">
                                <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                                <div class="uploadName" data-upload-name>
                                    Current: home.programs.1.image_1769656452.png </div>
                                <button
                                    type="button"
                                    class="uploadRemove"
                                    data-upload-remove
                                    data-clear-name="pk_img_clear_1">Remove</button>
                            </div>

                            <div class="path">/uploads/home.programs.1.image_1769656452.png</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="actions">
    <button id="saveBtn" class="btn primary" type="submit">Save Changes</button>
</div>
@endsection