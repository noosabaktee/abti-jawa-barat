@extends('layouts.master')

@section('title', 'Anggota')

@section('content')
<div >
  <div class="section">
    <div class="sectionHead">
      <div>
        <h2>Anggota ABTI Kota/Kab</h2>
        <p></p>
      </div>
      <div class="pill">28 items</div>
    </div>

    <div class="sectionBody">
      <div class="cardGrid">
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #1</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_1"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_1"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_1"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_1"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_1"
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

                            <input type="hidden" name="mem_logo_clear_1" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_1"
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
                    data-clear-name="mem_logo_clear_1"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #2</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_2"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_2"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_2"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_2"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_2"
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

                            <input type="hidden" name="mem_logo_clear_2" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_2"
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
                    data-clear-name="mem_logo_clear_2"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #3</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_3"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_3"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_3"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_3"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_3"
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

                            <input type="hidden" name="mem_logo_clear_3" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_3"
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
                    data-clear-name="mem_logo_clear_3"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #4</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_4"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_4"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_4"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_4"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_4"
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

                            <input type="hidden" name="mem_logo_clear_4" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_4"
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
                    data-clear-name="mem_logo_clear_4"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #5</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_5"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_5"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_5"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_5"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_5"
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

                            <input type="hidden" name="mem_logo_clear_5" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_5"
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
                    data-clear-name="mem_logo_clear_5"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #6</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_6"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_6"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_6"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_6"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_6"
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

                            <input type="hidden" name="mem_logo_clear_6" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_6"
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
                    data-clear-name="mem_logo_clear_6"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #7</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_7"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_7"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_7"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_7"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_7"
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

                            <input type="hidden" name="mem_logo_clear_7" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_7"
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
                    data-clear-name="mem_logo_clear_7"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #8</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_8"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_8"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_8"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_8"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_8"
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

                            <input type="hidden" name="mem_logo_clear_8" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_8"
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
                    data-clear-name="mem_logo_clear_8"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #9</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_9"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_9"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_9"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_9"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_9"
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

                            <input type="hidden" name="mem_logo_clear_9" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_9"
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
                    data-clear-name="mem_logo_clear_9"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #10</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_10"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_10"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_10"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_10"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_10"
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

                            <input type="hidden" name="mem_logo_clear_10" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_10"
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
                    data-clear-name="mem_logo_clear_10"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #11</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_11"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_11"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_11"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_11"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_11"
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

                            <input type="hidden" name="mem_logo_clear_11" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_11"
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
                    data-clear-name="mem_logo_clear_11"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #12</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_12"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_12"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_12"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_12"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_12"
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

                            <input type="hidden" name="mem_logo_clear_12" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_12"
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
                    data-clear-name="mem_logo_clear_12"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #13</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_13"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_13"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_13"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_13"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_13"
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

                            <input type="hidden" name="mem_logo_clear_13" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_13"
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
                    data-clear-name="mem_logo_clear_13"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #14</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_14"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_14"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_14"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_14"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_14"
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

                            <input type="hidden" name="mem_logo_clear_14" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_14"
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
                    data-clear-name="mem_logo_clear_14"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #15</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_15"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_15"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_15"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_15"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_15"
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

                            <input type="hidden" name="mem_logo_clear_15" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_15"
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
                    data-clear-name="mem_logo_clear_15"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #16</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_16"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_16"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_16"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_16"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_16"
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

                            <input type="hidden" name="mem_logo_clear_16" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_16"
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
                    data-clear-name="mem_logo_clear_16"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #17</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_17"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_17"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_17"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_17"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_17"
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

                            <input type="hidden" name="mem_logo_clear_17" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_17"
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
                    data-clear-name="mem_logo_clear_17"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #18</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_18"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_18"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_18"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_18"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_18"
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

                            <input type="hidden" name="mem_logo_clear_18" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_18"
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
                    data-clear-name="mem_logo_clear_18"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #19</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_19"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_19"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_19"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_19"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_19"
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

                            <input type="hidden" name="mem_logo_clear_19" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_19"
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
                    data-clear-name="mem_logo_clear_19"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #20</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_20"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_20"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_20"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_20"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_20"
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

                            <input type="hidden" name="mem_logo_clear_20" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_20"
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
                    data-clear-name="mem_logo_clear_20"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #21</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_21"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_21"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_21"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_21"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_21"
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

                            <input type="hidden" name="mem_logo_clear_21" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_21"
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
                    data-clear-name="mem_logo_clear_21"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #22</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_22"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_22"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_22"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_22"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_22"
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

                            <input type="hidden" name="mem_logo_clear_22" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_22"
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
                    data-clear-name="mem_logo_clear_22"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #23</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_23"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_23"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_23"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_23"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_23"
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

                            <input type="hidden" name="mem_logo_clear_23" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_23"
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
                    data-clear-name="mem_logo_clear_23"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #24</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_24"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_24"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_24"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_24"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_24"
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

                            <input type="hidden" name="mem_logo_clear_24" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_24"
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
                    data-clear-name="mem_logo_clear_24"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #25</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_25"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_25"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_25"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_25"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_25"
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

                            <input type="hidden" name="mem_logo_clear_25" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_25"
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
                    data-clear-name="mem_logo_clear_25"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #26</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_26"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_26"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_26"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_26"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_26"
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

                            <input type="hidden" name="mem_logo_clear_26" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_26"
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
                    data-clear-name="mem_logo_clear_26"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #27</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_27"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_27"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_27"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_27"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_27"
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

                            <input type="hidden" name="mem_logo_clear_27" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_27"
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
                    data-clear-name="mem_logo_clear_27"
                    disabled                  >Remove</button>
                </div>

                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Anggota #28</b>
              <span class="pill">Anggota</span>
            </div>

            <div class="field">
              <label>Kota/Kab (Nama)</label>
              <input type="text" name="mem_name_28"
                value=""
                placeholder="ABTI Kab. Bogor">
            </div>

            <div class="grid2">
              <div class="field">
                <label>Nama Ketua</label>
                <input type="text" name="mem_ketua_28"
                  value=""
                  placeholder="Nama ketua...">
              </div>

              <div class="field">
                <label>Nama Sekretaris</label>
                <input type="text" name="mem_sekretaris_28"
                  value=""
                  placeholder="Nama sekretaris...">
              </div>

              <div class="field">
                <label>Email</label>
                <input type="text" name="mem_email_28"
                  value=""
                  placeholder="email@domain.com">
              </div>

              <div class="field">
                <label>Link</label>
                <input type="text" name="mem_link_28"
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

                            <input type="hidden" name="mem_logo_clear_28" value="0">

              <div class="uploader">
                <div class="preview" data-preview-wrap></div>

                <div class="uploadBar" data-uploadbar>
                  <input
                    type="file"
                    name="mem_logo_28"
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
                    data-clear-name="mem_logo_clear_28"
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
