@extends('web.main')


@section('main-section')

<div class="hero_area">

<div class="hero_bg_box">
    <div class="bg_img_box">
      <img src="images/hero-bg.png" alt="">
    </div>
  </div>

  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Finexo
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html"> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="team.html">Team</a>
            </li>
            
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->
  <!-- slider section -->
  <section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 ">
                <div class="detail-box">
                  <h1>
                    Crypto <br>
                    Currency
                  </h1>
                  <p>
                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn1">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="images/slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 ">
                <div class="detail-box">
                  <h1>
                    Crypto <br>
                    Currency
                  </h1>
                  <p>
                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn1">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="images/slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 ">
                <div class="detail-box">
                  <h1>
                    Crypto <br>
                    Currency
                  </h1>
                  <p>
                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn1">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="images/slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel1" data-slide-to="1"></li>
        <li data-target="#customCarousel1" data-slide-to="2"></li>
      </ol>
    </div>

  </section>
  <!-- end slider section -->
</div>


<!-- service section -->

<section class="service_section layout_padding">
  <div class="service_container">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>
          Our <span>Services</span>
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
        </p>
      </div>
      <div class="row">
        <div class="col-md-4 ">
          <div class="box ">
            <div class="img-box">
              <img src="images/s1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Currency Wallet
              </h5>
              <p>
                fact that a reader will be distracted by the readable content of a page when looking at its layout.
                The
                point of using
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="box ">
            <div class="img-box">
              <img src="images/s2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Security Storage
              </h5>
              <p>
                fact that a reader will be distracted by the readable content of a page when looking at its layout.
                The
                point of using
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="box ">
            <div class="img-box">
              <img src="images/s3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Expert Support
              </h5>
              <p>
                fact that a reader will be distracted by the readable content of a page when looking at its layout.
                The
                point of using
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View All
        </a>
      </div>
    </div>
  </div>
</section>

<!-- end service section -->


<!-- about section -->

<section class="about_section layout_padding">
  <div class="container  ">
    <div class="heading_container heading_center">
      <h2>
        About <span>Us</span>
      </h2>
      <p>
        Magni quod blanditiis non minus sed aut voluptatum illum quisquam aspernatur ullam vel beatae rerum ipsum voluptatibus
      </p>
    </div>
    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="images/about-img.png" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <h3>
            We Are Finexo
          </h3>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
            in some form, by injected humour, or randomised words which don't look even slightly believable. If you
            are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
            the middle of text. All
          </p>
          <p>
            Molestiae odio earum non qui cumque provident voluptates, repellendus exercitationem, possimus at iste corrupti officiis unde alias eius ducimus reiciendis soluta eveniet. Nobis ullam ab omnis quasi expedita.
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->

<!-- why section -->

<section class="why_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Why Choose <span>Us</span>
      </h2>
    </div>
    <div class="why_container">
      <div class="box">
        <div class="img-box">
          <img src="images/w1.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Expert Management
          </h5>
          <p>
            Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
            Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
          </p>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/w2.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Secure Investment
          </h5>
          <p>
            Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
            Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
          </p>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/w3.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Instant Trading
          </h5>
          <p>
            Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
            Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
          </p>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/w4.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Happy Customers
          </h5>
          <p>
            Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
            Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
          </p>
        </div>
      </div>
    </div>
    <div class="btn-box">
      <a href="">
        Read More
      </a>
    </div>
  </div>
</section>

<!-- end why section -->

<!-- team section -->
<section class="team_section layout_padding">
  <div class="container-fluid">
    <div class="heading_container heading_center">
      <h2 class="">
        Our <span> Team</span>
      </h2>
    </div>

    <div class="team_container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/team-1.jpg" class="img1" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Joseph Brown
              </h5>
              <p>
                Marketing Head
              </p>
            </div>
            <div class="social_box">
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/team-2.jpg" class="img1" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Nancy White
              </h5>
              <p>
                Marketing Head
              </p>
            </div>
            <div class="social_box">
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/team-3.jpg" class="img1" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Earl Martinez
              </h5>
              <p>
                Marketing Head
              </p>
            </div>
            <div class="social_box">
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/team-4.jpg" class="img1" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Josephine Allard
              </h5>
              <p>
                Marketing Head
              </p>
            </div>
            <div class="social_box">
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end team section -->


