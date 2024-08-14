@extends('layouts.admin.app')
@section('content')

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-11">
                    <h5 class="card-title">Contact Inquiry</h5>
                    </div>
                    <div class="col-1">
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
                    <th>Email</th>
                    {{-- <th>Phone</th> --}}
                    <th>Subject</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($contacts as $contactKey => $contact)
                  <tr>
                    <td>{{$contactKey+1}}</td>
                    <td>{{$contact->fname ." ". $contact->lname}}</td>
                    <td>{{$contact->email}}</td>
                    {{-- <td>{{$contact->phone}}</td> --}}
                    <td>{{ substr($contact->subject, 0, 50) }}...</td>
                    <td><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{$contact->id}}" class="  btn btn-outline-success btn-sm  bi bi-eye-fill"></a> <a href="{{route('contact.delete',$contact->id)}}" class="btn btn-sm btn-outline-danger bi bi-trash-fill" onclick="return confirm('Are you sure?')"></a></td>
                  </tr>
                   <!-- Modal -->
                  <div class="modal fade" id="exampleModal{{$contact->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Inquiry Details</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>name : {{$contact->fname ." ". $contact->lname}} </p>
                          <p>Email: {{$contact->email}}</p>
                          <p>Phone : {{$contact->phone}}</p>
                          <p>Subject : {{$contact->subject}}</p>
                          <p>Message : {{$contact->message}}</p>
                          <p>Date : {{$contact->created_at}}</p>
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