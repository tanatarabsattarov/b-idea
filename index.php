<?php 
	$pageTitle = "Главная страница";
	include("includes/header.html"); ?>
    <main class="homepage">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
   	        </ol>

        <div class="carousel-inner">

          <div class="carousel-item active">
			<div class="corporate corporatebanner">
			  <div class="overlay" style="height:550px;">
				<h1 class="center" style="padding-top: 200px">Корпоративное обучение</h1>
			  </div>
			</div>
          </div>

          <div class="carousel-item" style="background:url('images/adm_service.jpg') repeat center bottom/cover"> 
          </div>
          
         <div class="carousel-item" style="background:url('images/management_bg.jpg') repeat center center/cover;padding: 0;">
		  <div class="overlay" style="width:50%;background: rgba(0,51,153,0.8);">
			<div class="container" style="height: 550px;display: flex;align-items: center;text-align: right;justify-content: flex-end;">
					<h1 style="font-size: 60px;font-family: 'Impact';color:#ffffff;letter-spacing: 1.5px;text-transform: uppercase;">Управленческие<br>программы</h1>
		  	</div>
		  </div>

          </div>
          
       
        </div>
       <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


<div class="block-page menu-types">
<div class="menu-types__item"><a href="team.php" class="menu-types__link">Командообразование</a></div>
<div class="menu-types__item"><a href="effective_communications.php" class="menu-types__link">Навыки эффективных коммуникаций</a></div>
<div class="menu-types__item"><a href="management.php" class="menu-types__link">Управленческие</a></div>
<div class="menu-types__item"><a href="hr.php" class="menu-types__link">HR</a></div>
<div class="menu-types__item"><a href="#" class="menu-types__link">Трудовое право</a></div>
</div>
<section class="program grey" style="margin-top:80px;">
<div class="container">
	<h2 id="comming_soon">Ближайшие Программы</h2>
		
	
		<div class="row">
		<div class="col-md-3">
		<a href="vahta_gileva.php" class="program-announce__img-container" style="background-size:60%;background-position:top right;background-image:url(../images/gileva.jpg);">
			<div class="program-announce__date">
				<div class="program-announce__day">15</div>
				<div class="program-announce__mounth">апреля</div>
			</div>
		</a>
		</div><!-- end col-md-3 -->
		<div class="col-md-7">
		<a class="program-announce__middle" href="vahta_gileva.php">
			<div class="program-announce__speaker">
				<span class="program-announce__speaker-link">
				Гилева Наталья
				</span>
			</div>
			<div class="program-announce__city">
				<span class="text-color_brown">Актау</span>
			</div>
			<div class="program-announce__theme">
				<span class="text-color_brown">
				Семинар
				</span>
			</div>
			<div class="program-announce__name">
				<span class="js-font-size">Вахтовый метод: особенности регулирования трудовых отношений</span>
			</div>
		</a>
		</div><!-- end col-md-7 -->
		<div class="col-md-2 more_info_parent">
		<a class="more_info" href="vahta_gileva.php">Подробнее</a>
		</div><!-- end col-md-2 -->
	</div><!-- end row -->	
	
</div>
</section>
  <?php include("includes/footer.html"); ?>