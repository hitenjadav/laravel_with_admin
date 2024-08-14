@extends('layouts.admin.app')
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
@section('content')
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Create Blog </h5>

              <!-- Horizontal Form -->
              <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data"> @csrf
                
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label"> Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="title" value="{{old('title')}}" class="form-control" id="inputText">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">content</label>
                  <div class="col-sm-10">
                    <input type="text" name="content" value="{{old('content')}}" class="form-control" id="inputText">
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label"> Image</label>
                  <div class="col-sm-10">
                    <input type="file" name="image" class="form-control" >
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-sm ">Submit</button>
                  <a href="{{route('blogs.index')}}" class="btn btn-secondary btn-sm">Back</a>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

        </div>

      </div>
    </section>  

@endsection
