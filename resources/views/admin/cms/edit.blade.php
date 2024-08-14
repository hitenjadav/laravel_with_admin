@extends('layouts.admin.app')
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
@section('content')
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit {{$info->page_name}} </h5>

              <!-- Horizontal Form -->
              <form action="{{route('cms.update',$info->id)}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                @if($info->id == 1)
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label"> About Us Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="title" value="{{$info->title}}" class="form-control" id="inputText">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">About Us Content</label>
                  <div class="col-sm-10">
                    <input type="text" name="content" value="{{$info->content}}" class="form-control" id="inputText">
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">About Us Image 1</label>
                  <div class="col-sm-10">
                    <input type="file" name="sub_image"  class="form-control" id="inputText">
                    <input type="hidden" name="old_sub_image" value="{{$info->sub_image}}">
                    @error('sub_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">About Us Image 2</label>
                  <div class="col-sm-10">
                    <input type="file" name="image"  class="form-control" id="inputText">
                    <input type="hidden" name="old_image" value="{{$info->image}}">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Latest Site sub Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="featured_subtitle" value="{{$info->featured_subtitle}}" class="form-control" id="inputText">
                    @error('featured_subtitle')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Latest Site Content</label>
                  <div class="col-sm-10">
                    <input type="text" name="featured_content" value="{{$info->featured_content}}" class="form-control" id="inputText">
                    @error('featured_content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Blog 1</label>
                  <div class="col-sm-10">
                    <input type="text" name="blog_1" value="{{$info->blog_1}}" class="form-control" id="inputText">
                    @error('blog_1')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Blog 2</label>
                  <div class="col-sm-10">
                    <input type="text" name="blog_2" value="{{$info->blog_2}}" class="form-control" id="inputText">
                    @error('blog_2')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Blog 3</label>
                  <div class="col-sm-10">
                    <input type="text" name="blog_3" value="{{$info->blog_3}}" class="form-control" id="inputText">
                    @error('blog_3')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Blog 4</label>
                  <div class="col-sm-10">
                    <input type="text" name="blog_4" value="{{$info->blog_4}}" class="form-control" id="inputText">
                    @error('blog_4')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Buildings Finished </label>
                  <div class="col-sm-10">
                    <input type="text" name="buliding_finnished" value="{{$info->buliding_finnished}}" class="form-control" id="inputText">
                    @error('buliding_finnished')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Total Squere construction </label>
                  <div class="col-sm-10">
                    <input type="text" name="total_cunstruction" value="{{$info->total_cunstruction}}" class="form-control" id="inputText">
                    @error('total_cunstruction')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Years Experience</label>
                  <div class="col-sm-10">
                    <input type="text" name="total_experince" value="{{$info->total_experince}}" class="form-control" id="inputText">
                    @error('total_experince')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Certified Bank </label>
                  <div class="col-sm-10">
                    <input type="text" name="certified_bank" value="{{$info->certified_bank}}" class="form-control" id="inputText">
                    @error('certified_bank')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                @endif
                @if($info->id == 2)
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Vision Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="vision_title" value="{{$info->vision_title}}" class="form-control" id="inputText">
                    @error('vision_title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Vision Content</label>
                  <div class="col-sm-10">
                    <input type="text" name="vision_content" value="{{$info->vision_content}}" class="form-control" id="inputText">
                    @error('vision_content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Vision Image</label>
                  <div class="col-sm-10">
                    <input type="file" name="vision_image" value="{{$info->vision_image}}" class="form-control" id="inputText">
                    <input type="hidden" name="old_vision_image"  value="{{$info->vision_image}}">
                    @error('vision_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Mission Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="mission_title" value="{{$info->mission_title}}" class="form-control" id="inputText">
                    @error('mission_title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Mission Content</label>
                  <div class="col-sm-10">
                    <input type="text" name="mission_content" value="{{$info->mission_content}}" class="form-control" id="inputText">
                    @error('mission_content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Mission Image</label>
                  <div class="col-sm-10">
                    <input type="file" name="mission_image" value="{{$info->mission_image}}" class="form-control" id="inputText">
                    
                    <input type="hidden" name="old_mission_image" value="{{$info->mission_image}}">
                    @error('mission_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">In Image Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="in_image_title" value="{{$info->in_image_title}}" class="form-control" id="inputText">
                    @error('in_image_title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">In Image Content</label>
                  <div class="col-sm-10">
                    <input type="text" name="in_image_content" value="{{$info->in_image_content}}" class="form-control" id="inputText">
                    @error('blog_2')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                @endif
                @if($info->id == 3)
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone" value="{{$info->phone}}" class="form-control" id="inputText">
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" value="{{$info->email}}" class="form-control" id="inputText">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" value="{{$info->address}}" class="form-control" id="inputText">
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                @endif


                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-sm ">Submit</button>
                  <a href="{{route('cms.index')}}" class="btn btn-secondary btn-sm">Back</a>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

        </div>

      </div>
    </section>  

@endsection
