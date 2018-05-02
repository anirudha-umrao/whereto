<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/s11.jpg" alt="" style="width: 100%; height: 600px;">
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><a href="#">Get Away On This Weekend</a></h2>
							<lable></lable>
							<h1><a href="#">HEAVEN BEACH RESORT</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/s12.jpg" alt="" style="width: 100%; height: 600px;">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Have Fun On The Beach</a></h2>
							<lable></lable>
							<h1><a href="#">HEAVEN BEACH RESORT</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/110.jpg" alt="" style="width: 100%; height: 600px;">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Get Away On This Weekend</a></h2>
							<lable></lable>
							<h1><a href="#">See it! Feel it! Love it!</a></h1>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/s15.jpg" alt="" style="width: 100%; height: 600px;">
			          <div class="caption">
			          	<div class="header-info">
							<h1><a href="#">Into the</a></h1>
							<lable></lable>
							<h2><a href="#">CRADLE OF NATURE</a></h2>
							</div>
			          </div>
			        </li>
                    <li>
			          <img src="images/sl4.jpg" alt="" style="width: 100%; height: 600px;">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Feel Safe</a></h2>
							<lable></lable>
							<h1><a href="#">During your Vacation</a></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>

</body>
</html>