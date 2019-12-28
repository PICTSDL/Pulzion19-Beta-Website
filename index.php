<!DOCTYPE html>
<html lang="en">
<head>
  <title>PULZION 19</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="icon" href="img/1.png" type="image/x-icon"/>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src='http://code.jquery.com/jquery-1.9.1.js'></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="animate.css">
  <link rel="stylesheet" type="text/css" href="hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="select2.min.css">
  <link rel="stylesheet" type="text/css" href="util.css">
  <link rel="stylesheet" type="text/css" href="main.css">

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>




<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<script>document.documentElement.className = 'js';</script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="home-ani.css">

  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js'></script>

  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="plugins/jquery.waypoints.min.js"></script>
  <script src="plugins/jquery.counterup.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
  <script src="plugins/jquery.counterup.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  

  
  <script>

    $(document).ready(function() {

        $('.counter').counterUp({
          delay: 10,
          time: 300
        });
    });


    $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top -95
      }, 1000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
      });
    } // End if
  });
});

</script>

  <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quantico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cutive+Mono&display=swap" rel="stylesheet">

</head>

<script>

  /*PRELOADER....................................*/


  setTimeout(function(){
          $('#loading').fadeOut();
          $('.main').delay(175); 
          },2900);

  /*PRELOADER ENDS..............................*/

  

  
/*change navbar colour on scroll...................*/
/*$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > $(window).height()){
            $(".fixed-top").css({"background-color":"black"});   
        }
        else{
            $(".fixed-top").css({"background-color":"transperent"});
            $(".fixed-top").css({"text-decoration-color":" "});  
        }

    })
});
*/

//hide navbar on click
/*$('.navbar-nav>li>a').on('click', function(){
    $('.collapse').collapse('hide');
});*/

/*About us page................*/

$(document).ready(function(){

/*FILTER/CARDS PAGES JS************************************/
  var filterBtns = $('.filter-btn');
  var cards = $('.card');
  filterBtns.click(function(event){
    /*Takes care of highlighting current filter*/
    event.preventDefault();
    $('.selected').removeClass('selected');
    $(this).addClass('selected');

    /*Takes care of showing correct cards*/
    var currentFilter = $(this).attr('data-filter');
    if(currentFilter === 'all'){
      jQuery.each(cards, function(i, v){
        $(this).show();
      });
    }
    else{
      jQuery.each(cards, function(i, v){
        /*If statement checks if any of the filters are in the currentFilter*/
        if(v.getAttribute('data-filter').indexOf(currentFilter) >= 0){
          $(this).show();
        }
        else{
          $(this).hide();
        }
      });
    }
  });


  
  /*Takes care of cutting extra chars from cards*/
  var bodyText = $('.card-body');
  bodyText.each (function () {
    $(this).text( $(this).attr('data-short-text') );
  });


  /*Takes care of expanding card when more info is clicked*/
  var moreLinks = $('.more-link');

  moreLinks.click(function(event){
    var cardClicked = $(this).parents('.card');
    var textContainer = cardClicked.find('.card-text-container');
    var cardClickText = cardClicked.find('.card-body');
    var locationInfo = cardClicked.find('p.card-location');

    /*Checks to see if card is already open*/
    if($(this).html() === 'Back'){
      if($(window).width() >= 768){
        $("html, body").animate({ scrollTop: 400 }, "slow");
      }
      cardClickText.text(cardClickText.attr('data-short-text'));
      locationInfo.fadeOut('easeOutExpo');

      cardClicked.css({
        'width': '300px',
        'height' : '500px',
        'margin' : '10px',
        'display': 'inline-block'
      });
      cardClicked.find('.card-img-container').css({
        'height' : '200px'
      });
      $(this).html('More Info');
      textContainer.removeClass('expanded');
    }

    /*If it isnt open, then depending on device transform width and height or just height*/
    else{
      $(this).html('Back');
      
      cardClickText.text(cardClickText.attr('data-orig-text'));
      locationInfo.fadeIn('easeInQuint');
      var pos = cardClicked.position();

      /*If desktop*/
      if($( window ).width() >= 768){
        cardClicked.css({
          'display': 'block',
          'margin' : '0 auto',
          'width': '750px',
          'height' : '700px'
        });

        cardClicked.find('.card-img-container').css({
          'height' : '350px'
        });

        
      }
    /*If mobile*/
      else if(($( window ).width() <= 450) && ($( window ).width() > 375)){
        cardClicked.css('height', '1125px');
      }
      else if($( window ).width() <= 375 && ($( window ).width() > 360)){
        cardClicked.css('height', '1175px');
      }
      else if($( window ).width() <= 360 && ($( window ).width() >340)){
        cardClicked.css('height', '1250px');
      }
      else if($( window ).width() <= 340 && ($( window ).width() >320)){
        cardClicked.css('height', '1300px');
      }

      else{
        cardClicked.css('height', '1125px');
      }
      textContainer.addClass('expanded');
      // $("html, body").animate({ scrollTop: pos.top + 900 }, "slow");
    }
    
  });
/**/

});

