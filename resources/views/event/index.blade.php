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
			<div class="actions">
				<a href="{{ route('event.create') }}" id="saveBtn" class="btn primary">Add Event</a>
			</div>
		</div>


		<div class="sectionBody">
			{{-- SUCCESS MESSAGE --}}
			@if(session('success'))
			<div style="color:green; margin-bottom:15px;">
				{{ session('success') }}
			</div>
			@endif
			<form class="" method="POST" action="{{ route('event.header.update') }}" enctype="multipart/form-data">
				@csrf
				<div class="field">
					<label>Header Title (Black)</label>
					<input type="text" name="black_title"
						value="{{ $eventHeader ? $eventHeader->black_title : '' }}"
						placeholder="Event dan Kejuaraan">
				</div>

				<div class="field">
					<label>Header Title (Red)</label>
					<input type="text" name="red_title"
						value="{{ $eventHeader ? $eventHeader->red_title : '' }}"
						placeholder="ABTI Jawa Barat">
				</div>

				<div class="field" style="grid-column: 1 / -1;">
					<label>Header Subtitle</label>
					<textarea name="subtitle"
						placeholder="Informasi resmi dan terkini...">{{ $eventHeader ? $eventHeader->subtitle : '' }}</textarea>
				</div>
				<div class="actions">
					<button type="submit" id="saveBtn" class="btn primary">Save Changes</button>
				</div>
			</form>

			<div class="divider"></div>

			<div class="cardGrid">
				<div class="table-wrapper">
					<table class="custom-table">
						<thead>
							<tr>
								<th>Event_id</th>
								<th>Name</th>
								<th>Category</th>
								<th>Loc</th>
								<th>Athletes</th>
								<th>Coaches</th>
								<th>Teams</th>
								<th>Management</th>
							</tr>
						</thead>
						<tbody>
							@if($event->count() == 0)
							<tr>
								<td colspan="8" style="text-align:center;">
									Belum ada data event
								</td>
							</tr>
							@endif
							@foreach($event as $item)
							<tr>
								<td>{{ $item['event_id'] }}</td>
								<td>{{ $item['name'] }}</td>
								<td>{{ $item['category'] }}</td>
								<td>{{ $item['loc'] }}</td>
								<td>{{ $item['athletes'] }}</td>
								<td>{{ $item['coaches'] }}</td>
								<td>{{ $item['teams'] }}</td>
								<td>{{ $item['management'] }}</td>
								<td class="actions">
									<a href="{{ route('event.show', $item) }}" class="btn btn-view">View</a> <a href="{{ route('event.edit', $item) }}" class="btn btn-edit">Edit</a>

									<form id="deleteForm{{ $loop->index }}"
										action="{{ route('event.destroy', $item) }}"
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
		
							@if ($event->onFirstPage())
							<span class="disabled">&lt;</span>
							@else
							<a href="{{ $event->previousPageUrl() }}">&lt;</a>
							@endif
		
							@for ($i = 1; $i <= $event->lastPage(); $i++)
								@if ($i == $event->currentPage())
								<span class="active">{{ $i }}</span>
								@else
								<a href="{{ $event->url($i) }}">{{ $i }}</a>
								@endif
								@endfor
		
								@if ($event->hasMorePages())
								<a href="{{ $event->nextPageUrl() }}">&gt;</a>
								@else
								<span class="disabled">&gt;</span>
								@endif
		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection