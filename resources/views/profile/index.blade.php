@extends('layouts.master')

@section('title', 'Profile')

@section('content')
<div>
	<div class="section">
		<div class="sectionHead">
			<div>
				<h2>Database Klub</h2>
				<p></p>
			</div>
			<div class="actions">
				<a id="saveBtn" class="btn primary" href="{{ route('profile-club.create') }}">Add Clubs</a>
				<a id="saveBtn" class="btn primary" href="{{ route('profile-hero.create') }}">Add Hero</a>
			</div>
		</div>

		<div class="sectionBody">

			<!-- HEADER -->
			<h3 style="margin:0 0 10px;">Header</h3>
			<form class="" method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
				@csrf
				<div class="field">
					<label>Header Title (Black)</label>
					<input type="text" name="black_title"
						value="{{ $profileHeader ? $profileHeader->black_title : '' }}"
						placeholder="Database Klub">
				</div>

				<div class="field">
					<label>Header Title (Red)</label>
					<input type="text" name="red_title"
						value="{{ $profileHeader ? $profileHeader->red_title : '' }}"
						placeholder="ABTI Jawa Barat">
				</div>

				<div class="field" style="grid-column: 1 / -1;">
					<label>Header Subtitle</label>
					<textarea name="subtitle"
						placeholder="Daftar resmi klub indoor dan beach...">{{ $profileHeader ? $profileHeader->subtitle : '' }}</textarea>
				</div>
				<div class="actions">
					<button type="submit" id="saveBtn" class="btn primary">Save Changes</button>
				</div>
			</form>

			<div class="divider"></div>

			<!-- HERO Indoor -->
			<h3 style="margin:0 0 10px;">Hero Slider — INDOOR (maks 10)</h3>
			<div class="cardGrid">
				<div class="table-wrapper">
					<table class="custom-table">
						<thead>
							<tr>
								<th>Title</th>
								<th>Desc</th>
								<th>Image</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($indoors as $item)
							<tr>
								<td>{{ $item['title'] }}</td>
								<td>{{ $item['desc'] }}</td>
								<td>
									@if($item['image'])
									<span class="status uploaded">Uploaded</span>
									@else
									<span class="status not-uploaded">Not Uploaded</span>
									@endif
								</td>
								<td class="actions">
									<a href="{{ route('profile-hero.show', $item['id']) }}" class="btn btn-view">View</a> <a href="{{ route('profile-hero.edit', $item['id']) }}" class="btn btn-edit">Edit</a>

									<form id="deleteForm{{ $loop->index }}"
										action="{{ route('profile-hero.destroy', $item) }}"
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
		
							@if ($indoors->onFirstPage())
							<span class="disabled">&lt;</span>
							@else
							<a href="{{ $indoors->previousPageUrl() }}">&lt;</a>
							@endif
		
							@for ($i = 1; $i <= $indoors->lastPage(); $i++)
								@if ($i == $indoors->currentPage())
								<span class="active">{{ $i }}</span>
								@else
								<a href="{{ $indoors->url($i) }}">{{ $i }}</a>
								@endif
								@endfor
		
								@if ($indoors->hasMorePages())
								<a href="{{ $indoors->nextPageUrl() }}">&gt;</a>
								@else
								<span class="disabled">&gt;</span>
								@endif
		
						</div>
					</div>
				</div>
			</div>

			<div class="divider"></div>

			<!-- HERO BEACH -->
			<h3 style="margin:0 0 10px;">Hero Slider — BEACH (maks 10)</h3>
			<div class="cardGrid">
				<div class="table-wrapper">
					<table class="custom-table">
						<thead>
							<tr>
								<th>Title</th>
								<th>Desc</th>
								<th>Image</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($beaches as $item)
							<tr>
								<td>{{ $item['title'] }}</td>
								<td>{{ $item['desc'] }}</td>
								<td>
									@if($item['image'])
									<span class="status uploaded">Uploaded</span>
									@else
									<span class="status not-uploaded">Not Uploaded</span>
									@endif
								</td>
								<td class="actions">
									<a href="{{ route('profile-hero.show', $item['id']) }}" class="btn btn-view">View</a> <a href="{{ route('profile-hero.edit', $item['id']) }}" class="btn btn-edit">Edit</a>

									<form id="deleteFormBeach{{ $loop->index }}"
										action="{{ route('profile-hero.destroy', $item) }}"
										method="POST">
										@csrf
										@method('DELETE')

										<button type="button"
											class="btn btn-delete"
											onclick="showAlert(
                      'Hapus Data',
                      'Data ini akan dihapus permanen.',
                      function() {
                          document.getElementById('deleteFormBeach{{ $loop->index }}').submit();
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
		
							@if ($beaches->onFirstPage())
							<span class="disabled">&lt;</span>
							@else
							<a href="{{ $beaches->previousPageUrl() }}">&lt;</a>
							@endif
		
							@for ($i = 1; $i <= $beaches->lastPage(); $i++)
								@if ($i == $beaches->currentPage())
								<span class="active">{{ $i }}</span>
								@else
								<a href="{{ $beaches->url($i) }}">{{ $i }}</a>
								@endif
								@endfor
		
								@if ($beaches->hasMorePages())
								<a href="{{ $beaches->nextPageUrl() }}">&gt;</a>
								@else
								<span class="disabled">&gt;</span>
								@endif
		
						</div>
					</div>
				</div>
			</div>

			<div class="divider"></div>

			<!-- HERO INDOOR -->
			<h3 style="margin:0 0 10px;">Clubs</h3>
			<div class="cardGrid">
				<div class="table-wrapper">
					<table class="custom-table">
						<thead>
							<tr>
								<th>Name</th>
								<th>City</th>
								<th>Director</th>
								<th>Technical Director</th>
								<th>Training Venue</th>
								<th>Email</th>
								<th>Contact Person</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($clubs as $item)
							<tr>
								<td>{{ $item['name'] }}</td>
								<td>{{ $item['city'] }}</td>
								<td>{{ $item['director'] }}</td>
								<td>{{ $item['technical_director'] }}</td>
								<td>{{ $item['training_venue'] }}</td>
								<td>{{ $item['email'] }}</td>
								<td>{{ $item['contact_person'] }}</td>
								<td class="actions">
									<a href="{{ route('profile-club.show', $item['id']) }}" class="btn btn-view">View</a> <a href="{{ route('profile-club.edit', $item['id']) }}" class="btn btn-edit">Edit</a>

									<form id="deleteFormClub{{ $loop->index }}"
										action="{{ route('profile-club.destroy', $item) }}"
										method="POST">
										@csrf
										@method('DELETE')

										<button type="button"
											class="btn btn-delete"
											onclick="showAlert(
                      'Hapus Data',
                      'Data ini akan dihapus permanen.',
                      function() {
                          document.getElementById('deleteFormClub{{ $loop->index }}').submit();
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
		
							@if ($clubs->onFirstPage())
							<span class="disabled">&lt;</span>
							@else
							<a href="{{ $clubs->previousPageUrl() }}">&lt;</a>
							@endif
		
							@for ($i = 1; $i <= $clubs->lastPage(); $i++)
								@if ($i == $clubs->currentPage())
								<span class="active">{{ $i }}</span>
								@else
								<a href="{{ $clubs->url($i) }}">{{ $i }}</a>
								@endif
								@endfor
		
								@if ($clubs->hasMorePages())
								<a href="{{ $clubs->nextPageUrl() }}">&gt;</a>
								@else
								<span class="disabled">&gt;</span>
								@endif
		
						</div>
					</div>
				</div>
			</div>

			<div class="divider"></div>

			<div class="note">
				Saran: Jika link kosong <i>dapat diisi dengan</i> simbol "-"
			</div>

		</div>
	</div>
</div>


@endsection