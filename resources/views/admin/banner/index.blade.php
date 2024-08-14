@extends('layouts.admin.app')
@section('content')

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-11">
                    <h5 class="card-title">Banners</h5>
                    </div>
                    <div class="col-1">
                    <a href="{{route('banners.create')}}" class="btn btn-outline-primary btn-sm mt-3">Add</a>
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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($banners as $bannerKey => $banner)
                  <tr>
                    <td>{{$bannerKey+1}}</td>
                    <td>@if($banner->image)<img src="{{asset('all_image/'.$banner->image)}}" height="50" width="50" alt="">@else - @endif</td>
                    <td>{{$banner->title}}</td>
                    <td>{{ substr($banner->content, 0, 50) }}...</td>
                    <td>@if($banner->status == 1) <a onclick="return confirm('Are you sure to In Active?')" href="{{route('banners.status',$banner->id)}}" class="btn btn-outline-success btn-sm">Active</a> @else <a onclick="return confirm('Are you sure to  Active?')" href="{{route('banners.status',$banner->id)}}" class="btn btn-outline-danger btn-sm">In Active</a> @endif </td>
                    <td><a href="{{route('banners.edit',$banner->id)}}" class="bi bi-pencil-square btn btn-outline-success btn-sm" ></a> <a href="{{route('banners.delete',$banner->id)}}" class="btn btn-sm btn-outline-danger bi bi-trash-fill" onclick="return confirm('Are you sure?')"></a></td>
                  </tr>
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