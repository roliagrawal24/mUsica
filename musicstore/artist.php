

<!DOCTYPE html>
<html>
<head>
<title>Music store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	.mySlides {display:none;}
		h1 { font-size: 60px;}
		header
		{
			background-color:#DB7093;
			font-size:"50px";
		}

		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}

		li {
			float: left;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li a:hover {
			background-color: #111;
		}
* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}



.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */


/* Clear floats after rows */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body bgcolor="#F0F8FF">
	<div class="container">
	<header>
		<h1>
			<center>MUSIC STORE</center>
		</h1>
		</header>

		<ul>
		  <li><a class="active" href="http://localhost:888/database/musicstore/home.php">Home</a></li>
		  <li><a href="#artists">Artists</a></li>
		  <li><a href="http://localhost:888/database/musicstore/product.php">Products</a></li>
		  <li><a href="http://localhost:888/database/musicstore/order.php">Order now</a></li>
      <li><a href="http://localhost:888/database/musicstore/index.php">Sign Out</a></li>




		</ul>
		</div>
<center><h2>FAMOUS ARTISTS</h2></center>


<!-- MAIN (Center website) -->
<div class="main">
<!-- Portfolio Gallery Grid -->
<div class="content">
  <img src="https://orig00.deviantart.net/a755/f/2013/094/2/a/ed_sheeran_fan_art_by_jerrbuscus-d60g2cj.jpg" alt="ed" style="width:100%">
  <h3> <a href="https://www.google.co.in/search?dcr=0&source=hp&ei=b70RWrKIEIiBvwT3jar4CA&q=ed+sheeran&oq=ed+sh&gs_l=psy-ab.1.0.0i131i67k1l3j0i67k1l2j0i131k1j0i67k1l4.2140.3683.0.5634.7.6.0.0.0.0.786.1185.3-1j6-1.3.0....0...1.1.64.psy-ab..4.3.1482.6..35i39k1.298.jICbivYb6Og">ED SHEERAN</a></h3>

</div>
<div class="content">
  <img src="https://static.thenortheasttoday.com/wp-content/uploads/2016/09/d.jpg" alt="COLDPLAY" style="width:100%">
  <h3> <a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN763IN763&ei=t-AKWtWQHsrdvATxxKXoBA&q=coldplay&oq=COLD&gs_l=psy-ab.1.0.0i67k1l10.111152.115095.0.116088.5.5.0.0.0.0.358.753.0j1j1j1.3.0....0...1.1.64.psy-ab..2.3.753....0.K1aYrmEovuI">COLD PLAY</a></h3>
  <p>MEMBERS:: Chris Martin, Guy Berryman, Jonny Buckland, Will Champion.</p>
  </div>
<div class="content">
  <img src="C:\Users\dell\Desktop\new music\HPpic\idf.jpg" alt="imaginedragons" style="width:100%">
  <h3> <a href="C:\Users\dell\Desktop\new music\Artists\cartoon-kids-music-keyboard-eps-22779497.jpg">IMAGINE DRAGONS</a></h3>
  <p>MEMBERS: Dan Reynolds, Daniel Wayne Sermon.</p>

</div>
<div class="content">
  <img src="C:\Users\dell\Desktop\new music\HPpic\op.jpg" alt="onerepublic" style="width:100%">
  <h3> <a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN763IN763&ei=_eEKWq_kDMGLvQTAk6wI&q=one+republic&oq=one+re&gs_l=psy-ab.1.0.0i67k1l5j0i10i67k1j0i67k1j0i10i67k1j0i67k1l2.25121.27389.0.28354.6.6.0.0.0.0.384.687.3-2.2.0....0...1.1.64.psy-ab..4.2.687...0i10k1.0.nUhfzX3isNE">ONE REPUBLIC</a></h3>
  <p>MEMBERS: Ryan Tedder, Brent Kutzle, Zach Filkins, Drew Brown, Eddie Fisher, Tim Myers, Jerrod Bettis.</p>

</div>
<div class="content">
  <img src="C:\Users\dell\Desktop\new music\HPpic\exo.jpg" alt="exo" style="width:100%">
  <h3> <a href="https://www.google.co.in/search?q=exo&oq=exo&aqs=chrome.0.69i59j69i60l3j69i59l2.1602j0j1&sourceid=chrome&ie=UTF-8">EXO</a></h3>
  <p>MEMBERS:	Xiumin,Suho,Lay,Baekhyun,Chen,Chanyeol,D.O.,Kai,Sehun.</p>
  <p>FORMER MEMBERS:	Luhan,Kris,Tao.</p>
