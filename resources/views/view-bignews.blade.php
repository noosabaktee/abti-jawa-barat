@extends('layouts.master')

@section('title', 'View Big News')

@section('content')
<div>
    <div class="section">
        <div class="sectionHead">
            <div>
                <h2>View Big News</h2>
            </div>
        </div>

        <div class="bignews-wrapper">

            <div class="image-section">

                {{-- IMAGE --}}
                <div class="image-preview">
                    @if($bignews->image)
                        <img src="{{ asset('storage/'.$bignews->image) }}" width="200">
                    @else
                        <img src="https://via.placeholder.com/200x200?text=No+Image">
                    @endif
                </div>

                {{-- CONTENT --}}
                <div class="image-form">

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text"
                               value="{{ $bignews->title }}"
                               disabled>
                    </div>

                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text"
                               value="{{ $bignews->slug }}"
                               disabled>
                    </div>

                </div>

            </div>

            {{-- CONTENT TEXT --}}
            <div class="form-group" style="margin-top:20px;">
                <label>Content</label>
                <textarea rows="6" disabled>{{ $bignews->content }}</textarea>
            </div>

            <div class="form-footer">
                <a href="{{ route('big_news.index') }}" class="btn-save">
                    Kembali
                </a>
            </div>

        </div>
    </div>
</div>
@endsection


{{-- <div class="actions">
              <button id="saveBtn" class="btn primary" type="submit">Save Changes</button>
            </div> --}}
