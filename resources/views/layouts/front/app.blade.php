<!DOCTYPE html>
<html lang="en">

@include('layouts.front.head')


<style>



a:link,
a:active,
a:visited{
  color:rgba(255,255,255,1);
}

a:hover{
  color:rgba(255,255,255,0.6);
}

.gray {
  color: #a5a5a5;
}

.team{
  margin:40px;
}

.team-member {
  margin: 15px 0;
  padding: 0;
}

.team-member figure {
  position: relative;
  overflow: hidden;
  padding: 0;
  margin: 0;
}


label.error{
  color:red !important;
}

.teamImg  {
    width: 200px;
    height: 161px;
    overflow: hidden;
}
/* .teamImg{
  width: 200px; 
    height: 300px; 
    object-fit: cover;
    -webkit-clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
    clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
} */

img.propertImg {
    height: 240px;
}
/* footer responcive  */


.footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
        }

        .footer .container {
            max-width: 1170px;
            margin: auto;
            padding: 0 15px;
        }

        .footer .row {
            display: flex;
            flex-wrap: wrap;
        }

        .footer .col-sm-4 {
            flex: 1;
            min-width: 250px;
            margin-bottom: 20px;
        }

        .footer_widget {
            margin-bottom: 20px;
        }

        .footer_widget h4 {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .footer_widget ul {
            list-style: none;
            padding: 0;
        }

        .footer_widget ul li {
            margin-bottom: 10px;
        }

        .footer_widget ul li a {
            color: white;
            text-decoration: none;
        }

        .footer_widget ul li a:hover {
            text-decoration: underline;
        }

        .social-links {
            list-style: none;
            padding: 0;
            display: flex;
        }

        .social-links li {
            margin-right: 10px;
        }

        .social-links li a {
            color: white;
            font-size: 20px;
            display: inline-block;
            text-decoration: none;
        }

        .social-links li a:hover {
            color: #ddd;
        }

        @media (max-width: 768px) {
            .footer .row {
                flex-direction: column;
                align-items: center;
            }

            .footer .col-sm-4 {
                max-width: 100%;
            }

            .social-links {
                justify-content: center;
                margin-top: 20px;
            }

            .social-links li {
                margin-right: 15px;
            }
        }

        .clsActive {
    color: #fff; /* Text color */
    background-color: #fe5525; /* Background color */
    border-radius: 5px; /* Rounded corners */
}

    </style>
    


</style>

<body>


<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>


  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


@include('layouts.front.header')

@yield('content')

@include('layouts.front.footer')

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('front')}}/vendor/jquery/jquery.min.js"></script>

  
  
  <script src="{{asset('front')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
  
  
  <script src="{{asset('front')}}/assets/js/isotope.min.js"></script>
  <script src="{{asset('front')}}/assets/js/owl-carousel.js"></script>
  <script src="{{asset('front')}}/assets/js/counter.js"></script>
  <script src="{{asset('front')}}/assets/js/custom.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"> </script>


  <script>
    $("#contact-form").validate();
  </script>
  
</body>

</html>

<!-- ctr + --
footer
testimonial
aboutus page - what we do , Our Vision & Mission , our team
details page add image slider -->