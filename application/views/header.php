
    <div id="myCarousel" class="carousel slide " data-ride="carousel" style="margin-top: -20px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner " role="listbox">
        <div class="item active">
          <img src= "assets/images/header/h1-5.jpg" width="100%" alt="Image">
            <div class="carousel-caption">
              <?php echo label('header1',$this);?>             
            </div>  
        </div>

        <div class="item">
          <img src="assets/images/header/h1-3.png" width="100%" alt="Image">
            <div class="carousel-caption">  
              <?php echo label('header2',$this);?>
            </div>      
        </div>

        <div class="item">
          <img src="assets/images/header/h1-2.png" width="100%" alt="Image">
            <div class="carousel-caption"> 
              <?php echo label('header3',$this);?> 
            </div>      
        </div>

        <div class="item">
          <img src="assets/images/header/h1-4.png" width="100%" alt="Image">
            <div class="carousel-caption"> 
              <?php echo label('header4',$this);?> 
            </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
  </div>
  
