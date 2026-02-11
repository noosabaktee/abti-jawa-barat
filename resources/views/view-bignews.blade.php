@extends('layouts.master')

@section('title', 'View Big News')

@section('content')
 <div >
              <div class="section">
                <div class="sectionHead">
                  <div>
                    <h2>View Big News</h2>
                    <p></p>
                  </div>
                  {{-- <div class="pill">3 items</div> --}}
                </div>

                 <div class="bignews-wrapper">
    <form action="#" method="POST">
        @csrf

        <div class="image-section">

            {{-- LEFT: IMAGE --}}
            <div class="image-preview">
                <img src="https://via.placeholder.com/150x150" alt="Preview">
            </div>

            {{-- RIGHT: FORM FIELD --}}
            <div class="image-form">
                <div class="form-group">
                    <label>Title <span>*</span></label>
                    <input type="text" name="title" disabled value="Input title">
                </div>

                <div class="form-group">
                    <label>Link <span>*</span></label>
                    <input type="text" name="link" disabled value="https://example.com">
                </div>
            </div>

        </div>

       <div class="form-footer">
    <a href="{{ route('big_news.index') }}" class="btn-save">
        Kembali
    </a>
</div>


    </form>
</div>

          
              </div>
            </div>

{{-- <div class="actions">
              <button id="saveBtn" class="btn primary" type="submit">Save Changes</button>
            </div> --}}
@endsection
