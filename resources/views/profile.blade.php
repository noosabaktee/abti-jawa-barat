@extends('layouts.master')

@section('title', 'Profile')

@section('content')
<div >
  <div class="section">
    <div class="sectionHead">
      <div>
        <h2>Database Klub</h2>
        <p></p>
      </div>
      <div class="pill">clubs.*</div>
    </div>

    <div class="sectionBody">

      <!-- HEADER -->
      <h3 style="margin:0 0 10px;">Header</h3>
      <div class="grid2">
        <div class="field">
          <label>Header Title (Black)</label>
          <input type="text" name="clubs_head_black"
            value="tes1"
            placeholder="Database Klub">
        </div>

        <div class="field">
          <label>Header Title (Red)</label>
          <input type="text" name="clubs_head_red"
            value=""
            placeholder="ABTI Jawa Barat">
        </div>

        <div class="field" style="grid-column: 1 / -1;">
          <label>Header Subtitle</label>
          <textarea name="clubs_head_sub"
            placeholder="Daftar resmi klub indoor dan beach..."></textarea>
        </div>
      </div>

      <div class="divider"></div>

      <!-- HERO INDOOR -->
      <h3 style="margin:0 0 10px;">Hero Slider — INDOOR (maks 10)</h3>
      <div class="cardGrid">
                  <div class="itemCard">
            <div class="itemTop">
              <b>Indoor Slide #1</b>
              <span class="pill">clubs.indoor.1</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_indoor_title_1"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_indoor_desc_1" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_indoor_clear_1" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_indoor_img_1"
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
                    data-clear-name="clubs_indoor_clear_1"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Indoor Slide #2</b>
              <span class="pill">clubs.indoor.2</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_indoor_title_2"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_indoor_desc_2" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_indoor_clear_2" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_indoor_img_2"
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
                    data-clear-name="clubs_indoor_clear_2"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Indoor Slide #3</b>
              <span class="pill">clubs.indoor.3</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_indoor_title_3"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_indoor_desc_3" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_indoor_clear_3" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_indoor_img_3"
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
                    data-clear-name="clubs_indoor_clear_3"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Indoor Slide #4</b>
              <span class="pill">clubs.indoor.4</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_indoor_title_4"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_indoor_desc_4" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_indoor_clear_4" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_indoor_img_4"
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
                    data-clear-name="clubs_indoor_clear_4"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Indoor Slide #5</b>
              <span class="pill">clubs.indoor.5</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_indoor_title_5"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_indoor_desc_5" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_indoor_clear_5" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_indoor_img_5"
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
                    data-clear-name="clubs_indoor_clear_5"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Indoor Slide #6</b>
              <span class="pill">clubs.indoor.6</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_indoor_title_6"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_indoor_desc_6" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_indoor_clear_6" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_indoor_img_6"
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
                    data-clear-name="clubs_indoor_clear_6"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Indoor Slide #7</b>
              <span class="pill">clubs.indoor.7</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_indoor_title_7"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_indoor_desc_7" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_indoor_clear_7" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_indoor_img_7"
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
                    data-clear-name="clubs_indoor_clear_7"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Indoor Slide #8</b>
              <span class="pill">clubs.indoor.8</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_indoor_title_8"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_indoor_desc_8" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_indoor_clear_8" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_indoor_img_8"
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
                    data-clear-name="clubs_indoor_clear_8"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Indoor Slide #9</b>
              <span class="pill">clubs.indoor.9</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_indoor_title_9"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_indoor_desc_9" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_indoor_clear_9" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_indoor_img_9"
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
                    data-clear-name="clubs_indoor_clear_9"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Indoor Slide #10</b>
              <span class="pill">clubs.indoor.10</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_indoor_title_10"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_indoor_desc_10" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_indoor_clear_10" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_indoor_img_10"
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
                    data-clear-name="clubs_indoor_clear_10"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
              </div>

      <div class="divider"></div>

      <!-- HERO BEACH -->
      <h3 style="margin:0 0 10px;">Hero Slider — BEACH (maks 10)</h3>
      <div class="cardGrid">
                  <div class="itemCard">
            <div class="itemTop">
              <b>Beach Slide #1</b>
              <span class="pill">clubs.beach.1</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_beach_title_1"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_beach_desc_1" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_beach_clear_1" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_beach_img_1"
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
                    data-clear-name="clubs_beach_clear_1"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Beach Slide #2</b>
              <span class="pill">clubs.beach.2</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_beach_title_2"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_beach_desc_2" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_beach_clear_2" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_beach_img_2"
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
                    data-clear-name="clubs_beach_clear_2"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Beach Slide #3</b>
              <span class="pill">clubs.beach.3</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_beach_title_3"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_beach_desc_3" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_beach_clear_3" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_beach_img_3"
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
                    data-clear-name="clubs_beach_clear_3"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Beach Slide #4</b>
              <span class="pill">clubs.beach.4</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_beach_title_4"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_beach_desc_4" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_beach_clear_4" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_beach_img_4"
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
                    data-clear-name="clubs_beach_clear_4"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Beach Slide #5</b>
              <span class="pill">clubs.beach.5</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_beach_title_5"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_beach_desc_5" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_beach_clear_5" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_beach_img_5"
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
                    data-clear-name="clubs_beach_clear_5"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Beach Slide #6</b>
              <span class="pill">clubs.beach.6</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_beach_title_6"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_beach_desc_6" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_beach_clear_6" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_beach_img_6"
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
                    data-clear-name="clubs_beach_clear_6"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Beach Slide #7</b>
              <span class="pill">clubs.beach.7</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_beach_title_7"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_beach_desc_7" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_beach_clear_7" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_beach_img_7"
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
                    data-clear-name="clubs_beach_clear_7"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Beach Slide #8</b>
              <span class="pill">clubs.beach.8</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_beach_title_8"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_beach_desc_8" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_beach_clear_8" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_beach_img_8"
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
                    data-clear-name="clubs_beach_clear_8"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Beach Slide #9</b>
              <span class="pill">clubs.beach.9</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_beach_title_9"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_beach_desc_9" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_beach_clear_9" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_beach_img_9"
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
                    data-clear-name="clubs_beach_clear_9"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Beach Slide #10</b>
              <span class="pill">clubs.beach.10</span>
            </div>

            <div class="field">
              <label>Title / Narasi</label>
              <input type="text" name="clubs_beach_title_10"
                value=""
                placeholder="Judul / overlay text">
            </div>

            <div class="field">
              <label>Description (optional)</label>
              <textarea name="clubs_beach_desc_10" rows="3"
                placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="clubs_beach_clear_10" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="clubs_beach_img_10"
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
                    data-clear-name="clubs_beach_clear_10"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
              </div>

      <div class="divider"></div>

      <!-- CLUBS LIST -->
      <h3 style="margin:0 0 10px;">Clubs List (maks 100)</h3>
      <div class="cardGrid">
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #1</b>
              <span class="pill">clubs.items.1</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_1"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_1"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_1"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_1"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_1"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_1"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_1"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_1"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_1"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_1" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_1"
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
                    data-clear-name="club_logo_clear_1"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #2</b>
              <span class="pill">clubs.items.2</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_2"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_2"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_2"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_2"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_2"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_2"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_2"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_2"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_2"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_2" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_2"
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
                    data-clear-name="club_logo_clear_2"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #3</b>
              <span class="pill">clubs.items.3</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_3"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_3"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_3"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_3"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_3"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_3"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_3"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_3"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_3"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_3" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_3"
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
                    data-clear-name="club_logo_clear_3"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #4</b>
              <span class="pill">clubs.items.4</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_4"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_4"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_4"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_4"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_4"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_4"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_4"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_4"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_4"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_4" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_4"
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
                    data-clear-name="club_logo_clear_4"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #5</b>
              <span class="pill">clubs.items.5</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_5"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_5"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_5"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_5"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_5"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_5"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_5"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_5"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_5"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_5" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_5"
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
                    data-clear-name="club_logo_clear_5"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #6</b>
              <span class="pill">clubs.items.6</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_6"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_6"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_6"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_6"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_6"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_6"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_6"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_6"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_6"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_6" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_6"
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
                    data-clear-name="club_logo_clear_6"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #7</b>
              <span class="pill">clubs.items.7</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_7"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_7"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_7"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_7"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_7"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_7"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_7"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_7"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_7"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_7" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_7"
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
                    data-clear-name="club_logo_clear_7"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #8</b>
              <span class="pill">clubs.items.8</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_8"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_8"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_8"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_8"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_8"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_8"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_8"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_8"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_8"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_8" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_8"
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
                    data-clear-name="club_logo_clear_8"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #9</b>
              <span class="pill">clubs.items.9</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_9"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_9"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_9"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_9"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_9"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_9"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_9"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_9"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_9"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_9" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_9"
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
                    data-clear-name="club_logo_clear_9"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #10</b>
              <span class="pill">clubs.items.10</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_10"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_10"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_10"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_10"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_10"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_10"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_10"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_10"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_10"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_10" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_10"
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
                    data-clear-name="club_logo_clear_10"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #11</b>
              <span class="pill">clubs.items.11</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_11"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_11"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_11"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_11"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_11"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_11"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_11"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_11"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_11"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_11" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_11"
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
                    data-clear-name="club_logo_clear_11"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #12</b>
              <span class="pill">clubs.items.12</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_12"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_12"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_12"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_12"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_12"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_12"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_12"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_12"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_12"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_12" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_12"
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
                    data-clear-name="club_logo_clear_12"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #13</b>
              <span class="pill">clubs.items.13</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_13"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_13"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_13"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_13"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_13"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_13"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_13"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_13"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_13"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_13" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_13"
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
                    data-clear-name="club_logo_clear_13"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #14</b>
              <span class="pill">clubs.items.14</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_14"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_14"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_14"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_14"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_14"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_14"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_14"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_14"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_14"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_14" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_14"
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
                    data-clear-name="club_logo_clear_14"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #15</b>
              <span class="pill">clubs.items.15</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_15"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_15"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_15"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_15"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_15"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_15"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_15"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_15"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_15"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_15" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_15"
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
                    data-clear-name="club_logo_clear_15"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #16</b>
              <span class="pill">clubs.items.16</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_16"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_16"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_16"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_16"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_16"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_16"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_16"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_16"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_16"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_16" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_16"
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
                    data-clear-name="club_logo_clear_16"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #17</b>
              <span class="pill">clubs.items.17</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_17"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_17"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_17"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_17"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_17"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_17"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_17"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_17"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_17"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_17" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_17"
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
                    data-clear-name="club_logo_clear_17"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #18</b>
              <span class="pill">clubs.items.18</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_18"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_18"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_18"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_18"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_18"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_18"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_18"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_18"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_18"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_18" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_18"
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
                    data-clear-name="club_logo_clear_18"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #19</b>
              <span class="pill">clubs.items.19</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_19"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_19"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_19"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_19"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_19"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_19"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_19"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_19"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_19"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_19" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_19"
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
                    data-clear-name="club_logo_clear_19"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #20</b>
              <span class="pill">clubs.items.20</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_20"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_20"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_20"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_20"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_20"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_20"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_20"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_20"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_20"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_20" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_20"
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
                    data-clear-name="club_logo_clear_20"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #21</b>
              <span class="pill">clubs.items.21</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_21"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_21"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_21"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_21"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_21"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_21"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_21"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_21"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_21"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_21" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_21"
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
                    data-clear-name="club_logo_clear_21"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #22</b>
              <span class="pill">clubs.items.22</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_22"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_22"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_22"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_22"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_22"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_22"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_22"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_22"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_22"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_22" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_22"
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
                    data-clear-name="club_logo_clear_22"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #23</b>
              <span class="pill">clubs.items.23</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_23"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_23"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_23"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_23"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_23"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_23"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_23"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_23"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_23"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_23" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_23"
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
                    data-clear-name="club_logo_clear_23"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #24</b>
              <span class="pill">clubs.items.24</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_24"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_24"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_24"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_24"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_24"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_24"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_24"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_24"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_24"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_24" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_24"
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
                    data-clear-name="club_logo_clear_24"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #25</b>
              <span class="pill">clubs.items.25</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_25"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_25"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_25"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_25"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_25"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_25"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_25"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_25"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_25"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_25" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_25"
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
                    data-clear-name="club_logo_clear_25"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #26</b>
              <span class="pill">clubs.items.26</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_26"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_26"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_26"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_26"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_26"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_26"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_26"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_26"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_26"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_26" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_26"
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
                    data-clear-name="club_logo_clear_26"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #27</b>
              <span class="pill">clubs.items.27</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_27"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_27"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_27"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_27"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_27"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_27"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_27"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_27"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_27"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_27" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_27"
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
                    data-clear-name="club_logo_clear_27"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #28</b>
              <span class="pill">clubs.items.28</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_28"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_28"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_28"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_28"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_28"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_28"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_28"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_28"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_28"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_28" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_28"
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
                    data-clear-name="club_logo_clear_28"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #29</b>
              <span class="pill">clubs.items.29</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_29"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_29"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_29"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_29"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_29"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_29"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_29"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_29"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_29"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_29" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_29"
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
                    data-clear-name="club_logo_clear_29"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #30</b>
              <span class="pill">clubs.items.30</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_30"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_30"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_30"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_30"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_30"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_30"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_30"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_30"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_30"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_30" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_30"
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
                    data-clear-name="club_logo_clear_30"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #31</b>
              <span class="pill">clubs.items.31</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_31"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_31"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_31"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_31"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_31"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_31"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_31"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_31"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_31"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_31" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_31"
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
                    data-clear-name="club_logo_clear_31"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #32</b>
              <span class="pill">clubs.items.32</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_32"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_32"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_32"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_32"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_32"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_32"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_32"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_32"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_32"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_32" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_32"
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
                    data-clear-name="club_logo_clear_32"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #33</b>
              <span class="pill">clubs.items.33</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_33"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_33"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_33"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_33"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_33"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_33"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_33"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_33"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_33"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_33" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_33"
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
                    data-clear-name="club_logo_clear_33"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #34</b>
              <span class="pill">clubs.items.34</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_34"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_34"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_34"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_34"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_34"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_34"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_34"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_34"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_34"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_34" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_34"
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
                    data-clear-name="club_logo_clear_34"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #35</b>
              <span class="pill">clubs.items.35</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_35"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_35"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_35"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_35"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_35"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_35"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_35"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_35"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_35"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_35" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_35"
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
                    data-clear-name="club_logo_clear_35"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #36</b>
              <span class="pill">clubs.items.36</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_36"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_36"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_36"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_36"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_36"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_36"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_36"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_36"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_36"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_36" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_36"
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
                    data-clear-name="club_logo_clear_36"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #37</b>
              <span class="pill">clubs.items.37</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_37"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_37"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_37"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_37"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_37"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_37"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_37"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_37"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_37"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_37" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_37"
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
                    data-clear-name="club_logo_clear_37"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #38</b>
              <span class="pill">clubs.items.38</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_38"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_38"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_38"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_38"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_38"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_38"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_38"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_38"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_38"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_38" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_38"
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
                    data-clear-name="club_logo_clear_38"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #39</b>
              <span class="pill">clubs.items.39</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_39"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_39"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_39"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_39"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_39"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_39"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_39"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_39"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_39"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_39" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_39"
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
                    data-clear-name="club_logo_clear_39"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #40</b>
              <span class="pill">clubs.items.40</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_40"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_40"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_40"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_40"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_40"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_40"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_40"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_40"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_40"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_40" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_40"
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
                    data-clear-name="club_logo_clear_40"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #41</b>
              <span class="pill">clubs.items.41</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_41"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_41"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_41"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_41"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_41"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_41"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_41"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_41"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_41"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_41" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_41"
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
                    data-clear-name="club_logo_clear_41"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #42</b>
              <span class="pill">clubs.items.42</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_42"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_42"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_42"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_42"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_42"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_42"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_42"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_42"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_42"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_42" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_42"
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
                    data-clear-name="club_logo_clear_42"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #43</b>
              <span class="pill">clubs.items.43</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_43"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_43"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_43"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_43"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_43"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_43"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_43"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_43"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_43"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_43" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_43"
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
                    data-clear-name="club_logo_clear_43"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #44</b>
              <span class="pill">clubs.items.44</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_44"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_44"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_44"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_44"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_44"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_44"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_44"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_44"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_44"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_44" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_44"
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
                    data-clear-name="club_logo_clear_44"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #45</b>
              <span class="pill">clubs.items.45</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_45"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_45"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_45"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_45"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_45"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_45"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_45"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_45"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_45"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_45" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_45"
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
                    data-clear-name="club_logo_clear_45"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #46</b>
              <span class="pill">clubs.items.46</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_46"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_46"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_46"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_46"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_46"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_46"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_46"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_46"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_46"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_46" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_46"
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
                    data-clear-name="club_logo_clear_46"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #47</b>
              <span class="pill">clubs.items.47</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_47"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_47"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_47"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_47"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_47"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_47"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_47"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_47"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_47"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_47" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_47"
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
                    data-clear-name="club_logo_clear_47"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #48</b>
              <span class="pill">clubs.items.48</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_48"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_48"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_48"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_48"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_48"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_48"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_48"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_48"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_48"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_48" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_48"
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
                    data-clear-name="club_logo_clear_48"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #49</b>
              <span class="pill">clubs.items.49</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_49"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_49"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_49"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_49"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_49"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_49"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_49"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_49"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_49"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_49" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_49"
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
                    data-clear-name="club_logo_clear_49"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #50</b>
              <span class="pill">clubs.items.50</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_50"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_50"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_50"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_50"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_50"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_50"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_50"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_50"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_50"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_50" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_50"
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
                    data-clear-name="club_logo_clear_50"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #51</b>
              <span class="pill">clubs.items.51</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_51"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_51"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_51"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_51"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_51"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_51"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_51"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_51"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_51"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_51" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_51"
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
                    data-clear-name="club_logo_clear_51"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #52</b>
              <span class="pill">clubs.items.52</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_52"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_52"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_52"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_52"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_52"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_52"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_52"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_52"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_52"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_52" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_52"
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
                    data-clear-name="club_logo_clear_52"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #53</b>
              <span class="pill">clubs.items.53</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_53"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_53"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_53"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_53"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_53"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_53"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_53"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_53"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_53"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_53" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_53"
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
                    data-clear-name="club_logo_clear_53"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #54</b>
              <span class="pill">clubs.items.54</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_54"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_54"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_54"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_54"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_54"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_54"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_54"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_54"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_54"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_54" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_54"
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
                    data-clear-name="club_logo_clear_54"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #55</b>
              <span class="pill">clubs.items.55</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_55"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_55"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_55"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_55"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_55"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_55"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_55"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_55"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_55"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_55" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_55"
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
                    data-clear-name="club_logo_clear_55"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #56</b>
              <span class="pill">clubs.items.56</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_56"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_56"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_56"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_56"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_56"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_56"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_56"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_56"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_56"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_56" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_56"
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
                    data-clear-name="club_logo_clear_56"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #57</b>
              <span class="pill">clubs.items.57</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_57"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_57"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_57"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_57"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_57"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_57"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_57"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_57"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_57"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_57" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_57"
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
                    data-clear-name="club_logo_clear_57"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #58</b>
              <span class="pill">clubs.items.58</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_58"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_58"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_58"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_58"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_58"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_58"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_58"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_58"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_58"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_58" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_58"
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
                    data-clear-name="club_logo_clear_58"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #59</b>
              <span class="pill">clubs.items.59</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_59"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_59"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_59"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_59"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_59"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_59"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_59"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_59"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_59"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_59" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_59"
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
                    data-clear-name="club_logo_clear_59"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #60</b>
              <span class="pill">clubs.items.60</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_60"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_60"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_60"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_60"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_60"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_60"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_60"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_60"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_60"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_60" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_60"
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
                    data-clear-name="club_logo_clear_60"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #61</b>
              <span class="pill">clubs.items.61</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_61"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_61"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_61"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_61"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_61"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_61"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_61"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_61"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_61"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_61" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_61"
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
                    data-clear-name="club_logo_clear_61"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #62</b>
              <span class="pill">clubs.items.62</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_62"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_62"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_62"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_62"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_62"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_62"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_62"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_62"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_62"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_62" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_62"
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
                    data-clear-name="club_logo_clear_62"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #63</b>
              <span class="pill">clubs.items.63</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_63"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_63"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_63"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_63"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_63"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_63"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_63"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_63"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_63"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_63" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_63"
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
                    data-clear-name="club_logo_clear_63"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #64</b>
              <span class="pill">clubs.items.64</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_64"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_64"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_64"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_64"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_64"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_64"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_64"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_64"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_64"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_64" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_64"
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
                    data-clear-name="club_logo_clear_64"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #65</b>
              <span class="pill">clubs.items.65</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_65"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_65"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_65"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_65"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_65"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_65"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_65"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_65"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_65"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_65" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_65"
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
                    data-clear-name="club_logo_clear_65"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #66</b>
              <span class="pill">clubs.items.66</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_66"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_66"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_66"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_66"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_66"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_66"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_66"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_66"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_66"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_66" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_66"
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
                    data-clear-name="club_logo_clear_66"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #67</b>
              <span class="pill">clubs.items.67</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_67"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_67"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_67"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_67"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_67"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_67"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_67"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_67"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_67"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_67" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_67"
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
                    data-clear-name="club_logo_clear_67"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #68</b>
              <span class="pill">clubs.items.68</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_68"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_68"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_68"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_68"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_68"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_68"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_68"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_68"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_68"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_68" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_68"
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
                    data-clear-name="club_logo_clear_68"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #69</b>
              <span class="pill">clubs.items.69</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_69"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_69"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_69"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_69"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_69"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_69"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_69"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_69"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_69"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_69" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_69"
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
                    data-clear-name="club_logo_clear_69"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #70</b>
              <span class="pill">clubs.items.70</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_70"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_70"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_70"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_70"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_70"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_70"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_70"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_70"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_70"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_70" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_70"
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
                    data-clear-name="club_logo_clear_70"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #71</b>
              <span class="pill">clubs.items.71</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_71"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_71"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_71"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_71"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_71"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_71"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_71"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_71"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_71"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_71" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_71"
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
                    data-clear-name="club_logo_clear_71"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #72</b>
              <span class="pill">clubs.items.72</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_72"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_72"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_72"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_72"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_72"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_72"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_72"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_72"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_72"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_72" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_72"
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
                    data-clear-name="club_logo_clear_72"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #73</b>
              <span class="pill">clubs.items.73</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_73"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_73"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_73"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_73"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_73"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_73"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_73"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_73"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_73"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_73" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_73"
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
                    data-clear-name="club_logo_clear_73"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #74</b>
              <span class="pill">clubs.items.74</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_74"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_74"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_74"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_74"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_74"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_74"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_74"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_74"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_74"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_74" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_74"
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
                    data-clear-name="club_logo_clear_74"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #75</b>
              <span class="pill">clubs.items.75</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_75"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_75"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_75"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_75"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_75"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_75"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_75"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_75"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_75"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_75" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_75"
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
                    data-clear-name="club_logo_clear_75"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #76</b>
              <span class="pill">clubs.items.76</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_76"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_76"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_76"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_76"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_76"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_76"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_76"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_76"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_76"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_76" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_76"
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
                    data-clear-name="club_logo_clear_76"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #77</b>
              <span class="pill">clubs.items.77</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_77"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_77"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_77"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_77"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_77"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_77"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_77"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_77"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_77"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_77" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_77"
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
                    data-clear-name="club_logo_clear_77"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #78</b>
              <span class="pill">clubs.items.78</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_78"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_78"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_78"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_78"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_78"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_78"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_78"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_78"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_78"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_78" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_78"
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
                    data-clear-name="club_logo_clear_78"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #79</b>
              <span class="pill">clubs.items.79</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_79"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_79"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_79"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_79"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_79"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_79"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_79"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_79"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_79"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_79" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_79"
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
                    data-clear-name="club_logo_clear_79"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #80</b>
              <span class="pill">clubs.items.80</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_80"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_80"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_80"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_80"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_80"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_80"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_80"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_80"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_80"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_80" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_80"
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
                    data-clear-name="club_logo_clear_80"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #81</b>
              <span class="pill">clubs.items.81</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_81"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_81"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_81"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_81"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_81"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_81"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_81"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_81"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_81"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_81" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_81"
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
                    data-clear-name="club_logo_clear_81"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #82</b>
              <span class="pill">clubs.items.82</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_82"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_82"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_82"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_82"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_82"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_82"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_82"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_82"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_82"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_82" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_82"
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
                    data-clear-name="club_logo_clear_82"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #83</b>
              <span class="pill">clubs.items.83</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_83"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_83"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_83"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_83"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_83"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_83"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_83"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_83"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_83"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_83" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_83"
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
                    data-clear-name="club_logo_clear_83"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #84</b>
              <span class="pill">clubs.items.84</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_84"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_84"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_84"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_84"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_84"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_84"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_84"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_84"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_84"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_84" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_84"
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
                    data-clear-name="club_logo_clear_84"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #85</b>
              <span class="pill">clubs.items.85</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_85"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_85"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_85"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_85"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_85"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_85"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_85"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_85"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_85"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_85" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_85"
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
                    data-clear-name="club_logo_clear_85"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #86</b>
              <span class="pill">clubs.items.86</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_86"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_86"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_86"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_86"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_86"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_86"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_86"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_86"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_86"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_86" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_86"
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
                    data-clear-name="club_logo_clear_86"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #87</b>
              <span class="pill">clubs.items.87</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_87"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_87"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_87"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_87"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_87"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_87"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_87"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_87"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_87"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_87" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_87"
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
                    data-clear-name="club_logo_clear_87"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #88</b>
              <span class="pill">clubs.items.88</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_88"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_88"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_88"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_88"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_88"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_88"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_88"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_88"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_88"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_88" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_88"
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
                    data-clear-name="club_logo_clear_88"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #89</b>
              <span class="pill">clubs.items.89</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_89"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_89"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_89"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_89"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_89"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_89"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_89"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_89"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_89"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_89" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_89"
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
                    data-clear-name="club_logo_clear_89"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #90</b>
              <span class="pill">clubs.items.90</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_90"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_90"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_90"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_90"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_90"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_90"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_90"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_90"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_90"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_90" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_90"
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
                    data-clear-name="club_logo_clear_90"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #91</b>
              <span class="pill">clubs.items.91</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_91"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_91"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_91"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_91"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_91"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_91"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_91"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_91"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_91"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_91" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_91"
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
                    data-clear-name="club_logo_clear_91"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #92</b>
              <span class="pill">clubs.items.92</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_92"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_92"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_92"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_92"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_92"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_92"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_92"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_92"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_92"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_92" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_92"
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
                    data-clear-name="club_logo_clear_92"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #93</b>
              <span class="pill">clubs.items.93</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_93"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_93"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_93"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_93"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_93"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_93"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_93"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_93"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_93"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_93" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_93"
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
                    data-clear-name="club_logo_clear_93"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #94</b>
              <span class="pill">clubs.items.94</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_94"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_94"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_94"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_94"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_94"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_94"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_94"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_94"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_94"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_94" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_94"
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
                    data-clear-name="club_logo_clear_94"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #95</b>
              <span class="pill">clubs.items.95</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_95"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_95"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_95"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_95"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_95"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_95"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_95"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_95"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_95"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_95" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_95"
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
                    data-clear-name="club_logo_clear_95"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #96</b>
              <span class="pill">clubs.items.96</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_96"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_96"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_96"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_96"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_96"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_96"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_96"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_96"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_96"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_96" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_96"
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
                    data-clear-name="club_logo_clear_96"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #97</b>
              <span class="pill">clubs.items.97</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_97"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_97"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_97"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_97"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_97"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_97"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_97"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_97"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_97"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_97" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_97"
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
                    data-clear-name="club_logo_clear_97"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #98</b>
              <span class="pill">clubs.items.98</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_98"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_98"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_98"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_98"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_98"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_98"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_98"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_98"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_98"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_98" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_98"
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
                    data-clear-name="club_logo_clear_98"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #99</b>
              <span class="pill">clubs.items.99</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_99"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_99"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_99"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_99"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_99"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_99"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_99"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_99"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_99"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_99" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_99"
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
                    data-clear-name="club_logo_clear_99"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Club #100</b>
              <span class="pill">clubs.items.100</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Klub</label>
                <input type="text" name="club_name_100"
                  value=""
                  placeholder="Nama klub...">
              </div>

              <div class="field">
                <label>Kota/Kab</label>
                <input type="text" name="club_city_100"
                  value=""
                  placeholder="Bandung / Bogor / ...">
              </div>

              <div class="field">
                <label>Direktur Klub</label>
                <input type="text" name="club_director_100"
                  value=""
                  placeholder="Nama direktur...">
              </div>

              <div class="field">
                <label>Administrator</label>
                <input type="text" name="club_admin_100"
                  value=""
                  placeholder="Nama admin...">
              </div>

              <div class="field">
                <label>Direktur Teknik</label>
                <input type="text" name="club_tech_100"
                  value=""
                  placeholder="Nama direktur teknik...">
              </div>

              <div class="field">
                <label>Venue Latihan</label>
                <input type="text" name="club_venue_100"
                  value=""
                  placeholder="GOR / Lapangan...">
              </div>

              <div class="field">
                <label>E-mail</label>
                <input type="text" name="club_email_100"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Contact Person</label>
                <input type="text" name="club_contact_100"
                  value=""
                  placeholder="+62... / nama">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <label>Link</label>
                <input type="text" name="club_link_100"
                  value=""
                  placeholder="https://...">
              </div>
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Logo</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="club_logo_clear_100" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="club_logo_100"
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
                    data-clear-name="club_logo_clear_100"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
              </div>

      <div class="note">
        Saran: Jika link kosong <i>dapat diisi dengan</i> simbol "-"
      </div>

    </div>
  </div>
</div>

<div class="actions">
              <button id="saveBtn" class="btn primary" type="submit">Save Changes</button>
            </div>
@endsection
