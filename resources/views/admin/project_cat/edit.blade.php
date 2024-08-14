@extends('layouts.admin.app')
@section('content')
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Create Project Category </h5>

              <!-- Horizontal Form -->
              <form action="{{route('categories.update',$catInfo->id)}}" method="POST"> @csrf @method('put')
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{$catInfo->name}}" name="title" class="form-control" id="inputText">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-sm ">Submit</button>
                  <a href="{{route('categories.index')}}" class="btn btn-secondary btn-sm">Back</a>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

        </div>

      </div>
    </section>  

@endsection