<?php 
 include_once "parser.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Demo</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" 
crossorigin="anonymous">
</head>
<body>
 
  <div class = "container">
  <div class = "">
  <img src="#" class="img-fluid" alt="Responsive image">
  <video id="yohoho" data-kinopoisk="<?php echo $value ; ?>" controls> 
  <source src="//yohoho.cc/yo.mp4" type="video/mp4"> 
    </video> 
   <script src="//yohoho.cc/yo.js"></script>
    </div>
   
  </div>

</body>
</html>


<?php

curl_close($curl);
