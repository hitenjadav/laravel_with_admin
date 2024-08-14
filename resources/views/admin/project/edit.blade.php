@extends('layouts.admin.app')
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
@section('content')
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Project </h5>

              <!-- Horizontal Form -->
              <form action="{{route('projects.update',$projectInfo->id)}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Project Category</label>
                  <div class="col-sm-10">
                    <select name="category_id" class="form-control" id="">
                      <option value="">select</option>
                      @foreach($catagories as $cat)
                      <option value="{{$cat->id}}" @if($projectInfo->category_id == $cat->id) selected @endif >{{$cat->name}}</option>
                      @endforeach
                    </select>
                   
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Project Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" value="{{$projectInfo->name}}" class="form-control" id="inputText">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Location</label>
                  <div class="col-sm-10">
                    <input type="text" name="location" value="{{$projectInfo->location}}" class="form-control" id="inputText">
                    @error('location')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Tags</label>
                  <div class="col-sm-10">
                    <input type="text" name="tags" value="{{$projectInfo->tags}}" class="form-control" >
                    @error('tags')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Total Garden</label>

                  <div class="col-sm-10">
                    <input type="text" name="Total_garden" value="{{$projectInfo->Total_garden}}" class="form-control" >
                    @error('Total_garden')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Chlidren Play Area</label>
                  <div class="col-sm-10">
                    <input type="text" name="children_play_area" value="{{$projectInfo->children_play_area}}" class="form-control" >
                    @error('children_play_area')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Security Cabin</label>
                  <div class="col-sm-10">
                  <select class="form-control form-control" name="security_cabin" >
                    <option value=""> select</option>
                    <option value="1"  @if($projectInfo->security_cabin == 1) selected @endif>Yes</option>
                    <option value="0" @if($projectInfo->security_cabin == 0) selected @endif>No</option>
                  </select>
                    @error('security_cabin')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Gymusium</label>
                  <div class="col-sm-10">
                  <select class="form-control form-control" name="gymisum" >
                    <option value=""> select</option>
                    <option value="1"  @if($projectInfo->security_cabin == 1) selected @endif>Yes</option>
                    <option value="0" @if($projectInfo->security_cabin == 0) selected @endif>No</option>
                  </select>
                    @error('gymisum')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Water Facility</label>
                  <div class="col-sm-10">
                    <input type="text" name="water_facility" value="{{$projectInfo->water_facility}}" class="form-control" >
                    @error('water_facility')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Tample</label>
                  <div class="col-sm-10">
                    <input type="text" name="tample" value="{{$projectInfo->tample}}" class="form-control" >
                    @error('tample')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">CCTV Camara</label>
                  <div class="col-sm-10">
                  <select class="form-control form-control" name="cctv" >
                    <option value=""> select</option>
                    <option value="1"  @if($projectInfo->security_cabin == 1) selected @endif>Yes</option>
                    <option value="0" @if($projectInfo->security_cabin == 0) selected @endif>No</option>
                  </select>
                    @error('cctv')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea name="description" class="form-control" cols="30" rows="10">{{$projectInfo->description}}</textarea>
                    
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3 datainputs" >
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Pdf</label>
                  <div class="col-sm-10">
                    <input type="file" name="pdf" class="form-control"type="text"><br>
                    @error('pdf')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <a href="{{asset('all_image/'.$projectInfo->pdf)}}" target="_blenk">click me !</a>
                  <input type="hidden" name="old_pdf" value="{{$projectInfo->pdf}}">
                </div>


               

                <div class="row mb-3 datainputs" id="req_input">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Gallery Image</label>
                  <div class="col-sm-10">
                    <input type="file" name="gallery_image[]" class="form-control"type="text"><br>
                    @error('gallery_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <a  id="addmore" class="btn btn-sm btn-success" class="add_input">Add more</a>
                <div class="row-12" style="margin:10px">
                  @foreach($projectGallery as $i)
                      <img src="{{asset('all_image/'.$i->image)}}" alt=""  height="50" width="50">
                      <a href=""class="btn btn-sm btn-outline-danger bi bi-trash-fill" onclick="return confirm('Are you sure?')"></a>
                
                  @endforeach
                </div>

              

                

                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-sm ">Submit</button>
                  <a href="{{route('projects.index')}}" class="btn btn-secondary btn-sm">Back</a>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

        </div>

      </div>
    </section>  

@endsection

<script>
  $(document).ready(function() {
  $("#addmore").click(function() {
    $("#req_input").append('<div class="required_inp"><input type="file" name="gallery_image[]" class="form-control">' + '<br><input type="button" class="inputRemove btn btn-danger btn-sm" value="Remove"/></div>');
  });
  $('body').on('click','.inputRemove',function() {
    $(this).parent('div.required_inp').remove()
  });
});
</script>