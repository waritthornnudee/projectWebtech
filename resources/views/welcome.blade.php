<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link rel="icon" href="http://www.novelsol.com/wp-content/uploads/2014/12/flaticon-grad.png">
 <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">



    <link rel="stylesheet" href="{{ URL::asset('css/style-index.css') }}">
<title>Music School</title>
</head>
<body>
    @include('layouts._navbar')
    <div class="container">
    <!-- Slideshow -->
        <div class="row" style="overflow: hidden" id="slide">
            <div class="w3-container w3-display-container" >
                <img id="img1" ondrag="dragging(event)" ondragend="dragend(event)" onmousedown="mousedown(event)" class="mySlides" src="{{ URL::asset('img/promo/trialfree-promo.png') }}">
                  <img id="img2" ondrag="dragging(event)" ondragend="dragend(event)" onmousedown="mousedown(event)" class="mySlides" src="{{ URL::asset('img/promo/invitefriend-promo.png') }}">
                  <img id="img3" ondrag="dragging(event)" ondragend="dragend(event)" onmousedown="mousedown(event)" class="mySlides" src="{{ URL::asset('img/promo/getvoucher-promo.png') }}" >

                  <div class="w3-center w3-container w3-section w3-large w3-text-white      w3-display-bottommiddle" style="width:100%">
                    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                </div>
            </div>
        </div> <!-- End Slideshow -->


        <!-- Course -->
        <div class="row content">
        <div class="col-md-12">
            <h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 60px;margin-bottom:5rem; "> Recommended Courses</h1>
        </div>
        <div class="col-lg-4">
          <img class="rounded-circle" src="https://image.freepik.com/free-vector/guitar-flat-silhouette_23-2147495877.jpg" >
          <h2>Guitar</h2>
          <p>The guitar is a musical instrument classified as a fretted string instrument with anywhere from four to 18 strings, usually having six.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="rounded-circle" src="https://musicologielessons.com/wp-content/uploads/2014/09/1410658084_microphone_voice_record_radio_mic_speech_flat_icon_symbol-512.png">
          <h2>Singing</h2>
          <p>Singing is the act of producing musical sounds with the voice, and augments regular speech by the use of sustained tonality, rhythm, and a variety of vocal techniques. A person who sings is called a singer or vocalist.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <p class="float-right "><a href="#">See All</a></p>
          <img class="rounded-circle" src="https://cdn4.iconfinder.com/data/icons/audio-and-video/512/piano_music_classical_instrument_opera_concert_flat_icon_symbol-512.png">
          <h2>Piano</h2>
          <p>The piano is an acoustic, stringed musical instrument invented around the year 1700 (the exact year is uncertain), in which the strings are struck by hammers. </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div> <!-- End Course -->

      <hr>

      <!-- Hall of Fame -->
      <div class="row content">
      <div class="col-md-12">
        <img id="hall_of_fame" src="{{ URL::asset('img\res\index\hall_of_fame.png') }}" >
      </div>
        <div class="col-lg-4">
          <div class="embed-responsive embed-responsive-16by9">
          <iframe  src="https://www.youtube.com/embed/G4cJ4wviwS8"></iframe>
          </div>
          <h2>Guitar</h2>
          <p></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="embed-responsive embed-responsive-16by9">
          <iframe  src="https://www.youtube.com/embed/4TrDsI56i24"></iframe>
          </div>
          <h2>Singing</h2>
          <p></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe  src="https://www.youtube.com/embed/NUdlh5NYx2o"></iframe>
            </div>
          <h2>Piano</h2>
          <p></p>
        </div><!-- /.col-lg-4 -->
      </div> <!-- End Hall of fame -->

      <hr>



      <!-- Teacher -->
      <div class="row content">
      <div class="col-md-12">
        <h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 60px;"> Teacher</h1>
      </div>
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{ URL::asset('img\teacher\space.jpg') }}">
          <h2>Jakkawan</h2>
          <p>The Mask Singer Commentator</p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="rounded-circle" src="{{ URL::asset('img\teacher\fat.png') }}">
          <h2>Maneenuch</h2>
          <p>The Mask Singer Commentator</p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <p class="float-right "><a href="#">See All</a></p>
          <img class="rounded-circle" src="{{ URL::asset('img\teacher\jane.jpg') }}">
          <h2>Jannifer</h2>
          <p>The Voice Coach</p>
        </div><!-- /.col-lg-4 -->
      </div> <!-- End Teacher -->



    </div>
    @include('layouts._footer')






<script type="text/javascript">
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }
    function dragging(event){
    var x = event.clientX;
    var y = event.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";
    document.getElementById("demo").innerHTML = coor;
    }
    function dragend(event){
      var x = event.clientX;
      detectDrag(x);
    }
    function detectDrag(xUp){
      var xLength = xUp-xDown;
        if( xLength >= 100){
          //Left slide will show
          showDivs(slideIndex -= 1);
        } else {
          //Right slide will show
          showDivs(slideIndex += 1);
        }
    }
    function mousedown(e){
      xDown = e.clientX;
    }
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " w3-white";
    }
</script>
</body>
</html>
