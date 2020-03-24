<?php include("link-css-boot.php"); ?>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
    <a href="/images/novo-video-dilon-web.wmv" title="Download movie">nome do filme</a>
    </div>
    <div class="carousel-item" data-interval="2000">
    <video controls autoplay >
        <source src="/images/Dillon-video.mp4" type="video/mp4">
      <object src="/images/Dillon-video.mp4" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></object>
    </video>
    </div>
    <div class="carousel-item">
    <video controls autoplay >
        <source src="/images/Dillon-video.mp4" type="video/mp4">
      <object src="/images/Dillon-video.mp4" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></object>
    </video>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>