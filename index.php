
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="apple-mobile-web-app-capable" name="apple-mobile-web-app-capable" content="yes" > 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
    <script type="text/javascript" src="js/conversation.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700,900' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>var ml = { timelines: {}};</script>
    <style>
      body {
      font: 13px "Source Sans Pro", Arial, Helvetica, sans-serif;
      background-color: #5f9ea0;
      color: #fff;
      text-align: center;
      }
      .moving-letters {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        margin: auto;
        height: 200px;
      }

      /* Small devices (landscape phones, 576px and up) */
      @media (min-width: 576px) { 
        .form-container {
          width: 100%;
          } 
        }

      /* Medium devices (tablets, 768px and up) */
      @media (min-width: 768px) { 
      .form-container {
          width: 90%;
          }
        }

    </style>

    <title>iVAC</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <script src="js/style.js" type="text/javascript"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div id= "container"class="container-fluid">
      <!--  This is where the top section lies LOGO & QUOTE-->
      <div class="row">
        <div class="col-md-2 fl-lf">
         <img src="css/images/logo.png" alt="G.I Labs" class="logo topleft">
        </div>
        
          <div class=" col-md-10 moving-letters">
            <h1 class="ml11" style="color: white;">
              <span class="text-wrapper">
                <span class="line line1"></span>
                <span class="letters">ALEXA? SIRI? Meet OFFBEAT'S own AI assistant.</span>
              </span>
            </h1>
              <style>
                  .moving-letters
                  {
                      height: 100px;
                      width: 500px;
                      
                  }
                .ml11 {
                    
                  font-weight: 900;
                  font-size: 2.5em;
                }
                .ml11 .text-wrapper {
                  position: relative;
                  display: inline-block;
                  padding-top: 0.1em;
                  padding-right: 0.05em;
                  padding-bottom: 0.15em;
                }
                .ml11 .line {
                  opacity: 0;
                  position: absolute;
                  left: 0;
                  height: 100%;
                  width: 3px;
                  background-color: #fff;
                  transform-origin: 0 50%;
                }
                .ml11 .line1 { 
                  top: 0; 
                  left: 0;
                }
                .ml11 .letter {
                  display: inline-block;
                  line-height: 1em;
                  color: #FFF;
                }
                    
                    .moving-letters
                    {
                        top: 50px;
                        
                    }
              </style>

              <script>
              // Wrap every letter in a span
              $('.ml11 .letters').each(function(){
                $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
              });
              ml.timelines["ml11"] = anime.timeline({loop: true})
                .add({
                  targets: '.ml11 .line',
                  scaleY: [0,1],
                  opacity: [0.5,1],
                  easing: "easeOutExpo",
                  duration: 700
                })
                .add({
                  targets: '.ml11 .line',
                  translateX: [0,$(".ml11 .letters").width()],
                  easing: "easeOutExpo",
                  duration: 700,
                  delay: 100
                }).add({
                  targets: '.ml11 .letter',
                  opacity: [0,1],
                  easing: "easeOutExpo",
                  duration: 600,
                  offset: '-=775',
                  delay: function(el, i) {
                    return 34 * (i+1)
                  }
                }).add({
                  targets: '.ml11',
                  opacity: 0,
                  duration: 1000,
                  easing: "easeOutExpo",
                  delay: 1000
                });
              </script>

          </div>
      
        <div class="col-md-2 fl-rt" >
          <img src="css/images/GILabsLogo.png" class="logo topright"> 
        </div>

    </div>
    <!--    Buttons For Booking & Enquiry Forms & Events     -->
    <div class="row form-section">
      <button class="btn-shaking" onclick="displayIframe()"><span class="">Events</span></button>
      <button class="btn-shaking fl-rt" onclick="displayRegForm()"><span class="">Booking</span></button>
    </div>

       <!--  This is where the mid section lies  LEFT-RIGHT BUTTONS & CHAT-POPUP-->
    
      <!--  Left side buttons-->
      <div class="row bot-section">
        <div class="col-md-3 justify-content-start">
         <button id="btn01" class="btn-1" onclick ="openForm()">Topcat</button>
         <button id="btn02" class="btn-1" onclick ="openForm()">Bunkers</button>
         <button id="btn03" class="btn-1" onclick ="openForm()">8-Bit</button>
         <button id="btn04" class="btn-1" onclick ="openForm()">Fitness & Lifestyle</button>
         <button id="btn05" class="btn-1" onclick ="openForm()">Y-East</button>
        </div>
        
        <!--  Center Section buttons offbeat image-->

        <div class="col-md-6 justify-content-start">
          <img src="css/images/offbeat_yellow_logo.png" class="offbeat_yellow_logo">
        </div>
        
        <!--  Right side buttons-->

        <div class="col-md-3 justify-content-start">
          <button id="btn06" class="btn-2" onclick ="openForm()">Appointment</button>
          <button id="btn07" class="btn-2" onclick ="openForm()">Certification</button>
          <button id="btn08" class="btn-2" onclick ="openForm()">Emergency</button>
          <button id="btn09" class="btn-2" onclick ="openForm()">Events</button>
          <button id="btn10" class="btn-2" onclick ="openForm()">Momo-I-Am</button>
        </div>
      </div>

      

    </div><!-- /.container -->  

      <!--  Chatbox popup section   -->
      <div class="chat-popup" id="myForm">
        
          <div class="form-container">
            <div class="form-top">
              <h1 class="form-heading">AI CHATBOT</h1>
              <button type="button" id="closeButton" class="btn close" onclick="closeForm()"><b>X</b></button>  <!--btn cancel-->
            </div>
            
           <div id="response" class="response"></div>
            <input id="input" class="input" placeholder="Type message..." type="text" autofocus>
           <button id="rec" class="btn-rec">
              <b class="fa fa-microphone" aria-hidden="true">Speak</b>
              <div class="pulse-ring"></div>
            </button> 
          </div>  
      </div>

      <!--  Events Section-->

      <div class="event-section">
        
      </div>

 