<!-- client section -->

<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center psudo_white_primary mb_45">
      <h2>
        What says our <span>Customers</span>
      </h2>
    </div>
    <div class="carousel-wrap ">
      <div class="owl-carousel client_owl-carousel">
        <div class="item">
          <div class="box">
            <div class="img-box">
              <img src="images/client1.jpg" alt="" class="box-img">
            </div>
            <div class="detail-box">
              <div class="client_id">
                <div class="client_info">
                  <h6>
                    LusDen
                  </h6>
                  <p>
                    magna aliqua. Ut
                  </p>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="img-box">
              <img src="images/client2.jpg" alt="" class="box-img">
            </div>
            <div class="detail-box">
              <div class="client_id">
                <div class="client_info">
                  <h6>
                    Zen Court
                  </h6>
                  <p>
                    magna aliqua. Ut
                  </p>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="img-box">
              <img src="images/client1.jpg" alt="" class="box-img">
            </div>
            <div class="detail-box">
              <div class="client_id">
                <div class="client_info">
                  <h6>
                    LusDen
                  </h6>
                  <p>
                    magna aliqua. Ut
                  </p>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="img-box">
              <img src="images/client2.jpg" alt="" class="box-img">
            </div>
            <div class="detail-box">
              <div class="client_id">
                <div class="client_info">
                  <h6>
                    Zen Court
                  </h6>
                  <p>
                    magna aliqua. Ut
                  </p>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end client section -->


<!-- info section -->

<section class="info_section layout_padding2">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 info_col">
        <div class="info_contact">
          <h4>
            Address
          </h4>
          <div class="contact_link_box">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call +01 1234567890
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
        <div class="info_social">
          <a href="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 info_col">
        <div class="info_detail">
          <h4>
            Info
          </h4>
          <p>
            necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-2 mx-auto info_col">
        <div class="info_link_box">
          <h4>
            Links
          </h4>
          <div class="info_links">
            <a class="active" href="index.html">
              Home
            </a>
            <a class="" href="about.html">
              About
            </a>
            <a class="" href="service.html">
              Services
            </a>
            <a class="" href="why.html">
              Why Us
            </a>
            <a class="" href="team.html">
              Team
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 info_col ">
        <h4>
          Subscribe
        </h4>
        <form action="#">
          <input type="text" placeholder="Enter email" />
          <button type="submit">
            Subscribe
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- end info section -->

@endsection


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/solid.min.css">
</head>
<body>
    
<div class="container">

    <h1>Register Form</h1>
    <form action="{{url('/')}}/form" method="POST" class="form-group">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{old('name')}}">
        <span class="text-danger">
            @error('name')
                {{$message}}
            @enderror
        </span>
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="{{old('email')}}">
        <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
        </span>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" value="{{old('password')}}">
        <span class="text-danger">
            @error('password')
            {{$message}}
            @enderror
        </span>
        <br><br>
        <input type="submit" name="submit" class="btn btn-success"  value="register">

    </form>
</div> --}}


{{-- <div class="container"mt-5>
    <center>
    <h1>students records</h1>
</center>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($stddata as $value)
          <tr>
            <th scope="row">{{$value->id}}</th>
            <th scope="row">{{$value->name}}</th>
            <td>{{$value->email}}</td>
            <td>{{$value->password}}</td>
            <td><a href="{{url('/')}}/std/dlt/{{$value->id}}"><i class="fa-solid fa-xmark"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>  --}}
{{-- </body>
</html> --}}