/*About us ends here...............................*/

/*SPONSERS PAGE....................................*/

$('.js-tilt').tilt({
      scale: 1.1
    })

window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');

  (function ($) {
    "use strict";

    
    /*==================================================================
    [ Validate ]*/
    var name = $('.validate-input input[name="name"]');
    var email = $('.validate-input input[name="email"]');
    var message = $('.validate-input textarea[name="message"]');


    $('.validate-form').on('submit',function(){
        var check = true;

        if($(name).val().trim() == ''){
            showValidate(name);
            check=false;
        }

        if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check=false;
        }

        if($(message).val().trim() == ''){
            showValidate(message);
            check=false;
        }

        return check;
    });


    $('.validate-form .input1').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);

/*SPONSERS PAGE ENDS HERE............................*/

</script>

<script src="./script.js"></script>
<body>
  <?php
  if (isset($_REQUEST['ok'])) {
   $xml = new DOMDocument("1.0","UTF-8");
   $xml->load("b.xml");
   $xml->formatOutput = true;
  $xml->preserveWhiteSpace = true;
   $rootTag = $xml->getElementsByTagName("userinfo")->item(0);
   
   $dataTag = $xml->createElement("user");
   $aTag = $xml->createElement("name",$_REQUEST['name']);
   $bTag = $xml->createElement("email",$_REQUEST['email']);
   $gTag = $xml->createElement("message",$_REQUEST['message']);
   $dataTag->appendChild($aTag);
   $dataTag->appendChild($bTag);
   $dataTag->appendChild($gTag);
   
   $rootTag->appendChild($dataTag);
   
   $xml->save("b.xml");
  }
  ?>
  <script src="js/vendors/three.min.js"></script>
  <script src="js/vendors/perlin.js"></script>
  <script src="js/demo5.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  //Count down timer
  var deadline = new Date("August 24, 2019 5:00:00").getTime(); 
  var x = setInterval(function() { 
  var now = new Date().getTime(); 
  var t = deadline - now; 
  var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
  var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
  var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
  var seconds = Math.floor((t % (1000 * 60)) / 1000); 
  document.getElementById("demo").innerHTML = days + "d "  
  + hours + "h " + minutes + "m " + seconds + "s "; 
      if (t < 0) { 
          clearInterval(x); 
          document.getElementById("demo").innerHTML = "EXPIRED"; 
      } 
  }, 1000); 

</script>
  <div id="loading">
    <div class="container heading">
        <h1 style="color: #0ff; font-family: 'Quantico',sans-serif; font-size: 35px;"><center> THE BEST ACM STUDENT CHAPTER IN INDIA PRESENTS...</center></h1>
    </div>
</div>
<div class="main">
<nav class="navbar fixed-top navbar-expand-md navbar-dark ml-auto">
  <div class="container-fluid">
    <a href="#home" class="navbar-brand" id="home">PULZION 19</a>
    <button class="navbar-toggler ml-auto" id="nav-toggler-button" type="button" data-toggle="collapse" data-target="#mainNav">
      <span class="navbar-toggler-icon">   
        <i class="fa fa-navicon"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ml-auto">
        <li><a class="nav-item nav-link active" data-toggle="collapse" data-target=".navbar-collapse.show" href="#section0">Home</a></li>
        <li><a class="nav-item nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#aboutus">About Us</a></li>
        <li><a class="nav-item nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#events">Events</a></li>
        <li><a class="nav-item nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#sponsers">Sponsors</a></li>
        <li><a class="nav-item nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#contactus">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>


