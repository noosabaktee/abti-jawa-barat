@extends('layouts.master')

@section('title', 'Archives')

@section('content')
<div>
	<div class="section">
		<div class="sectionHead">
			<div>
				<h2>Archives</h2>
				<p></p>
			</div>
			<div class="actions">
				<a id="saveBtn" class="btn primary" href="{{ route('archive.create') }}">Add Archives</a>
			</div>
		</div>

		<div class="sectionBody">

			<h3 style="margin:0 0 10px;">Header</h3>
			<form class="" method="POST" action="{{ route('archive.header.update') }}" enctype="multipart/form-data">
				@csrf
				<div class="field">
					<label>Eyebrow</label>
					<input type="text" name="eyebrow"
						value="{{ $archiveHeader ? $archiveHeader->eyebrow : '' }}"
						placeholder="ABTI Jawa Barat">
				</div>

				<div class="field">
					<label>Title</label>
					<input type="text" name="title"
						value="{{ $archiveHeader ? $archiveHeader->title : '' }}"
						placeholder="Archives">
				</div>

				<div class="field" style="grid-column:1/-1;">
					<label>Subtitle</label>
					<textarea name="subtitle" placeholder="Kumpulan dokumen regulasi resmi...">{{ $archiveHeader ? $archiveHeader->subtitle : '' }}</textarea>
				</div>

				<div class="actions">
					<button id="saveBtn" class="btn primary" type="submit">Save Changes</button>
				</div>
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
			</form>

			<div class="divider"></div>

			<h3 style="margin:0 0 10px;">Kategori</h3>

			<div class="cardGrid">
				<div class="table-wrapper">
					<table class="custom-table">
						<thead>
							<tr>
								<th>Title</th>
								<th>Meta</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($archive as $item)
							<tr>
								<td>{{ $item['title'] }}</td>
								<td>{{ $item['meta'] }}</td>

								<td class="actions">
									<a href="{{ route('archive.show', $item->id) }}" class="btn btn-view">View</a> <a href="{{ route('archive.edit', $item->id) }}" class="btn btn-edit">Edit</a>

									<form id="deleteForm{{ $loop->index }}"
										action="{{ route('archive.destroy', $item->id) }}"
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
					{{-- Pagination --}}
					<div class="table-bottom">
						<div class="pagination-custom">
		
							@if ($archive->onFirstPage())
							<span class="disabled">&lt;</span>
							@else
							<a href="{{ $archive->previousPageUrl() }}">&lt;</a>
							@endif
		
							@for ($i = 1; $i <= $archive->lastPage(); $i++)
								@if ($i == $archive->currentPage())
								<span class="active">{{ $i }}</span>
								@else
								<a href="{{ $archive->url($i) }}">{{ $i }}</a>
								@endif
								@endfor
		
								@if ($archive->hasMorePages())
								<a href="{{ $archive->nextPageUrl() }}">&gt;</a>
								@else
								<span class="disabled">&gt;</span>
								@endif
		
						</div>
					</div>
				</div>
			</div>

			<div class="note">
				Saran: isi nama dokuman sesuai nama PDF
			</div>

		</div>
	</div>
</div>


@endsection