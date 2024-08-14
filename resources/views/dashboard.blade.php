@extends('layouts.admin.app')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
            <div class="row">
                <div class="col-xxl-4 col-md-6">
                    <a href="{{route('blogs.index')}}">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Blogs </h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$TotalBlogs}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div><!-- End Sales Card -->
                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <a href="{{route('contacts')}}">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title"> Total Contact Inquery <span></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$totalContact}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <a href="{{route('contacts')}}">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title"> Total Testimonials <span></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$Testimonials}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div

             

                
                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">
                        <div class="card-body pb-0">
                        <h5 class="card-title">Contacts</span></h5>

                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th scope="col">Sr No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                {{-- <th scope="col">Phone</th> --}}
                                <th scope="col">Subject</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contactKey => $contact)
                                    <tr>
                                        <th scope="row">{{$contactKey+1}}</th>
                                        <td><a class="text-primary fw-bold">{{$contact->fname ." ". $contact->lname}} </a></td>
                                        <td>{{$contact->email}}</td>
                                        {{-- <td class="fw-bold">{{$contact->phone}}</td> --}}
                                        <td>{{substr($contact->subject, 0, 50)}}</td>
                                    </tr>
                                @endforeach
                        
                        
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div><!-- End Top Selling -->
            </div>
            </div><!-- End Left side columns -->
            <!-- Right side columns -->
            <div class="col-lg-4">
            </div><!-- End Right side columns -->
        </div>
    </section>
    @endsection