@extends('layouts.admin.app')
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
@section('content')
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Testimonial </h5>

              <!-- Horizontal Form -->
              <form action="{{route('testimonials.update',$testimonial->id)}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label"> Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" value="{{$testimonial->name}}" class="form-control" id="inputText">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Designation</label>
                  <div class="col-sm-10">
                    <input type="text" name="designation" value="{{$testimonial->designation}}" class="form-control" id="inputText">
                    @error('designation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea name="description" class="form-control" cols="30" rows="10">{{$testimonial->words}}</textarea>
                    
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label"> Image</label>
                  <div class="col-sm-10">
                    <input type="file" name="image" class="form-control" >
                    <input type="hidden" name="old_image" value="{{$testimonial->image}}">
                    
                    <img src="{{asset('all_image/'.$testimonial->image)}}"  height="50" width="50" alt="">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-sm ">Submit</button>
                  <a href="{{route('testimonials.index')}}" class="btn btn-secondary btn-sm">Back</a>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

        </div>

      </div>
    </section>  

@endsection
