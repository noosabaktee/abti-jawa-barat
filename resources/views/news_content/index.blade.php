@extends('layouts.master')

@section('title', 'News Content')

@section('content')
<style>
	.import-modal-overlay {
		display: none;
		position: fixed;
		inset: 0;
		background: rgba(0, 0, 0, 0.45);
		z-index: 1200;
		align-items: center;
		justify-content: center;
		padding: 16px;
	}

	.import-modal-box {
		width: 100%;
		max-width: 520px;
		background: #fff;
		border-radius: 12px;
		padding: 18px;
		box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
	}

	.import-modal-actions {
		display: flex;
		gap: 8px;
		justify-content: flex-end;
		margin-top: 14px;
	}
</style>
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
			@if($errors->any())
			<div style="color:red; margin-bottom:15px;">
				{{ $errors->first() }}
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
			<div class="actions">
				<a href="{{ route('news.export') }}" id="saveBtn" class="btn" style="background-color: #007bff;color:white !important">Export News</a>
				<button type="button" id="openImportNewsModal" class="btn" style="background-color: #28a745;color:white !important">Import News</button>
			</div>
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
							@if($news->count() == 0)
							<tr>
								<td colspan="6" style="text-align:center;">
									Belum ada data news
								</td>
							</tr>
							@endif
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
			<div class="actions">
				<a href="{{ route('shorts.export') }}" id="saveBtn" class="btn" style="background-color: #007bff;color:white !important">Export Shorts</a>
				<button type="button" id="openImportShortModal" class="btn" style="background-color: #28a745;color:white !important">Import Shorts</button>
			</div>
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
							@if($short->count() == 0)
							<tr>
								<td colspan="2" style="text-align:center;">
									Belum ada data short
								</td>
							</tr>
							@endif
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

<div id="importNewsModal" class="import-modal-overlay" aria-hidden="true">
	<div class="import-modal-box" onclick="event.stopPropagation()">
		<h3 style="margin:0 0 10px;">Import Data News</h3>
		<p style="margin:0 0 12px;">Upload file Excel/CSV dengan heading: title, category, content, cta_text, youtube_url.</p>
		<form action="{{ route('news.import') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="file" name="file" accept=".xlsx,.xls,.csv" required style="width:100%;">
			<div class="import-modal-actions">
				<button type="button" id="closeImportNewsModal" class="btn btn-edit">Batal</button>
				<button type="submit" class="btn" style="background-color: #28a745;color:white !important">Submit Import</button>
			</div>
		</form>
	</div>
</div>

<div id="importShortModal" class="import-modal-overlay" aria-hidden="true">
	<div class="import-modal-box" onclick="event.stopPropagation()">
		<h3 style="margin:0 0 10px;">Import Data Shorts</h3>
		<p style="margin:0 0 12px;">Upload file Excel/CSV dengan heading: title, url.</p>
		<form action="{{ route('shorts.import') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="file" name="short_file" accept=".xlsx,.xls,.csv" required style="width:100%;">
			<div class="import-modal-actions">
				<button type="button" id="closeImportShortModal" class="btn btn-edit">Batal</button>
				<button type="submit" class="btn" style="background-color: #28a745;color:white !important">Submit Import</button>
			</div>
		</form>
	</div>
</div>

<script>
	const importNewsModal = document.getElementById('importNewsModal');
	const openImportNewsModalBtn = document.getElementById('openImportNewsModal');
	const closeImportNewsModalBtn = document.getElementById('closeImportNewsModal');
	const importShortModal = document.getElementById('importShortModal');
	const openImportShortModalBtn = document.getElementById('openImportShortModal');
	const closeImportShortModalBtn = document.getElementById('closeImportShortModal');

	function openImportNewsModal() {
		importNewsModal.style.display = 'flex';
		importNewsModal.setAttribute('aria-hidden', 'false');
	}

	function closeImportNewsModal() {
		importNewsModal.style.display = 'none';
		importNewsModal.setAttribute('aria-hidden', 'true');
	}

	function openImportShortModal() {
		importShortModal.style.display = 'flex';
		importShortModal.setAttribute('aria-hidden', 'false');
	}

	function closeImportShortModal() {
		importShortModal.style.display = 'none';
		importShortModal.setAttribute('aria-hidden', 'true');
	}

	openImportNewsModalBtn.addEventListener('click', openImportNewsModal);
	closeImportNewsModalBtn.addEventListener('click', closeImportNewsModal);
	importNewsModal.addEventListener('click', closeImportNewsModal);
	openImportShortModalBtn.addEventListener('click', openImportShortModal);
	closeImportShortModalBtn.addEventListener('click', closeImportShortModal);
	importShortModal.addEventListener('click', closeImportShortModal);

	@if($errors->has('file'))
	openImportNewsModal();
	@endif

	@if($errors->has('short_file'))
	openImportShortModal();
	@endif
</script>

@endsection
