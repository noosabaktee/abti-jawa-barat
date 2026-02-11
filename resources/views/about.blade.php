@extends('layouts.master')

@section('title', 'About')

@section('content')
<div >
  <div class="section">
    <div class="sectionHead">
      <div>
        <h2>Tentang Kami (About)</h2>
        <p></p>
      </div>
      <div class="pill">3 sections</div>
    </div>

    <div class="sectionBody">
      
      <div class="cardGrid">
                  <div class="itemCard">
            <div class="itemTop">
              <b>Sejarah</b>
              <span class="pill">About</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Kicker</label>
                <input type="text"
                  name="about_history_kicker"
                  value=""
                  placeholder="HISTORY / VISION &amp; MISSION / ORGANIZATION">
              </div>

              <div class="field">
                <label>Title</label>
                <input type="text"
                  name="about_history_title"
                  value=""
                  placeholder="Perjalanan ABTI Jawa Barat">
              </div>

              <div class="field">
                <label>Mobile Title</label>
                <input type="text"
                  name="about_history_mobile_title"
                  value=""
                  placeholder="History">
              </div>

              <div class="field">
                <label>Mobile Desc</label>
                <input type="text"
                  name="about_history_mobile_desc"
                  value=""
                  placeholder="Perjalanan &amp; milestone">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <div class="labelRow">
                  <label>Description</label>
                  <span class="hint">Enter = line break</span>
                </div>
                <textarea name="about_history_html" rows="8"
                  placeholder="Description"></textarea>
              </div>

              <div class="field" style="grid-column:1/-1;">
                <div class="labelRow">
                  <label>Background Image</label>
                  <span class="hint">jpg/png/webp (Maks 300kb)</span>
                </div>

                                <input type="hidden" name="about_history_bg_clear" value="0">

                <div class="uploader">
                  <div class="preview" data-preview-wrap></div>

                  <div class="uploadBar" data-uploadbar>
                    <input
                      type="file"
                      name="about_history_bg"
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
                      data-clear-name="about_history_bg_clear"
                      disabled                    >Remove</button>
                  </div>

                  <div class="path"></div>
                </div>
              </div>

            </div>
          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Visi & Misi</b>
              <span class="pill">About</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Kicker</label>
                <input type="text"
                  name="about_vision_kicker"
                  value=""
                  placeholder="HISTORY / VISION &amp; MISSION / ORGANIZATION">
              </div>

              <div class="field">
                <label>Title</label>
                <input type="text"
                  name="about_vision_title"
                  value=""
                  placeholder="Perjalanan ABTI Jawa Barat">
              </div>

              <div class="field">
                <label>Mobile Title</label>
                <input type="text"
                  name="about_vision_mobile_title"
                  value=""
                  placeholder="History">
              </div>

              <div class="field">
                <label>Mobile Desc</label>
                <input type="text"
                  name="about_vision_mobile_desc"
                  value=""
                  placeholder="Perjalanan &amp; milestone">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <div class="labelRow">
                  <label>Description</label>
                  <span class="hint">Enter = line break</span>
                </div>
                <textarea name="about_vision_html" rows="8"
                  placeholder="Description"></textarea>
              </div>

              <div class="field" style="grid-column:1/-1;">
                <div class="labelRow">
                  <label>Background Image</label>
                  <span class="hint">jpg/png/webp (Maks 300kb)</span>
                </div>

                                <input type="hidden" name="about_vision_bg_clear" value="0">

                <div class="uploader">
                  <div class="preview" data-preview-wrap></div>

                  <div class="uploadBar" data-uploadbar>
                    <input
                      type="file"
                      name="about_vision_bg"
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
                      data-clear-name="about_vision_bg_clear"
                      disabled                    >Remove</button>
                  </div>

                  <div class="path"></div>
                </div>
              </div>

            </div>
          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Organisasi</b>
              <span class="pill">About</span>
            </div>

            <div class="grid2">
              <div class="field">
                <label>Kicker</label>
                <input type="text"
                  name="about_org_kicker"
                  value="tesg"
                  placeholder="HISTORY / VISION &amp; MISSION / ORGANIZATION">
              </div>

              <div class="field">
                <label>Title</label>
                <input type="text"
                  name="about_org_title"
                  value="Tes 2"
                  placeholder="Perjalanan ABTI Jawa Barat">
              </div>

              <div class="field">
                <label>Mobile Title</label>
                <input type="text"
                  name="about_org_mobile_title"
                  value=""
                  placeholder="History">
              </div>

              <div class="field">
                <label>Mobile Desc</label>
                <input type="text"
                  name="about_org_mobile_desc"
                  value=""
                  placeholder="Perjalanan &amp; milestone">
              </div>

              <div class="field" style="grid-column:1/-1;">
                <div class="labelRow">
                  <label>Description</label>
                  <span class="hint">Enter = line break</span>
                </div>
                <textarea name="about_org_html" rows="8"
                  placeholder="Description"></textarea>
              </div>

              <div class="field" style="grid-column:1/-1;">
                <div class="labelRow">
                  <label>Background Image</label>
                  <span class="hint">jpg/png/webp (Maks 300kb)</span>
                </div>

                                <input type="hidden" name="about_org_bg_clear" value="0">

                <div class="uploader">
                  <div class="preview" data-preview-wrap></div>

                  <div class="uploadBar" data-uploadbar>
                    <input
                      type="file"
                      name="about_org_bg"
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
                      data-clear-name="about_org_bg_clear"
                      disabled                    >Remove</button>
                  </div>

                  <div class="path"></div>
                </div>
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
