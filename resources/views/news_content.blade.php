@extends('layouts.master')

@section('title', 'News Content')

@section('content')
<div>
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

			</div>

			<div class="divider"></div>

			<h3 style="margin:0 0 10px;">Berita Lainnya (24)</h3>
			<div class="cardGrid">
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