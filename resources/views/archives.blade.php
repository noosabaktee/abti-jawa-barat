@extends('layouts.master')

@section('title', 'Archives')

@section('content')
<div >
  <div class="section">
    <div class="sectionHead">
      <div>
        <h2>Archives</h2>
        <p></p>
      </div>
      <div class="pill">archives.*</div>
    </div>

    <div class="sectionBody">

      <h3 style="margin:0 0 10px;">Header</h3>
      <div class="grid2">
        <div class="field">
          <label>Eyebrow</label>
          <input type="text" name="ar_head_eyebrow"
            value=""
            placeholder="ABTI Jawa Barat">
        </div>

        <div class="field">
          <label>Title</label>
          <input type="text" name="ar_head_title"
            value=""
            placeholder="Archives">
        </div>

        <div class="field" style="grid-column:1/-1;">
          <label>Subtitle</label>
          <textarea name="ar_head_sub" placeholder="Kumpulan dokumen regulasi resmi..."></textarea>
        </div>
      </div>

      <div class="divider"></div>

      <h3 style="margin:0 0 10px;">Kategori Accordion (5)</h3>

      <div class="cardGrid">
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kategori #1</b></span>
                <span class="pill">archives.groups.1</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="grid2">
                <div class="field">
                  <label>Judul Kategori</label>
                  <input type="text" name="ar_cat_title_1"
                    value="INi"
                    placeholder="Mutation Regulation">
                </div>

                <div class="field">
                  <label>Meta (contoh: “3 dokumen”)</label>
                  <input type="text" name="ar_cat_meta_1"
                    value="3 dokumen"
                    placeholder="3 dokumen">
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Dokumen (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #1</b>
                      <span class="pill">docs.1</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_1_1"
                        value="Ini PDF"
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_1_1" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_1_1"
                            accept="application/pdf"
                            data-upload-input
                            data-current="/uploads/docs/File-80JUi_1769657516.pdf"
                          >

                          <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                          <div class="uploadName" data-upload-name>
                            Current: File-80JUi_1769657516.pdf                          </div>

                          <button
                            type="button"
                            class="uploadRemove"
                            data-upload-remove
                            data-clear-name="ar_doc_clear_1_1"
                                                      >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #2</b>
                      <span class="pill">docs.2</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_1_2"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_1_2" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_1_2"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_1_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #3</b>
                      <span class="pill">docs.3</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_1_3"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_1_3" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_1_3"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_1_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #4</b>
                      <span class="pill">docs.4</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_1_4"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_1_4" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_1_4"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_1_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #5</b>
                      <span class="pill">docs.5</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_1_5"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_1_5" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_1_5"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_1_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #6</b>
                      <span class="pill">docs.6</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_1_6"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_1_6" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_1_6"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_1_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #7</b>
                      <span class="pill">docs.7</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_1_7"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_1_7" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_1_7"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_1_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #8</b>
                      <span class="pill">docs.8</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_1_8"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_1_8" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_1_8"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_1_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #9</b>
                      <span class="pill">docs.9</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_1_9"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_1_9" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_1_9"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_1_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #10</b>
                      <span class="pill">docs.10</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_1_10"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_1_10" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_1_10"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_1_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                              </div>

            </details>
          </div>
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kategori #2</b></span>
                <span class="pill">archives.groups.2</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="grid2">
                <div class="field">
                  <label>Judul Kategori</label>
                  <input type="text" name="ar_cat_title_2"
                    value=""
                    placeholder="Club Regulation">
                </div>

                <div class="field">
                  <label>Meta (contoh: “3 dokumen”)</label>
                  <input type="text" name="ar_cat_meta_2"
                    value=""
                    placeholder="3 dokumen">
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Dokumen (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #1</b>
                      <span class="pill">docs.1</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_2_1"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_2_1" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_2_1"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_2_1"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #2</b>
                      <span class="pill">docs.2</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_2_2"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_2_2" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_2_2"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_2_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #3</b>
                      <span class="pill">docs.3</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_2_3"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_2_3" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_2_3"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_2_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #4</b>
                      <span class="pill">docs.4</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_2_4"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_2_4" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_2_4"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_2_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #5</b>
                      <span class="pill">docs.5</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_2_5"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_2_5" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_2_5"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_2_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #6</b>
                      <span class="pill">docs.6</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_2_6"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_2_6" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_2_6"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_2_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #7</b>
                      <span class="pill">docs.7</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_2_7"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_2_7" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_2_7"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_2_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #8</b>
                      <span class="pill">docs.8</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_2_8"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_2_8" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_2_8"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_2_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #9</b>
                      <span class="pill">docs.9</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_2_9"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_2_9" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_2_9"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_2_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #10</b>
                      <span class="pill">docs.10</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_2_10"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_2_10" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_2_10"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_2_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                              </div>

            </details>
          </div>
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kategori #3</b></span>
                <span class="pill">archives.groups.3</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="grid2">
                <div class="field">
                  <label>Judul Kategori</label>
                  <input type="text" name="ar_cat_title_3"
                    value=""
                    placeholder="Event Regulation">
                </div>

                <div class="field">
                  <label>Meta (contoh: “3 dokumen”)</label>
                  <input type="text" name="ar_cat_meta_3"
                    value=""
                    placeholder="3 dokumen">
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Dokumen (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #1</b>
                      <span class="pill">docs.1</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_3_1"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_3_1" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_3_1"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_3_1"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #2</b>
                      <span class="pill">docs.2</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_3_2"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_3_2" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_3_2"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_3_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #3</b>
                      <span class="pill">docs.3</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_3_3"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_3_3" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_3_3"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_3_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #4</b>
                      <span class="pill">docs.4</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_3_4"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_3_4" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_3_4"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_3_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #5</b>
                      <span class="pill">docs.5</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_3_5"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_3_5" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_3_5"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_3_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #6</b>
                      <span class="pill">docs.6</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_3_6"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_3_6" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_3_6"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_3_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #7</b>
                      <span class="pill">docs.7</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_3_7"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_3_7" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_3_7"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_3_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #8</b>
                      <span class="pill">docs.8</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_3_8"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_3_8" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_3_8"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_3_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #9</b>
                      <span class="pill">docs.9</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_3_9"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_3_9" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_3_9"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_3_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #10</b>
                      <span class="pill">docs.10</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_3_10"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_3_10" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_3_10"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_3_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                              </div>

            </details>
          </div>
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kategori #4</b></span>
                <span class="pill">archives.groups.4</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="grid2">
                <div class="field">
                  <label>Judul Kategori</label>
                  <input type="text" name="ar_cat_title_4"
                    value=""
                    placeholder="Sanction Regulation">
                </div>

                <div class="field">
                  <label>Meta (contoh: “3 dokumen”)</label>
                  <input type="text" name="ar_cat_meta_4"
                    value=""
                    placeholder="3 dokumen">
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Dokumen (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #1</b>
                      <span class="pill">docs.1</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_4_1"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_4_1" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_4_1"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_4_1"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #2</b>
                      <span class="pill">docs.2</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_4_2"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_4_2" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_4_2"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_4_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #3</b>
                      <span class="pill">docs.3</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_4_3"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_4_3" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_4_3"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_4_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #4</b>
                      <span class="pill">docs.4</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_4_4"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_4_4" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_4_4"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_4_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #5</b>
                      <span class="pill">docs.5</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_4_5"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_4_5" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_4_5"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_4_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #6</b>
                      <span class="pill">docs.6</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_4_6"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_4_6" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_4_6"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_4_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #7</b>
                      <span class="pill">docs.7</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_4_7"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_4_7" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_4_7"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_4_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #8</b>
                      <span class="pill">docs.8</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_4_8"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_4_8" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_4_8"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_4_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #9</b>
                      <span class="pill">docs.9</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_4_9"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_4_9" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_4_9"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_4_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #10</b>
                      <span class="pill">docs.10</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_4_10"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_4_10" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_4_10"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_4_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                              </div>

            </details>
          </div>
                  <div class="itemCard" style="padding:0;">
            <details style="padding:14px;">
              <summary style="cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <span><b>Kategori #5</b></span>
                <span class="pill">archives.groups.5</span>
              </summary>

              <div style="margin-top:12px;"></div>

              <div class="grid2">
                <div class="field">
                  <label>Judul Kategori</label>
                  <input type="text" name="ar_cat_title_5"
                    value=""
                    placeholder="Statutes &amp; Regulation">
                </div>

                <div class="field">
                  <label>Meta (contoh: “3 dokumen”)</label>
                  <input type="text" name="ar_cat_meta_5"
                    value=""
                    placeholder="3 dokumen">
                </div>
              </div>

              <div class="divider"></div>

              <h4 style="margin:0 0 10px;">Dokumen (10 slot)</h4>

              <div class="cardGrid">
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #1</b>
                      <span class="pill">docs.1</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_5_1"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_5_1" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_5_1"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_5_1"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #2</b>
                      <span class="pill">docs.2</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_5_2"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_5_2" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_5_2"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_5_2"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #3</b>
                      <span class="pill">docs.3</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_5_3"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_5_3" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_5_3"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_5_3"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #4</b>
                      <span class="pill">docs.4</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_5_4"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_5_4" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_5_4"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_5_4"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #5</b>
                      <span class="pill">docs.5</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_5_5"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_5_5" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_5_5"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_5_5"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #6</b>
                      <span class="pill">docs.6</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_5_6"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_5_6" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_5_6"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_5_6"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #7</b>
                      <span class="pill">docs.7</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_5_7"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_5_7" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_5_7"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_5_7"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #8</b>
                      <span class="pill">docs.8</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_5_8"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_5_8" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_5_8"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_5_8"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #9</b>
                      <span class="pill">docs.9</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_5_9"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_5_9" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_5_9"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_5_9"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                                  <div class="itemCard">
                    <div class="itemTop">
                      <b>Doc #10</b>
                      <span class="pill">docs.10</span>
                    </div>

                    <div class="field">
                      <label>Nama Dokumen</label>
                      <input type="text"
                        name="ar_doc_name_5_10"
                        value=""
                        placeholder="Nama dokumen...">
                    </div>

                                        <input type="hidden" name="ar_doc_clear_5_10" value="0">

                    <div class="field">
                      <div class="labelRow">
                        <label>Upload PDF</label>
                        <span class="hint">PDF (Maks 1mb)</span>
                      </div>

                      <div class="uploader">
                        <div class="uploadBar" data-uploadbar>
                          <input
                            type="file"
                            name="ar_doc_pdf_5_10"
                            accept="application/pdf"
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
                            data-clear-name="ar_doc_clear_5_10"
                            disabled                          >Remove</button>
                        </div>
                      </div>
                    </div>

                  </div>
                              </div>

            </details>
          </div>
              </div>

      <div class="note">
        Saran: isi nama dokuman sesuai nama PDF
      </div>

    </div>
  </div>
</div>

<div class="actions">
              <button id="saveBtn" class="btn primary" type="submit">Save Changes</button>
            </div>
@endsection
