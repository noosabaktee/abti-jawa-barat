@extends('layouts.master')

@section('title', 'Big News')

@section('content')
 <div  >
              <div class="section">
                <div class="sectionHead">
                  <div>
                    <h2>Big News</h2>
                    <p></p>
                  </div>
                  <div class="pill">3 items</div>
                </div>
                <div class="sectionBody">
                  <div class="cardGrid">
                                          <div class="itemCard">
                        <div class="itemTop">
                          <b>Item #1</b>
                          <span class="pill">Big News</span>
                        </div>

                        <div class="field">
                          <label>Nama / Title</label>
                          <input type="text" name="big_title_1" value="" placeholder="Judul berita...">
                        </div>

                        <div class="field">
                          <label>Link</label>
                          <input type="text" name="big_href_1" value="" placeholder="https://...">
                        </div>

                        <div class="divider"></div>

                        <div class="field">
                          <div class="labelRow">
                            <label>Image</label>
                            <span class="hint">Disarankan landscape. jpg/png/webp (Maks 300kb)</span>
                          </div>

                                                    <input type="hidden" name="big_clear_1" value="0">

                          <div class="uploader">
                            <div class="preview" data-preview-wrap></div>

                            <div class="uploadBar" data-uploadbar>
                              <input
                                type="file"
                                name="big_img_1"
                                accept="image/*"
                                data-preview-input
                                data-upload-input
                                data-current=""
                              >

                              <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                              <div class="uploadName" data-upload-name>
                                No file chosen                              </div>

                              <button
                                type="button"
                                class="uploadRemove"
                                data-upload-remove
                                data-clear-name="big_clear_1"
                                disabled                              >Remove</button>
                            </div>

                            <div class="path"></div>
                          </div>
                        </div>
                      </div>
                                          <div class="itemCard">
                        <div class="itemTop">
                          <b>Item #2</b>
                          <span class="pill">Big News</span>
                        </div>

                        <div class="field">
                          <label>Nama / Title</label>
                          <input type="text" name="big_title_2" value="" placeholder="Judul berita...">
                        </div>

                        <div class="field">
                          <label>Link</label>
                          <input type="text" name="big_href_2" value="" placeholder="https://...">
                        </div>

                        <div class="divider"></div>

                        <div class="field">
                          <div class="labelRow">
                            <label>Image</label>
                            <span class="hint">Disarankan landscape. jpg/png/webp (Maks 300kb)</span>
                          </div>

                                                    <input type="hidden" name="big_clear_2" value="0">

                          <div class="uploader">
                            <div class="preview" data-preview-wrap></div>

                            <div class="uploadBar" data-uploadbar>
                              <input
                                type="file"
                                name="big_img_2"
                                accept="image/*"
                                data-preview-input
                                data-upload-input
                                data-current=""
                              >

                              <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                              <div class="uploadName" data-upload-name>
                                No file chosen                              </div>

                              <button
                                type="button"
                                class="uploadRemove"
                                data-upload-remove
                                data-clear-name="big_clear_2"
                                disabled                              >Remove</button>
                            </div>

                            <div class="path"></div>
                          </div>
                        </div>
                      </div>
                                          <div class="itemCard">
                        <div class="itemTop">
                          <b>Item #3</b>
                          <span class="pill">Big News</span>
                        </div>

                        <div class="field">
                          <label>Nama / Title</label>
                          <input type="text" name="big_title_3" value="" placeholder="Judul berita...">
                        </div>

                        <div class="field">
                          <label>Link</label>
                          <input type="text" name="big_href_3" value="" placeholder="https://...">
                        </div>

                        <div class="divider"></div>

                        <div class="field">
                          <div class="labelRow">
                            <label>Image</label>
                            <span class="hint">Disarankan landscape. jpg/png/webp (Maks 300kb)</span>
                          </div>

                                                    <input type="hidden" name="big_clear_3" value="0">

                          <div class="uploader">
                            <div class="preview" data-preview-wrap></div>

                            <div class="uploadBar" data-uploadbar>
                              <input
                                type="file"
                                name="big_img_3"
                                accept="image/*"
                                data-preview-input
                                data-upload-input
                                data-current=""
                              >

                              <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                              <div class="uploadName" data-upload-name>
                                No file chosen                              </div>

                              <button
                                type="button"
                                class="uploadRemove"
                                data-upload-remove
                                data-clear-name="big_clear_3"
                                disabled                              >Remove</button>
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
