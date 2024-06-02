<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="shortcut icon" href="{{URL('images/Banner/Logo.png')}}" type="image/x-icon">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<title>Envirogreen</title>
</head>
<body>

<!-- Navbar -->


<div class="banner-image mx-auto img-fluid"></div>
<div class="banner-image-2 mx-auto img-fluid"></div>

<div class="container-fluid background-image">

    <nav class="navbar navbar-expand-lg bg-transparent " >
        <div class="container-fluid">
          <img src="{{URL('images/Banner/logo.png')}}" class="img-fluid logo-css"  alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
              <li class="nav-item ">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="#">
                  Courses
                </a>
                
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#">
                  Services
                </a>
            
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#" >
                  Shops
                </a>
               
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="#" role="button">
                  Jobs
                </a>
           
      
              
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
  

            <!-- Search / login / Enroll button -->

            <div class="d-flex">
             
                <div class="search-container  me-3">
                    <a href="javascript:void(0);" class="text-decoration-none text-ico" onclick="toggleSearch()">
                        <i class="bi bi-search search-ico"></i>
                    </a>
                    <input type="text" class="search-input form-control ms-2" placeholder="Search Here">
                </div>


                <a href="{{route('admin.sidebar')}}" class="btn btn-login-css ms-4 "><i class="bi bi-person-fill me-2"></i>Admin Panel</a>
                <button class="btn btn-enroll-css ms-4 btn-sm">Enroll Now !</button>

            </div>

          </div>
        </div>
      </nav>

<!-- End -->



      <!-- Banner Section -->

<div class="container ">
    
    <div class="row" >
    
        <div class="col-lg-6" >
        
    <h5 class="banner-txt mt-3"><img src="{{URL('images/Banner/trophy-ico.png')}}" class="img-fluid me-2" width="20px" alt="">The Leader In Online Learning</h5>

    <h1 class="banner-txt-2">A Sustainable Solution Providers</h1>

    <p class="banner-paragraph text-secondary fw-bold ">We offer full range of specialized enginerr-ing consultancy services complete with our own-in-house properietary software that has been developed and tailored to the energy bussiness needs.</p>
    
        </div>
    
        <div class="col-lg-6" >
          <div class="text-center">
              <img src="{{URL('images/Banner/banner-img.png')}}"  class="img-fluid banner-img-css" alt="">
          </div>
      </div>
      
        
        </div>
    </div>

<!-- Banner End -->
</div>


<!-- Service Section Starts -->


 <div class="container div-border mt-5" >

    <div class="text-center">
        <span class=" categories-text-css mt-5">Categories</span>
        <h2 class="mt-5 services-heading mb-5">Our Services</h2>
    </div>
 </div>


<div class="container div-border mt-5">
    <div class="row">
   
@foreach ($services as $users )
  
<div class="col-lg-3 ">
  <div class="card card-css" style="width: 18rem; height: 17rem;">
    <div class="mx-auto">
      <img src="{{ asset('storage/' . $users->Image) }}" class="card-img-top img-fluid card-img" alt="...">
    </div>
      <div class="card-body">
        
       <h4 class="text-center card-text">{{$users->Title}}</h4>
      </div>
    </div>
</div>

@endforeach

</div>

<!-- Service Section End -->


<!-- Courses Section Starts -->

<div class="container  mt-5">

    <div class="text-center">
        <span class=" categories-text-css mt-5">Top Courses</span>
        <h2 class="mt-5 services-heading mb-5">Course Student
          <br>Can Join With Us
        </h2>
    </div>
 </div>


