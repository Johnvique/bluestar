@extends('layouts.main')
@section('main')
<div class="owl-carousel-wrapper">

      

    <div class="box-92819 shadow-lg">
      

        <div>
          <h1 class=" mb-3 text-black"><span style="color: blue">Get In Touch</span></a></h1>
          <p>Link up with us today to get the quality cleaning services.</p>
        </div>
      
    </div>

      <div class="ftco-cover-1" style="background-image: url('images/img4.jpg');"></div>
  </div>

  
  <div class="site-section">
    <div class="container">
      
      <div class="row">
        <div class="col-lg-8 mb-5" >
          <form>
            <div class="form-group row">
              <div class="col-md-6 mb-4 mb-lg-0">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="First name">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Email address">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <textarea name="" id="" class="form-control" placeholder="Write your message." cols="20" rows="5"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6 mr-auto">
                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5 rounded-0" value="Send Message">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4 ml-auto">
          <div class="bg-white p-3 p-md-5">
            <h3 class="heading-39291">Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block mb-3">
                <span class="d-block text-black small text-uppercase font-weight-bold">Address:</span>
                <span>Bluestar Professional Cleaners Limited,<br> P.O Box 56808-00200,<br> City Square, Nairobi.</span></li>
              <li class="d-block mb-3"><span class="d-block text-black small text-uppercase font-weight-bold">Phone:</span><span><a href="{{url('tel:+254768491983')}}">+254768491983</a></span></li>
              <li class="d-block mb-3"><span class="d-block text-black small text-uppercase font-weight-bold">Email:</span><span><a href="{{url('mailto:bluestarcleaners4@gmail.com')}}">bluestarcleaners4@gmail.com</a></span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection