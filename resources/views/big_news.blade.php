@extends('layouts.master')

@section('title', 'Big News')

@section('content')
<div>
	<div class="section">
		<div class="sectionHead">
			<div>
				<h2>Big News</h2>
				<p></p>
			</div>
			<div class="actions" style="margin-top: -20px ;justify-content: flex-end;">
				<button id="saveBtn" class="btn primary" type="submit">Add Big News</button>
			</div>
		</div>

		<div class="table-wrapper">
			<table class="custom-table">
				<thead>
					<tr>
						<th>Title</th>
						<th>Link</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($bignews as $item)
					<tr>
						<td>{{ $item['title'] }}</td>
						<td>
							<a href="{{ $item['link'] }}">{{ $item['link'] }}</a>
						</td>
						<td>
							@if($item['image'])
							<span class="status uploaded">Uploaded</span>
							@else
							<span class="status not-uploaded">Not Uploaded</span>
							@endif
						</td>
						<td class="actions">
							<a href="{{ route('viewBignews.index') }}" class="btn btn-view">View</a> <a href="{{ route('editBignews.index') }}" class="btn btn-edit">Edit</a>

							<form id="deleteForm{{ $loop->index }}"
								action="{{ route('big_news.destroy', $loop->index) }}"
								method="POST">
								@csrf
								@method('DELETE')

								<button type="button"
									class="btn btn-delete"
									onclick="showAlert(
                      'Hapus Data',
                      'Data ini akan dihapus permanen.',
                      function() {
                          document.getElementById('deleteForm{{ $loop->index }}').submit();
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
		<div class="table-bottom">
			<div class="pagination-custom">

				{{-- Previous --}}
				@if ($bignews->onFirstPage())
				<span class="disabled">&lt;</span>
				@else
				<a href="{{ $bignews->previousPageUrl() }}">&lt;</a>
				@endif

				{{-- Page Numbers --}}
				@for ($i = 1; $i <= $bignews->lastPage(); $i++)
					@if ($i == $bignews->currentPage())
					<span class="active">{{ $i }}</span>
					@else
					<a href="{{ $bignews->url($i) }}">{{ $i }}</a>
					@endif
					@endfor

					{{-- Next --}}
					@if ($bignews->hasMorePages())
					<a href="{{ $bignews->nextPageUrl() }}">&gt;</a>
					@else
					<span class="disabled">&gt;</span>
					@endif

			</div>
		</div>




	</div>
</div>




{{-- alert --}}
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
	let currentRow = null;

	const alertBox = document.getElementById('customAlert');
	const alertTitle = document.getElementById('alertTitle');
	const alertMsg = document.getElementById('alertMessage');
	const cancelBtn = document.getElementById('cancelBtn');
	const confirmBtn = document.getElementById('confirmBtn');

	function showAlert(title, message, callback = null, rowElement = null) {

		alertTitle.innerText = title;
		alertMsg.innerText = message;

		confirmCallback = callback;
		currentRow = rowElement;

		confirmBtn.style.display = 'inline-block';
		cancelBtn.style.display = 'inline-block';
		confirmBtn.innerText = 'Hapus';
		confirmBtn.classList.remove('loading');

		alertBox.style.display = 'flex';
	}

	cancelBtn.onclick = function() {
		alertBox.style.display = 'none';
	};

	confirmBtn.onclick = function() {

		confirmBtn.classList.add('loading');
		confirmBtn.innerText = 'Menghapus...';

		setTimeout(() => {

			// animasi sukses
			alertTitle.innerText = 'Berhasil';
			alertMsg.innerText = 'Data berhasil dihapus';

			// fade row kalau cuma frontend
			if (currentRow) {
				currentRow.classList.add('fade-out');
			}

			// JALANKAN CALLBACK (submit form Laravel)
			if (typeof confirmCallback === "function") {
				setTimeout(() => {
					confirmCallback();
				}, 500);
			}

			// reset tampilan (kalau tidak redirect)
			setTimeout(() => {
				alertBox.style.display = 'none';
				confirmBtn.classList.remove('loading');
				confirmBtn.innerText = 'Hapus';
				confirmBtn.style.display = 'inline-block';
				cancelBtn.style.display = 'inline-block';
			}, 1500);

		}, 800);
	};
</script>



{{-- alert --}}

{{-- backup --}}
{{-- <div class="sectionBody">
               

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
                </div> --}}
{{-- backup --}}
@endsection