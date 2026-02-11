@extends('layouts.master')

@section('title', 'Event')

@section('content')
<div>
  <div class="section">
    <div class="sectionHead">
      <div>
        <h2>Event</h2>
        <p></p>
      </div>
      <div class="pill">events</div>
    </div>

    <div class="sectionBody">
      <div class="grid2">
        <div class="field">
          <label>Header Title (Black)</label>
          <input type="text" name="ev_head_black"
            value="Ini"
            placeholder="Event dan Kejuaraan">
        </div>

        <div class="field">
          <label>Header Title (Red)</label>
          <input type="text" name="ev_head_red"
            value="Event"
            placeholder="ABTI Jawa Barat">
        </div>

        <div class="field" style="grid-column: 1 / -1;">
          <label>Header Subtitle</label>
          <textarea name="ev_head_sub"
            placeholder="Informasi resmi dan terkini...">Indonesia menang</textarea>
        </div>
      </div>

      <div class="divider"></div>

      <div class="cardGrid">
                  <div class="itemCard">
            <div class="itemTop">
              <b>Event #1</b>
              <span class="pill">events.items.1</span>
            </div>

            <div class="field">
              <label>ID (optional)</label>
              <input type="text" name="ev_id_1"
                value="evv-1011"
                placeholder="ev-001">
            </div>

            <div class="field">
              <label>Nama Event</label>
              <input type="text" name="ev_name_1"
                value="Event ini"
                placeholder="Nama event...">
            </div>

            <div class="field">
              <label>Category (comma)</label>
              <input type="text" name="ev_cat_1"
                value="Jaya, Ancol3@1!;"
                placeholder="INDOOR,BEACH,WHEELCHAIR">
            </div>

            <div class="field">
              <label>Lokasi</label>
              <input type="text" name="ev_loc_1"
                value="Jaya"
                placeholder="Kota Bandung">
            </div>

            <div class="grid2">
              <div class="field"><label>Athletes</label>
                <input type="text" name="ev_ath_1" value="122" placeholder="168">
              </div>
              <div class="field"><label>Coaches</label>
                <input type="text" name="ev_coa_1" value="12" placeholder="28">
              </div>
              <div class="field"><label>Teams</label>
                <input type="text" name="ev_team_1" value="22e" placeholder="14">
              </div>
              <div class="field"><label>Management</label>
                <input type="text" name="ev_mgmt_1" value=" 19i" placeholder="18">
              </div>
              <div class="field" style="grid-column:1/-1;"><label>Audience Offline / Day</label>
                <input type="text" name="ev_aud_1" value="11" placeholder="750">
              </div>
            </div>

            <div class="field">
              <label>Website</label>
              <input type="text" name="ev_web_1"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>Administrator</label>
              <input type="text" name="ev_admin_1"
                value=""
                placeholder="Sekretariat...">
            </div>

            <div class="divider"></div>

            <!-- Logo upload -->
            <div class="field">
              <div class="labelRow"><label>Logo</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_logo_clear_1" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_logo_1" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="/uploads/events.items.1.logo_1769656899.png">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    Current: events.items.1.logo_1769656899.png                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_logo_clear_1" >
                    Remove
                  </button>
                </div>
                <div class="path">/uploads/events.items.1.logo_1769656899.png</div>
              </div>
            </div>

            <!-- Cover upload -->
            <div class="field">
              <div class="labelRow"><label>Cover</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_cover_clear_1" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_cover_1" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_cover_clear_1" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Event #2</b>
              <span class="pill">events.items.2</span>
            </div>

            <div class="field">
              <label>ID (optional)</label>
              <input type="text" name="ev_id_2"
                value=""
                placeholder="ev-001">
            </div>

            <div class="field">
              <label>Nama Event</label>
              <input type="text" name="ev_name_2"
                value=""
                placeholder="Nama event...">
            </div>

            <div class="field">
              <label>Category (comma)</label>
              <input type="text" name="ev_cat_2"
                value=""
                placeholder="INDOOR,BEACH,WHEELCHAIR">
            </div>

            <div class="field">
              <label>Lokasi</label>
              <input type="text" name="ev_loc_2"
                value=""
                placeholder="Kota Bandung">
            </div>

            <div class="grid2">
              <div class="field"><label>Athletes</label>
                <input type="text" name="ev_ath_2" value="" placeholder="168">
              </div>
              <div class="field"><label>Coaches</label>
                <input type="text" name="ev_coa_2" value="" placeholder="28">
              </div>
              <div class="field"><label>Teams</label>
                <input type="text" name="ev_team_2" value="" placeholder="14">
              </div>
              <div class="field"><label>Management</label>
                <input type="text" name="ev_mgmt_2" value="" placeholder="18">
              </div>
              <div class="field" style="grid-column:1/-1;"><label>Audience Offline / Day</label>
                <input type="text" name="ev_aud_2" value="" placeholder="750">
              </div>
            </div>

            <div class="field">
              <label>Website</label>
              <input type="text" name="ev_web_2"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>Administrator</label>
              <input type="text" name="ev_admin_2"
                value=""
                placeholder="Sekretariat...">
            </div>

            <div class="divider"></div>

            <!-- Logo upload -->
            <div class="field">
              <div class="labelRow"><label>Logo</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_logo_clear_2" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_logo_2" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_logo_clear_2" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

            <!-- Cover upload -->
            <div class="field">
              <div class="labelRow"><label>Cover</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_cover_clear_2" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_cover_2" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_cover_clear_2" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Event #3</b>
              <span class="pill">events.items.3</span>
            </div>

            <div class="field">
              <label>ID (optional)</label>
              <input type="text" name="ev_id_3"
                value=""
                placeholder="ev-001">
            </div>

            <div class="field">
              <label>Nama Event</label>
              <input type="text" name="ev_name_3"
                value=""
                placeholder="Nama event...">
            </div>

            <div class="field">
              <label>Category (comma)</label>
              <input type="text" name="ev_cat_3"
                value=""
                placeholder="INDOOR,BEACH,WHEELCHAIR">
            </div>

            <div class="field">
              <label>Lokasi</label>
              <input type="text" name="ev_loc_3"
                value=""
                placeholder="Kota Bandung">
            </div>

            <div class="grid2">
              <div class="field"><label>Athletes</label>
                <input type="text" name="ev_ath_3" value="" placeholder="168">
              </div>
              <div class="field"><label>Coaches</label>
                <input type="text" name="ev_coa_3" value="" placeholder="28">
              </div>
              <div class="field"><label>Teams</label>
                <input type="text" name="ev_team_3" value="" placeholder="14">
              </div>
              <div class="field"><label>Management</label>
                <input type="text" name="ev_mgmt_3" value="" placeholder="18">
              </div>
              <div class="field" style="grid-column:1/-1;"><label>Audience Offline / Day</label>
                <input type="text" name="ev_aud_3" value="" placeholder="750">
              </div>
            </div>

            <div class="field">
              <label>Website</label>
              <input type="text" name="ev_web_3"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>Administrator</label>
              <input type="text" name="ev_admin_3"
                value=""
                placeholder="Sekretariat...">
            </div>

            <div class="divider"></div>

            <!-- Logo upload -->
            <div class="field">
              <div class="labelRow"><label>Logo</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_logo_clear_3" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_logo_3" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_logo_clear_3" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

            <!-- Cover upload -->
            <div class="field">
              <div class="labelRow"><label>Cover</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_cover_clear_3" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_cover_3" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_cover_clear_3" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Event #4</b>
              <span class="pill">events.items.4</span>
            </div>

            <div class="field">
              <label>ID (optional)</label>
              <input type="text" name="ev_id_4"
                value=""
                placeholder="ev-001">
            </div>

            <div class="field">
              <label>Nama Event</label>
              <input type="text" name="ev_name_4"
                value=""
                placeholder="Nama event...">
            </div>

            <div class="field">
              <label>Category (comma)</label>
              <input type="text" name="ev_cat_4"
                value=""
                placeholder="INDOOR,BEACH,WHEELCHAIR">
            </div>

            <div class="field">
              <label>Lokasi</label>
              <input type="text" name="ev_loc_4"
                value=""
                placeholder="Kota Bandung">
            </div>

            <div class="grid2">
              <div class="field"><label>Athletes</label>
                <input type="text" name="ev_ath_4" value="" placeholder="168">
              </div>
              <div class="field"><label>Coaches</label>
                <input type="text" name="ev_coa_4" value="" placeholder="28">
              </div>
              <div class="field"><label>Teams</label>
                <input type="text" name="ev_team_4" value="" placeholder="14">
              </div>
              <div class="field"><label>Management</label>
                <input type="text" name="ev_mgmt_4" value="" placeholder="18">
              </div>
              <div class="field" style="grid-column:1/-1;"><label>Audience Offline / Day</label>
                <input type="text" name="ev_aud_4" value="" placeholder="750">
              </div>
            </div>

            <div class="field">
              <label>Website</label>
              <input type="text" name="ev_web_4"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>Administrator</label>
              <input type="text" name="ev_admin_4"
                value=""
                placeholder="Sekretariat...">
            </div>

            <div class="divider"></div>

            <!-- Logo upload -->
            <div class="field">
              <div class="labelRow"><label>Logo</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_logo_clear_4" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_logo_4" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_logo_clear_4" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

            <!-- Cover upload -->
            <div class="field">
              <div class="labelRow"><label>Cover</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_cover_clear_4" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_cover_4" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_cover_clear_4" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Event #5</b>
              <span class="pill">events.items.5</span>
            </div>

            <div class="field">
              <label>ID (optional)</label>
              <input type="text" name="ev_id_5"
                value=""
                placeholder="ev-001">
            </div>

            <div class="field">
              <label>Nama Event</label>
              <input type="text" name="ev_name_5"
                value=""
                placeholder="Nama event...">
            </div>

            <div class="field">
              <label>Category (comma)</label>
              <input type="text" name="ev_cat_5"
                value=""
                placeholder="INDOOR,BEACH,WHEELCHAIR">
            </div>

            <div class="field">
              <label>Lokasi</label>
              <input type="text" name="ev_loc_5"
                value=""
                placeholder="Kota Bandung">
            </div>

            <div class="grid2">
              <div class="field"><label>Athletes</label>
                <input type="text" name="ev_ath_5" value="" placeholder="168">
              </div>
              <div class="field"><label>Coaches</label>
                <input type="text" name="ev_coa_5" value="" placeholder="28">
              </div>
              <div class="field"><label>Teams</label>
                <input type="text" name="ev_team_5" value="" placeholder="14">
              </div>
              <div class="field"><label>Management</label>
                <input type="text" name="ev_mgmt_5" value="" placeholder="18">
              </div>
              <div class="field" style="grid-column:1/-1;"><label>Audience Offline / Day</label>
                <input type="text" name="ev_aud_5" value="" placeholder="750">
              </div>
            </div>

            <div class="field">
              <label>Website</label>
              <input type="text" name="ev_web_5"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>Administrator</label>
              <input type="text" name="ev_admin_5"
                value=""
                placeholder="Sekretariat...">
            </div>

            <div class="divider"></div>

            <!-- Logo upload -->
            <div class="field">
              <div class="labelRow"><label>Logo</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_logo_clear_5" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_logo_5" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_logo_clear_5" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

            <!-- Cover upload -->
            <div class="field">
              <div class="labelRow"><label>Cover</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_cover_clear_5" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_cover_5" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_cover_clear_5" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Event #6</b>
              <span class="pill">events.items.6</span>
            </div>

            <div class="field">
              <label>ID (optional)</label>
              <input type="text" name="ev_id_6"
                value=""
                placeholder="ev-001">
            </div>

            <div class="field">
              <label>Nama Event</label>
              <input type="text" name="ev_name_6"
                value=""
                placeholder="Nama event...">
            </div>

            <div class="field">
              <label>Category (comma)</label>
              <input type="text" name="ev_cat_6"
                value=""
                placeholder="INDOOR,BEACH,WHEELCHAIR">
            </div>

            <div class="field">
              <label>Lokasi</label>
              <input type="text" name="ev_loc_6"
                value=""
                placeholder="Kota Bandung">
            </div>

            <div class="grid2">
              <div class="field"><label>Athletes</label>
                <input type="text" name="ev_ath_6" value="" placeholder="168">
              </div>
              <div class="field"><label>Coaches</label>
                <input type="text" name="ev_coa_6" value="" placeholder="28">
              </div>
              <div class="field"><label>Teams</label>
                <input type="text" name="ev_team_6" value="" placeholder="14">
              </div>
              <div class="field"><label>Management</label>
                <input type="text" name="ev_mgmt_6" value="" placeholder="18">
              </div>
              <div class="field" style="grid-column:1/-1;"><label>Audience Offline / Day</label>
                <input type="text" name="ev_aud_6" value="" placeholder="750">
              </div>
            </div>

            <div class="field">
              <label>Website</label>
              <input type="text" name="ev_web_6"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>Administrator</label>
              <input type="text" name="ev_admin_6"
                value=""
                placeholder="Sekretariat...">
            </div>

            <div class="divider"></div>

            <!-- Logo upload -->
            <div class="field">
              <div class="labelRow"><label>Logo</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_logo_clear_6" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_logo_6" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_logo_clear_6" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

            <!-- Cover upload -->
            <div class="field">
              <div class="labelRow"><label>Cover</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_cover_clear_6" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_cover_6" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_cover_clear_6" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Event #7</b>
              <span class="pill">events.items.7</span>
            </div>

            <div class="field">
              <label>ID (optional)</label>
              <input type="text" name="ev_id_7"
                value=""
                placeholder="ev-001">
            </div>

            <div class="field">
              <label>Nama Event</label>
              <input type="text" name="ev_name_7"
                value=""
                placeholder="Nama event...">
            </div>

            <div class="field">
              <label>Category (comma)</label>
              <input type="text" name="ev_cat_7"
                value=""
                placeholder="INDOOR,BEACH,WHEELCHAIR">
            </div>

            <div class="field">
              <label>Lokasi</label>
              <input type="text" name="ev_loc_7"
                value=""
                placeholder="Kota Bandung">
            </div>

            <div class="grid2">
              <div class="field"><label>Athletes</label>
                <input type="text" name="ev_ath_7" value="" placeholder="168">
              </div>
              <div class="field"><label>Coaches</label>
                <input type="text" name="ev_coa_7" value="" placeholder="28">
              </div>
              <div class="field"><label>Teams</label>
                <input type="text" name="ev_team_7" value="" placeholder="14">
              </div>
              <div class="field"><label>Management</label>
                <input type="text" name="ev_mgmt_7" value="" placeholder="18">
              </div>
              <div class="field" style="grid-column:1/-1;"><label>Audience Offline / Day</label>
                <input type="text" name="ev_aud_7" value="" placeholder="750">
              </div>
            </div>

            <div class="field">
              <label>Website</label>
              <input type="text" name="ev_web_7"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>Administrator</label>
              <input type="text" name="ev_admin_7"
                value=""
                placeholder="Sekretariat...">
            </div>

            <div class="divider"></div>

            <!-- Logo upload -->
            <div class="field">
              <div class="labelRow"><label>Logo</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_logo_clear_7" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_logo_7" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_logo_clear_7" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

            <!-- Cover upload -->
            <div class="field">
              <div class="labelRow"><label>Cover</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_cover_clear_7" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_cover_7" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_cover_clear_7" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Event #8</b>
              <span class="pill">events.items.8</span>
            </div>

            <div class="field">
              <label>ID (optional)</label>
              <input type="text" name="ev_id_8"
                value=""
                placeholder="ev-001">
            </div>

            <div class="field">
              <label>Nama Event</label>
              <input type="text" name="ev_name_8"
                value=""
                placeholder="Nama event...">
            </div>

            <div class="field">
              <label>Category (comma)</label>
              <input type="text" name="ev_cat_8"
                value=""
                placeholder="INDOOR,BEACH,WHEELCHAIR">
            </div>

            <div class="field">
              <label>Lokasi</label>
              <input type="text" name="ev_loc_8"
                value=""
                placeholder="Kota Bandung">
            </div>

            <div class="grid2">
              <div class="field"><label>Athletes</label>
                <input type="text" name="ev_ath_8" value="" placeholder="168">
              </div>
              <div class="field"><label>Coaches</label>
                <input type="text" name="ev_coa_8" value="" placeholder="28">
              </div>
              <div class="field"><label>Teams</label>
                <input type="text" name="ev_team_8" value="" placeholder="14">
              </div>
              <div class="field"><label>Management</label>
                <input type="text" name="ev_mgmt_8" value="" placeholder="18">
              </div>
              <div class="field" style="grid-column:1/-1;"><label>Audience Offline / Day</label>
                <input type="text" name="ev_aud_8" value="" placeholder="750">
              </div>
            </div>

            <div class="field">
              <label>Website</label>
              <input type="text" name="ev_web_8"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>Administrator</label>
              <input type="text" name="ev_admin_8"
                value=""
                placeholder="Sekretariat...">
            </div>

            <div class="divider"></div>

            <!-- Logo upload -->
            <div class="field">
              <div class="labelRow"><label>Logo</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_logo_clear_8" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_logo_8" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_logo_clear_8" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

            <!-- Cover upload -->
            <div class="field">
              <div class="labelRow"><label>Cover</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_cover_clear_8" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_cover_8" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_cover_clear_8" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Event #9</b>
              <span class="pill">events.items.9</span>
            </div>

            <div class="field">
              <label>ID (optional)</label>
              <input type="text" name="ev_id_9"
                value=""
                placeholder="ev-001">
            </div>

            <div class="field">
              <label>Nama Event</label>
              <input type="text" name="ev_name_9"
                value=""
                placeholder="Nama event...">
            </div>

            <div class="field">
              <label>Category (comma)</label>
              <input type="text" name="ev_cat_9"
                value=""
                placeholder="INDOOR,BEACH,WHEELCHAIR">
            </div>

            <div class="field">
              <label>Lokasi</label>
              <input type="text" name="ev_loc_9"
                value=""
                placeholder="Kota Bandung">
            </div>

            <div class="grid2">
              <div class="field"><label>Athletes</label>
                <input type="text" name="ev_ath_9" value="" placeholder="168">
              </div>
              <div class="field"><label>Coaches</label>
                <input type="text" name="ev_coa_9" value="" placeholder="28">
              </div>
              <div class="field"><label>Teams</label>
                <input type="text" name="ev_team_9" value="" placeholder="14">
              </div>
              <div class="field"><label>Management</label>
                <input type="text" name="ev_mgmt_9" value="" placeholder="18">
              </div>
              <div class="field" style="grid-column:1/-1;"><label>Audience Offline / Day</label>
                <input type="text" name="ev_aud_9" value="" placeholder="750">
              </div>
            </div>

            <div class="field">
              <label>Website</label>
              <input type="text" name="ev_web_9"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>Administrator</label>
              <input type="text" name="ev_admin_9"
                value=""
                placeholder="Sekretariat...">
            </div>

            <div class="divider"></div>

            <!-- Logo upload -->
            <div class="field">
              <div class="labelRow"><label>Logo</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_logo_clear_9" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_logo_9" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_logo_clear_9" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

            <!-- Cover upload -->
            <div class="field">
              <div class="labelRow"><label>Cover</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_cover_clear_9" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_cover_9" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_cover_clear_9" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

          </div>
                  <div class="itemCard">
            <div class="itemTop">
              <b>Event #10</b>
              <span class="pill">events.items.10</span>
            </div>

            <div class="field">
              <label>ID (optional)</label>
              <input type="text" name="ev_id_10"
                value=""
                placeholder="ev-001">
            </div>

            <div class="field">
              <label>Nama Event</label>
              <input type="text" name="ev_name_10"
                value=""
                placeholder="Nama event...">
            </div>

            <div class="field">
              <label>Category (comma)</label>
              <input type="text" name="ev_cat_10"
                value=""
                placeholder="INDOOR,BEACH,WHEELCHAIR">
            </div>

            <div class="field">
              <label>Lokasi</label>
              <input type="text" name="ev_loc_10"
                value=""
                placeholder="Kota Bandung">
            </div>

            <div class="grid2">
              <div class="field"><label>Athletes</label>
                <input type="text" name="ev_ath_10" value="" placeholder="168">
              </div>
              <div class="field"><label>Coaches</label>
                <input type="text" name="ev_coa_10" value="" placeholder="28">
              </div>
              <div class="field"><label>Teams</label>
                <input type="text" name="ev_team_10" value="" placeholder="14">
              </div>
              <div class="field"><label>Management</label>
                <input type="text" name="ev_mgmt_10" value="" placeholder="18">
              </div>
              <div class="field" style="grid-column:1/-1;"><label>Audience Offline / Day</label>
                <input type="text" name="ev_aud_10" value="" placeholder="750">
              </div>
            </div>

            <div class="field">
              <label>Website</label>
              <input type="text" name="ev_web_10"
                value=""
                placeholder="https://...">
            </div>

            <div class="field">
              <label>Administrator</label>
              <input type="text" name="ev_admin_10"
                value=""
                placeholder="Sekretariat...">
            </div>

            <div class="divider"></div>

            <!-- Logo upload -->
            <div class="field">
              <div class="labelRow"><label>Logo</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_logo_clear_10" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_logo_10" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_logo_clear_10" disabled>
                    Remove
                  </button>
                </div>
                <div class="path"></div>
              </div>
            </div>

            <!-- Cover upload -->
            <div class="field">
              <div class="labelRow"><label>Cover</label><span class="hint">jpg/png/webp (Maks 300kb)</span></div>
                            <input type="hidden" name="ev_cover_clear_10" value="0">
              <div class="uploader">
                <div class="preview" data-preview-wrap></div>
                <div class="uploadBar" data-uploadbar>
                  <input type="file" name="ev_cover_10" accept="image/*"
                    data-preview-input data-upload-input
                    data-current="">
                  <button type="button" class="uploadPick" data-upload-pick>Choose file</button>
                  <div class="uploadName" data-upload-name>
                    No file chosen                  </div>
                  <button type="button" class="uploadRemove" data-upload-remove
                    data-clear-name="ev_cover_clear_10" disabled>
                    Remove
                  </button>
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