<script>

    //This will open the main form
    function openForm() {
     document.getElementById("myForm").style.display = "block";
     document.getElementById('container').setAttribute('class', 'blur');
     document.getElementById("input").focus() ;
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
      document.getElementById('response').innerHTML = ' ';
      document.getElementById('container').setAttribute('class', null);
      document.getElementById("input").reset();
      if(responsiveVoice.isPlaying()) 
      {
        responsiveVoice.cancel();
      }
    }

     // for displaying the iframe
      function displayIframe() {
              document.getElementById("frame").style.display = "block";
              document.getElementByClassName("open-button").style.display = "block";
          }
      //for closing the form
      function closeFrame() {
        document.getElementById("frame").style.display = "none";
        document.getElementByClassName("open-button").style.display = "none";
      }
      // for displaying the registration form in iframe
      function displayRegForm() {
              document.getElementById("registration-form").style.display = "block";
              document.getElementByClassName("open-button").style.display = "block";
          }

      //for closing the form
      function closeRegForm() {
        document.getElementById("registration-form").style.display = "none";
        document.getElementByClassName("open-button").style.display = "none";
      }

</script>
<script type="text/javascript">
    //THIS FUNCTION REDIRECTS USER UPON INACTIVITY
        (function() {
        const idleDurationSecs = 120;    // X number of seconds
        const redirectUrl = 'https://offbeatccu.herokuapp.com/slideshow.php';  // Redirect idle users to this URL
        let idleTimeout; // variable to hold the timeout, do not modify
        const resetIdleTimeout = function() {
            // Clears the existing timeout
            if(idleTimeout) clearTimeout(idleTimeout);
            // Set a new idle timeout to load the redirectUrl after idleDurationSecs
            idleTimeout = setTimeout(() => location.href = redirectUrl, idleDurationSecs * 1000);
        };
        // Init on page load
        resetIdleTimeout();
        // Reset the idle timeout on any of the events listed below
        ['click', 'touchstart', 'mousemove','keypress'].forEach(evt => 
            document.addEventListener(evt, resetIdleTimeout, false)
        );
    })();
</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