<div id="section0">
  <div class="caption">
    <div class="text">COMING SOON</div>
    <div id="demo"></div>
    <!--<div id="home">PULZION 19</div>-->
  </div>

  <div id="ui">
  <div class="ui-hud">
    <div class="border b" style="margin-top: 25px;"></div>
      
   
    <div class="border-v l">
      <div class="cap"></div>
      <div class="cap"></div>
      <div class="batt"></div>
    </div>
    <div class="border-v r">
      <div class="cap"></div>
      <div class="cap"></div>
      <div class="batt"></div>
    </div>
    <div class="circles l">
      <div class="v-center">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>
    </div>
    <div class="circles r">
      <div class="v-center">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>
    </div>
  </div>
<div id="header">
    <div class="hud-box">
            <!-- Arc Reactor -->
            <div class="scaled" style="margin-top: 55px; align: center; margin:0 auto;">

            <div id="arc_container">
              <div class="arc_reactor">
                <div class="case_container">
                  <div class="e7">
                    <div class="semi_arc_3 e5_1">
                      <div class="semi_arc_3 e5_2">
                        <div class="semi_arc_3 e5_3">
                          <div class="semi_arc_3 e5_4"></div>
                        </div>
                      </div>
                    </div>
                    <div class="core2"></div>
                  </div>
                  <ul class="marks">
                    <li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li>
                  </ul>
                </div>
              </div>
            </div>
            
          </div>
    </div>
        <a class="ui-button small" href="#essay">
        <div class="frame"></div>
        <svg class="ui-arrow" viewBox="0 0 18 9">
          <use xlink:href="#ui-arrow"></use>
        </svg></a>

<!--<div class="intro v-center">
    <div>
    <p class="typer">PULZION 2019</p>
  </div>
    </div>
  </div>-->
</div></div>
  </div>
  <!-- The canvas where ThreeJs renders the WebGL -->
  <!--<div class="content">
    <canvas id="scene"></canvas>
  </div>-->

<div class="section1" >
  <div id="aboutus">ABOUT US</div>
  <br><br>

  <div class="container content-container filter-container">
  
    <div class="row">
      <div class="col-md-1"></div>
    <div class="card col-md-5" data-filter="free">
          <div class="card-img-container" style="background: url(img/pasc-img.jpg) center center no-repeat;"></div>
          <div class="card-text-container">
            <h2 class="card-title">PASC</h2>
            <p class="card-body">
              PICT ACM Student's Chapter (PASC) is the most active ACM chapter in India. 
              #Unitedly we Succeed
              At PASC, we all work together, as a team. We take utmost efforts for the success of each and every member of PASC. We help them to achieve not only technical superiority but also bring the best out of them in Non-technical fields as well so that they become the pioneers of today's world. 
              Since, we at PASC bring our Motto into reality, last year we were honored as the BEST ACM STUDENT CHAPTER IN INDIA.<br>
            </p>
          </div>
          <div class="card-link-container">
            <a class="more-link">More Info</a>
          </div>
        </div>
        <div class="card col-md-5" data-filter="free">
          <div class="card-img-container" style="background: url(img/pulzion18-img.jpg) center center no-repeat;"></div>
          <div class="card-text-container">
            <h2 class="card-title">PULZION</h2>
            <p class="card-body">
              Pulzion is the annual technical fest organized by PICT ACM Student Chapter. Pulzion has hosted multiple events including coding competition ranging from amateur competitions two day-long as well as mock placements, business management based and quizzing events. It has become one of the most anticipated events taking place at PICT with participants from colleges all over Pune. With high aspirations, backed with sincerity and dedication, the PASC team aims to add value to the college and all the people in it.<br>
            </p>
          </div>
          <div class="card-link-container">
            <a class="more-link">More Info</a>
          </div>
        </div>
      <div class="col-md-1"></div>
    </div>  
</div>
  
  
</div>

  <div class="stat" id="stats">

            <div class="content-box">
                <div class="container">
                    <div class="row text-center">
                        
                        <div class="col-md-3">
                            <div class="stat-items">
                                <img src="img/stats/footfall.png">
                                <h2><span class="counter text-center">4000</span></h2>
                                <p>Footfall during<br> Pulzion 18</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="stat-items">
                                <img src="img/stats/event.png">
                                <h2><span class="counter text-center">13</span></h2>
                                <p>Events <br>Conducted</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="stat-items">
                                <img src="img/stats/registration.png">
                                <h2><span class="counter text-center">5000</span></h2>
                                <p>Registrations</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="stat-items">
                                <img src="img/stats/membership.png">
                                <h2><span class="counter text-center">100</span>%</h2>
                                <p>ACM Membership <br>to PASC Members</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
  </div>