</div>
<div class="row">
  <div class="column">
    <div class="content">
      <img src="C:\Users\dell\Desktop\new music\HPpic\bts.jpg" alt="bts" style="width:100%">
      <h3><a href="https://www.google.co.in/search?q=bts&oq=bts&aqs=chrome.0.69i59j69i65j69i60j69i59l2j69i61.746j0j1&sourceid=chrome&ie=UTF-8">BTS</a></h3>
      <p>MEMBERS:	Jin,J-Hope,Rap Monster,Suga,Jimin,V,Jungkook.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="C:\Users\dell\Desktop\new music\HPpic\blackpink.jpg" alt="blackpink" style="width:100%">
      <h3><a href="https://www.google.co.in/search?ei=DtEJWsWBL8zbvASosYmYBQ&q=blackpink&oq=blackpink&gs_l=psy-ab.3..0i67k1l9j0.85168.87384.0.88731.10.10.0.0.0.0.150.1353.0j10.10.0....0...1.1.64.psy-ab..0.10.1350...0i131k1j0i131i67k1.0.-3iz3QNmeKo">BLACKPINK<a></h3>
      <p>MEMBERS:	Jisoo,Jennie,Rosé,Lisa.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="C:\Users\dell\Desktop\new music\HPpic\2PM.jpg" alt="2pm" style="width:100%">
      <h3><a href="https://www.google.co.in/search?ei=0dEJWtzsGIqDvQTY3pmoAQ&q=2pm&oq=2pm&gs_l=psy-ab.3..0j0i67k1j0l4j0i67k1j0l3.3280.6105.0.6791.7.6.1.0.0.0.137.652.0j5.5.0....0...1.1.64.psy-ab..1.6.671...0i131k1j0i10k1.0.a1QXuZzYPiI">2PM</a></h3>
      <p>MEMBERS:	Jun. K,Nichkhun,Taecyeon,Wooyoung,Junho,Chansung.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="C:\Users\dell\Desktop\new music\HPpic\got7.jpg" alt="got7" style="width:100%">
      <h3><a href="https://www.google.co.in/search?q=Got7&oq=Got7&aqs=chrome..69i57j69i65j69i59l3j69i60&sourceid=chrome&ie=UTF-8">GOT7</a></h3>
      <p>MEMBERS:	Mark,JB,Jackson,Jinyoung,Youngjae,BamBam,Yugyeom.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="C:\Users\dell\Desktop\new music\HPpic\K.A.R.D-KARD.jpg" alt="kard" style="width:100%">
     <h3><a href="https://www.google.co.in/search?q=kard&oq=kard&aqs=chrome.0.69i59j0j69i59j0l3.875j0j4&sourceid=chrome&ie=UTF-8">K.A.R.D</a></h3>
      <p>MEMBERS:	J.Seph,B.M,Somin,Jiwoo.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="C:\Users\dell\Desktop\new music\HPpic\shinhwa.jpg" alt="shinhwa" style="width:100%">
      <h3><a href="https://www.google.co.in/search?q=shinhwa&oq=shinhwa&aqs=chrome.0.69i59l3j0l3.1694j0j4&sourceid=chrome&ie=UTF-8">SHINHWA</a></h3>
      <p>MEMBERS:	Eric Mun,Lee Min-woo,Kim Dong-wan,Shin Hye-sung,Jun Jin,Andy Lee.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="C:\Users\dell\Desktop\new music\HPpic\twice.jpg" alt="twice" style="width:100%">
       <h3><a href="https://www.google.co.in/search?q=twice&oq=twice&aqs=chrome..69i57j69i59l3j69i60j0.1560j0j4&sourceid=chrome&ie=UTF-8">TWICE</a></h3>
      <p>MEMBERS:	Nayeon,Jeongyeon,Momo,Sana,Jihyo,Mina,Dahyun,Chaeyoung,Tzuyu.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="https://i.pinimg.com/736x/71/01/2a/71012a6e0b3f91a5bb1b1b4fe2024bb3--leeteuk-suju.jpg" alt="suju" style="width:100%">
        <h3><a href="https://www.google.co.in/search?ei=4NMJWsT6FIbKvgT0tzE&q=super+junior+&oq=super+junior+&gs_l=psy-ab.3..0i67k1l10.3410.4056.0.4418.5.5.0.0.0.0.136.640.0j5.5.0....0...1.1.64.psy-ab..0.5.638...0.0.cg2whYLXRY4">SUPER JUNIOR</a></h3>
      <p>MEMBERS:	Leeteuk,Heechul,Yesung,Kangin,Shindong,Sungmin,Eunhyuk,Siwon,Donghae,Ryeowook,Kyuhyun.</p>
    </div>
  </div>
    <div class="column">
    <div class="content">
    <img src="C:\Users\dell\Desktop\new music\HPpic\jazz.jpg" alt="winner" style="width:100%">
     <h3><a href="https://www.google.co.in/search?ei=O9QJWvnCIsWCvQT-36WQAg&gs_ssp=eJzj4tLP1TeoLI5PMzQHABHBAyk&q=Winner+%28band%29&oq=winner&gs_l=psy-ab.1.3.0i67k1l2j0i46i67k1j46i67k1l2j0i67k1l4j0i131k1j0i67k1l2.2229.2229.0.3935.1.1.0.0.0.0.143.143.0j1.1.0....0...1.1.64.psy-ab..0.1.143....0.dLnYqQ7dvNQ">WINNER</a></h3>
      <p>MEMBERS:Jinwoo,Seunghoon,Mino,Seungyoon.</p>
    </div>
  </div>

</div
</div>

</body>
</html>
