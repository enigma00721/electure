@extends('layouts.app')
@section('title', 'E-Lecture | Welcome')

@section('content')

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- body -->
       <div class="hero-full-container background-image-container white-text-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>E-Lecture Management</h1>
          <p>A portal for all lecture file sharing</p>
          <br>
          <a href="{{ route('login') }}" class="btn btn-default btn-lg" title="">Login</a>
        </div>
      </div>
    </div>
  </div>

  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <div class="text-center">
            <h2>What is E-Learning ?</h2>
            <p>A learning system based on formalised teaching but with the help of electronic resources is known as E-learning. 
                While teaching can be based in or out of the classrooms, the use of computers and the Internet forms the major component of E-learning.
            </p>
          </div>
       </div>
      </div>
    </div>
  </div>

  <div class="section-container">
    <div class="container">
      <div class="row">      
          <div class="col-xs-12">


            <div id="carousel-example-generic" class="carousel carousel-fade slide" data-ride="carousel">
                
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img class="img-responsive" src="./assets/images/img-06.jpg" alt="First slide">
                        <div class="carousel-caption card-shadow reveal">
                          
                          <h3>Moon</h3>
                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                          </a>
                          <p>
                            Sed id tellus in risus pre
                            tium imperdiet eu lobortis dolor. Sed pellentesque, urna ac viverra lacinia, erat mauris venenatis purus, mollis egestas urna purus ac ex.
                            Aenean nunc sem, lobortis at elit non, lobortis laoreet nibh. Maecenas at mi ipsum.
                          </p>
                          
                          <p>
                            Quisque tempor, ligula pharetra luctus elementum, arcu nisl suscipit ante, pharetra commodo dui est et enim. Sed eu vestibulum elit. Donec ut libero non.
                          </p>
                          <a href="./project.html" class="btn btn-primary" title="">
                            Discover
                          </a>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="./assets/images/img-07.jpg" alt="First slide">
                        <div class="carousel-caption card-shadow reveal">

                          <h3>Lbortis</h3>
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                              <i class="fa fa-chevron-left" aria-hidden="true"></i>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                              <i class="fa fa-chevron-right" aria-hidden="true"></i>
                              <span class="sr-only">Next</span>
                            </a>
                          <p>
                            Pre id tellus in risus pre
                            tium imperdiet eu lobortis dolor. Sed pellentesque, urna ac viverra lacinia, erat mauris venenatis purus, mollis egestas urna purus ac ex.
                            Aenean nunc sem, lobortis at elit non, lobortis laoreet nibh. Maecenas at mi ipsum.
                          </p>
                          
                          <p>
                            Quisque tempor, ligula pharetra luctus elementum, arcu nisl suscipit ante, pharetra commodo dui est et enim. Sed eu vestibulum elit. Donec ut libero non.
                          </p>
                          <a href="./project.html" class="btn btn-primary" title="">
                            Discover
                          </a>
                        </div>
                    </div>
                </div>
               
            </div>

           
          </div>
          
        </div>  
      
    </div>
  </div>

  <div class="section-container">
    <div class="container text-center">
      <div class="row section-container-spacer">
        <div class="col-xs-12 col-md-12">
          <h2>Partners</h2>
          <p>Praesent at feugiat est, at faucibus ipsum. Aenean condimentum mauris vel malesuada pulvinar. <br>Vestibulum sit amet hendrerit leo, quis vehicula mi.</p>
        </div>  
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <img src="./assets/images/profil-01.jpg" alt="" class="reveal img-responsive reveal-content image-center">
          <h3>John Snow</h3>
          <h4>UX designer</h4>
          <p>Sed elementum vehicula nisl, a egestas velit rhoncus nec.Cras vel sapien tincidunt, lacinia risus vel, imperdiet neque.</p>
          <p>
            <a href="https://facebook.com/" class="social-round-icon fa-icon" title="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/" class="social-round-icon fa-icon" title="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/" class="social-round-icon fa-icon" title="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
          </p>
        </div>
       
        <div class="col-xs-12 col-md-4">
          <img src="./assets/images/profil-02.jpg" alt="" class="reveal img-responsive reveal-content image-center">
          <h3>Sansa Stark</h3>
          <h4>UI designer</h4>
          <p>Praesent at feugiat est, at faucibus ipsum. Aenean condimentum mauris vel malesuadav pulvinar. Vestibulum sit amet hendrerit leo, quis vehicula mi.</p>
          <p>
            <a href="https://facebook.com/" class="social-round-icon fa-icon" title="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/" class="social-round-icon fa-icon" title="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/" class="social-round-icon fa-icon" title="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
          </p>
        </div>
        <div class="col-xs-12 col-md-4">
          <img src="./assets/images/profil-03.jpg" alt="" class="reveal img-responsive reveal-content image-center">
          <h3>Gregor Clegane</h3>
          <h4>Developer</h4>
          <p>Busce rutrum nisi non dui placerat sodales. Vivamus feugiat rutrum malesuada. Nulla volutpat sapien ac gravida varius</p>
          <p>
            <a href="https://facebook.com/" class="social-round-icon fa-icon" title="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/" class="social-round-icon fa-icon" title="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/" class="social-round-icon fa-icon" title="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="section-container">
    <div class="container text-center">
      <div class="row section-container-spacer">
        <div class="col-xs-12 col-md-12">
          <h2 class="text-center">Customers</h2>
          <p>Praesent at feugiat est, at faucibus ipsum. Aenean condimentum mauris vel malesuada pulvinar. <br>Vestibulum sit amet hendrerit leo, quis vehicula mi.</p>
        </div>  
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <img src="./assets/images/logo-01.png" alt="" class="img-responsive reveal-content image-center">

        </div>
       
        <div class="col-xs-12 col-md-4">
          <img src="./assets/images/logo-02.png" alt="" class="img-responsive reveal-content image-center">
        </div>
        <div class="col-xs-12 col-md-4">
          <img src="./assets/images/logo-03.png" alt="" class="img-responsive reveal-content image-center">
        </div>
      </div>
    </div>
  </div>
 
 
  <div class="section-container contact-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="section-container-spacer">
            <h2 class="text-center">Get in touch</h2>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="card-container">
            <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
              <form action="" class="reveal-content">
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" rows="3" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send message</button>
                  </div>
                  <div class="col-md-5">
                    <ul class="list-unstyled address-container">
                      <li>
                        <span class="fa-icon">
                          <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                        + 33 9 07 45 12 65
                      </li>
                      <li>
                        <span class="fa-icon">
                          <i class="fa fa fa-map-o" aria-hidden="true"></i>
                        </span>
                        42 rue Moulbert 75016 Paris
                      </li>
                    </ul>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-image col-xs-12" style="background-image: url('/assets/images/img-01.jpg')">
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
        </div>
@endsection