</div>

<br style="size: 30px">

<div class="bgimg-1">
  <div class="img-quotes"><br>
    <span style="font-size: 90px;" >&#10078;</span>Today's science fiction is tommorrow's science fact.
  </div>
</div>

<div class="section2" >
    <div id="events">EVENTS</div><br><br>
<div class="modal fade bg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Bug Off</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        <strong><i>Truth can be found within the code!</i></strong><br>
        Bug-off is a competition where the participants are expected to remove the bugs from the given set of codes and achieve the desired output within the time limit. The participants (Team/Individual) with the maximum number of error-free codes win the contest.<br>
        Round 1:<br>
        In this round participants can Debug the bugged codes in any order.<br>
        Round 2:<br>
        Here the debugging codes in given order is mandatory. There won’t be any skips allowed.
      </div>
    </div>
  </div>
</div>
<div class="modal fade cb" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Code Buddy</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        <strong><i>Be the semicolon to your Buddy’s code!</i></strong><br>
        A coding competition based on understanding your buddy’s code and continuing his code with speed to get the desired output.<br>
        Round 1:<br>
        In this round, your team needs to code fast for 10 easy questions within 30 minutes.<br>
        Round 2:<br>
        This is a relay coding round where teams have to solve 2 different problem sets by swapping with their partner in given intervals.
      </div>
    </div>
  </div>
</div>
<div class="modal fade dq" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Data Quest</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        <strong><i> What we have is Data Glut!</i></strong><br>
        DataQuest is one of its kind data science competition taking place for first time in Pune. Participants will be tested upon their data science and machine learning skills to optimize the given metric for given dataset.
      </div>
    </div>
  </div>
</div>
<div class="modal fade eq" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>ElectroQuest</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        <strong><i>Where knowledge meets imagination!</i></strong><br>
        The first round is a treasure hunt across the campus using deductive EnTC related clues.
        The qualifying teams would be given problem statements having difficulty level according
        to the year of the participants. FE and SE/TE students would have to face simple circuit debugging and circuit building problems in the second round.
      </div>
    </div>
  </div>
</div>
<div class="modal fade jc" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Just Coding</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        <strong><i>while(!All-Clear()) try();</i></strong><br>
        Just Coding is a competition where the participants will have to write correct and efficient codes for the given set of problem statements. <br>
        Round 1:<br>
        This is a coding round where teams have to code for given problems in a limited time.<br>
        Round 2:<br>
        Qualifying teams will then have to code for the problems of higher difficulty level in a limited time.
      </div>
    </div>
  </div>
</div>
<!--<div class="modal fade wa" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Web/App Development</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        <br><strong>The integration of information, design, and technology!</strong><br>
        A platform to showcase your talent by making creative and unique websites or android applications in accordance with the provided problem statements. 
      </div>

    </div>
  </div>
</div>-->
<div class="modal fade rc" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Recode It</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        The first round is Mcq round which will be conducted on paper. The participants will be allowed to use computer to code the solution if required or they can solve it on paper.<br>
        In the second round they will be given a set of executable files. The participants can run the executables files and give custom input to see the respective output. The participants can run the files any number of times they want. From the given custom inputs by the participant they need to figure out the logic of the code of the executable file and code it.
      </div>
    </div>
  </div>
</div>
<div class="modal fade dx" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Dextrous</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        <strong><i>Show the BEST version of you!</i></strong><br>
        Dextrous provides you with a unique experience of the standard interviewing procedure comprising an Aptitude Test and a Group Discussion followed by a Personal Interview taken by renowned professionals from the industry.
        It is truly an opportunity in the form of a mock-interview before your placements.
      </div>
    </div>
  </div>
