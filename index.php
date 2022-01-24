
<?php 
include_once'header.php';
include_once'script.php';
include_once'include/dbin.php';

?>

<!-- hero_section -->

  <div class="heroba">

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1 class="name">This is Nahid Hasan</h1>
          <h4 class="short_d">A professional web designer and graphic designer </h4>
          <div class="b1" id="mystory"><button class="btn btn-primary ">
              <span class="spinner-grow spinner-grow-sm"></span>
              SEE MORE
            </button></div>

        </div>
      </div>


    </div>
  </div>

<!-- mystory_section -->

  <div class="container" style="margin-top: 200px">

    <div class="row">
      <div class="col-sm-1"> </div>
      <div class="col-sm-6">

        <div class="card" style="width:400px ;align-items:flex-end;">
          <img class="card-img-top " style="border: 6px solid #800982;" src="img/profile.jpg" alt="Card image">

        </div>
      </div>

      <div class="col-sm-5" style="border: 3px solid #6c1189;">

        <h1 class="name1">My Story</h1>
        <h4 class="short_d1">This is Nahid Hasan.I am a web designer and graphic designer.
          I have strong knowledge in HTML5 ,Css3, JavaScripts,
          JQuery, MySQL, Bootstrap4, OOP, Wordpress customizion. <span style="color:green; font-size:25px; ">Now,I am
            working as a graphic designer . My company name Againsost LTD.
            I also worked as web designer at Source9 it.</span>
          I have a good team and we work together.
        </h4>

        <ul>
          <li class="social-icon"><a href="facebook.com/rj.nahid.9047/" style="font-size: 50px; padding: 0px 10px;"><i
                class="fab fa-facebook"></i></a></li>
          <li class="social-icon"><a href="https://wa.me/01867694083" style="font-size: 50px; padding: 0px 10px;"><i
                class="fab fa-whatsapp"></i></a></li>
          <li class="social-icon"><a href="https://www.linkedin.com/in/nahid-hasan-84a650180"
              style="font-size: 50px; padding: 0px 10px;"><i class="fab fa-linkedin"></i></a></li>
          <li class="social-icon"><a href="" style="font-size: 50px; padding: 0px 10px;"><i
                class="fab fa-skype"></i></a></li>
        </ul>

      </div>


    </div>

  </div>


  <div class="container" id="service" style="padding-top: 90px; padding-bottom: 200px">



<!-- service_section -->
    <div class="row">
      <div class="col-md-12">
        <h1 class="name1" style="padding-bottom: 70px">Service</h1>
      </div>

    </div>

    <div class="row">
      <div class="col-md-1"></div>

      <div class="col-md-5">
        <div class="card" style=" margin-bottom: 30px;">
          <img class="card-img-top" src="img/webd.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title" style="text-align: center;">WEB DESIGN</h4>

          </div>
        </div>
      </div>

      <div class="col-md-5">
        <div class="card">
          <img class="card-img-top" src="img/b.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title" style="text-align: center;">WEB DEVELOPMENT</h4>

          </div>
        </div>
      </div>

      <div class="col-md-1"></div>
    </div>



    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-5">
        <div class="card">
          <img class="card-img-top" src="img/g.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title" style="text-align: center;">GRAPHIC DESIGN</h4>

          </div>
        </div>
      </div>

      <div class="col-md-5">
        <div class="card">
          <img class="card-img-top" src="img/seo.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title" style="text-align: center;">SEO</h4>
            <div class="col-md-1"></div>
          </div>
        </div>
      </div>
    </div>

  </div>

<!-- Skill_section -->
  <div class="container" style="margin-top: -100px;">
    <div class="row">
      <div class="col-md-12">
        <h1 class="name1" id="skill">Skill</h1>
      </div>
    </div>
  </div>


  <div class="container">

    <h4>WEB DESIGN</h4>
    <div class="progress">

      <div class="progress-bar bg-success" style="width:95%;"></div>
    </div><br>

    <h4>WEB DEVELOPMENT</h4>
    <div class="progress">
      <div class="progress-bar bg-info" style="width:80%"></div>
    </div><br>

    <h4>GRAPHIC DESIGN</h4>
    <div class="progress">
      <div class="progress-bar bg-warning" style="width:98%"></div>
    </div><br>

    <h4>SEO</h4>
    <div class="progress">
      <div class="progress-bar bg-danger" style="width:70%"></div>
    </div><br>
  </div>


<!-- contact_section -->

  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <h1 class="name1" style="padding-bottom:10px" id="contact">Contact</h1>
      </div>



    </div>

    <div class="row">

      <div class="col-md-3"></div>
      <div class="col-md-6">





        <form name="myform" action="index.html" onsubmit="return validationform()" method="post">



          <div class="form-group">
            <label for="Fname">Frist Name:</label>
            <input type="text" class="form-control" size="15" name="Fname" placeholder="Enter Frist name" id="fname">
          </div>

          <div class="lorm-group">
            <label for="Fname">Last Name:</label>
            <input type="text" class="form-control" size="15" name="Lname" placeholder="Enter last name" id="lname">
          </div>

          <div class="form-group">
            <label for="email">E-mail Address:</label>
            <input type="email" class="form-control" size="15" name="EMail" placeholder="Enter Email" id="EMail">
          </div>



          <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="number" class="form-control" size="12" name="phone" placeholder="Enter phone" id="phone">
          </div>


          <div class="form-group">
            <label for="password:">Password:</label>
            <input type="password" class="form-control" size="12" name="Password" placeholder="Enter  Password"
              id="Password">
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Your Massage</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" size="1000" name="mas"
              placeholder="Enter  Massage" rows="3"></textarea>
          </div>

          <input type="submit" class="btn btn-secondary btn-block" value="Send Massage" name="Submit" />

        </form>

      </div>

      <div class="col-md-3"></div>

    </div>



  </div>







  





<?php

include_once'fotter.php';
include_once'login.php';
?>