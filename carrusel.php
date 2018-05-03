<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<title>Carrusel</title>
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
</head>
<body>

<center>
<div class="carrusel">
    <div><img src="img/01.jpg" width="300px" height="300px"></div>
    <div><img src="img/02.jpg" width="300px" height="300px"></div>
    <div><img src="img/03.jpg" width="300px" height="300px"></div>
 </div>
 </center>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>


 <script type="text/javascript">
    $(document).ready(function(){
      $('.carrusel').slick({
          dots: true,
		  infinite: true,
		  speed: 500,
		  fade: true,
		  cssEase: 'linear',
		  autoplay: true,
		  autoplaySpeed: 4000,
      });
    });
  </script>



</body>
</html>