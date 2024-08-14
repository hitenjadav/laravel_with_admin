@extends('layouts.admin.app')
@section('content')

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-11">
                    <h5 class="card-title">Cms Pages</h5>
                    </div>
                   
                </div>
             

              <!-- Table with stripped rows -->
              <table class="table table-striped datatable">
                <thead>
                  <tr>
                    <th>
                      Sr No.
                    </th>
                    <th>Page Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($info as $infoKey => $item)
                  <tr>
                    <td>{{$infoKey+1}}</td>
                    <td>{{$item->page_name}}</td>
                    <td><a href="{{route('cms.edit',$item->id)}}" class="bi bi-pencil-square btn btn-outline-success btn-sm" ></a> </td>
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