<div class="container">
    <div class="row">
        
          @foreach ($courses as $data)
          <div class="col-lg-4">
          <div class="card courses-card-css" style="width: 18rem;">
              <img src="{{ asset('storage/' . $data->CourseImage) }}" class="card-img-top img-fluid" alt="Course Image">
              <div class="card-body">
                  <h5 class="card-title card-title-courses">{{ $data->CourseTitle }}</h5>
                  <p class="card-text text-secondary">{{ $data->CourseDescription }}</p>
                  <div class="d-flex">
                      <h6 class="text-free mt-2 fw-bold fs-4">{{ $data->Price }}</h6>
                      <div class="ms-auto mt-3">
                          <a href="#" class="text-decoration-none mt-3 text-dark cursor-pointer">Enroll Now <i class="bi bi-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      @endforeach 
        
       
        
    
 </div>
 <h2 class="mt-5 services-heading text-center">Our Impact</h2>


    </div>

    <div class="container infographic-container">
      <div class="line"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle" style="left: 7.5rem;"></div>
      <div class="row">
          <div class="col-md-3 infographic-item">
              <img src="{{URL('images/impact/training.png')}}" alt="Training Hours">
              <h3>2500+</h3>
              <p>Training Hours</p>
          </div>
          <div class="col-md-3 infographic-item">
              <img src="{{URL('images/impact/trainees.png')}}" alt="Trainees">
              <h3>600+</h3>
              <p>Trainees</p>
          </div>
          <div class="col-md-3 infographic-item">
              <img src="{{URL('images/impact/energy.png')}}" alt="Energy Audits">
              <h3>150+</h3>
              <p>Energy Audits</p>
          </div>
          <div class="col-md-3 infographic-item">
              <img src="{{URL('images/impact/energysaving.png')}}" alt="Energy Saved">
              <h3>1.8 Mil+</h3>
              <p>Energy Saved kWh</p>
          </div>
      </div>
      <div class="row">
          <div class="col-md-3 infographic-item">
              <img src="{{URL('images/impact/Co2.png')}}" alt="CO2">
              <h3>792</h3>
              <p>Tons of CO2</p>
          </div>
          <div class="col-md-3 infographic-item">
              <img src="{{URL('images/impact/watersaving.png')}}" alt="Water Saving">
              <h3>4.5 Mil</h3>
              <p>Water Saving (IG)</p>
          </div>
          <div class="col-md-3 infographic-item">
              <img src="{{URL('images/impact/courses.png')}}" alt="Courses Offered">
              <h3>20+</h3>
              <p>Courses Offered</p>
          </div>
          <div class="col-md-3 infographic-item">
              <img src="{{URL('images/impact/presence.png')}}" class="img-fluid w-50" alt="Countries">
              <h3>2</h3>
              <p>Our Presence in Countries</p>
          </div>
      </div>
  </div>  
</div>

<h2 class="mt-5 services-heading text-center">Reviews</h2>

<div class="container mt-5">
  <div class="row">
@foreach ($reviews as  $data)
<div class="col-lg-3 ">
  <div class="card card-css-reviews-1 card-css-shadow" style="width: 16rem;" >
   <div class="mx-auto mt-5">
    <img src="{{ asset('storage/' . $data->Image) }}" class="card-img-top img-fluid card-img" alt="...">
   </div> 
    <div class="card-body">
      
      <p class="card-text reviews-card-txt">{{$data->Review}}</p>
      
    </div>
  </div>
</div>
@endforeach
    
</div>
<!-- Reviews End -->


<!-- Partners Starts -->
<h2 class="mt-5 services-heading text-center mt-5">Partners & Associates</h2>

<div class="container">
  <div class="d-flex text-center mt-5 ">
    <img src="{{URL('images/partners/company-1.png')}}" class="img-fluid ms-3" style="width: 150px;"  alt="">
    <img src="{{URL('images/partners/company-2.png')}}" class="img-fluid ms-3" style="width: 150px;"  alt="">
    <img src="{{URL('images/partners/company-3.png')}}" class="img-fluid ms-3" style="width: 150px;"  alt="">
    <img src="{{URL('images/partners/company-4.png')}}" class="img-fluid ms-4" style="width: 150px;"  alt="">
    <img src="{{URL('images/partners/company-5.png')}}" class="img-fluid ms-4" style="width: 150px;"  alt="">
    <img src="{{URL('images/partners/company-6.png')}}" class="img-fluid ms-4" style="width: 150px;"  alt="">
  </div>
</div>

</div>

<!-- End -->


<!-- World Map / Location Footer -->
<img src="./assets/images/map/worldmap.png" class="mt-5 img-fluid" alt="">
<div class=" branches-css">

<div class="container">

  <div class="row">
    <div class="col-lg-6 branch-col-1">
<h3 class="location-branch">Karachi,Pakistan</h3>
<p class="location-address "><i class="bi bi-geo-alt location-ico me-3 mb-2"></i>Banglow  No 88-16 Defense View,<br>Phase II Karachi Pakistan,</p>

