@extends('layouts.master')

@section('title', 'Program Kerja')

@section('content')
<div >
  <div class="section">
    <div class="sectionHead">
      <div>
        <h2>Program Kerja</h2>
        <p></p>
      </div>
      <div class="pill">24 items</div>
    </div>

    <div class="sectionBody">
      <div class="cardGrid">
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #1</b>
              <span class="pill">Program Kerja</span>
            </div>

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
                    data-current="/uploads/home.programs.1.image_1769656452.png"
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    Current: home.programs.1.image_1769656452.png                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_1"
                                      >Remove</button>
                </div>

                <div class="path">/uploads/home.programs.1.image_1769656452.png</div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #2</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_2"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_2"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_2"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_2"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_2"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_2" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_2"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_2" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_2"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_2"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #3</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_3"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_3"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_3"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_3"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_3"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_3" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_3"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_3" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_3"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_3"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #4</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_4"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_4"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_4"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_4"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_4"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_4" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_4"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_4" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_4"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_4"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #5</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_5"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_5"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_5"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_5"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_5"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_5" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_5"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_5" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_5"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_5"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #6</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_6"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_6"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_6"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_6"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_6"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_6" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_6"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_6" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_6"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_6"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #7</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_7"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_7"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_7"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_7"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_7"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_7" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_7"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_7" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_7"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_7"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #8</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_8"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_8"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_8"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_8"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_8"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_8" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_8"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_8" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_8"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_8"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #9</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_9"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_9"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_9"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_9"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_9"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_9" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_9"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_9" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_9"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_9"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #10</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_10"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_10"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_10"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_10"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_10"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_10" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_10"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_10" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_10"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_10"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #11</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_11"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_11"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_11"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_11"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_11"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_11" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_11"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_11" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_11"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_11"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #12</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_12"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_12"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_12"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_12"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_12"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_12" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_12"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_12" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_12"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_12"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #13</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_13"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_13"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_13"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_13"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_13"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_13" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_13"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_13" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_13"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_13"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #14</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_14"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_14"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_14"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_14"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_14"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_14" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_14"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_14" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_14"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_14"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #15</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_15"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_15"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_15"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_15"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_15"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_15" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_15"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_15" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_15"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_15"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #16</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_16"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_16"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_16"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_16"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_16"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_16" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_16"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_16" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_16"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_16"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #17</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_17"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_17"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_17"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_17"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_17"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_17" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_17"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_17" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_17"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_17"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #18</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_18"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_18"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_18"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_18"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_18"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_18" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_18"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_18" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_18"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_18"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #19</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_19"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_19"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_19"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_19"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_19"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_19" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_19"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_19" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_19"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_19"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #20</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_20"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_20"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_20"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_20"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_20"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_20" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_20"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_20" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_20"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_20"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #21</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_21"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_21"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_21"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_21"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_21"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_21" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_21"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_21" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_21"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_21"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #22</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_22"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_22"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_22"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_22"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_22"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_22" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_22"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_22" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_22"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_22"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #23</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_23"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_23"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_23"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_23"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_23"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_23" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_23"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_23" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_23"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_23"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Program #24</b>
              <span class="pill">Program Kerja</span>
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="pk_title_24"
                value=""
                placeholder="Judul program kerja">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Hero Meta</label>
                <input type="text" name="pk_meta_24"
                  value=""
                  placeholder="PROGRAM KERJA • 2026">
              </div>

              <div class="field">
                <label>Category</label>
                <input type="text" name="pk_category_24"
                  value=""
                  placeholder="Pembinaan / Kompetisi / SDM">
              </div>

              <div class="field">
                <label>Year</label>
                <input type="text" name="pk_year_24"
                  value=""
                  placeholder="2026">
              </div>

              <div class="field">
                <label>Doc URL</label>
                <input type="text" name="pk_doc_24"
                  value=""
                  placeholder="https://...pdf">
              </div>
            </div>

            <div class="field">
              <label>Hero Desc</label>
              <textarea name="pk_desc_24" rows="4"
                placeholder="Deskripsi detail untuk hero"></textarea>
            </div>

            <div class="field">
              <label>Thumbnail Text</label>
              <input type="text" name="pk_thumb_text_24"
                value=""
                placeholder="Teks overlay thumbnail (opsional)">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Thumbnail Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="pk_img_clear_24" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="pk_img_24"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current=""
                  >
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="pk_img_clear_24"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
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
