<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
  <a href="./index.php">Головна сторінка</a>
  <a href="./ibu.php">Кубки IBU</a>
  <a href="./news.php">Останні новини</a>
  <a href="./world.php"> Кубок світу</a>
  <a href="./live.php">Прямі трансляції</a>
  <a href="./calendar.php">Сезон 2022-2023</a>
  <a href="./money.php">Спонсори</a>
  <a href="./record.php">Рекорди світу</a>
  <a href="./ukraine.php"> Збірна України</a>

</div>
<div class="header">
  <h1>biathlon.com.ua</h1>
  <h3> Все про біатлон</h3>
	<?php
		echo date('l jS \of F Y h:i:s A');
	?>
</div>
<div class="row">
  <div class="side">
      <center> <h2>  ТОП-<br>СПОРТCМЕНИ</h2> </center>
    <dl >
    <dd>Johannes Thingnes Bø</dd>
    <dd>Fillon Maillet Quentin</dd>
    <dd>Laegreid Sturla Holm</dd>
    <dd>Samuelsson Sebastian</dd>
    <dd>Christiansen Vetle Sjaastad</dd>
    <dd>Jacquelin Emilien</dd>
    <dd>Martin Ponsiluoma</dd>
    <dd>Tarjei Bø</dd>
  </dl>
  </div>
  <div class="main">
      <div class="container">
        <div class="slider">
            <div class="slider-line">
                <img src="1.png"  alt=""> 
                <img src="2.png"  alt=""> 
                <img src="3.png"  alt=""> 
                <img src="4.png"  alt=""> 
            </div>
        </div>
        <button class="slider-prev">Попередній слад</button>
        <button class="slider-next">Наступний слайд</button>
       
      </div>
      <div> <p>Біатлон — зимовий вид спорту, двоборство, що поєднує лижні перегони і стрільбу лежачи та стоячи <br> на кількох вогневих рубежах з дрібнокаліберної гвинтівки</p>
      <h2>Біатлон – це пристрасть, емоції, це родина!</h2>
  </div>
  </div>
  <div class="right">
      <center><h2>ТОП-СПОРТCМЕНКИ</h2></center>
       <dl>
    <dd>Tiril Eckhoff</dd>
    <dd>Dorothea Wierer</dd>
    <dd>Elvira Öberg</dd>
    <dd>Hanna Öberg</dd>
    <dd>Marte Olsbu Røiseland</dd>
    <dd>Yuliia Dzhima</dd>
    <dd>Ingrid Landmark Tandrevold</dd>
    <dd>Gabriela Koukalová</dd>
     </dl>
   </div>  
</div>

<h2>Коментарі</h2>
<form method="post">  
  Ім'я та прізвище: <input type="text" name="name">
  <br><br>
  Коментар: <input type="text" name="comment">
  <br><br>
  <input type="submit" name="submit" value="Надіслати">  
  <br>
</form>

<div class="comment">
   <?php 
      $file_name = "com.txt";
      include 'inputcomment.php';
	?>
	
	<?php include 'outputcomment.php';
	?>
</div>

<script src="script.js"></script>
<div class="footer">
    <h2 text-align="right">Ви можете зв'язатися з нами</h2>
  <dl>
    <dd> Instagram: harmsful </dd>
    <dd> Facebook: pancake </dd>
    <dd> +380681743410 </dd>
    <dd> ел: idon'tfunnyfunny@gmail.com </dd>
  </dl>
</div>
</body>
</html>