<p class="location-address "><i class="bi bi-telephone-fill location-ico me-3 mb-2"></i>+92 333 387 2566</p>

<p class="location-address "><i class="bi bi-envelope location-ico me-3 mb-2"></i>info@envirogreen.co</p>
    </div>
    <div class="col-lg-6  branch-col-2">
  <div class="row">
    <div class="col-lg-2"></div>
  <div class="col-lg-8">
    <h3 class="location-branch ">Karachi,Pakistan</h3>
    <p class="location-address "><i class="bi bi-geo-alt location-ico me-3 mb-2"></i>Banglow  No 88-16 Defense View,<br>Phase II Karachi Pakistan,</p>
    
    <p class="location-address "><i class="bi bi-telephone-fill location-ico me-3 mb-2"></i>+92 333 387 2566</p>
<p class="location-address "><i class="bi bi-envelope location-ico me-3 mb-2"></i>info@envirogreen.co</p>

  </div>
  </div>
    </div>
  </div>
</div>

</div>
<!-- End -->


<!-- end section -->

<div class="container">

<div class="row">

<div class="col-lg-4">
  <img src="{{URL('images/Banner/logo.png')}}" class="img-fluid logo-css mt-2"  alt="">
</div>
<div class="col-lg-4">
  <h3 class="mt-5 text-center fw-bold end-text">Extra Links</h3>
</div>
<div class="col-lg-4">
  <h3 class="mt-5 text-center fw-bold  end-text">Subscribe</h3>
</div>

</div>


</div>

<!-- End -->


<!-- Footer -->


<div class="footer-css">
  <div class="container ">

    <div class="row ">
    
    <div class="col-lg-3 mb-5">
      <p class="mt-5 footer-txt">
        Envirogreen Services is a sustainable solutions 
provider committed to delivering end-to-end, 
best-in-class comprehensive customized 
solutions to clients in the industrial, 
commercial, educational, residential, 
hospitality and retail sectors across Pakistan 
and UAE. Our preamble is to provide 
solutions aimed at reducing ecological 
footprint of the built environment
      </p>
    </div>
    <div class="col-lg-3 mb-5">
      <ul class="remove-bullets mt-5 text-center">
        <li class="footer-txt">About</li>
        <li class="mt-3 footer-txt">Services</li>
        <li class="mt-3 footer-txt">Insights</li>
        <li class="mt-3 footer-txt">Contacts</li>
        <li class="mt-3 footer-txt">Careers</li>
        <li class="mt-3 footer-txt">FAQ</li>
        <li class="mt-3 footer-txt">Feedback</li>
      </ul>
    </div>
    <div class="col-lg-3 mb-5">
      <ul class="remove-bullets mt-5 text-center">
        <li class="footer-txt">Broucher</li>
        <li class="mt-3 footer-txt">Certificate</li>
        <li class="mt-3 footer-txt">Holders</li>
        <li class="mt-3 footer-txt">Whistel</li>
        <li class="mt-3 footer-txt">Blower</li>
        <li class="mt-3 footer-txt">Online Reporting Portal</li>
        <li class="mt-3 footer-txt">Terms of Use & Privacy Policy</li>
      </ul>
    </div>
    <div class="col-lg-3 mb-5">
    <div class="text-center">
      <input type="text" class="form-control mt-5" placeholder="Name">
      <input type="email" class="form-control mt-5" placeholder="Email">
      <input type="text" class="form-control mt-5" placeholder="Company">
      <button class="btn btn-footer mt-3">Subscribe</button>
    </div>
    </div>
    

<div class="d-flex footer-css-2">
  <h6 class="copyright mt-3">@ 2024 Copyright ltd</h6>
  <h6 class="footer-socials ms-auto mt-3">
    <a href=""  ><i class="bi bi-instagram ms-3"></i></a>
   <a href=""> <i class="bi bi-facebook ms-3"></i></a>
   <a href=""> <i class="bi bi-twitter-x ms-3"></i></a>
    <a href=""><i class="bi bi-linkedin ms-3"></i></a>
  </h6>
</div>

      </div>

      
    </div>

  </div>
</div>
 




<script src="../../js/main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>