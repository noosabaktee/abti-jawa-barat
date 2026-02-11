@extends('layouts.master')

@section('title', 'Kegiatan')

@section('content')
            <div >
              <div class="section">
                <div class="sectionHead">
                  <div>
                    <h2>Kegiatan Terbaru / Mini News</h2>
                    <p></p>
                  </div>
                  <div class="pill">6 items</div>
                </div>
                <div class="sectionBody">
                  <div class="cardGrid">
                                          <div class="itemCard">
                        <div class="itemTop">
                          <b>Item #1</b>
                          <span class="pill">Kegiatan</span>
                        </div>

                        
<div class="field">
  <label>Tanggal</label>

  <!-- ini yang tetap dikirim ke server (format: "Jan 05, 2026") -->
  <input
    type="hidden"
    name="act_date_1"
    value="Jan 01, 2023"
    data-act-date-hidden="1"
  >

  <!-- 3 kolom horizontal: Month / Date / Year -->
  <div class="grid2 actDateRow">
    <div class="field" style="margin:0;">
      <select data-act-date="1" data-part="m">
        <option value="">Month</option>
        <option value="Jan">Jan</option>
        <option value="Feb">Feb</option>
        <option value="Mar">Mar</option>
        <option value="Apr">Apr</option>
        <option value="May">May</option>
        <option value="Jun">Jun</option>
        <option value="Jul">Jul</option>
        <option value="Aug">Aug</option>
        <option value="Sep">Sep</option>
        <option value="Oct">Oct</option>
        <option value="Nov">Nov</option>
        <option value="Dec">Dec</option>
      </select>
    </div>

    <div class="field" style="margin:0;">
      <select data-act-date="1" data-part="d">
        <option value="">Date</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
              </select>
    </div>

    <div class="field" style="margin:0;">
      <select data-act-date="1" data-part="y">
        <option value="">Year</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                  <option value="2031">2031</option>
                  <option value="2032">2032</option>
                  <option value="2033">2033</option>
                  <option value="2034">2034</option>
                  <option value="2035">2035</option>
                  <option value="2036">2036</option>
              </select>
    </div>
  </div>
</div>


                        <div class="field">
                          <label>Nama</label>
                          <input type="text" name="act_title_1" value="Jawa Barat" placeholder="Nama kegiatan...">
                        </div>

                        <div class="field">
                          <label>Link</label>
                          <input
                            type="text"
                            name="act_href_1"
                            value="https://www.youtube.com/"
                            placeholder="https://... (optional)">
                        </div>

                        <div class="divider"></div>

                        <div class="field">
                          <div class="labelRow">
                            <label>Image</label>
                            <span class="hint">jpg/png/webp (Maks 300kb)</span>
                          </div>

                                                    <input type="hidden" name="act_clear_1" value="0">

                          <div class="uploader">
                            <div class="preview" data-preview-wrap></div>

                            <div class="uploadBar" data-uploadbar>
                              <input
                                type="file"
                                name="act_img_1"
                                accept="image/*"
                                data-preview-input
                                data-upload-input
                                data-current="/uploads/home.activities.1.img_1769336674.png"
                              >

                              <button type="button" class="uploadPick" data-upload-pick>Choose file</button>

                              <div class="uploadName" data-upload-name>
                                Current: home.activities.1.img_1769336674.png                              </div>

                              <button
                                type="button"
                                class="uploadRemove"
                                data-upload-remove
                                data-clear-name="act_clear_1"
                                                              >Remove</button>
                            </div>

                            <div class="path">/uploads/home.activities.1.img_1769336674.png</div>
                          </div>
                        </div>
                      </div>
                                          <div class="itemCard">
                        <div class="itemTop">
                          <b>Item #2</b>
                          <span class="pill">Kegiatan</span>
                        </div>

                        
