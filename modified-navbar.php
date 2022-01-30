<div class="card-intro blue-gradient mb-3" style="background-image: url('https://wallpapercave.com/wp/wp5055251.jpg');">

        <div class="card-body white-text rgba-black-light text-center">

          <?php get_header(); ?>

<h1 class="text-center text-white text-uppercase" id="title"></h1>
<br>
          <script type="text/javascript">
       function getFileName(url) {
  return url.split("/").pop();
}
var url = window.location.href;
console.log(getFileName(url));
 document.getElementById('title').innerHTML=window.location.pathname.split('/').slice(-2)[0];
          

          </script>
      </div>
  </div>