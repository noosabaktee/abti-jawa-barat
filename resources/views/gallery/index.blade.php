@extends('layouts.master')

@section('title', 'Gallery')

@section('content')
<div>

	<div class="section">
		<div class="sectionHead">
			<div>
				<h2>Galeri Kegiatan (IHF)</h2>
				<p></p>
			</div>

			<div class="actions">
				<a href="{{ route('gallery.create') }}" id="saveBtn" class="btn primary">Add Gallery</a>
			</div>
		</div>

		<div class="sectionBody">
			{{-- SUCCESS MESSAGE --}}
			@if(session('success'))
			<div style="color:green; margin-bottom:15px;">
				{{ session('success') }}
			</div>
			@endif

			<!-- HEADER -->
			<h3 style="margin:0 0 10px;">Header</h3>
			<form class="" method="POST" action="{{ route('gallery.header.update') }}" enctype="multipart/form-data">
				@csrf
				<div class="field">
					<label>Header Title (Black)</label>
					<input type="text" name="black_title"
						value="{{ $galleryHeader ? $galleryHeader->black_title : '' }}"
						placeholder="Galeri Kegiatan">
				</div>

				<div class="field">
					<label>Header Title (Red)</label>
					<input type="text" name="red_title"
						value="{{ $galleryHeader ? $galleryHeader->red_title : '' }}"
						placeholder="ABTI Jawa Barat">
				</div>

				<div class="field" style="grid-column: 1 / -1;">
					<label>Header Subtitle</label>
					<textarea name="subtitle"
						placeholder="Ikuti perjalanan ABTI Jawa Barat...">{{ $galleryHeader ? $galleryHeader->subtitle : '' }}</textarea>
				</div>
				<div class="actions">
					<button type="submit" id="saveBtn" class="btn primary">Save Changes</button>
				</div>
			</form>

			<div class="divider"></div>

			<!-- ITEMS -->
			<h3 style="margin:0 0 10px;">Kegiatan (10) • Foto per kegiatan (10)</h3>

			<div class="cardGrid">
				<div class="table-wrapper">
					<table class="custom-table">
						<thead>
							<tr>
								<th>Title</th>
								<th>Date</th>
								<th>Cover</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if($gallery->count() == 0)
							<tr>
								<td colspan="4" style="text-align:center;">
									Belum ada data gallery
								</td>
							</tr>
							@endif
							@foreach($gallery as $item)
							<tr>
								<td>{{ $item['title'] }}</td>
								<td>{{ $item['date'] }}</td>
								<td>
									@if($item['cover'])
									<span class="status uploaded">Uploaded</span>
									@else
									<span class="status not-uploaded">Not Uploaded</span>
									@endif
								</td>
								<td class="actions">
									<a href="{{ route('gallery.show', $item['id']) }}" class="btn btn-view">View</a> <a href="{{ route('gallery.edit', $item['id']) }}" class="btn btn-edit">Edit</a>

									<form id="deleteForm{{ $loop->index }}"
										action="{{ route('gallery.destroy', $item['id']) }}"
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

							@if ($gallery->onFirstPage())
							<span class="disabled">&lt;</span>
							@else
							<a href="{{ $gallery->previousPageUrl() }}">&lt;</a>
							@endif

							@for ($i = 1; $i <= $gallery->lastPage(); $i++)
								@if ($i == $gallery->currentPage())
								<span class="active">{{ $i }}</span>
								@else
								<a href="{{ $gallery->url($i) }}">{{ $i }}</a>
								@endif
								@endfor

								@if ($gallery->hasMorePages())
								<a href="{{ $gallery->nextPageUrl() }}">&gt;</a>
								@else
								<span class="disabled">&gt;</span>
								@endif

						</div>
					</div>
				</div>
			</div>

			<div class="note">
				Saran: foto galeri <i>maksimal 200kb.</i> Convert ke webp untuk hasil maksimal.
			</div>

		</div>
	</div>
</div>

@endsection