<div class="field">
  <label>Tanggal</label>

  <!-- ini yang tetap dikirim ke server (format: "Jan 05, 2026") -->
  <input
    type="hidden"
    name="act_date_2"
    value=""
    data-act-date-hidden="2"
  >

  <!-- 3 kolom horizontal: Month / Date / Year -->
  <div class="grid2 actDateRow">
    <div class="field" style="margin:0;">
      <select data-act-date="2" data-part="m">
        <option value="">Month</option>
        <option value="Jan">Jan</option>
        <option value="Feb">Feb</option>
        <option value="Mar">Mar</option>
        <option value="Apr">Apr</option>
        <option value="May">May</option>
        <option value="Jun">Jun</option>
        <option value="Jul">Jul</option>
        <option value="Aug">Aug</option>
        <option value="Sep">Sep</option>
        <option value="Oct">Oct</option>
        <option value="Nov">Nov</option>
        <option value="Dec">Dec</option>
      </select>
    </div>

    <div class="field" style="margin:0;">
      <select data-act-date="2" data-part="d">
        <option value="">Date</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
              </select>
    </div>

    <div class="field" style="margin:0;">
      <select data-act-date="2" data-part="y">
        <option value="">Year</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                  <option value="2031">2031</option>
                  <option value="2032">2032</option>
                  <option value="2033">2033</option>
                  <option value="2034">2034</option>
                  <option value="2035">2035</option>
                  <option value="2036">2036</option>
              </select>
    </div>
  </div>
</div>


                        <div class="field">
                          <label>Nama</label>
                          <input type="text" name="act_title_2" value="" placeholder="Nama kegiatan...">
                        </div>

                        <div class="field">
                          <label>Link</label>
                          <input
                            type="text"
                            name="act_href_2"
                            value=""
                            placeholder="https://... (optional)">
                        </div>

                        <div class="divider"></div>

                        <div class="field">
                          <div class="labelRow">
                            <label>Image</label>
                            <span class="hint">jpg/png/webp (Maks 300kb)</span>
                          </div>

                                                    <input type="hidden" name="act_clear_2" value="0">

                          <div class="uploader">
                            <div class="preview" data-preview-wrap></div>

                            <div class="uploadBar" data-uploadbar>
                              <input
                                type="file"
                                name="act_img_2"
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
                                data-clear-name="act_clear_2"
                                disabled                              >Remove</button>
                            </div>

                            <div class="path"></div>
                          </div>
                        </div>
                      </div>
                                          <div class="itemCard">
                        <div class="itemTop">
                          <b>Item #3</b>
                          <span class="pill">Kegiatan</span>
                        </div>

                        
<div class="field">
  <label>Tanggal</label>

  <!-- ini yang tetap dikirim ke server (format: "Jan 05, 2026") -->
  <input
    type="hidden"
    name="act_date_3"
    value=""
    data-act-date-hidden="3"
  >

  <!-- 3 kolom horizontal: Month / Date / Year -->
  <div class="grid2 actDateRow">
    <div class="field" style="margin:0;">
      <select data-act-date="3" data-part="m">
        <option value="">Month</option>
        <option value="Jan">Jan</option>
        <option value="Feb">Feb</option>
        <option value="Mar">Mar</option>
        <option value="Apr">Apr</option>
        <option value="May">May</option>
        <option value="Jun">Jun</option>
        <option value="Jul">Jul</option>
        <option value="Aug">Aug</option>
        <option value="Sep">Sep</option>
        <option value="Oct">Oct</option>
        <option value="Nov">Nov</option>
        <option value="Dec">Dec</option>
      </select>
    </div>

    <div class="field" style="margin:0;">
      <select data-act-date="3" data-part="d">
        <option value="">Date</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
              </select>
    </div>

    <div class="field" style="margin:0;">
      <select data-act-date="3" data-part="y">
        <option value="">Year</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                  <option value="2031">2031</option>
                  <option value="2032">2032</option>
                  <option value="2033">2033</option>
                  <option value="2034">2034</option>
                  <option value="2035">2035</option>
                  <option value="2036">2036</option>
              </select>
    </div>
  </div>
