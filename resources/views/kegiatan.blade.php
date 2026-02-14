@extends('layouts.master')

@section('title', 'Kegiatan')

@section('content')


<div>
  <div class="section">

    <div class="sectionHead">
      <div>
        <h2>Kegiatan</h2>
      </div>

      <div class="actions" style="margin-top:-20px; justify-content:flex-end;">
      <a href="{{ route('kegiatan.create') }}" class="btn primary">
    Add Kegiatan
</a>

      </div>
    </div>

    <div class="table-wrapper">
  <table class="custom-table">
        <thead>
          <tr>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Link</th>
              <th>Tanggal</th>
              <th>Image</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>

        @if($kegiatan->count() == 0)
        <tr>
            <td colspan="6" style="text-align:center;">
                Belum ada data kegiatan
            </td>
        </tr>
        @endif

        @foreach($kegiatan as $item)
        <tr>

            {{-- NAMA --}}
            <td title="{{ $item->name }}">
                {{ Str::limit($item->name, 20, '...') }}
            </td>

            {{-- DESKRIPSI --}}
            <td title="{{ strip_tags($item->desc) }}">
                {{ Str::limit(strip_tags($item->desc), 20, '...') }}
            </td>

            {{-- LINK --}}
            <td>
                @if($item->slug)
                    <a href="{{ $item->slug }}" target="_blank"
                       title="{{ $item->slug }}">
                       {{ Str::limit($item->slug, 25, '...') }}
                    </a>
                @else
                    -
                @endif
            </td>

            {{-- TANGGAL --}}
            <td>
                {{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}
            </td>

            {{-- IMAGE --}}
            <td>
                @if($item->image)
                    <span class="status uploaded">Uploaded</span>
                @else
                    <span class="status not-uploaded">Not Uploaded</span>
                @endif
            </td>

            {{-- ACTION --}}
            <td class="actions" style="white-space: nowrap;">
                <a href="{{ route('kegiatan.show', $item->id) }}"
                   class="btn btn-view">
                   View
                </a>

                <a href="{{ route('kegiatan.edit', $item->id) }}"
                   class="btn btn-edit">
                   Edit
                </a>

                <form id="deleteForm{{ $item->id }}"
                      action="{{ route('kegiatan.destroy', $item->id) }}"
                      method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="button"
                        class="btn btn-delete"
                        onclick="showAlert(
                            'Hapus Data',
                            'Data ini akan dihapus permanen.',
                            function() {
                                document.getElementById('deleteForm{{ $item->id }}').submit();
                            }
                        )">
                        Delete
                    </button>
                </form>
            </td>

        </tr>
        @endforeach

        </tbody>
      </table>
    </div>

    {{-- Pagination --}}
    <div class="table-bottom">
      <div class="pagination-custom">

        @if ($kegiatan->onFirstPage())
          <span class="disabled">&lt;</span>
        @else
          <a href="{{ $kegiatan->previousPageUrl() }}">&lt;</a>
        @endif

        @for ($i = 1; $i <= $kegiatan->lastPage(); $i++)
          @if ($i == $kegiatan->currentPage())
            <span class="active">{{ $i }}</span>
          @else
            <a href="{{ $kegiatan->url($i) }}">{{ $i }}</a>
          @endif
        @endfor

        @if ($kegiatan->hasMorePages())
          <a href="{{ $kegiatan->nextPageUrl() }}">&gt;</a>
        @else
          <span class="disabled">&gt;</span>
        @endif

      </div>
    </div>

  
  
  
  
  
  
  </div>
</div>

<div id="customAlert" class="alert-overlay">
  <div class="alert-box">
    <h3 id="alertTitle">Konfirmasi</h3>
    <p id="alertMessage">Yakin mau hapus data ini?</p>

    <div class="alert-actions">
      <button id="cancelBtn" class="btn btn-edit">Batal</button>
      <button id="confirmBtn" class="btn btn-delete">Hapus</button>
    </div>
  </div>
</div>

<script>
let confirmCallback = null;

const alertBox   = document.getElementById('customAlert');
const alertTitle = document.getElementById('alertTitle');
const alertMsg   = document.getElementById('alertMessage');
const cancelBtn  = document.getElementById('cancelBtn');
const confirmBtn = document.getElementById('confirmBtn');

function showAlert(title, message, callback = null) {

    alertTitle.innerText = title;
    alertMsg.innerText   = message;

    confirmCallback = callback;

    confirmBtn.innerText = 'Hapus';
    confirmBtn.classList.remove('loading');

    alertBox.style.display = 'flex';
}

cancelBtn.onclick = function () {
    alertBox.style.display = 'none';
};

confirmBtn.onclick = function () {

    confirmBtn.classList.add('loading');
    confirmBtn.innerText = 'Menghapus...';

    setTimeout(() => {

        if (typeof confirmCallback === "function") {
            confirmCallback();
        }

    }, 600);
};
</script>


                {{-- <div class="div">
                  <div class="sectionHead">
                  <div>
                    <h2>Kegiatan Terbaru / Mini News</h2>
                    <p></p>
                  </div>
                  <div class="pill">6 items</div>
                  </div>
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


                </div> --}}
                    
{{-- 
            <div class="form-footer">
              <button id="saveBtn" class="btn primary" type="submit">Save Changes</button>
            </div> --}}

         

<script>
let confirmCallback = null;

const alertBox   = document.getElementById('customAlert');
const alertTitle = document.getElementById('alertTitle');
const alertMsg   = document.getElementById('alertMessage');
const cancelBtn  = document.getElementById('cancelBtn');
const confirmBtn = document.getElementById('confirmBtn');

function showAlert(title, message, callback = null) {

    alertTitle.innerText = title;
    alertMsg.innerText   = message;

    confirmCallback = callback;

    confirmBtn.innerText = 'Hapus';
    confirmBtn.classList.remove('loading');

    alertBox.style.display = 'flex';
}

cancelBtn.onclick = function () {
    alertBox.style.display = 'none';
};

confirmBtn.onclick = function () {

    confirmBtn.classList.add('loading');
    confirmBtn.innerText = 'Menghapus...';

    setTimeout(() => {

        if (typeof confirmCallback === "function") {
            confirmCallback();
        }

    }, 600);
};
</script>

@endsection
