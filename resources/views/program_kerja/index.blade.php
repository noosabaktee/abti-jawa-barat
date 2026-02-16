@extends('layouts.master')

@section('title', 'Program Kerja')

@section('content')
<div>
	<div class="section">
		<div class="sectionHead">
			<div>
				<h2>Program Kerja</h2>
				<p></p>
			</div>
			<div class="pill">24 items</div>
		</div>

		<div class="sectionBody">
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
		</div>
	</div>
</div>

<div class="actions">
	<button id="saveBtn" class="btn primary" type="submit">Save Changes</button>
</div>
@endsection