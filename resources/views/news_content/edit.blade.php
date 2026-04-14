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
        </div>

        <div class="sectionBody">


            <form class="" action="{{ route('news-content.update', $news) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="">


                    <div class="field">
                        <label>Category</label>
                        <input type="text" name="category"
                            value="{{ $news->category ?? old('category') }}"
                            placeholder="Informasi Organisasi">
                    </div>

                    <div class="field">
                        <label>Title</label>
                        <input type="text" name="title"
                            value="{{ $news->title ?? old('title') }}"
                            placeholder="Judul berita...">
                    </div>

                    <div class="field">
                        <label>Content</label>
                        <textarea name="content" placeholder="Deskripsi singkat...">{{ $news->content ?? old('content') }}</textarea>
                    </div>

                    <div class="field">
                        <label>CTA Text</label>
                        <input type="text" name="cta_text"
                            value="{{ $news->cta_text ?? old('cta_text') }}"
                            placeholder="Lihat di youtube">
                    </div>

                    <div class="field">
                        <label>YouTube URL (shorts / video)</label>
                        <input type="text" name="youtube_url"
                            value="{{ $news->youtube_url ?? old('youtube_url') }}"
                            placeholder="https://www.youtube.com/shorts/...">
                    </div>
                </div>

                {{-- FOOTER --}}
                <div class="form-footer" style="margin-top: 30px; display: flex; align-items: center;">
                    <a href="{{ route('news-content.index') }}" class="btn-upload" style="text-decoration: none;">
                        Kembali
                    </a>

                    <button type="submit"
                        class="btn-save"
                        style="margin-left:20px; border: none; cursor: pointer;">
                        Save Changes
                    </button>
                </div>
            </form>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif


            <div class="note">
                Catatan: link youtube wajib disertakan lengkap <i>dengan https://...</i>.
            </div>

        </div>
    </div>
</div>

@endsection