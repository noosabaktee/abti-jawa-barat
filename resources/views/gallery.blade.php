@extends('layouts.master')

@section('title', 'Gallery')

@section('content')
<div >
  
  <div class="section">
    <div class="sectionHead">
      <div>
        <h2>Galeri Kegiatan (IHF)</h2>
        <p></p>
      </div>
      <div class="pill">gallery.*</div>
    </div>

    <div class="sectionBody">

      <!-- HEADER -->
      <h3 style="margin:0 0 10px;">Header</h3>
      <div class="grid2">
        <div class="field">
          <label>Header Title (Black)</label>
          <input type="text" name="gal_head_black"
            value="tes123"
            placeholder="Galeri Kegiatan">
        </div>

        <div class="field">
          <label>Header Title (Red)</label>
          <input type="text" name="gal_head_red"
            value=""
            placeholder="ABTI Jawa Barat">
        </div>

        <div class="field" style="grid-column: 1 / -1;">
          <label>Header Subtitle</label>
          <textarea name="gal_head_sub"
            placeholder="Ikuti perjalanan ABTI Jawa Barat..."></textarea>
        </div>
      </div>

      <div class="divider"></div>

      <!-- ITEMS -->
      <h3 style="margin:0 0 10px;">Kegiatan (10) • Foto per kegiatan (10)</h3>

      <div class="cardGrid">
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kegiatan #1</b></span>
                <span class="pill">gallery.items.1</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="field">
                <label>Judul Kegiatan</label>
                <input type="text" name="gal_title_1"
                  value="Ini FOto"
                  placeholder="Nama event / kompetisi / pembinaan...">
              </div>

              <div class="field">
                <label>Tanggal</label>
                <input type="text" name="gal_date_1"
                  value="21 Januari"
                  placeholder="21 January 2026">
              </div>

              <div class="divider"></div>

              <!-- COVER upload -->
              <div class="field">
                <div class="labelRow">
                  <label>Cover / Thumbnail</label>
                  <span class="hint">jpg/png/webp (Maks 300kb)</span>
                </div>

                                <input type="hidden" name="gal_cover_clear_1" value="0">

                <div class="uploader">
                  <div class="uploadBar" data-uploadbar>
                    <input
                      type="file"
                      name="gal_cover_1"
                      accept="image/*"
                      data-preview-input
                      data-upload-input
                      data-current="/uploads/gallery.items.1.cover_1769657147.png"
                    >

                    <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                    <div class="uploadName" data-upload-name>
                      Current: gallery.items.1.cover_1769657147.png                    </div>

                    <button
                      type="button"
                      class="uploadRemove"
                      data-upload-remove
                      data-clear-name="gal_cover_clear_1"
                                          >Remove</button>
                  </div>
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Foto Gallery (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #1</b>
                      <span class="pill">gallery.items.1.photos.1</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_1_1" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_1_1"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current="/uploads/gallery.items.1.photos.1_1769657147.png"
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            Current: gallery.items.1.photos.1_1769657147.png                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_1_1"
                                                      >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #2</b>
                      <span class="pill">gallery.items.1.photos.2</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_1_2" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_1_2"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_1_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #3</b>
                      <span class="pill">gallery.items.1.photos.3</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_1_3" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_1_3"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_1_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #4</b>
                      <span class="pill">gallery.items.1.photos.4</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_1_4" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_1_4"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_1_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #5</b>
                      <span class="pill">gallery.items.1.photos.5</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_1_5" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_1_5"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_1_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #6</b>
                      <span class="pill">gallery.items.1.photos.6</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_1_6" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_1_6"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_1_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #7</b>
                      <span class="pill">gallery.items.1.photos.7</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_1_7" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_1_7"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_1_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #8</b>
                      <span class="pill">gallery.items.1.photos.8</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_1_8" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_1_8"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_1_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #9</b>
                      <span class="pill">gallery.items.1.photos.9</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_1_9" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_1_9"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_1_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #10</b>
                      <span class="pill">gallery.items.1.photos.10</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_1_10" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_1_10"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_1_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                              </div>

              <div class="note">
                Untuk performa: isi hanya kegiatan yang dibutuhkan. Yang kosong otomatis fallback ke hardcode.
              </div>

            </details>
          </div>
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kegiatan #2</b></span>
                <span class="pill">gallery.items.2</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="field">
                <label>Judul Kegiatan</label>
                <input type="text" name="gal_title_2"
                  value=""
                  placeholder="Nama event / kompetisi / pembinaan...">
              </div>

              <div class="field">
                <label>Tanggal</label>
                <input type="text" name="gal_date_2"
                  value=""
                  placeholder="21 January 2026">
              </div>

              <div class="divider"></div>

              <!-- COVER upload -->
              <div class="field">
                <div class="labelRow">
                  <label>Cover / Thumbnail</label>
                  <span class="hint">jpg/png/webp (Maks 300kb)</span>
                </div>

                                <input type="hidden" name="gal_cover_clear_2" value="0">

                <div class="uploader">
                  <div class="uploadBar" data-uploadbar>
                    <input
                      type="file"
                      name="gal_cover_2"
                      accept="image/*"
                      data-preview-input
                      data-upload-input
                      data-current=""
                    >

                    <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                    <div class="uploadName" data-upload-name>
                      No file chosen                    </div>

                    <button
                      type="button"
                      class="uploadRemove"
                      data-upload-remove
                      data-clear-name="gal_cover_clear_2"
                      disabled                    >Remove</button>
                  </div>
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Foto Gallery (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #1</b>
                      <span class="pill">gallery.items.2.photos.1</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_2_1" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_2_1"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_2_1"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #2</b>
                      <span class="pill">gallery.items.2.photos.2</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_2_2" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_2_2"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_2_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #3</b>
                      <span class="pill">gallery.items.2.photos.3</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_2_3" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_2_3"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_2_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #4</b>
                      <span class="pill">gallery.items.2.photos.4</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_2_4" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_2_4"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_2_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #5</b>
                      <span class="pill">gallery.items.2.photos.5</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_2_5" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_2_5"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_2_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #6</b>
                      <span class="pill">gallery.items.2.photos.6</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_2_6" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_2_6"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_2_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #7</b>
                      <span class="pill">gallery.items.2.photos.7</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_2_7" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_2_7"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_2_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #8</b>
                      <span class="pill">gallery.items.2.photos.8</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_2_8" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_2_8"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_2_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #9</b>
                      <span class="pill">gallery.items.2.photos.9</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_2_9" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_2_9"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_2_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #10</b>
                      <span class="pill">gallery.items.2.photos.10</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_2_10" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_2_10"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_2_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                              </div>

              <div class="note">
                Untuk performa: isi hanya kegiatan yang dibutuhkan. Yang kosong otomatis fallback ke hardcode.
              </div>

            </details>
          </div>
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kegiatan #3</b></span>
                <span class="pill">gallery.items.3</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="field">
                <label>Judul Kegiatan</label>
                <input type="text" name="gal_title_3"
                  value=""
                  placeholder="Nama event / kompetisi / pembinaan...">
              </div>

              <div class="field">
                <label>Tanggal</label>
                <input type="text" name="gal_date_3"
                  value=""
                  placeholder="21 January 2026">
              </div>

              <div class="divider"></div>

              <!-- COVER upload -->
              <div class="field">
                <div class="labelRow">
                  <label>Cover / Thumbnail</label>
                  <span class="hint">jpg/png/webp (Maks 300kb)</span>
                </div>

                                <input type="hidden" name="gal_cover_clear_3" value="0">

                <div class="uploader">
                  <div class="uploadBar" data-uploadbar>
                    <input
                      type="file"
                      name="gal_cover_3"
                      accept="image/*"
                      data-preview-input
                      data-upload-input
                      data-current=""
                    >

                    <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                    <div class="uploadName" data-upload-name>
                      No file chosen                    </div>

                    <button
                      type="button"
                      class="uploadRemove"
                      data-upload-remove
                      data-clear-name="gal_cover_clear_3"
                      disabled                    >Remove</button>
                  </div>
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Foto Gallery (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #1</b>
                      <span class="pill">gallery.items.3.photos.1</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_3_1" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_3_1"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_3_1"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #2</b>
                      <span class="pill">gallery.items.3.photos.2</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_3_2" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_3_2"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_3_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #3</b>
                      <span class="pill">gallery.items.3.photos.3</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_3_3" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_3_3"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_3_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #4</b>
                      <span class="pill">gallery.items.3.photos.4</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_3_4" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_3_4"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_3_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #5</b>
                      <span class="pill">gallery.items.3.photos.5</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_3_5" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_3_5"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_3_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #6</b>
                      <span class="pill">gallery.items.3.photos.6</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_3_6" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_3_6"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_3_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #7</b>
                      <span class="pill">gallery.items.3.photos.7</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_3_7" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_3_7"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_3_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #8</b>
                      <span class="pill">gallery.items.3.photos.8</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_3_8" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_3_8"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_3_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #9</b>
                      <span class="pill">gallery.items.3.photos.9</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_3_9" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_3_9"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_3_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #10</b>
                      <span class="pill">gallery.items.3.photos.10</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_3_10" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_3_10"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_3_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                              </div>

              <div class="note">
                Untuk performa: isi hanya kegiatan yang dibutuhkan. Yang kosong otomatis fallback ke hardcode.
              </div>

            </details>
          </div>
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kegiatan #4</b></span>
                <span class="pill">gallery.items.4</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="field">
                <label>Judul Kegiatan</label>
                <input type="text" name="gal_title_4"
                  value=""
                  placeholder="Nama event / kompetisi / pembinaan...">
              </div>

              <div class="field">
                <label>Tanggal</label>
                <input type="text" name="gal_date_4"
                  value=""
                  placeholder="21 January 2026">
              </div>

              <div class="divider"></div>

              <!-- COVER upload -->
              <div class="field">
                <div class="labelRow">
                  <label>Cover / Thumbnail</label>
                  <span class="hint">jpg/png/webp (Maks 300kb)</span>
                </div>

                                <input type="hidden" name="gal_cover_clear_4" value="0">

                <div class="uploader">
                  <div class="uploadBar" data-uploadbar>
                    <input
                      type="file"
                      name="gal_cover_4"
                      accept="image/*"
                      data-preview-input
                      data-upload-input
                      data-current=""
                    >

                    <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                    <div class="uploadName" data-upload-name>
                      No file chosen                    </div>

                    <button
                      type="button"
                      class="uploadRemove"
                      data-upload-remove
                      data-clear-name="gal_cover_clear_4"
                      disabled                    >Remove</button>
                  </div>
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Foto Gallery (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #1</b>
                      <span class="pill">gallery.items.4.photos.1</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_4_1" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_4_1"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_4_1"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #2</b>
                      <span class="pill">gallery.items.4.photos.2</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_4_2" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_4_2"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_4_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #3</b>
                      <span class="pill">gallery.items.4.photos.3</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_4_3" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_4_3"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_4_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #4</b>
                      <span class="pill">gallery.items.4.photos.4</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_4_4" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_4_4"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_4_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #5</b>
                      <span class="pill">gallery.items.4.photos.5</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_4_5" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_4_5"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_4_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #6</b>
                      <span class="pill">gallery.items.4.photos.6</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_4_6" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_4_6"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_4_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #7</b>
                      <span class="pill">gallery.items.4.photos.7</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_4_7" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_4_7"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_4_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #8</b>
                      <span class="pill">gallery.items.4.photos.8</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_4_8" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_4_8"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_4_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #9</b>
                      <span class="pill">gallery.items.4.photos.9</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_4_9" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_4_9"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_4_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #10</b>
                      <span class="pill">gallery.items.4.photos.10</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_4_10" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_4_10"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_4_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                              </div>

              <div class="note">
                Untuk performa: isi hanya kegiatan yang dibutuhkan. Yang kosong otomatis fallback ke hardcode.
              </div>

            </details>
          </div>
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kegiatan #5</b></span>
                <span class="pill">gallery.items.5</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="field">
                <label>Judul Kegiatan</label>
                <input type="text" name="gal_title_5"
                  value=""
                  placeholder="Nama event / kompetisi / pembinaan...">
              </div>

              <div class="field">
                <label>Tanggal</label>
                <input type="text" name="gal_date_5"
                  value=""
                  placeholder="21 January 2026">
              </div>

              <div class="divider"></div>

              <!-- COVER upload -->
              <div class="field">
                <div class="labelRow">
                  <label>Cover / Thumbnail</label>
                  <span class="hint">jpg/png/webp (Maks 300kb)</span>
                </div>

                                <input type="hidden" name="gal_cover_clear_5" value="0">

                <div class="uploader">
                  <div class="uploadBar" data-uploadbar>
                    <input
                      type="file"
                      name="gal_cover_5"
                      accept="image/*"
                      data-preview-input
                      data-upload-input
                      data-current=""
                    >

                    <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                    <div class="uploadName" data-upload-name>
                      No file chosen                    </div>

                    <button
                      type="button"
                      class="uploadRemove"
                      data-upload-remove
                      data-clear-name="gal_cover_clear_5"
                      disabled                    >Remove</button>
                  </div>
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Foto Gallery (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #1</b>
                      <span class="pill">gallery.items.5.photos.1</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_5_1" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_5_1"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_5_1"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #2</b>
                      <span class="pill">gallery.items.5.photos.2</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_5_2" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_5_2"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_5_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #3</b>
                      <span class="pill">gallery.items.5.photos.3</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_5_3" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_5_3"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_5_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #4</b>
                      <span class="pill">gallery.items.5.photos.4</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_5_4" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_5_4"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_5_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #5</b>
                      <span class="pill">gallery.items.5.photos.5</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_5_5" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_5_5"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_5_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #6</b>
                      <span class="pill">gallery.items.5.photos.6</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_5_6" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_5_6"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_5_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #7</b>
                      <span class="pill">gallery.items.5.photos.7</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_5_7" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_5_7"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_5_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #8</b>
                      <span class="pill">gallery.items.5.photos.8</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_5_8" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_5_8"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_5_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #9</b>
                      <span class="pill">gallery.items.5.photos.9</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_5_9" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_5_9"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_5_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #10</b>
                      <span class="pill">gallery.items.5.photos.10</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_5_10" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_5_10"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_5_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                              </div>

              <div class="note">
                Untuk performa: isi hanya kegiatan yang dibutuhkan. Yang kosong otomatis fallback ke hardcode.
              </div>

            </details>
          </div>
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kegiatan #6</b></span>
                <span class="pill">gallery.items.6</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="field">
                <label>Judul Kegiatan</label>
                <input type="text" name="gal_title_6"
                  value=""
                  placeholder="Nama event / kompetisi / pembinaan...">
              </div>

              <div class="field">
                <label>Tanggal</label>
                <input type="text" name="gal_date_6"
                  value=""
                  placeholder="21 January 2026">
              </div>

              <div class="divider"></div>

              <!-- COVER upload -->
              <div class="field">
                <div class="labelRow">
                  <label>Cover / Thumbnail</label>
                  <span class="hint">jpg/png/webp (Maks 300kb)</span>
                </div>

                                <input type="hidden" name="gal_cover_clear_6" value="0">

                <div class="uploader">
                  <div class="uploadBar" data-uploadbar>
                    <input
                      type="file"
                      name="gal_cover_6"
                      accept="image/*"
                      data-preview-input
                      data-upload-input
                      data-current=""
                    >

                    <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                    <div class="uploadName" data-upload-name>
                      No file chosen                    </div>

                    <button
                      type="button"
                      class="uploadRemove"
                      data-upload-remove
                      data-clear-name="gal_cover_clear_6"
                      disabled                    >Remove</button>
                  </div>
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Foto Gallery (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #1</b>
                      <span class="pill">gallery.items.6.photos.1</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_6_1" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_6_1"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_6_1"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #2</b>
                      <span class="pill">gallery.items.6.photos.2</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_6_2" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_6_2"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_6_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #3</b>
                      <span class="pill">gallery.items.6.photos.3</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_6_3" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_6_3"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_6_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #4</b>
                      <span class="pill">gallery.items.6.photos.4</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_6_4" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_6_4"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_6_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #5</b>
                      <span class="pill">gallery.items.6.photos.5</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_6_5" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_6_5"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_6_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #6</b>
                      <span class="pill">gallery.items.6.photos.6</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_6_6" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_6_6"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_6_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #7</b>
                      <span class="pill">gallery.items.6.photos.7</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_6_7" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_6_7"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_6_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #8</b>
                      <span class="pill">gallery.items.6.photos.8</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_6_8" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_6_8"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_6_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #9</b>
                      <span class="pill">gallery.items.6.photos.9</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_6_9" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_6_9"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_6_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #10</b>
                      <span class="pill">gallery.items.6.photos.10</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_6_10" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_6_10"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_6_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                              </div>

              <div class="note">
                Untuk performa: isi hanya kegiatan yang dibutuhkan. Yang kosong otomatis fallback ke hardcode.
              </div>

            </details>
          </div>
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kegiatan #7</b></span>
                <span class="pill">gallery.items.7</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="field">
                <label>Judul Kegiatan</label>
                <input type="text" name="gal_title_7"
                  value=""
                  placeholder="Nama event / kompetisi / pembinaan...">
              </div>

              <div class="field">
                <label>Tanggal</label>
                <input type="text" name="gal_date_7"
                  value=""
                  placeholder="21 January 2026">
              </div>

              <div class="divider"></div>

              <!-- COVER upload -->
              <div class="field">
                <div class="labelRow">
                  <label>Cover / Thumbnail</label>
                  <span class="hint">jpg/png/webp (Maks 300kb)</span>
                </div>

                                <input type="hidden" name="gal_cover_clear_7" value="0">

                <div class="uploader">
                  <div class="uploadBar" data-uploadbar>
                    <input
                      type="file"
                      name="gal_cover_7"
                      accept="image/*"
                      data-preview-input
                      data-upload-input
                      data-current=""
                    >

                    <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                    <div class="uploadName" data-upload-name>
                      No file chosen                    </div>

                    <button
                      type="button"
                      class="uploadRemove"
                      data-upload-remove
                      data-clear-name="gal_cover_clear_7"
                      disabled                    >Remove</button>
                  </div>
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Foto Gallery (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #1</b>
                      <span class="pill">gallery.items.7.photos.1</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_7_1" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_7_1"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_7_1"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #2</b>
                      <span class="pill">gallery.items.7.photos.2</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_7_2" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_7_2"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_7_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #3</b>
                      <span class="pill">gallery.items.7.photos.3</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_7_3" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_7_3"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_7_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #4</b>
                      <span class="pill">gallery.items.7.photos.4</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_7_4" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_7_4"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_7_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #5</b>
                      <span class="pill">gallery.items.7.photos.5</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_7_5" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_7_5"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_7_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #6</b>
                      <span class="pill">gallery.items.7.photos.6</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_7_6" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_7_6"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_7_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #7</b>
                      <span class="pill">gallery.items.7.photos.7</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_7_7" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_7_7"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_7_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #8</b>
                      <span class="pill">gallery.items.7.photos.8</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_7_8" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_7_8"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_7_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #9</b>
                      <span class="pill">gallery.items.7.photos.9</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_7_9" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_7_9"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_7_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #10</b>
                      <span class="pill">gallery.items.7.photos.10</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_7_10" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_7_10"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_7_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                              </div>

              <div class="note">
                Untuk performa: isi hanya kegiatan yang dibutuhkan. Yang kosong otomatis fallback ke hardcode.
              </div>

            </details>
          </div>
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kegiatan #8</b></span>
                <span class="pill">gallery.items.8</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="field">
                <label>Judul Kegiatan</label>
                <input type="text" name="gal_title_8"
                  value=""
                  placeholder="Nama event / kompetisi / pembinaan...">
              </div>

              <div class="field">
                <label>Tanggal</label>
                <input type="text" name="gal_date_8"
                  value=""
                  placeholder="21 January 2026">
              </div>

              <div class="divider"></div>

              <!-- COVER upload -->
              <div class="field">
                <div class="labelRow">
                  <label>Cover / Thumbnail</label>
                  <span class="hint">jpg/png/webp (Maks 300kb)</span>
                </div>

                                <input type="hidden" name="gal_cover_clear_8" value="0">

                <div class="uploader">
                  <div class="uploadBar" data-uploadbar>
                    <input
                      type="file"
                      name="gal_cover_8"
                      accept="image/*"
                      data-preview-input
                      data-upload-input
                      data-current=""
                    >

                    <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                    <div class="uploadName" data-upload-name>
                      No file chosen                    </div>

                    <button
                      type="button"
                      class="uploadRemove"
                      data-upload-remove
                      data-clear-name="gal_cover_clear_8"
                      disabled                    >Remove</button>
                  </div>
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Foto Gallery (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #1</b>
                      <span class="pill">gallery.items.8.photos.1</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_8_1" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_8_1"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_8_1"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #2</b>
                      <span class="pill">gallery.items.8.photos.2</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_8_2" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_8_2"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_8_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #3</b>
                      <span class="pill">gallery.items.8.photos.3</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_8_3" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_8_3"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_8_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #4</b>
                      <span class="pill">gallery.items.8.photos.4</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_8_4" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_8_4"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_8_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #5</b>
                      <span class="pill">gallery.items.8.photos.5</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_8_5" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_8_5"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_8_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #6</b>
                      <span class="pill">gallery.items.8.photos.6</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_8_6" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_8_6"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_8_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #7</b>
                      <span class="pill">gallery.items.8.photos.7</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_8_7" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_8_7"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_8_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #8</b>
                      <span class="pill">gallery.items.8.photos.8</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_8_8" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_8_8"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_8_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #9</b>
                      <span class="pill">gallery.items.8.photos.9</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_8_9" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_8_9"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_8_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #10</b>
                      <span class="pill">gallery.items.8.photos.10</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_8_10" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_8_10"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_8_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                              </div>

              <div class="note">
                Untuk performa: isi hanya kegiatan yang dibutuhkan. Yang kosong otomatis fallback ke hardcode.
              </div>

            </details>
          </div>
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kegiatan #9</b></span>
                <span class="pill">gallery.items.9</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="field">
                <label>Judul Kegiatan</label>
                <input type="text" name="gal_title_9"
                  value=""
                  placeholder="Nama event / kompetisi / pembinaan...">
              </div>

              <div class="field">
                <label>Tanggal</label>
                <input type="text" name="gal_date_9"
                  value=""
                  placeholder="21 January 2026">
              </div>

              <div class="divider"></div>

              <!-- COVER upload -->
              <div class="field">
                <div class="labelRow">
                  <label>Cover / Thumbnail</label>
                  <span class="hint">jpg/png/webp (Maks 300kb)</span>
                </div>

                                <input type="hidden" name="gal_cover_clear_9" value="0">

                <div class="uploader">
                  <div class="uploadBar" data-uploadbar>
                    <input
                      type="file"
                      name="gal_cover_9"
                      accept="image/*"
                      data-preview-input
                      data-upload-input
                      data-current=""
                    >

                    <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                    <div class="uploadName" data-upload-name>
                      No file chosen                    </div>

                    <button
                      type="button"
                      class="uploadRemove"
                      data-upload-remove
                      data-clear-name="gal_cover_clear_9"
                      disabled                    >Remove</button>
                  </div>
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Foto Gallery (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #1</b>
                      <span class="pill">gallery.items.9.photos.1</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_9_1" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_9_1"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_9_1"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #2</b>
                      <span class="pill">gallery.items.9.photos.2</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_9_2" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_9_2"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_9_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #3</b>
                      <span class="pill">gallery.items.9.photos.3</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_9_3" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_9_3"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_9_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #4</b>
                      <span class="pill">gallery.items.9.photos.4</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_9_4" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_9_4"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_9_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #5</b>
                      <span class="pill">gallery.items.9.photos.5</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_9_5" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_9_5"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_9_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #6</b>
                      <span class="pill">gallery.items.9.photos.6</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_9_6" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_9_6"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_9_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #7</b>
                      <span class="pill">gallery.items.9.photos.7</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_9_7" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_9_7"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_9_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #8</b>
                      <span class="pill">gallery.items.9.photos.8</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_9_8" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_9_8"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_9_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #9</b>
                      <span class="pill">gallery.items.9.photos.9</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_9_9" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_9_9"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_9_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #10</b>
                      <span class="pill">gallery.items.9.photos.10</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_9_10" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_9_10"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_9_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                              </div>

              <div class="note">
                Untuk performa: isi hanya kegiatan yang dibutuhkan. Yang kosong otomatis fallback ke hardcode.
              </div>

            </details>
          </div>
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kegiatan #10</b></span>
                <span class="pill">gallery.items.10</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="field">
                <label>Judul Kegiatan</label>
                <input type="text" name="gal_title_10"
                  value=""
                  placeholder="Nama event / kompetisi / pembinaan...">
              </div>

              <div class="field">
                <label>Tanggal</label>
                <input type="text" name="gal_date_10"
                  value=""
                  placeholder="21 January 2026">
              </div>

              <div class="divider"></div>

              <!-- COVER upload -->
              <div class="field">
                <div class="labelRow">
                  <label>Cover / Thumbnail</label>
                  <span class="hint">jpg/png/webp (Maks 300kb)</span>
                </div>

                                <input type="hidden" name="gal_cover_clear_10" value="0">

                <div class="uploader">
                  <div class="uploadBar" data-uploadbar>
                    <input
                      type="file"
                      name="gal_cover_10"
                      accept="image/*"
                      data-preview-input
                      data-upload-input
                      data-current=""
                    >

                    <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                    <div class="uploadName" data-upload-name>
                      No file chosen                    </div>

                    <button
                      type="button"
                      class="uploadRemove"
                      data-upload-remove
                      data-clear-name="gal_cover_clear_10"
                      disabled                    >Remove</button>
                  </div>
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Foto Gallery (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #1</b>
                      <span class="pill">gallery.items.10.photos.1</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_10_1" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_10_1"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_10_1"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #2</b>
                      <span class="pill">gallery.items.10.photos.2</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_10_2" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_10_2"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_10_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #3</b>
                      <span class="pill">gallery.items.10.photos.3</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_10_3" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_10_3"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_10_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #4</b>
                      <span class="pill">gallery.items.10.photos.4</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_10_4" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_10_4"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_10_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #5</b>
                      <span class="pill">gallery.items.10.photos.5</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_10_5" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_10_5"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_10_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #6</b>
                      <span class="pill">gallery.items.10.photos.6</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_10_6" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_10_6"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_10_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #7</b>
                      <span class="pill">gallery.items.10.photos.7</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_10_7" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_10_7"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_10_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #8</b>
                      <span class="pill">gallery.items.10.photos.8</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_10_8" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_10_8"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_10_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #9</b>
                      <span class="pill">gallery.items.10.photos.9</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_10_9" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_10_9"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_10_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Foto #10</b>
                      <span class="pill">gallery.items.10.photos.10</span>
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="gal_photo_clear_10_10" value="0">

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="gal_photo_10_10"
                            accept="image/*"
                            data-preview-input
                            data-upload-input
                            data-current=""
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            No file chosen                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="gal_photo_clear_10_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>
                  </div>
                              </div>

              <div class="note">
                Untuk performa: isi hanya kegiatan yang dibutuhkan. Yang kosong otomatis fallback ke hardcode.
              </div>

            </details>
          </div>
              </div>

      <div class="note">
        Saran: foto galeri <i>maksimal 200kb.</i> Convert ke webp untuk hasil maksimal.
      </div>

    </div>
  </div>
</div>  

<div class="actions">
              <button id="saveBtn" class="btn primary" type="submit">Save Changes</button>
            </div>
@endsection
