@extends('layouts.master')

@section('title', 'Hero')
{{-- @section('page', {{ $page }}) --}}

@section('content')
    
<div>

              <div class="section">
                <div class="sectionHead">
                  <div>
                    <h2>Hero</h2>
                    <p></p>
                  </div>
                  <div class="pill">Hero</div>
                </div>
                <div class="image" style="display: flex; justify-content: space-between">
                    <!-- HERO IMAGE DESKTOP -->
                  <div class="field" style="width: 48%">
                      <div class="labelRow">
                        <label>Hero Image Desktop</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                                            <input type="hidden" name="hero_desktop_clear" value="0">

                      <div class="uploader">
                        <!-- old preview (hidden by CSS) -->
                        <div class="preview" data-preview-wrap></div>

                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="hero_image_desktop"
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
                            data-clear-name="hero_desktop_clear"
                            disabled                          >Remove</button>
                        </div>

                        <!-- old path (hidden by CSS) -->
                        <div class="path"></div>
                      </div>
                    </div>

                    <!-- HERO IMAGE MOBILE -->
                    <div class="field" style="width: 48%">
                      <div class="labelRow">
                        <label>Hero Image Mobile</label>
                        <span class="hint">jpg/png/webp (Maks 300kb)</span>
                      </div>

                       <input type="hidden" name="hero_mobile_clear" value="0">

                      <div class="uploader">
                        <!-- old preview (hidden by CSS) -->
                        <div class="preview" data-preview-wrap></div>

                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="hero_image_mobile"
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
                            data-clear-name="hero_mobile_clear"
                            disabled                          >Remove</button>
                        </div>

                        <!-- old path (hidden by CSS) -->
                        <div class="path"></div>
                      </div>
                    </div>
                </div>
                  <div class="grid2">
                    <div class="field">
                      <div class="labelRow">
                        <label>Hero Kicker</label>
                        <span class="hint">Small title</span>
                      </div>
                      <input type="text" name="hero_kicker" value="" placeholder="Asosiasi Bola Tangan Indonesia">
                    </div>

                    <div class="field">
                      <div class="labelRow">
                        <label>Hero Big</label>
                        <span class="hint">Big title</span>
                      </div>
                      <input type="text" name="hero_big" value="" placeholder="Provinsi Jawa Barat">
                    </div>

                    <div class="field" style="grid-column: 1 / -1;">
                      <div class="labelRow">
                        <label>Hero Desc</label>
                        <span class="hint">Enter = line break</span>
                      </div>
                      <textarea name="hero_desc" placeholder="Wadah pembinaan, kompetisi, dan&#10;pengembangan bola tangan di Jawa Barat"></textarea>
                    </div>
                    <!-- HERO IMAGE DESKTOP -->
                  </div>

                  <div class="note">Tip : rasio 16:9 untuk mobile dan 1:1 untuk dekstop</div>
              </div>
            </div>

            <div class="form-footer">
                <button type="submit" class="btn-save">Save Changes</button>
            </div>
@endsection
