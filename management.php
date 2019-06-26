<?php 
	$pageTitle = "Управленческие программы";
	include("includes/header.html"); ?>
<style>
	.overlay {background: rgba(0,51,153,0.8);}
	h1, h3 {font-family: 'Impact';color:#ffffff;letter-spacing: 1.5px;text-transform: uppercase;}
	.management_corp ul li {list-style: none;color:#fff;padding:15px 0px;font-size:28px;}
	.management_corp ul li::before {content: '';background: url('images/management_icon0.png') no-repeat center center /contain;width:30px;height:30px;position:absolute;margin-left:-40px;}
	.management_icon {width:80%;}
	.management_icon_p {margin-top:10px;font-weight: 800;font-size: 17px}
	.col-sm-2 {margin-top:-50px;}
	
	
.button1 {
  position: relative;
  display: inline-block;
  background: transparent;
  width: 500px;
  height: 100px;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  color: #003399;
  margin: 0px auto;
  font-family: Helvetica, Arial, sans-serif;
  box-sizing: border-box;
  outline: none;
}
.button1:before,
.button1:after {
  position: absolute;
  content: '';
  width: 500px;
  left: 0px;
  height: 48px;
  z-index: -1;
  outline: none;
}

.button1:before {
  transform: perspective(15px) rotateX(3deg);
  outline: none;
}
.button1:after {
  top: 52px;
  transform: perspective(15px) rotateX(-3deg);
  outline: none;
}

/* button1 border1 Style */

.button1.border1:before,
.button1.border1:after {
  border: 4px solid #003399;
  outline: none;
}
.button1.border1:before {
  border-bottom: none; /* to prevent the border-line showing up in the middle of the shape */
  outline: none;
}
.button1.border1:after {
  border-top: none; /* to prevent the border-line showing up in the middle of the shape */
  outline: none;
}

/* button1 hover styles */

.button1.border1:hover:before,
.button1.border1:hover:after {
  background: #003399;
  outline: none;
}
.button1.border1:hover {
  color: #fff;
  outline: none;
}
	
	
</style>

<main class="management_corp">
<div style="background:url('images/management_bg.jpg') no-repeat center center/cover;">
  <div class="overlay" style="width:50%">
	<div class="container" style="height: 500px;display: flex;align-items: center;text-align: right;justify-content: flex-end;">
			<h1 style="font-size: 60px;">Управленческие<br>программы</h1>
  </div>
</div>
</div>
<section class="container" style="padding: 60px 0px">
	<h3 style="color:#003399;margin-bottom: 50px;font-size: 40px" align="right">ПЕРЕЧЕНЬ УПРАВЛЕНЧЕСКИХ КУРСОВ</h3>
	<div class="row">
		<div class="col-md-6" align="right">
	<a href="#" class="button1 border1"><p style="padding:15px 0px;font-size: 23px">Навыки постановки целей. Технология достижения целей</p></a>
	<a href="#" class="button1 border1"><p style="padding:32px 0px;font-size: 23px">Контроль и мотивация</p></a>
	<a href="#" class="button1 border1"><p style="padding:15px 0px;font-size: 23px">Управление конфликтами и манипуляциями</p></a>
	<a href="#" class="button1 border1"><p style="padding:15px 0px;font-size: 23px">Работа в группе и<br>командная работа</p></a>
	<a href="#" class="button1 border1"><p style="padding:32px 0px;font-size: 23px">Искуство деловых переговоров</p></a>
		</div>
		
		<div class="col-md-6" align="left" style="margin:50px 0px 0px -23px;">
	<a href="#" class="button1 border1"><p style="padding:32px 0px;font-size: 23px">Навыки постановки задач</p></a>
	<a href="#" class="button1 border1"><p style="padding:15px 0px;font-size: 23px">Таймменеджмент и навыки делегирования</p></a>
	<a href="#" class="button1 border1"><p style="padding:15px 0px;font-size: 23px">Коммуникативные навыки руководителя</p></a>
	<a href="#" class="button1 border1"><p style="padding:15px 0px;font-size: 23px">Лидерство. Харизматичное лидерство</p></a>
	<a href="#" class="button1 border1"><p style="padding:15px 0px;font-size: 23px">Основы управления персоналом (для руководителей)</p></a>
		</div>
	</div>
</section>






<section>
<div style="background:url('images/management_bg2.jpg') no-repeat center center/cover;">
  <div class="overlay" style="padding: 60px 0px">
       <div class="container center">
	    <h3 style="font-size: 40px;">В результате прохождения программ</h3>
	    <p style="font-size: 20px;color:#fff;">(в зависимости от выбранных дисциплин)</p>
	    <ul>
			<li><b>Умение</b> постановки и технологии достижения целей</li>
			<li><b>Инструменты управления</b> подчиненными</li>
			<li><b>Технологии управления</b> людьми и работа в команде</li>
			<li><b>Технологии для самоорганизации</b>, таймменеджмент, делегирование</li>
			<li><b>Развитие навыков</b> постановки задач, контроля и мотивации</li>
			<li><b>Методики и практики</b> деловых коммуникаций </li>
			<li><b>Навыки работы</b> с аудиторией, публичные выступления</li>
			<li><b>Коммуникативные навыки</b> руководителя- конфликты и манипуляции</li>
			<li><b>Лидерские навыки</b></li>
			<li><b>Навыки ведения переговоров</b></li>
		</ul>
		</div>
	    </div>
    </div>
</section>
<section class="container-fluid">
	<div class="row center">		
	<div class="col-sm-5"><h3 align="right" style="color:#3d3c75;margin-top: 40px">При корпоративном обучении<br>дополнительно участники</h3>	</div>
			<div class="col-sm-2"><img class="management_icon" src="images/management_icon1.png" alt="icon1"><p class="management_icon_p">объединяются совместными переживаниями</p></div>
			<div class="col-sm-2"><img class="management_icon" src="images/management_icon2.png" alt="icon2"><p class="management_icon_p">впечатляются опытом прямого предъявления своих мыслей и чувств</p></div>
			<div class="col-sm-2"><img class="management_icon" src="images/management_icon3.png" alt="icon3"><p class="management_icon_p">заряжаются на переосмысление привычного и готовность к инновациям.</p></div>
</section>
<section class="corporate_bottom" style="color:#fff;background: #3d3c75;">
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
</main>    
<?php include("includes/footer.html"); ?>