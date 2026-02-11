@extends('layouts.master')

@section('title', 'News Content')

@section('content')
<div >
  <div class="section">
    <div class="sectionHead">
      <div>
        <h2>West Java Corner</h2>
        <p></p>
      </div>
      <div class="pill">westjava.*</div>
    </div>

    <div class="sectionBody">

      <div class="field">
        <label>Link “Lihat semua update di YouTube”</label>
        <input type="text"
          name="wjc_youtube_all_url"
          value="Iyaya"
          placeholder="https://www.youtube.com/@CHANNEL_KAMU">
      </div>

      <div class="divider"></div>

      <h3 style="margin:0 0 10px;">Berita Terbaru (4)</h3>
      <div class="cardGrid">
                  <div class="itemCard">
            <div class="itemTop">
              <b>News #1</b>
              <span class="pill">westjava.news</span>
            </div>

            <div class="field">
              <label>Time</label>
              <input type="text" name="wjc_news_time_1"
                value="10000 -1010"
                placeholder="10:00 AM – 11:00 AM">
            </div>

            <div class="field">
              <label>Category</label>
              <input type="text" name="wjc_news_category_1"
                value="cihuy"
                placeholder="Informasi Organisasi">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_news_title_1"
                value="Ini coba"
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>Description</label>
              <textarea name="wjc_news_desc_1" placeholder="Deskripsi singkat...">Coba aja diuji</textarea>
            </div>

            <div class="field">
              <label>CTA Text</label>
              <input type="text" name="wjc_news_cta_1"
                value="Coba diihat"
                placeholder="Lihat di youtube">
            </div>

            <div class="field">
              <label>YouTube URL (shorts / video)</label>
              <input type="text" name="wjc_news_url_1"
                value="https://www.youtube.com/shorts/WPKMeqX9czc"
                placeholder="https://www.youtube.com/shorts/...">
            </div>
          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>News #2</b>
              <span class="pill">westjava.news</span>
            </div>

            <div class="field">
              <label>Time</label>
              <input type="text" name="wjc_news_time_2"
                value=""
                placeholder="10:00 AM – 11:00 AM">
            </div>

            <div class="field">
              <label>Category</label>
              <input type="text" name="wjc_news_category_2"
                value=""
                placeholder="Informasi Organisasi">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_news_title_2"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>Description</label>
              <textarea name="wjc_news_desc_2" placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="field">
              <label>CTA Text</label>
              <input type="text" name="wjc_news_cta_2"
                value=""
                placeholder="Lihat di youtube">
            </div>

            <div class="field">
              <label>YouTube URL (shorts / video)</label>
              <input type="text" name="wjc_news_url_2"
                value=""
                placeholder="https://www.youtube.com/shorts/...">
            </div>
          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>News #3</b>
              <span class="pill">westjava.news</span>
            </div>

            <div class="field">
              <label>Time</label>
              <input type="text" name="wjc_news_time_3"
                value=""
                placeholder="10:00 AM – 11:00 AM">
            </div>

            <div class="field">
              <label>Category</label>
              <input type="text" name="wjc_news_category_3"
                value=""
                placeholder="Informasi Organisasi">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_news_title_3"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>Description</label>
              <textarea name="wjc_news_desc_3" placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="field">
              <label>CTA Text</label>
              <input type="text" name="wjc_news_cta_3"
                value=""
                placeholder="Lihat di youtube">
            </div>

            <div class="field">
              <label>YouTube URL (shorts / video)</label>
              <input type="text" name="wjc_news_url_3"
                value=""
                placeholder="https://www.youtube.com/shorts/...">
            </div>
          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>News #4</b>
              <span class="pill">westjava.news</span>
            </div>

            <div class="field">
              <label>Time</label>
              <input type="text" name="wjc_news_time_4"
                value=""
                placeholder="10:00 AM – 11:00 AM">
            </div>

            <div class="field">
              <label>Category</label>
              <input type="text" name="wjc_news_category_4"
                value=""
                placeholder="Informasi Organisasi">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_news_title_4"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>Description</label>
              <textarea name="wjc_news_desc_4" placeholder="Deskripsi singkat..."></textarea>
            </div>

            <div class="field">
              <label>CTA Text</label>
              <input type="text" name="wjc_news_cta_4"
                value=""
                placeholder="Lihat di youtube">
            </div>

            <div class="field">
              <label>YouTube URL (shorts / video)</label>
              <input type="text" name="wjc_news_url_4"
                value=""
                placeholder="https://www.youtube.com/shorts/...">
            </div>
          </div>
              </div>

      <div class="divider"></div>

      <h3 style="margin:0 0 10px;">Shorts Feed (maks 10)</h3>
      <div class="cardGrid">
                  <div class="itemCard">
            <div class="itemTop">
              <b>Shorts #1</b>
              <span class="pill">westjava.shorts</span>
            </div>
            <div class="field">
              <label>URL</label>
              <input type="text" name="wjc_shorts_url_1"
                value=""
                placeholder="https://www.youtube.com/shorts/...">
            </div>
          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Shorts #2</b>
              <span class="pill">westjava.shorts</span>
            </div>
            <div class="field">
              <label>URL</label>
              <input type="text" name="wjc_shorts_url_2"
                value=""
                placeholder="https://www.youtube.com/shorts/...">
            </div>
          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Shorts #3</b>
              <span class="pill">westjava.shorts</span>
            </div>
            <div class="field">
              <label>URL</label>
              <input type="text" name="wjc_shorts_url_3"
                value=""
                placeholder="https://www.youtube.com/shorts/...">
            </div>
          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Shorts #4</b>
              <span class="pill">westjava.shorts</span>
            </div>
            <div class="field">
              <label>URL</label>
              <input type="text" name="wjc_shorts_url_4"
                value=""
                placeholder="https://www.youtube.com/shorts/...">
            </div>
          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Shorts #5</b>
              <span class="pill">westjava.shorts</span>
            </div>
            <div class="field">
              <label>URL</label>
              <input type="text" name="wjc_shorts_url_5"
                value=""
                placeholder="https://www.youtube.com/shorts/...">
            </div>
          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Shorts #6</b>
              <span class="pill">westjava.shorts</span>
            </div>
            <div class="field">
              <label>URL</label>
              <input type="text" name="wjc_shorts_url_6"
                value=""
                placeholder="https://www.youtube.com/shorts/...">
            </div>
          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Shorts #7</b>
              <span class="pill">westjava.shorts</span>
            </div>
            <div class="field">
              <label>URL</label>
              <input type="text" name="wjc_shorts_url_7"
                value=""
                placeholder="https://www.youtube.com/shorts/...">
            </div>
          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Shorts #8</b>
              <span class="pill">westjava.shorts</span>
            </div>
            <div class="field">
              <label>URL</label>
              <input type="text" name="wjc_shorts_url_8"
                value=""
                placeholder="https://www.youtube.com/shorts/...">
            </div>
          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Shorts #9</b>
              <span class="pill">westjava.shorts</span>
            </div>
            <div class="field">
              <label>URL</label>
              <input type="text" name="wjc_shorts_url_9"
                value=""
                placeholder="https://www.youtube.com/shorts/...">
            </div>
          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Shorts #10</b>
              <span class="pill">westjava.shorts</span>
            </div>
            <div class="field">
              <label>URL</label>
              <input type="text" name="wjc_shorts_url_10"
                value=""
                placeholder="https://www.youtube.com/shorts/...">
            </div>
          </div>
              </div>

      <div class="divider"></div>

      <h3 style="margin:0 0 10px;">Berita Lainnya (24)</h3>
      <div class="cardGrid">
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #1</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_1"
                value="21 februari 2000"
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_1"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_1"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_1"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_1" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_1"
                    accept="image/*"
                    data-preview-input
                    data-upload-input
                    data-current="/uploads/westjava.more_news.1.img_1768992798.jpg"
                  >

                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                  <div class="uploadName" data-upload-name>
                    Current: westjava.more_news.1.img_1768992798.jpg                  </div>

                  <button
                    type="button"
                    class="uploadRemove"
                    data-upload-remove
                    data-clear-name="wjc_more_clear_1"
                                      >Remove</button>
                </div>

                <div class="path">/uploads/westjava.more_news.1.img_1768992798.jpg</div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #2</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_2"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_2"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_2"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_2"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_2" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_2"
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
                    data-clear-name="wjc_more_clear_2"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #3</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_3"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_3"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_3"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_3"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_3" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_3"
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
                    data-clear-name="wjc_more_clear_3"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #4</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_4"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_4"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_4"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_4"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_4" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_4"
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
                    data-clear-name="wjc_more_clear_4"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #5</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_5"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_5"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_5"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_5"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_5" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_5"
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
                    data-clear-name="wjc_more_clear_5"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #6</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_6"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_6"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_6"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_6"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_6" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_6"
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
                    data-clear-name="wjc_more_clear_6"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #7</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_7"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_7"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_7"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_7"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_7" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_7"
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
                    data-clear-name="wjc_more_clear_7"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #8</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_8"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_8"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_8"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_8"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_8" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_8"
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
                    data-clear-name="wjc_more_clear_8"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #9</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_9"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_9"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_9"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_9"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_9" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_9"
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
                    data-clear-name="wjc_more_clear_9"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #10</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_10"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_10"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_10"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_10"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_10" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_10"
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
                    data-clear-name="wjc_more_clear_10"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #11</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_11"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_11"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_11"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_11"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_11" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_11"
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
                    data-clear-name="wjc_more_clear_11"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #12</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_12"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_12"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_12"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_12"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_12" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_12"
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
                    data-clear-name="wjc_more_clear_12"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #13</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_13"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_13"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_13"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_13"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_13" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_13"
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
                    data-clear-name="wjc_more_clear_13"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #14</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_14"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_14"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_14"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_14"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_14" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_14"
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
                    data-clear-name="wjc_more_clear_14"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #15</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_15"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_15"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_15"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_15"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_15" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_15"
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
                    data-clear-name="wjc_more_clear_15"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #16</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_16"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_16"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_16"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_16"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_16" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_16"
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
                    data-clear-name="wjc_more_clear_16"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #17</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_17"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_17"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_17"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_17"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_17" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_17"
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
                    data-clear-name="wjc_more_clear_17"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #18</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_18"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_18"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_18"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_18"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_18" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_18"
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
                    data-clear-name="wjc_more_clear_18"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #19</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_19"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_19"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_19"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_19"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_19" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_19"
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
                    data-clear-name="wjc_more_clear_19"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #20</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_20"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_20"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_20"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_20"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_20" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_20"
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
                    data-clear-name="wjc_more_clear_20"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #21</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_21"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_21"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_21"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_21"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_21" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_21"
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
                    data-clear-name="wjc_more_clear_21"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #22</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_22"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_22"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_22"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_22"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_22" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_22"
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
                    data-clear-name="wjc_more_clear_22"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #23</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_23"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_23"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_23"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_23"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_23" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_23"
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
                    data-clear-name="wjc_more_clear_23"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Card #24</b>
              <span class="pill">westjava.more_news</span>
            </div>

            <div class="field">
              <label>Date</label>
              <input type="text" name="wjc_more_date_24"
                value=""
                placeholder="21 January 2026">
            </div>

            <div class="field">
              <label>Title</label>
              <input type="text" name="wjc_more_title_24"
                value=""
                placeholder="Judul berita...">
            </div>

            <div class="field">
              <label>URL Berita</label>
              <input type="text" name="wjc_more_url_24"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>YouTube URL</label>
              <input type="text" name="wjc_more_youtube_24"
                value=""
                placeholder="https://youtube.com/...">
            </div>

            <div class="divider"></div>

            <div class="field">
              <div class="labelRow">
                <label>Image (optional)</label>
                <span class="hint">jpg/png/webp (Maks 300kb)</span>
              </div>

                            <input type="hidden" name="wjc_more_clear_24" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="wjc_more_img_24"
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
                    data-clear-name="wjc_more_clear_24"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
              </div>

      <div class="note">
        Catatan: link youtube wajib disertakan lengkap <i>dengan https://...</i>.
      </div>

    </div>
  </div>
</div>

<div class="actions">
              <button id="saveBtn" class="btn primary" type="submit">Save Changes</button>
            </div>
@endsection
