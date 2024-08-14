@extends('layouts.admin.app')
@section('content')

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-11">
                    <h5 class="card-title">Testimonials</h5>
                    </div>
                    <div class="col-1">
                    <a href="{{route('testimonials.create')}}" class="btn btn-outline-primary btn-sm mt-3">Add</a>
                    </div>
                </div>
             

              <!-- Table with stripped rows -->
              <table class="table table-striped datatable">
                <thead>
                  <tr>
                    <th>
                      Sr No.
                    </th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Designation</th>
                    {{-- <th>Words</th> --}}
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($testimonials as $testimonialKey => $testimonial)
                  <tr>
                    <td>{{$testimonialKey+1}}</td>
                    <td>@if($testimonial->image)<img src="{{asset('all_image/'.$testimonial->image)}}" height="50" width="50" alt="">@else - @endif</td>
                    <td>{{$testimonial->name}}</td>
                    <td>{{$testimonial->designation}}</td>
                    {{-- <td>{{ substr($testimonial->words, 0, 50) }}...</td> --}}
                    <td>
                      <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{$testimonial->id}}" class="btn btn-outline-success btn-sm bi bi-eye-fill"></a>
                      <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="bi bi-pencil-square btn btn-outline-success btn-sm"></a>
                      <a href="{{ route('testimonials.delete', $testimonial->id) }}" class="btn btn-sm btn-outline-danger bi bi-trash-fill" onclick="return confirm('Are you sure?')"></a>
                  </td>
                  </tr>
                  <div class="modal fade" id="exampleModal{{$testimonial->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Testimonials
                            Details</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          
                          <p>Name: {{$testimonial->name}}</p>
                          <p>Designation : {{$testimonial->designation}}</p>
                          <p>Subject : {{$testimonial->words}}</p>
                          <p>Image : </p>
                          <img src="{{asset('all_image/'.$testimonial->image)}}" height="80" width="80" alt=""><br>
                          <br><p>Date: {{ $testimonial->created_at->format('m-d-Y') }}</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                 @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>    
    </section>
@endsection