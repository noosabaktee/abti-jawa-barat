@extends('layouts.master')

@section('title', 'Edit Big News')

@section('content')
 <div >
              <div class="section">
                <div class="sectionHead">
                  <div>
                    <h2>Edit Big News</h2>
                    <p></p>
                  </div>
                  {{-- <div class="pill">3 items</div> --}}
                </div>
                 
                <div class="bignews-wrapper">


        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="image-section">
                <div class="image-preview">
                    <img src="https://via.placeholder.com/150x150" alt="Preview">
                    <button type="button" class="remove-btn">×</button>
                </div>

                <div class="image-info">
                    <label class="btn-upload">
                        Change Image
                        <input type="file" name="image" hidden>
                    </label>
                    <p class="hint">
                        Upload image max 2MB. Format: JPG, PNG
                    </p>
                </div>
            </div>

            <div class="form-grid">
                <div class="form-group">
                    <label>Title <span>*</span></label>
                    <input type="text" name="title"  value="Input title">
                </div>

                <div class="form-group">
                    <label>Link <span>*</span></label>
                    <input type="text" name="link"  value="https://example.com">
                </div>
            </div>

            
            <div class="form-footer">
                <button type="submit" class="btn-save">Save</button>
            </div>

        </form>
</div>
          
              </div>
            </div>

{{-- <div class="actions">
              <button id="saveBtn" class="btn primary" type="submit">Save Changes</button>
            </div> --}}
@endsection
