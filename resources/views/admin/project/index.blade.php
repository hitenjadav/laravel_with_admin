@extends('layouts.admin.app')
@section('content')

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-11">
                    <h5 class="card-title">Projects</h5>
                    </div>
                    <div class="col-1">
                    <a href="{{route('projects.create')}}" class="btn btn-outline-primary btn-sm mt-3">Add</a>
                    </div>
                </div>
             

              <!-- Table with stripped rows -->
              <table class="table table-striped datatable">
                <thead>
                  <tr>
                    <th>
                      Sr No.
                    </th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Tags</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($projects as $projectKey => $project)
                  <tr>
                    <td>{{$projectKey+1}}</td>
                    <td>{{$project->name}}</td>
                    <td>{{$project->location}}</td>
                    <td>{{$project->tags}}</td>
                    <td><a href="{{route('projects.edit',$project->id)}}" class="bi bi-pencil-square btn btn-outline-success btn-sm" ></a> <a href="{{route('projects.delete',$project->id)}}" class="btn btn-sm btn-outline-danger bi bi-trash-fill" onclick="return confirm('Are you sure?')"></a></td>
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