</div>
<div class="modal fade ins" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Insight</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        <strong><i>Talk with the pics!</i></strong><br>
        Are you in search of a stage for the 'writer' within you? Folks, INSIGHT is then, your apt destination. Give birth to your own piece of literature, let it be a paragraph, a short story or even a poem, relating to the displayed image. 
        Use your creativity to the fullest in this 'unique' competition and unveil the budding writer in you.
        Unfurl your imagination to the extreme and orchestrate a splendid art of writing at Insight.
      </div>
    </div>
  </div>
</div>
<div class="modal fade fd" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Fandom Quiz</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        <strong><i>Show how much of a true fan you are!</i></strong><br>
        A Pop Culture quiz competition consisting of famous fandom topics like Game of Thrones, Harry Potter, FRIENDS, Marvel and DC. The competition consists of two rounds.<br>
        Round 1:<br> A general quiz of duration 20 minutes.
        <br>Round 2:<br> Buzzer Round having direct questions as well as audio visual questions.(HP,GOT,FRIENDS). Debate(Marvel vs. DC)
      </div>
    </div>
  </div>
</div>
<div class="modal fade ps" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Photoshop Royale</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        <strong><i>Let your design speak for itself !!</i></strong><br>
        Ever wondered what kind of skill you have in the world of digital imagery?
        Ever wondered if you're the best at Image manipulation?
        Here is your chance to prove it, and take away a sweet prize while you're at it!<br>
        Introducing the "PhotoShop Royale"!<br>
        Showcase your skills in this event, by making the most creative, ingenious and meaningful poster.<br>
        The theme of the poster for first round should be the theme of Pulzion, "Time and Space "<br>
        Top 10 people will qualify for the second round, where you have to make the poster on the topic given on-the-spot. 
      </div>
    </div>
  </div>
</div>
<div class="modal fade qb" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Quiz to Bid</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        <strong><i>Go BIG or go home!!</i></strong><br>                    
        Ever dreamt of owning the perfect playing XI ?
        We've got all you cricket enthusiasts a chance to create the best team
        using strategic bidding and experience the thrill, like the IPL auction! 
        The first round will be a general quiz based on cricket. The second round of the contest will be a real-time auction.
      </div>
    </div>
  </div>
</div>
<div class="modal fade cr" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Cerebro</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        <strong><i>Be sagacious!</i></strong><br>
        <!--<i>"There's a way out of every box; a solution to every puzzle. It's just a matter of finding it."</i><br><br>-->
        Do you have the mettle to solve mind boggling questions and brain teasers?
        Cerebro presents to you a great opportunity to test your logical and analytical skills. 
        The questions here will only judge your wit. Join forces, team up with your partner and prove 
        that you're the best! No need of any "general" knowledge, all that's required is a "special" brain!
      </div>
    </div>
  </div>
</div>

<div class="modal fade eth" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Ethical Hacking</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        <strong><i>Think like a thief to safe gaurd your Data and Information!</strong></i></strong><br>          
        With great advancement, comes its negative influences. Today, in this highly technologized world, everybody faces the effect of growing number of system vulnerabilities. The Ethical Hacking Workshop, conducted by<b> CYBERCURE Solutions</b> will prepare the participants to sustain in spite of these threats by covering all topics in detail under:
      </div>

    </div>
  </div>
</div>

<div class="modal fade iot" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>IOT and Robotics</strong></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
      In today's world where "intelligence" is brought to everyday devices through <b>IoT</b> and "life" is brought to machines through <b>Robotics</b>, it becomes essential for everyone to have good knowledge of these.           
      The IoT and Robotics workshop, conducted by<b> CYBERCURE Solutions</b>
        </div>
    </div>
  </div>
