<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">

</head>
<body>
<ul>
  <li><a id="navHome" href="/home">Home</a></li>
  <li><a id="navAddImage" href="/add-image">Add Image</a></li>
  <li><a id="navViewImage" href="/view-image">View Image</a></li>
  <li><a id="navAddAlbum" href="/add-album">Add Album</a></li>
  <li><a id="navAdmin" href="/admin">Admin</a></li>
</ul>


@yield('content')
    <script src="../js/app.js"></script>
</body>

<footer class="myFooter" id="footer-wrapper">
<div class="footer-icons">
      <a href="https://www.pinterest.com/" class="generic-anchor" target="_blank"><i class="fa fa-pinterest"></i></a>
      <a href="https://www.facebook.com/" class="generic-anchor" target="_blank"><i class="fa fa-facebook"></i></a>
      <a href="https://twitter.com/" class="generic-anchor" target="_blank"><i class="fa fa-twitter"></i></a>
      <a href="http://instagram.com/" class="generic-anchor" target="_blank"><i class="fa fa-instagram"></i></a>
      <a href="https://www.youtube.com/" class="generic-anchor" target="_blank"><i class="fa fa-youtube"></i></a>
      <a href="https://plus.google.com/" class="generic-anchor" target="_blank" ><i class="fa fa-google-plus"></i></a>
      </div>
  </section>
  <section class="footer-bottom">
<div class="footer-bottom-wrapper">   
<i class="fa fa-copyright" role="copyright"></i> 2022 <strong>brlu</strong></a> <span class="footer-bottom-rights"> - All Rights Reserved - </span>
    </div>
  </section>
</footer>

</html>