</div>


                        <div class="field">
                          <label>Nama</label>
                          <input type="text" name="act_title_3" value="" placeholder="Nama kegiatan...">
                        </div>

                        <div class="field">
                          <label>Link</label>
                          <input
                            type="text"
                            name="act_href_3"
                            value=""
                            placeholder="https://... (optional)">
                        </div>

                        <div class="divider"></div>

                        <div class="field">
                          <div class="labelRow">
                            <label>Image</label>
                            <span class="hint">jpg/png/webp (Maks 300kb)</span>
                          </div>

                                                    <input type="hidden" name="act_clear_3" value="0">

                          <div class="uploader">
                            <div class="preview" data-preview-wrap></div>

                            <div class="uploadBar" data-uploadbar>
                              <input
                                type="file"
                                name="act_img_3"
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
                                data-clear-name="act_clear_3"
                                disabled                              >Remove</button>
                            </div>

                            <div class="path"></div>
                          </div>
                        </div>
                      </div>
                                          <div class="itemCard">
                        <div class="itemTop">
                          <b>Item #4</b>
                          <span class="pill">Kegiatan</span>
                        </div>

                        
<div class="field">
  <label>Tanggal</label>

  <!-- ini yang tetap dikirim ke server (format: "Jan 05, 2026") -->
  <input
    type="hidden"
    name="act_date_4"
    value=""
    data-act-date-hidden="4"
  >

  <!-- 3 kolom horizontal: Month / Date / Year -->
  <div class="grid2 actDateRow">
    <div class="field" style="margin:0;">
      <select data-act-date="4" data-part="m">
        <option value="">Month</option>
        <option value="Jan">Jan</option>
        <option value="Feb">Feb</option>
        <option value="Mar">Mar</option>
        <option value="Apr">Apr</option>
        <option value="May">May</option>
        <option value="Jun">Jun</option>
        <option value="Jul">Jul</option>
        <option value="Aug">Aug</option>
        <option value="Sep">Sep</option>
        <option value="Oct">Oct</option>
        <option value="Nov">Nov</option>
        <option value="Dec">Dec</option>
      </select>
    </div>

    <div class="field" style="margin:0;">
      <select data-act-date="4" data-part="d">
        <option value="">Date</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
              </select>
    </div>

    <div class="field" style="margin:0;">
      <select data-act-date="4" data-part="y">
        <option value="">Year</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                  <option value="2031">2031</option>
                  <option value="2032">2032</option>
                  <option value="2033">2033</option>
                  <option value="2034">2034</option>
                  <option value="2035">2035</option>
                  <option value="2036">2036</option>
              </select>
    </div>
  </div>
</div>


                        <div class="field">
                          <label>Nama</label>
                          <input type="text" name="act_title_4" value="" placeholder="Nama kegiatan...">
                        </div>

                        <div class="field">
                          <label>Link</label>
                          <input
                            type="text"
                            name="act_href_4"
                            value="t"
                            placeholder="https://... (optional)">
                        </div>

                        <div class="divider"></div>

                        <div class="field">
                          <div class="labelRow">
                            <label>Image</label>
                            <span class="hint">jpg/png/webp (Maks 300kb)</span>
                          </div>

                                                    <input type="hidden" name="act_clear_4" value="0">

                          <div class="uploader">
                            <div class="preview" data-preview-wrap></div>

                            <div class="uploadBar" data-uploadbar>
                              <input
                                type="file"
                                name="act_img_4"
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
                                data-clear-name="act_clear_4"
                                disabled                              >Remove</button>
                            </div>

                            <div class="path"></div>
                          </div>
                        </div>
                      </div>
                                          <div class="itemCard">
                        <div class="itemTop">
                          <b>Item #5</b>
                          <span class="pill">Kegiatan</span>
                        </div>

                        
<div class="field">
  <label>Tanggal</label>

  <!-- ini yang tetap dikirim ke server (format: "Jan 05, 2026") -->
  <input
    type="hidden"
    name="act_date_5"
    value=""
    data-act-date-hidden="5"
  >

  <!-- 3 kolom horizontal: Month / Date / Year -->
  <div class="grid2 actDateRow">
    <div class="field" style="margin:0;">
      <select data-act-date="5" data-part="m">
        <option value="">Month</option>
        <option value="Jan">Jan</option>
        <option value="Feb">Feb</option>
        <option value="Mar">Mar</option>
        <option value="Apr">Apr</option>
        <option value="May">May</option>
        <option value="Jun">Jun</option>
        <option value="Jul">Jul</option>
        <option value="Aug">Aug</option>
        <option value="Sep">Sep</option>
        <option value="Oct">Oct</option>
        <option value="Nov">Nov</option>
        <option value="Dec">Dec</option>
      </select>
    </div>

    <div class="field" style="margin:0;">
      <select data-act-date="5" data-part="d">
        <option value="">Date</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
              </select>
    </div>

    <div class="field" style="margin:0;">
      <select data-act-date="5" data-part="y">
        <option value="">Year</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                  <option value="2031">2031</option>
                  <option value="2032">2032</option>
                  <option value="2033">2033</option>
                  <option value="2034">2034</option>
                  <option value="2035">2035</option>
                  <option value="2036">2036</option>
              </select>
    </div>
  </div>
