

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="media/css/index.css">
    <link rel="stylesheet" href="media/css/slider.css">

   <div class="con">

    <?php require 'header.php'?>

   </div>

</head>
<body>





<div class="slid">
    <h1 style="">Welcome to Tbilisi</h1>
    <ul id="slides">

        <li class="slide showing "></li>
        <li class="slide"></li>
        <li class="slide"></li>
        <li class="slide"></li>

    </ul>


</div>


<script>
    var slides = document.querySelectorAll('#slides .slide');
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide, 5000);


    function nextSlide() {

        slides[currentSlide].className = 'slide';
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].className = 'slide showing';

        function display(imgSrc, idx) {
            mcSlides = getSlides();
            mcSlides[idx].src = imgSrc;
            imageSlider.displaySlide(idx, true, true);


        }
    }

</script>

<footer>
  <div class="info">

      <a href=""> <i id="fb" class="fa fa-2x fa-facebook-square"></i></a>
      <a href=""> <i id="ins" class="fa fa-2x fa-instagram"></i></a>
      <a href=""> <i id="goog" class="fa fa-2x fa-google-plus-square"></i></a>

      <p id="t">This is our little creation, inspired by the exquisite and cozy places of Tbilisi.<br> Get the information you need and leave a comment about the service.
         <br> Follow and contact through social media.</p>

  </div>

    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A62c98c3209bf461f1f8acbac56e422ae2f13f1466d3d51a53103d16f0c4ec2de&amp;source=constructor"
            width="100%" height="80%" frameborder="0"></iframe>
</footer>

</body>


</html>