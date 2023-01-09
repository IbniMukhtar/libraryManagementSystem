<!-- HEADER INCLUDED -->
<?php require_once('header.php')?> 
<div class="slideshow">
    <!-- Indicators -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
       <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
       </ol>
<div class="carousel-inner">
<img src="images/1.jpg" alt="mohin" id="slideimage">
</div>
</div>

</div>
<div class="col-sm-10"  style="margin:0 auto;width:70%;color:blue;" >
  <marquee behavior="scroll" direction="left" width="100%" >
  <h3>1.Library remains open from 10:00 a.m to 4:00 p.m.&nabla;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  2.Library Remains Open Monday to Saturday.&nabla;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  3.During Govt. Holidays library remains off&nabla;&nbsp;&nbsp;
  </h3>
  </marquee>
</div>


<script>
    var images=["images/1.jpg",
                "images/3.jpg",
                "images/4.jpeg",
                "images/5.jpeg",
                "images/6.jpeg",
                "images/7.jpeg",
                "images/8.jpeg",
                "images/9.jpg",
               "images/10.jpeg"];


    var i=0;
    function slides(){
      document.getElementById("slideimage").src=images[i];
        if(i<(images.length-1)){
			$("#myCarousel").show("");
		 i++;

		}
        else
            i=0;
    }
    setInterval(slides,3000);
</script>
<!-- FOOTER INCLUDED -->

<?php require_once('footer.php')?>