</div>
  <br><br><br>
  
  <div class="event-header">TECHNICAL</div><br><br>
     <div class="tech-class"> 
    <div>
    <button type="button"  data-toggle="modal" data-target=".bg"><h3>Bug Off</h3>
    <img src="img/events/bugoff.jpg" class=" responsive" >   
    </button>   
    </div>
    
    <div>
      <button type="button"  data-toggle="modal" data-target=".cb"><h3>Code Buddy</h3>
  <img src="img/events/codebuddy.jpg" class=" responsive" >     
    </button>
    </div>
    
    <div>
      <button type="button"  data-toggle="modal" data-target=".dq" ><h3>DATAQUEST</h3>
    <img src="img/events/dataquest.jpg" class=" responsive" >
    </button>
    </div>

    <div>
    <button type="button"  data-toggle="modal" data-target=".eq" ><h3>ELECTROQUEST</h3>
   <img src="img/events/electroquest.jpg" class=" responsive">
    </button>
    </div>
 
    <div>
      <button type="button"  data-toggle="modal" data-target=".jc" ><h3>JUST CODING</h3>
    <img src="img/events/justcoding.jpg" class=" responsive">
    </button>
    </div>

    <!--<div>
      <button type="button"  data-toggle="modal" data-target=".wa" ><h3>WEB/APP.DEVELOPMENT</h3>
    <img src="img/events/webapp.jpg" class=" responsive" >   
    </button>   
    </div>-->

    <div>
      <button type="button"  data-toggle="modal" data-target=".rc" ><h3>Recode It</h3>
    <img src="img/events/recodeit.jpg" class=" responsive" >   
    </button>   
    </div>

    </div>
    <br><br><br><br>
    <div class="event-header">NON-TECHNICAL</div><br><br>
    <div class="nontech-class">

    <div>
      <button type="button"  data-toggle="modal" data-target=".dx" ><h3>DEXTROUS</h3>
    <img src="img/events/dextrous.jpg" class=" responsive" >  
    </button>   
    </div>
    
    <div>
      <button type="button"  data-toggle="modal" data-target=".ins" ><h3>INSIGHT</h3>
  <img src="img/events/insight.jpg" class=" responsive" >     
    </button>
    </div>
    
    <div>
      <button type="button"  data-toggle="modal" data-target=".fd" ><h3>FANDOM QUIZ</h3>
    <img src="img/events/fandomquiz.jpg" class=" responsive" >
    </button>
    </div>

    <div>
      <button type="button"  data-toggle="modal" data-target=".ps" ><h3>PHOTOSHOP</h3>
    <img src="img/events/psroyale.jpg" class=" responsive">
    </button>
    </div>
 
    <div>
      <button type="button"  data-toggle="modal" data-target=".qb" ><h3>QUIZ TO BID</h3>
    <img src="img/events/quiztobid.jpg" class=" responsive">
    </button>
    </div>  

    <div>
      <button type="button"  data-toggle="modal" data-target=".cr" ><h3>CEREBRO</h3>
    <img src="img/events/cerebro.jpg" class=" responsive">
    </button>
    </div>
    
    </div>
    <br><br><br><br>
    <div class="event-header">SEMINAR</div><br><br>
    <div class="seminar-class">  

     <div>
      <button type="button"  data-toggle="modal" data-target=".eth" ><h3>ETH.HACKING</h3>
    <img src="img/events/hw.jpg" class=" responsive">
    </button>
    </div> 
     
    <div>
      <button type="button"  data-toggle="modal" data-target=".iot" ><h3>IOT & ROBOTICS</h3>
    <img src="img/events/iotw.jpg" class=" responsive">
    </button>
    </div>  


    </div>
</div>

<div class="section3">
    <div id="sponsers">SPONSORS-2018</div><br><br><br>
  <div class="flex-container">
            <div class="imgs img-1">
            <div class="infos info-1">
                <h3>Title Sponsor</h3>
                <p><br><br><a href="https://www.persistent.com/" target="_blank">Persistent</a></p>
            </div>
            </div>
            <div class="imgs img-2">
            <div class="infos info-2">
                <h3>Event Sponsor</h3>
                <p><br><br><a href="https://www.tieto.com/" target="_blank">Tieto</a></p>
            </div>
            </div>
            <div class="imgs img-3">
                <div class="infos info-3">
                    <h3>Associate &nbsp Sponsor</h3>
                    <p><br><br><a href="http://monimo.in/" target="_blank">Monimo</a></p> 
                </div>
                </div>
            <div class="imgs img-4">
                <div class="infos info-4">
                    <h3>Online Ticket Partner</h3>
                    <p><br><br><a href="https://www.meraevents.com/" target="_blank">Mera Event</a></p> 
                </div>
                </div>
            <div class="imgs img-5">
                <div class="infos info-5">
                  <h3>WorkShop &nbsp Partner</h3>
                  <p><br><br><a href="https://www.cybercure.in/services/" target="_blank">Cybercure Technologies</a></p>
                </div>
              </div>
              <div class="imgs img-6">
                <div class="infos info-6">
                  <h3>Coding Partner</h3>
                  <p><br><br><a href="https://www.codingninjas.in/" target="_blank">Coding Ninja</a></p>
                </div>
              </div>
              <div class="imgs img-7">
                  <div class="infos info-7">
                      <h3>Hydration &nbsp Partner</h3>
                      <p><br><br><a href="https://www.facebook.com/permalink.php?id=897229513643746&story_fbid=2363257610374255" target="_blank">Urja</a></p> 
                   </div>
                  </div>
              <div class="imgs img-8">
                  <div class="infos info-8">
                      <h3>Refreshment Partner </h3>
                      <p><br><br><a href="https://www.swiggy.com/restaurants/twisty-potato-magarpatta-pune-110608" target="_blank">Twisty Potato</a></p> 
                   </div>
                  </div>
        </div>
