@extends('layouts.admin.app')
@section('content')

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-11">
                    <h5 class="card-title">Partners</h5>
                    </div>
                    <div class="col-1">
                    <a href="{{route('partners.create')}}" class="btn btn-outline-primary btn-sm mt-3">Add</a>
                    </div>
                </div>
             

              <!-- Table with stripped rows -->
              <table class="table table-striped datatable">
                <thead>
                  <tr>
                    <th>
                      ID
                    </th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($partners as $partnerKey => $partner)
                  <tr>
                    <td>{{$partnerKey+1}}</td>
                    <td>@if($partner->image)<img src="{{asset('all_image/'.$partner->image)}}" height="50" width="50" alt="">@else - @endif</td>
                    <td>{{$partner->name}}</td>
                    <td>{{$partner->designation}}</td>
                    <td><a href="{{route('partners.edit',$partner->id)}}" class="bi bi-pencil-square btn btn-outline-success btn-sm" ></a> <a href="{{route('partners.delete',$partner->id)}}" class="btn btn-sm btn-outline-danger bi bi-trash-fill" onclick="return confirm('Are you sure?')"></a></td>
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