</div>


                        <div class="field">
                          <label>Nama</label>
                          <input type="text" name="act_title_5" value="" placeholder="Nama kegiatan...">
                        </div>

                        <div class="field">
                          <label>Link</label>
                          <input
                            type="text"
                            name="act_href_5"
                            value=""
                            placeholder="https://... (optional)">
                        </div>

                        <div class="divider"></div>

                        <div class="field">
                          <div class="labelRow">
                            <label>Image</label>
                            <span class="hint">jpg/png/webp (Maks 300kb)</span>
                          </div>

                                                    <input type="hidden" name="act_clear_5" value="0">

                          <div class="uploader">
                            <div class="preview" data-preview-wrap></div>

                            <div class="uploadBar" data-uploadbar>
                              <input
                                type="file"
                                name="act_img_5"
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
                                data-clear-name="act_clear_5"
                                disabled                              >Remove</button>
                            </div>

                            <div class="path"></div>
                          </div>
                        </div>
                      </div>
                                          <div class="itemCard">
                        <div class="itemTop">
                          <b>Item #6</b>
                          <span class="pill">Kegiatan</span>
                        </div>

                        
<div class="field">
  <label>Tanggal</label>

  <!-- ini yang tetap dikirim ke server (format: "Jan 05, 2026") -->
  <input
    type="hidden"
    name="act_date_6"
    value=""
    data-act-date-hidden="6"
  >

  <!-- 3 kolom horizontal: Month / Date / Year -->
  <div class="grid2 actDateRow">
    <div class="field" style="margin:0;">
      <select data-act-date="6" data-part="m">
        <option value="">Month</option>
        <option value="Jan">Jan</option>
        <option value="Feb">Feb</option>
        <option value="Mar">Mar</option>
        <option value="Apr">Apr</option>
        <option value="May">May</option>
        <option value="Jun">Jun</option>
        <option value="Jul">Jul</option>
        <option value="Aug">Aug</option>
        <option value="Sep">Sep</option>
        <option value="Oct">Oct</option>
        <option value="Nov">Nov</option>
        <option value="Dec">Dec</option>
      </select>
    </div>

    <div class="field" style="margin:0;">
      <select data-act-date="6" data-part="d">
        <option value="">Date</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
              </select>
    </div>

    <div class="field" style="margin:0;">
      <select data-act-date="6" data-part="y">
        <option value="">Year</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                  <option value="2031">2031</option>
                  <option value="2032">2032</option>
                  <option value="2033">2033</option>
                  <option value="2034">2034</option>
                  <option value="2035">2035</option>
                  <option value="2036">2036</option>
              </select>
    </div>
  </div>
</div>


                        <div class="field">
                          <label>Nama</label>
                          <input type="text" name="act_title_6" value="" placeholder="Nama kegiatan...">
                        </div>

                        <div class="field">
                          <label>Link</label>
                          <input
                            type="text"
                            name="act_href_6"
                            value="https://www.google.com/"
                            placeholder="https://... (optional)">
                        </div>

                        <div class="divider"></div>

                        <div class="field">
                          <div class="labelRow">
                            <label>Image</label>
                            <span class="hint">jpg/png/webp (Maks 300kb)</span>
                          </div>

                                                    <input type="hidden" name="act_clear_6" value="0">

                          <div class="uploader">
                            <div class="preview" data-preview-wrap></div>

                            <div class="uploadBar" data-uploadbar>
                              <input
                                type="file"
                                name="act_img_6"
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
                                data-clear-name="act_clear_6"
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