</div>
<div class="bgimg-2">
  <div class="img-quotes">
    <span style="font-size: 90px;" >&#10078;</span>Technology is not just a tool. <br>It can give learners a voice that they may not have had before.
  </div>
</div>

<div class="section4">
    <div id="contactus">CONTACT US</div>
  <div class="contact1">
    <div class="container-contact1">
      <div class="contact1-pic js-tilt" data-tilt>
        <img src="index-02.png" alt="IMG">
      </div>

      <form class="contact1-form validate-form">
        <span class="contact1-form-title">
          Get in touch
        </span>

        <div class="wrap-input1 validate-input" data-validate = "Name is required">
          <input class="input1" type="text" name="name" placeholder="Name">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input class="input1" type="text" name="email" placeholder="Email">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate = "Message is required">
          <textarea class="input1" name="message" placeholder="Message"></textarea>
          <span class="shadow-input1"></span>
        </div>

        <div class="container-contact1-form-btn">
          <button class="contact1-form-btn" name="ok">
            <span>
              Submit
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="page-footer">
  <div class="footer-tab">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-4" style="line-height: 20px; margin-left: 10px; margin-right:10px;" >
          <h3>About ACM</h3><br><br>
          <p>The Association for Computing Machinery (ACM) is an international learned society for computing. It was founded in 1947, and is the world's largest scientific and educational computing society. The ACM is a non-profit professional membership group, with more than 100,000 members as of 2011. Its headquarters are in New York City.</p>                
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-4" style="margin-left: 10px; margin-right:10px; padding-bottom: 10px;">
          <h3>Contact Info</h3><br><br>
            <ul>
              <li>
                <span>
                  <div class="row">
                    <div class="col-sm-1">
                      <img src="img/location.png" height="35px" width="35px">
                    </div>
                    <div class="col-sm-11" style="line-height: 20px; padding-left: 30px;">
                      Pune Institute of Computer Technology,<br>Survey No. 27, Near Trimurti Chowk, Dhankawadi, Pune, Maharashtra 411043
                    </div>
                  </div>
                </span>
              </li><br>
              <li>
                <span>
                  <div class="row">
                    <div class="col-sm-1">
                      <img src="img/mail.png" height="20px" width="30px">
                    </div>
                    <div class="col-sm-11" style="line-height: 20px; padding-left: 30px;">
                      acm.pict@gmail.com
                    </div>
                  </div>
                </span>
              </li>
            </ul>
      </div>
      <div class="col-md-1"></div>
    </div>       
  </div>
  
  <div class="social">
    <ul class="list-unstyled list-inlined text-center">
      <li class="list-inline-item">
        <a href="https://www.instagram.com/acm.pict/"><img src="img/insta.png"></a>
      </li>
      <li class="list-inline-item">
        <a href="https://www.facebook.com/acmpict/"><img src="img/fb.png"></a>
      </li>
      <li class="list-inline-item">
        <a href="https://twitter.com/pictacm"><img src="img/twitter.png"></a>
      </li>
    </ul>

    <div class="copyright">
      <div class="container">
          <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2019 PICT ACM Student Chapter. All Rights Reserved. Designed &amp; Developed with &#x2665; by PASC Web Team</p>
              </div>
              <div class="col-md-4 text-right">
                <p><button class="btn"><a href="#section0" class="js-backtotop">Back to top</a></button></p>
              </div>
          </div>
      </div>
    </div>

</div>
<script>
  AOS.init();
</script>
</body>
</html>
