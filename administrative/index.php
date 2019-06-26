<?php 
	$pageTitle = "Административные услуги";
	include("../includes/header.html"); ?>
	<style>
			.overlay {background: rgba(0,51,153,0.8);}
			h1 {font-family: 'Impact';color:#ffffff;letter-spacing: 1.5px;text-transform: uppercase;}
			.administrative h3 {font-family: 'Proxima Nova Regular';line-height: 1.2em; font-size:1.7em;}
			
.hex-image1 {
    width: 250px;
    height: 150px;
    background-size: cover;
    background-position: center center;
    position: relative;
    margin: 10px auto; /* centering */
    transform: rotate(0deg); /* need to rotation ? */
}

/* Left shape */
.hex-image1:before {
    content: "";
    position: absolute;
    left: -1px;
    width: 0;
    height: 3px;    
    border-right: 42px solid transparent;
    border-bottom: 75px solid white;
    border-top: 75px solid white;
}
/* Right shape */
.hex-image1:after {
    content: "";
    position: absolute;
    right: -1px;
    width: 0;
    height: 3px;    
    border-left: 42px solid transparent;
    border-bottom: 75px solid white;
    border-top: 75px solid white;
}	

.hex-image2 {
    width: 100%;
    height: 248px;
    background-size: cover;
    background-position: center center;
    position: relative;
    margin: 10px auto; /* centering */
    transform: rotate(0deg); /* need to rotation ? */
}

/* Left shape */
.hex-image2:before {
    content: "";
    position: absolute;
    left: -1px;
    width: 0;
    height: 3px;    
    border-right: 69px solid transparent;
    border-bottom: 124px solid white;
    border-top: 124px solid white;
}
/* Right shape */
.hex-image2:after {
    content: "";
    position: absolute;
    right: -1px;
    width: 0;
    height: 3px;    
    border-left: 69px solid transparent;
    border-bottom: 124px solid white;
    border-top: 124px solid white;
}

.hex-image3 {
    width: 100%;
    height: 150px;
    background: #ffcc66;
    background-size: cover;
    background-position: center center;
    position: relative;
    margin: 10px auto; /* centering */
    transform: rotate(0deg); /* need to rotation ? */
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 37px;
    text-align: center;
    font-family: "Proxima Nova Bold";
    line-height: 35px;
    color: #003333;
}

/* Left shape */
.hex-image3:before {
    content: "";
    position: absolute;
    left: -1px;
    width: 0;
    height: 3px;    
    border-right: 42px solid transparent;
    border-bottom: 75px solid white;
    border-top: 75px solid white;
}
/* Right shape */
.hex-image3:after {
    content: "";
    position: absolute;
    right: -1px;
    width: 0;
    height: 3px;    
    border-left: 42px solid transparent;
    border-bottom: 75px solid white;
    border-top: 75px solid white;
}

.hex-image4 {
    width: 170px;
    height: 150px;
    background: #fff;
    background-size: cover;
    background-position: center center;
    position: relative;
    margin: 10px auto; /* centering */
    transform: rotate(0deg); /* need to rotation ? */
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 50px;
    text-align: center;
    font-family: "Impact";
    line-height: 40px;
    color: #003399;
}

/* Left shape */
.hex-image4:before {
    content: "";
    position: absolute;
    left: -1px;
    width: 0;
    height: 3px;    
    border-right: 42px solid transparent;
    border-bottom: 75px solid #003399;
    border-top: 75px solid #003399;
}
/* Right shape */
.hex-image4:after {
    content: "";
    position: absolute;
    right: -1px;
    width: 0;
    height: 3px;    
    border-left: 42px solid transparent;
    border-bottom: 75px solid #003399;
    border-top: 75px solid #003399;
}


hr {
  border:none;
  border-top:4px dashed #c1c1c1;
  height:4px;
  width:100%;
  }
  
  .experience-list .col-sm-9 {display:flex;font-size: 30px;color: #fff;align-items: center;}


@media only screen and (max-width: 992px) {
	hr {display:none;}
	.experience-list .col-sm-9 {font-size: 14px;}
}
		</style>
    <main class="administrative">
    
    <div style="background:url('images/01.jpg') no-repeat center center/cover;">
  <div class="overlay" style="width:50%">
	<div class="container" style="height: 500px;display: flex;align-items: center;text-align: right;justify-content: flex-end;">
			<h1 style="font-size: 60px;">Административные<br>услуги</h1>
	  </div>
	</div>
	</div>
    
    <div class="container content">
	    <h3 class="center">Бизнес школа IDEA оказывает административные услуги
в рамках обучения и развития персонала, в результате которых Клиент получает:</h3>
    </div>
    	<div class="container">
		<div class="row imagebox">
			<div class="col-md-3"><div class="hex-image1" style="background: url('images/certified_copy.jpg') center center /cover"></div>
			<p>Качественное профессиональное обучение персонала</p></div>
			<div class="col-md-3"><div class="hex-image1" style="background: url('images/plan_copy.jpg') center center /cover"></div>
			<p>Полное исполнение плана на обучение</p></div>
			<div class="col-md-3"><div class="hex-image1" style="background: url('images/time_saver_copy.jpg') center center /cover"></div>
			<p>Оптимизация времени и концентрация
на важных вопросах</p></div>
		</div>
    	</div>
	<hr style="margin-top:-170px;margin-bottom:170px;">
	
	<div class="container">
	<div class="row" style="align-items:center">
			<div class="col-md-6"><div class="hex-image2" style="background: url('images/02.jpg') center center /110%"></div></div>
			<div class="col-md-6"><div class="hex-image3">Профессиональные преподаватели</div></div>
	</div>
	</div>
	<hr style="margin-top:-136px;margin-bottom:136px;">
	
	<div class="container">
	<div class="row" style="align-items:center">
			<div class="col-md-6"><div class="hex-image3">Профессиональные координаторы</div></div>
			<div class="col-md-6"><div class="hex-image2" style="background: url('images/03.jpg') center center /110%"></div></div>
	</div>
	</div>
	<hr style="margin-top:-136px;margin-bottom:136px;">

<div class="container">
	<div class="row" style="align-items:center">
			<div class="col-md-6"><div class="hex-image2" style="background: url('images/04.jpg') center center /110%"></div></div>
			<div class="col-md-6"><div class="hex-image3">Оборудованные учебные классы</div></div>
	</div>
	</div>
	<hr style="margin-top:-136px;margin-bottom:136px;">
	
	<div class="container">
	<div class="row" style="align-items:center">
			<div class="col-md-6"><div class="hex-image3">Размещение</div></div>
			<div class="col-md-6"><div class="hex-image2" style="background: url('images/05.jpg') center center /110%"></div></div>
	</div>
	</div>
	<hr style="margin-top:-136px;margin-bottom:136px;">

<div class="container">
	<div class="row" style="align-items:center">
			<div class="col-md-6"><div class="hex-image2" style="background: url('images/06.jpg') center center /110%"></div></div>
			<div class="col-md-6"><div class="hex-image3">Питание обучающихся</div></div>
	</div>
	</div>
	<hr style="margin-top:-136px;margin-bottom:136px;">
	
	<div class="container">
	<div class="row" style="align-items:center">
			<div class="col-md-6"><div class="hex-image3">Визовая поддержка</div></div>
			<div class="col-md-6"><div class="hex-image2" style="background: url('images/07.jpg') center center /110%"></div></div>
	</div>
	</div>
	<hr style="margin-top:-136px;margin-bottom:136px;">

<div class="container">
	<div class="row" style="align-items:center">
			<div class="col-md-6"><div class="hex-image2" style="background: url('images/08.jpg') center center /110%"></div></div>
			<div class="col-md-6"><div class="hex-image3">Организация логистики и трансферов</div></div>
	</div>
	</div>
	<hr style="margin-top:-136px;margin-bottom:136px;">
	
	<div class="container">
	<div class="row" style="align-items:center">
			<div class="col-md-6"><div class="hex-image3">Корпоративный стиль материалов</div></div>
			<div class="col-md-6"><div class="hex-image2" style="background: url('images/09.jpg') center center /110%"></div></div>
	</div>
	</div>
	<hr style="margin-top:-136px;margin-bottom:136px;">
	
	<div class="container">
	<div class="row" style="align-items:center">
			<div class="col-md-6"><div class="hex-image2" style="background: url('images/10.jpg') center center /110%"></div></div>
			<div class="col-md-6"><div class="hex-image3">Организация перевода</div></div>
	</div>
	</div>
	<hr style="margin-top:-136px;margin-bottom:136px;">
	
      <br><br>
      
    <section class="experience-list" style="background: #003399">
    <div class="container" style="padding: 50px 0px;">
	<h1 style="font-size: 50px;border-bottom: 2px #fff dashed">ОПЫТ В АДМИНИСТРИРОВАНИИ</h1>
	 <br><br>
	<div class="row">
	<div class="col-sm-3"><div class="hex-image4">200+</div></div>
	<div class="col-sm-9">организованных и проведенных программ обучения (для разных категорий от специалистов
до ТОП менеджеров</div>
	</div>
	<div class="row">
	<div class="col-sm-3"><div class="hex-image4">2000+</div></div>
	<div class="col-sm-9">человек прошли обучение</div>
	</div>
	<div class="row">
    <div class="col-sm-3"><div class="hex-image4">10+</div></div>
    <div class="col-sm-9">стран мира, в которых проведено обучение</div>
    </div>
    </div>
    </section>

         
	</main>
<section class="corporate_bottom" style="color: #fff;background: linear-gradient(to right, #012d86, #000033)">
	<div class="container">
	<div class="row justify-content-around">
		<div class="col-sm-3">
			<i class="fas fa-phone fa-lg"></i> 8(701) 888 9805
		</div>
		<div class="col-sm-3">
			<i class="fas fa-phone fa-lg"></i> 8(771) 298 7031
		</div>
		<div class="col-sm-3">
			<i class="fas fa-envelope fa-lg"></i> info@b-idea.kz
		</div>				
	</div>
	</div>
</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

<script>
    baguetteBox.run('.tz-gallery');
</script>
<?php include("../includes/footer.html"); ?>