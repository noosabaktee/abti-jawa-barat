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

			<div class="actions">
				<a href="{{ route('news-content.create') }}" id="saveBtn" class="btn primary">Add News Content</a>
				<a href="{{ route('short.create') }}" id="saveBtn" class="btn primary">Add Short Content</a>
			</div>
		</div>


		<div class="sectionBody">
			{{-- SUCCESS MESSAGE --}}
			@if(session('success'))
			<div style="color:green; margin-bottom:15px;">
				{{ session('success') }}
			</div>
			@endif

			<!-- <div class="field">
				<label>Link “Lihat semua update di YouTube”</label>
				<input type="text"
					name="wjc_youtube_all_url"
					value="Iyaya"
					placeholder="https://www.youtube.com/@CHANNEL_KAMU">
			</div> -->

			<!-- <div class="divider"></div> -->

			<h3 style="margin:0 0 10px;">Berita Terbaru ({{ $news->count() }})</h3>
			<div class="cardGrid">

				<div class="table-wrapper">
					<table class="custom-table">
						<thead>
							<tr>
								<th>Title</th>
								<th>Category</th>
								<th>Content</th>
								<th>CTA Text</th>
								<th>Youtube URL</th>
							</tr>
						</thead>
						<tbody>
							@foreach($news as $item)
							<tr>
								<td>{{ $item['title'] }}</td>
								<td>{{ $item['category'] }}</td>
								<td>{{ $item['content'] }}</td>
								<td>{{ $item['cta_text'] }}</td>
								<td>{{ $item['youtube_url'] }}</td>
								<td class="actions">
									<a href="{{ route('news-content.show', $item['slug']) }}" class="btn btn-view">View</a> <a href="{{ route('news-content.edit', $item['slug']) }}" class="btn btn-edit">Edit</a>

									<form id="deleteForm{{ $item->id }}"
										action="{{ route('news-content.destroy', $item) }}"
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
							</tr>
							@endforeach
						</tbody>




					</table>
					{{-- Pagination --}}
					<div class="table-bottom">
						<div class="pagination-custom">

							@if ($news->onFirstPage())
							<span class="disabled">&lt;</span>
							@else
							<a href="{{ $news->previousPageUrl() }}">&lt;</a>
							@endif

							@for ($i = 1; $i <= $news->lastPage(); $i++)
								@if ($i == $news->currentPage())
								<span class="active">{{ $i }}</span>
								@else
								<a href="{{ $news->url($i) }}">{{ $i }}</a>
								@endif
								@endfor

								@if ($news->hasMorePages())
								<a href="{{ $news->nextPageUrl() }}">&gt;</a>
								@else
								<span class="disabled">&gt;</span>
								@endif

						</div>
					</div>
				</div>
			</div>

			<div class="divider"></div>

			<h3 style="margin:0 0 10px;">Shorts Feed (maks 10)</h3>
		
			<div class="cardGrid">
				<div class="table-wrapper">
					<table class="custom-table">
						<thead>
							<tr>
								<th>Title</th>
								<th>Shorts URL</th>
							</tr>
						</thead>
						<tbody>
							@foreach($short as $item)
							<tr>
								<td>{{ $item['title'] }}</td>
								<td>{{ $item['url'] }}</td>
								<td class="actions">
									<a href="{{ route('short.show', $item) }}" class="btn btn-view">View</a> <a href="{{ route('short.edit', $item) }}" class="btn btn-edit">Edit</a>

									<form id="deleteFormShort{{ $item->id }}"
										action="{{ route('short.destroy', $item) }}"
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
													document.getElementById('deleteFormShort{{ $item->id }}').submit();
												}
											)">
											Delete
										</button>
									</form>
							</tr>
							@endforeach
						</tbody>




					</table>
					{{-- Pagination --}}
					<div class="table-bottom">
						<div class="pagination-custom">

							@if ($short->onFirstPage())
							<span class="disabled">&lt;</span>
							@else
							<a href="{{ $short->previousPageUrl() }}">&lt;</a>
							@endif

							@for ($i = 1; $i <= $short->lastPage(); $i++)
								@if ($i == $short->currentPage())
								<span class="active">{{ $i }}</span>
								@else
								<a href="{{ $short->url($i) }}">{{ $i }}</a>
								@endif
								@endfor

								@if ($short->hasMorePages())
								<a href="{{ $short->nextPageUrl() }}">&gt;</a>
								@else
								<span class="disabled">&gt;</span>
								@endif

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


@endsection