@extends('admin.layouts.frontLayout.front_design')
@section('content')
<section class="category section bg-gray cat-secs">
  <div class="container-fluid">
    <div class="row">
      @foreach($categories as $category)
       <div class="col-lg-2 col-md-2 col-xs-12 f-category">
        <a href="#">
          <div class="icon bg-color-1">
            <i class="lni-home"></i>
          </div>
          <h3>{{$category->title}}</h3>
          <p>(4286 jobs)</p>
        </a>
      </div>
      @endforeach
      
</section>
<section class="category section bg-gray cat-sec1">
  <div class="container">
    <div class="section-header cat-head">
      <h2 class="section-title cat-title">Hot Jobs</h2>
    </div>
    <div class="row cat-row">
      <div class="col-lg-9 col-md-9 col-xs-12 f-category">
        <div class="row">
          @foreach($jobsAll as $job)
          <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
            <div class="jobs-latest">
              <div class="img-thumb">
                <img src="{{asset('public/adminpanel/uploads/job/large/'.$job->image)}}" alt="no image">
              </div>
              <div class="content">
                <h3 class="cat-h3"><a href="job-details.html">{{$job->company}}</a></h3>
                <p class="brand">{{$job->title}}</p>
                <div class="tags">
                  <span><i class="lni-map-marker"></i>{{$job->location}}</span>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          {{-- <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
            <div class="jobs-latest">
              <div class="img-thumb">
                <img src="{{asset('public/images/frontend_images/features/img4.png')}}" alt="">
              </div>
              <div class="content">
                <h3 class="cat-h3"><a href="job-details.html">Amezesoft</a></h3>
                <p class="brand">UX Designer</p>
                <div class="tags">
                  <span><i class="lni-map-marker"></i> New York</span>
                </div>
              </div>
            </div>
          </div> --}}
          <!-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Jobs By Componies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Jobs By Locations</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <img src="assets/img/features/img1.png" alt="">
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Miztrch</a></h3>
                      <p class="brand">UX Designer</p>
                      <div class="tags">
                        <span><i class="lni-map-marker"></i> New York</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <img src="assets/img/features/img2.png')}}" alt="">
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Hunter Inc.</a></h3>
                      <p class="brand">UI Designer</p>
                      <div class="tags">
                        <span><i class="lni-map-marker"></i> New York</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <img src="assets/img/features/img3.png')}}" alt="">
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Meganims</a></h3>
                      <p class="brand">Web Developer</p>
                      <div class="tags">
                        <span><i class="lni-map-marker"></i> New York</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <img src="assets/img/features/img4.png')}}" alt="">
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Amezesoft</a></h3>
                      <p class="brand">UX Designer</p>
                      <div class="tags">
                        <span><i class="lni-map-marker"></i> New York</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <img src="assets/img/features/img5.png')}}" alt="">
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Bingo</a></h3>
                      <p class="brand">Digital Marketer</p>
                      <div class="tags">
                        <span><i class="lni-map-marker"></i> New York</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <img src="assets/img/features/img6.png')}}" alt="">
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Magnews</a></h3>
                      <p class="brand">Web Developer</p>
                      <div class="tags">
                        <span><i class="lni-map-marker"></i> New York</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <img src="assets/img/features/img1.png')}}" alt="">
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Miztrch</a></h3>
                      <p class="brand">UX Designer</p>
                      <div class="tags">
                        <span><i class="lni-map-marker"></i> New York</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <img src="assets/img/features/img2.png')}}" alt="">
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Hunter Inc.</a></h3>
                      <p class="brand">UI Designer</p>
                      <div class="tags">
                        <span><i class="lni-map-marker"></i> New York</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <img src="assets/img/features/img3.png')}}" alt="">
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Meganims</a></h3>
                      <p class="brand">Web Developer</p>
                      <div class="tags">
                        <span><i class="lni-map-marker"></i> New York</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <img src="assets/img/features/img4.png')}}" alt="">
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Amezesoft</a></h3>
                      <p class="brand">UX Designer</p>
                      <div class="tags">
                        <span><i class="lni-map-marker"></i> New York</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <img src="assets/img/features/img5.png')}}" alt="">
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Bingo</a></h3>
                      <p class="brand">Digital Marketer</p>
                      <div class="tags">
                        <span><i class="lni-map-marker"></i> New York</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <img src="assets/img/features/img6.png')}}" alt="">
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Magnews</a></h3>
                      <p class="brand">Web Developer</p>
                      <div class="tags">
                        <span><i class="lni-map-marker"></i> New York</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 text-center mt-4">
                  <a href="job-page.html" class="btn btn-common">Browse All Jobs</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <a href="#"><i class="lni-map-marker"></i></a>
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Kathmandu</a></h3>
                      <p class="brand">UX Designer</p>
                      <p class="brand">Developers</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <a href="#"><i class="lni-map-marker"></i></a>
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Lalitpur</a></h3>
                      <p class="brand">UX Designer</p>
                      <p class="brand">Developers</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <a href="#"><i class="lni-map-marker"></i></a>
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Bhaktapur</a></h3>
                      <p class="brand">UX Designer</p>
                      <p class="brand">Developers</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <a href="#"><i class="lni-map-marker"></i></a>
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Kirtipur</a></h3>
                      <p class="brand">UX Designer</p>
                      <p class="brand">Developers</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <a href="#"><i class="lni-map-marker"></i></a>
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Dhankuta</a></h3>
                      <p class="brand">UX Designer</p>
                      <p class="brand">Developers</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <a href="#"><i class="lni-map-marker"></i></a>
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Biratnagar</a></h3>
                      <p class="brand">UX Designer</p>
                      <p class="brand">Developers</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <a href="#"><i class="lni-map-marker"></i></a>
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Kathmandu</a></h3>
                      <p class="brand">UX Designer</p>
                      <p class="brand">Developers</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <a href="#"><i class="lni-map-marker"></i></a>
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Lalitpur</a></h3>
                      <p class="brand">UX Designer</p>
                      <p class="brand">Developers</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <a href="#"><i class="lni-map-marker"></i></a>
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Bhaktapur</a></h3>
                      <p class="brand">UX Designer</p>
                      <p class="brand">Developers</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <a href="#"><i class="lni-map-marker"></i></a>
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Kirtipur</a></h3>
                      <p class="brand">UX Designer</p>
                      <p class="brand">Developers</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <a href="#"><i class="lni-map-marker"></i></a>
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Dhankuta</a></h3>
                      <p class="brand">UX Designer</p>
                      <p class="brand">Developers</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
                  <div class="jobs-latest">
                    <div class="img-thumb">
                      <a href="#"><i class="lni-map-marker"></i></a>
                    </div>
                    <div class="content">
                      <h3 class="cat-h3"><a href="job-details.html">Biratnagar</a></h3>
                      <p class="brand">UX Designer</p>
                      <p class="brand">Developers</p>
                    </div>
                  </div>
                </div> -->
                <div class="col-12 text-center mt-4 ">
                  <a href="#" class="btn btn-common ">Browse All Jobs</a>
                </div>
              <!-- </div>
            </div> -->
          </div>
        </div>
        <div class="col-lg-3 col-md-6x col-xs-12 f-category">
          <div class="row ">
            <div class="col-lg-12 col-md-12 col-xs-12 f-category cat-top">
              <div class="employ">
                <h3>Top Employers</h3>
              </div>
              <div class="employ-img">
                <ul class="list-inline list-unstyle">
                  <li class="list-inline-item">
                    <img src="{{asset('public/images/frontend_images/features/img4.png')}}" alt="">
                  </li>
                  <li class="list-inline-item">
                    <img src="{{asset('public/images/frontend_images/features/img3.png')}}" alt="">
                  </li>
                  <li class="list-inline-item">
                    <img src="{{asset('public/images/frontend_images/features/img2.png')}}" alt="">
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 f-category cat-top1">
              <div class="employ">
                <h3>Career Services</h3>
              </div>
              <div class="employ-img">
                <ul class="list-inline list-unstyle">
                  <li class=" cat-pad">
                    <a href="#"><img src="{{asset('public/images/frontend_images/resume.jpg')}}" alt=""></a>
                  </li>
                  <li class=" cat-pad">
                    <a href="#"> <img src="{{asset('public/images/frontend_images/training.jpg')}}" alt=""></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 f-category cat-imag">
              <div class="imag">
                <img src="{{asset('public/images/frontend_images/add2.jpg')}}"
              </div>
              
              <div class="imag">
                <a href="#"><img src="{{asset('public/images/frontend_images/cv.png')}}"></a>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 f-category cat-top3">
                  <div class="employ">
                    <h3>Premium Designations</h3>
                  </div>
                  <div class="cat-linkk">
                    <ul>
                      <li><a href="#">CEO Jobs</a></li>
                      <li><a href="#">CFO Jobs</a></li>
                      <li><a href="#">CMO Jobs</a></li>
                      <li><a href="#">COO Jobs</a></li>
                      <li><a href="#">CTO Jobs</a></li>
                      <li><a href="#">CMO Jobs</a></li>
                      <li><a href="#">COO Jobs</a></li>
                      <li><a href="#">Director Finance Jobs</a></li>
                      <li><a href="#">VP Business Development Jobs</a></li>
                      <li><a href="#">VP Sales &amp; Marketing Jobs</a></li>
                      <li><a href="#">VP Operations Jobs</a></li>
                      <li><a href="#">Director Finance Jobs</a></li>
                      <li><a href="#">Director Finance Jobs</a></li>
                      <li><a href="#">VP Business Development Jobs</a></li>
                      <li><a href="#">VP Sales &amp; Marketing Jobs</a></li>
                      <li><a href="#">VP Operations Jobs</a></li>
                      <li><a href="#">Director Finance Jobs</a></li>
                      <li><a href="#">VP Business Development Jobs</a></li>
                      <li><a href="#">VP Sales &amp; Marketing Jobs</a></li>
                      <li><a href="#">VP Operations Jobs</a></li>
                      <li><a href="#">Director Finance Jobs</a></li>
                      <li><a href="#">VP Business Development Jobs</a></li>
                      
                      <br>
                      <li><a href="#">View All Designation</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="imag-1">
                <a href="#"><img src="{{asset('public/images/frontend_images/add.gif')}}"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="category section bg-gray cat-sec">
    <div class="container">
      <div class="section-header cat-head">
        <h2 class="section-title cat-title">Latest Jobs</h2>
      </div>
      <div class="row cat-row">
        <div class="col-lg-9 col-md-9 col-xs-12 f-category">
          <div class="row">
            @foreach($jobsAll as $job)
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/adminpanel/uploads/job/large/'.$job->image)}}" alt="no image">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">{{$job->company}}</a></h3>
                  <p class="brand">{{$job->title}}</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i>{{$job->location}}</span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <div class="col-12 text-center mt-4 ">
              <a href="#" class="btn btn-common ">Browse All Jobs</a>
            </div>
            <!--<div class="col-12 text-center mt-4">
              <a href="job-page.html" class="btn btn-common">Browse All Jobs</a>
            </div>-->
          </div>
        </div>
        <div class="col-lg-3 col-md-6x col-xs-12 f-category ">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 f-category cat-top2">
              <div class="employ">
                <h3>Job By Categories</h3>
              </div>
              <div class="cat-linkk">
                <ul>
                  <li><a href="#">Education/Teaching/Training (186)</a></li>
                  <li><a href="#">NGO/INGO/Social Services (96)</a></li>
                  <li><a href="#">Trading/Export/Import (232)</a></li>
                  <li><a href="#">Cooperatives/Finance C..... (627)</a></li>
                  <li><a href="#">Automobile (210)</a></li>
                  <li><a href="#">FMCG/Consumer Goods (84)</a></li>
                  <br>
                  <li><a href="#">View More</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 f-category cat-top">
              <div class="imag1">
                <img src="{{asset('public/images/frontend_images/add2.jpg')}}">
              </div>
              <div class="imag1">
                <img src="{{asset('public/images/frontend_images/add1.jpg')}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 f-category cat-top">
              <div class="facebook-page">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FNepalijagir%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
            </div>
          </div>
          <div class="imag3">
            <img src="{{asset('public/images/frontend_images/add9.gif')}}">
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 f-category cat-top3">
              <div class="employ">
                <h3>Top Skills</h3>
              </div>
              <div class="cat-linkk">
                <ul>
                  <li><a href="#">CEO Jobs</a></li>
                  <li><a href="#">CFO Jobs</a></li>
                  <li><a href="#">CMO Jobs</a></li>
                  <li><a href="#">COO Jobs</a></li>
                  <li><a href="#">CTO Jobs</a></li>
                  <li><a href="#">Director Finance Jobs</a></li>
                  <li><a href="#">VP Engineering Jobs</a></li>
                  <li><a href="#">VP Marketing Jobs</a></li>
                  <li><a href="#">VP Sales Jobs</a></li>
                  <li><a href="#">VP Business Development Jobs</a></li>
                  <li><a href="#">VP Sales & Marketing Jobs</a></li>
                  <li><a href="#">VP Operations Jobs</a></li>
                  <li><a href="#">VP Operations Jobs</a></li>
                  <!-- <li><a href="#">Director Finance Jobs</a></li>
                  <li><a href="#">VP Engineering Jobs</a></li>
                  <li><a href="#">VP Marketing Jobs</a></li>
                  <li><a href="#">VP Sales Jobs</a></li> -->
                  <!-- <li><a href="#">VP Business Development Jobs</a></li>
                  <li><a href="#">VP Sales & Marketing Jobs</a></li>
                  <li><a href="#">VP Operations Jobs</a></li> -->
                  <br>
                  <li><a href="#">View All Skills</a></li>
                </ul>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <section class="category section bg-gray cat-sec">
    <div class="container">
      <div class="section-header cat-head">
        <h2 class="section-title cat-title">Available Jobs</h2>
      </div>
      <div class="row cat-row">
        <div class="col-lg-9 col-md-9 col-xs-12 f-category">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img1.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Miztrch</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img2.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Hunter Inc.</a></h3>
                  <p class="brand">UI Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img3.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Meganims</a></h3>
                  <p class="brand">Web Developer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img4.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Amezesoft</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img5.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Bingo</a></h3>
                  <p class="brand">Digital Marketer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img6.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Magnews</a></h3>
                  <p class="brand">Web Developer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img1.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Miztrch</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img2.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Hunter Inc.</a></h3>
                  <p class="brand">UI Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img3.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Meganims</a></h3>
                  <p class="brand">Web Developer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img4.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Amezesoft</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img5.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Bingo</a></h3>
                  <p class="brand">Digital Marketer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img6.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Magnews</a></h3>
                  <p class="brand">Web Developer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img1.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Miztrch</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img2.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Hunter Inc.</a></h3>
                  <p class="brand">UI Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img3.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Meganims</a></h3>
                  <p class="brand">Web Developer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img4.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Amezesoft</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img5.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Bingo</a></h3>
                  <p class="brand">Digital Marketer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img6.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Magnews</a></h3>
                  <p class="brand">Web Developer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img1.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Miztrch</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img1.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Miztrch</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img2.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Hunter Inc.</a></h3>
                  <p class="brand">UI Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img3.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Meganims</a></h3>
                  <p class="brand">Web Developer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img4.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Amezesoft</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img5.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Bingo</a></h3>
                  <p class="brand">Digital Marketer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img6.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Magnews</a></h3>
                  <p class="brand">Web Developer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img1.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Miztrch</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img1.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Miztrch</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img2.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Hunter Inc.</a></h3>
                  <p class="brand">UI Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img3.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Meganims</a></h3>
                  <p class="brand">Web Developer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img4.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Amezesoft</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img5.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Bingo</a></h3>
                  <p class="brand">Digital Marketer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img6.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Magnews</a></h3>
                  <p class="brand">Web Developer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img1.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Miztrch</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img2.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Hunter Inc.</a></h3>
                  <p class="brand">UI Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img3.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Meganims</a></h3>
                  <p class="brand">Web Developer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img4.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Amezesoft</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img1.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Miztrch</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img2.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Hunter Inc.</a></h3>
                  <p class="brand">UI Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img3.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Meganims</a></h3>
                  <p class="brand">Web Developer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 cat-mar">
              <div class="jobs-latest">
                <div class="img-thumb">
                  <img src="{{asset('public/images/frontend_images/features/img4.png')}}" alt="">
                </div>
                <div class="content">
                  <h3 class="cat-h3"><a href="job-details.html">Amezesoft</a></h3>
                  <p class="brand">UX Designer</p>
                  <div class="tags">
                    <span><i class="lni-map-marker"></i> New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 text-center mt-4 ">
              <a href="#" class="btn btn-common ">Browse All Jobs</a>
            </div>
            <!--<div class="col-12 text-center mt-4">
              <a href="job-page.html" class="btn btn-common">Browse All Jobs</a>
            </div>-->
          </div>
        </div>
        <div class="col-lg-3 col-md-6x col-xs-12 f-category ">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 f-category cat-top2">
              <div class="employ">
                <h3>Learning Cources</h3>
              </div>
              <div class="cat-linkk">
                <ul>
                  <li><a href="#">Education/Teaching/Training (186)</a></li>
                  <li><a href="#">NGO/INGO/Social Services (96)</a></li>
                  <li><a href="#">Trading/Export/Import (232)</a></li>
                  <li><a href="#">Cooperatives/Finance C..... (627)</a></li>
                  <li><a href="#">Automobile (210)</a></li>
                  <li><a href="#">FMCG/Consumer Goods (84)</a></li>
                  <li><a href="#">Education/Teaching/Training (186)</a></li>
                  <li><a href="#">NGO/INGO/Social Services (96)</a></li>
                  <li><a href="#">Trading/Export/Import (232)</a></li>
                  <li><a href="#">Cooperatives/Finance C..... (627)</a></li>
                  <li><a href="#">Automobile (210)</a></li>
                  <li><a href="#">FMCG/Consumer Goods (84)</a></li>
                  <li><a href="#">NGO/INGO/Social Services (96)</a></li>
                  
                  <br>
                  <li><a href="#">View More</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 f-category cat-top">
              <div class="imag1">
                <img src="{{asset('public/images/frontend_images/add2.jpg')}}">
              </div>
              <div class="imag1">
                <img src="{{asset('public/images/frontend_images/add1.jpg')}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 f-category cat-top3">
              <div class="employ">
                <h3>Services for Recruiters</h3>
              </div>
              <div class="cat-linkk">
                <ul class="cat-rec">
                  <li>
                    <a href="#">
                      <h6>Employer zones</h6>
                      <p>End your hunt for the perfect employee</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <h6>Search CV</h6>
                      <p>Find the right candidate</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <h6>Job Posting</h6>
                      <p>Call 1800-102-2558 for Employer products</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <h6>Campus hiring solution</h6>
                      <p>Optimize your Fresher Hiring</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <h6>Planet RMS</h6>
                      <p>Automate your end to end hiring process</p>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 f-category cat-top4">
              <div class="employ">
                <h3>Planet JobSpeak</h3>
              </div>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the  text ever since the 1500s......</p>
              <a href="#">View the latest one</a>
            </div>
          </div>
          <div class="imag3">
            <img src="{{asset('public/images/frontend_images/add9.gif')}}">
          </div>
          <!-- <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 f-category cat-top">
              <div class="facebook-page">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FNepalijagir%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
            </div>
          </div> -->
          
        </div>
      </div>
    </div>
  </section>
  <!--<section id="featured" class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Featured Jobs</h2>
        <p>Hand-picked jobs featured depending on popularity and benifits</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="job-featured">
            <div class="icon">
              <img src="{{asset('public/images/frontend_images/features/img1.png')}}" alt="">
            </div>
            <div class="content">
              <h3><a href="job-details.html">Software Engineer</a></h3>
              <p class="brand">MizTech</p>
              <div class="tags">
                <span><i class="lni-map-marker"></i> New York</span>
                <span><i class="lni-user"></i>John Smith</span>
              </div>
              <span class="full-time">Full Time</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="job-featured">
            <div class="icon">
              <img src="assets/img/features/img2.png')}}" alt="">
            </div>
            <div class="content">
              <h3><a href="job-details.html">Graphic Designer</a></h3>
              <p class="brand">Hunter Inc.</p>
              <div class="tags">
                <span><i class="lni-map-marker"></i> New York</span>
                <span><i class="lni-user"></i>John Smith</span>
              </div>
              <span class="part-time">Part Time</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="job-featured">
            <div class="icon">
              <img src="assets/img/features/img3.png')}}" alt="">
            </div>
            <div class="content">
              <h3><a href="job-details.html">Managing Director</a></h3>
              <p class="brand">MagNews</p>
              <div class="tags">
                <span><i class="lni-map-marker"></i> New York</span>
                <span><i class="lni-user"></i>John Smith</span>
              </div>
              <span class="full-time">Full Time</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="job-featured">
            <div class="icon">
              <img src="assets/img/features/img4.png')}}" alt="">
            </div>
            <div class="content">
              <h3><a href="job-details.html">Software Engineer</a></h3>
              <p class="brand">AmazeSoft</p>
              <div class="tags">
                <span><i class="lni-map-marker"></i> New York</span>
                <span><i class="lni-user"></i>John Smith</span>
              </div>
              <span class="full-time">Full Time</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="job-featured">
            <div class="icon">
              <img src="assets/img/features/img5.png')}}" alt="">
            </div>
            <div class="content">
              <h3><a href="job-details.html">Graphic Designer</a></h3>
              <p class="brand">Bingo</p>
              <div class="tags">
                <span><i class="lni-map-marker"></i> New York</span>
                <span><i class="lni-user"></i>John Smith</span>
              </div>
              <span class="part-time">Part Time</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="job-featured">
            <div class="icon">
              <img src="assets/img/features/img6.png')}}" alt="">
            </div>
            <div class="content">
              <h3><a href="job-details.html">Managing Director</a></h3>
              <p class="brand">MagNews</p>
              <div class="tags">
                <span><i class="lni-map-marker"></i> New York</span>
                <span><i class="lni-user"></i>John Smith</span>
              </div>
              <span class="full-time">Full Time</span>
            </div>
          </div>
        </div>
        <div class="col-12 text-center mt-4">
          <a href="job-page.html" class="btn btn-common">Browse All Jobs</a>
        </div>
      </div>
    </div>
  </section>
  <div id="browse-jobs" class="section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="text-wrapper">
            <div>
              <h3>7,000+ Browse Jobs</h3>
              <p>Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide. The right job is out there.</p>
              <a class="btn btn-common" href="#">Search jobs</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="img-thumb">
            <img class="img-fluid" src="assets/img/search.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  -->
  <section class="how-it-works section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">How It Works?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
      </div>
      <div class="row" id="process">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="work-process">
            <span class="process-icon">
              <i class="lni-user"></i>
            </span>
            <h4>Create an Account</h4>
            <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="work-process step-2">
            <span class="process-icon">
              <i class="lni-search"></i>
            </span>
            <h4>Search Jobs</h4>
            <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="work-process step-3">
            <span class="process-icon">
              <i class="lni-cup"></i>
            </span>
            <h4>Apply</h4>
            <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="Link section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="Link">
            <h6>Jobs By Companies</h6>
            <ul>
              <li><a href="#">Education/Teaching/Training</a></li>
              <li><a href="#">NGO/INGO/Social Services</a></li>
              <li><a href="#">Trading/Export/Import</a></li>
              <li><a href="#">Cooperatives/Finance Companies</a></li>
              <li><a href="#">Automobile</a></li>
              <li><a href="#">FMCG/Consumer Goods</a></li>
              <li><a href="#">IT-Software/Software Services</a></li>
              <li><a href="#">Remittance/Money Transfer</a></li>
              <li><a href="#">Industrial Products/Heavy Machinery</a></li>
              <li><a href="#">Banking</a></li>
            </ul>
          </div>
          <div class="Link">
            <h6>Jobs By Industries</h6>
            <ul>
              <li><a href="#">Education/Teaching/Training</a></li>
              <li><a href="#">NGO/INGO/Social Services</a></li>
              <li><a href="#">Trading/Export/Import</a></li>
              <li><a href="#">Cooperatives/Finance Companies</a></li>
              <li><a href="#">Automobile</a></li>
              <li><a href="#">FMCG/Consumer Goods</a></li>
              <li><a href="#">IT-Software/Software Services</a></li>
              <li><a href="#">Remittance/Money Transfer</a></li>
              <li><a href="#">Industrial Products/Heavy Machinery</a></li>
              <li><a href="#">Banking</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="Link">
            <h6>Jobs by Functional Area</h6>
            <ul>
              <li><a href="#">Education/Teaching/Training</a></li>
              <li><a href="#">NGO/INGO/Social Services</a></li>
              <li><a href="#">Trading/Export/Import</a></li>
              <li><a href="#">Cooperatives/Finance Companies</a></li>
              <li><a href="#">Automobile</a></li>
              <li><a href="#">FMCG/Consumer Goods</a></li>
              <li><a href="#">IT-Software/Software Services</a></li>
              <li><a href="#">Remittance/Money Transfer</a></li>
              <li><a href="#">Industrial Products/Heavy Machinery</a></li>
              <li><a href="#">Banking</a></li>
            </ul>
          </div>
          <div class="Link">
            <h6>IT Jobs</h6>
            <ul>
              <li><a href="#">Education/Teaching/Training</a></li>
              <li><a href="#">NGO/INGO/Social Services</a></li>
              <li><a href="#">Trading/Export/Import</a></li>
              <li><a href="#">Cooperatives/Finance Companies</a></li>
              <li><a href="#">Automobile</a></li>
              <li><a href="#">FMCG/Consumer Goods</a></li>
              <li><a href="#">IT-Software/Software Services</a></li>
              <li><a href="#">Remittance/Money Transfer</a></li>
              <li><a href="#">Industrial Products/Heavy Machinery</a></li>
              <li><a href="#">Banking</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="Link">
            <h6>Jobs by Location</h6>
            <ul>
              <li><a href="#">Education/Teaching/Training</a></li>
              <li><a href="#">NGO/INGO/Social Services</a></li>
              <li><a href="#">Trading/Export/Import</a></li>
              <li><a href="#">Cooperatives/Finance Companies</a></li>
              <li><a href="#">Automobile</a></li>
              <li><a href="#">FMCG/Consumer Goods</a></li>
              <li><a href="#">IT-Software/Software Services</a></li>
              <li><a href="#">Remittance/Money Transfer</a></li>
              <li><a href="#">Industrial Products/Heavy Machinery</a></li>
              <li><a href="#">Banking</a></li>
            </ul>
          </div>
          <div class="Link">
            <h6>Freshers Jobs</h6>
            <ul>
              <li><a href="#">Education/Teaching/Training</a></li>
              <li><a href="#">NGO/INGO/Social Services</a></li>
              <li><a href="#">Trading/Export/Import</a></li>
              <li><a href="#">Cooperatives/Finance Companies</a></li>
              <li><a href="#">Automobile</a></li>
              <li><a href="#">FMCG/Consumer Goods</a></li>
              <li><a href="#">IT-Software/Software Services</a></li>
              <li><a href="#">Remittance/Money Transfer</a></li>
              <li><a href="#">Industrial Products/Heavy Machinery</a></li>
              <li><a href="#">Banking</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--<section id="latest-jobs" class="section bg-gray">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Latest Jobs</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="jobs-latest">
            <div class="img-thumb">
              <img src="assets/img/features/img1.png')}}" alt="">
            </div>
            <div class="content">
              <h3><a href="job-details.html">UX Designer</a></h3>
              <p class="brand">MizTech</p>
              <div class="tags">
                <span><i class="lni-map-marker"></i> New York</span>
                <span><i class="lni-user"></i>John Smith</span>
              </div>
              <span class="full-time">Full Time</span>
            </div>
            <div class="save-icon">
              <a href="#"><i class="lni-heart-filled"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="jobs-latest">
            <div class="img-thumb">
              <img src="assets/img/features/img2.png')}}" alt="">
            </div>
            <div class="content">
              <h3><a href="job-details.html">UI Designer</a></h3>
              <p class="brand">Hunter Inc.</p>
              <div class="tags">
                <span><i class="lni-map-marker"></i> New York</span>
                <span><i class="lni-user"></i>John Smith</span>
              </div>
              <span class="part-time">Part Time</span>
            </div>
            <div class="save-icon">
              <a href="#"><i class="lni-heart-filled"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="jobs-latest">
            <div class="img-thumb">
              <img src="assets/img/features/img3.png')}}" alt="">
            </div>
            <div class="content">
              <h3><a href="job-details.html">Web Developer</a></h3>
              <p class="brand">MagNews</p>
              <div class="tags">
                <span><i class="lni-map-marker"></i> New York</span>
                <span><i class="lni-user"></i>John Smith</span>
              </div>
              <span class="full-time">Full Time</span>
            </div>
            <div class="save-icon">
              <a href="#"><i class="lni-heart-filled"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="jobs-latest">
            <div class="img-thumb">
              <img src="assets/img/features/img4.png')}}" alt="">
            </div>
            <div class="content">
              <h3><a href="job-details.html">UX Designer</a></h3>
              <p class="brand">AmazeSoft</p>
              <div class="tags">
                <span><i class="lni-map-marker"></i> New York</span>
                <span><i class="lni-user"></i>John Smith</span>
              </div>
              <span class="full-time">Full Time</span>
            </div>
            <div class="save-icon">
              <a href="#"><i class="lni-heart-filled"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="jobs-latest">
            <div class="img-thumb">
              <img src="assets/img/features/img5.png')}}" alt="">
            </div>
            <div class="content">
              <h3><a href="job-details.html">Digital Marketer</a></h3>
              <p class="brand">Bingo</p>
              <div class="tags">
                <span><i class="lni-map-marker"></i> New York</span>
                <span><i class="lni-user"></i>John Smith</span>
              </div>
              <span class="part-time">Part Time</span>
            </div>
            <div class="save-icon">
              <a href="#"><i class="lni-heart-filled"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="jobs-latest">
            <div class="img-thumb">
              <img src="assets/img/features/img6.png')}}" alt="">
            </div>
            <div class="content">
              <h3><a href="job-details.html">Web Developer</a></h3>
              <p class="brand">MagNews</p>
              <div class="tags">
                <span><i class="lni-map-marker"></i> New York</span>
                <span><i class="lni-user"></i>John Smith</span>
              </div>
              <span class="full-time">Full Time</span>
            </div>
            <div class="save-icon">
              <a href="#"><i class="lni-heart-filled"></i></a>
            </div>
          </div>
        </div>
        <div class="col-12 text-center mt-4">
          <a href="job-page.html" class="btn btn-common">Browse All Jobs</a>
        </div>
      </div>
    </div>
  </section>
  <section id="testimonial" class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Clients Review</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
          <div id="testimonials" class="touch-slider owl-carousel">
            <div class="item">
              <div class="testimonial-item">
                <div class="author">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img1.png')}}" alt="">
                  </div>
                </div>
                <div class="content-inner">
                  <p class="description">Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui.</p>
                  <div class="author-info">
                    <h2><a href="#">Jessica</a></h2>
                    <span>Senior Accountant</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-item">
                <div class="author">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img2.png')}}" alt="">
                  </div>
                </div>
                <div class="content-inner">
                  <p class="description">Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui.</p>
                  <div class="author-info">
                    <h2><a href="#">John Doe</a></h2>
                    <span>Project Menager</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-item">
                <div class="author">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img3.png')}}" alt="">
                  </div>
                </div>
                <div class="content-inner">
                  <p class="description">Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui.</p>
                  <div class="author-info">
                    <h2><a href="#">Helen</a></h2>
                    <span>Engineer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="pricing" class="section bg-gray">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Pricing Plan</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
      </div>
      <div class="row pricing-tables">
        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="pricing-table border-color-defult">
            <div class="pricing-details">
              <div class="icon">
                <i class="lni-rocket"></i>
              </div>
              <h2>Professional</h2>
              <ul>
                <li>Post 1 Job</li>
                <li>No Featured Job</li>
                <li>Edit Your Job Listing</li>
                <li>Manage Application</li>
                <li>30-day Expired</li>
              </ul>
              <div class="price"><span>$</span>0<span>/Month</span></div>
            </div>
            <div class="plan-button">
              <a href="#" class="btn btn-border">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="pricing-table pricing-active border-color-red">
            <div class="pricing-details">
              <div class="icon">
                <i class="lni-drop"></i>
              </div>
              <h2>Advance</h2>
              <ul>
                <li>Post 1 Job</li>
                <li>No Featured Job</li>
                <li>Edit Your Job Listing</li>
                <li>Manage Application</li>
                <li>30-day Expired</li>
              </ul>
              <div class="price"><span>$</span>20<span>/Month</span></div>
            </div>
            <div class="plan-button">
              <a href="#" class="btn btn-border">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="pricing-table border-color-green">
            <div class="pricing-details">
              <div class="icon">
                <i class="lni-briefcase"></i>
              </div>
              <h2>Premium</h2>
              <ul>
                <li>Post 1 Job</li>
                <li>No Featured Job</li>
                <li>Edit Your Job Listing</li>
                <li>Manage Application</li>
                <li>30-day Expired</li>
              </ul>
              <div class="price"><span>$</span>40<span>/Month</span></div>
            </div>
            <div class="plan-button">
              <a href="#" class="btn btn-border">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="blog" class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Blog Post</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
          <div class="blog-item-wrapper">
            <div class="blog-item-img">
              <a href="single-post.html">
                <img src="assets/img/blog/img1.jpg" alt="">
              </a>
            </div>
            <div class="blog-item-text">
              <h3><a href="single-post.html">Tips to write an impressive resume online for beginner</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.</p>
            </div>
            <a class="readmore" href="#">Read More</a>
          </div>
          
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
          <div class="blog-item-wrapper">
            <div class="blog-item-img">
              <a href="single-post.html">
                <img src="assets/img/blog/img2.jpg" alt="">
              </a>
            </div>
            <div class="blog-item-text">
              <h3><a href="single-post.html">Let's explore 5 cool new features in JobBoard theme</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.</p>
            </div>
            <a class="readmore" href="#">Read More</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
          <div class="blog-item-wrapper">
            <div class="blog-item-img">
              <a href="single-post.html">
                <img src="assets/img/blog/img3.jpg" alt="">
              </a>
            </div>
            <div class="blog-item-text">
              <h3><a href="single-post.html">How to convince recruiters and get your dream job</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.</p>
            </div>
            <a class="readmore" href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="download" class="section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-8 col-xs-12">
          <div class="download-wrapper">
            <div>
              <div class="download-text">
                <h4>Download Our Best Apps</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et metus effici turac fringilla lorem facilisis, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="app-button">
                <a href="#" class="btn btn-border"><i class="lni-MizTech"></i>Download <br> <span>From MizTech Store</span></a>
                <a href="#" class="btn btn-common btn-effect"><i class="lni-android"></i> Download <br> <span>From Play Store</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-4 col-xs-12">
          <div class="download-thumb">
            <img class="img-fluid" src="assets/img/app.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>  -->
@endsection