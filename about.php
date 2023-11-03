<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Taichan 99 - About Us</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/office/logo3.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="img//office/logo.png" alt="Logo" width="50" height="60"  /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Taichan 99</h1>
								<h6 class="tm-site-description">tidak pedas tidak enak</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="index.php" class="tm-nav-link">Home</a></li>
								<li class="tm-nav-li"><a href="about.php" class="tm-nav-link active">About</a></li>
								<li class="tm-nav-li"><a href="contact.php" class="tm-nav-link">Contact</a></li>
								<li class="tm-nav-li"><a href="location.php" class="tm-nav-link">Location</a></li>
								<li class="tm-nav-li"><a href="Event.php" class="tm-nav-link">Event</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">About US</h2>
				<p class="col-12 text-center">Kami adalah pelopor sate taichan di Kota Solo, dengan 3 cabang yang tersebar di kota ini. Kami berkomitmen untuk menyajikan sate taichan berkualitas dengan bahan segar dan rempah-rempah pilihan. Nikmati cita rasa otentik sate taichan yang lezat. Kedai Taichan 99 siap memberikan pengalaman kuliner yang tak terlupakan untuk Anda."</p>
			</header>



			<div class="tm-container-inner tm-persons">
				

				<div class="row" id="row">
					<!-- Data akan ditampilkan di sini -->
				  </div>
				  <script src="js/axios.min.js"></script>
				<script src="js/bootstrap.bundle.min.js"></script>
				  <script>
					// Menggunakan Axios untuk mengambil data dari API
					axios.get('apiOffice.php?endpoint=founder')
					  .then(function (response) {
						var persons = response.data;
				  
						// Mendapatkan elemen kontainer untuk daftar orang
						var personList = document.getElementById('row');
				  
						// Loop melalui data dan tambahkan setiap orang ke elemen kontainer
						persons.forEach(function (person) {
						  var name = person.nama;
						  var image = 'img/office/' + person.gambar;
						  var title = person.rank;
						  var about = person.deskripsi;
						  var facebookLink = 'https://fb.com/';
						  var twitterLink = 'https://twitter.com/';
						  var instagramLink = 'https://instagram.com/';
				  
						  // Buat elemen untuk setiap orang
						  var article = document.createElement('article');
						  article.className = 'col-lg-6';
				  
						  var figure = document.createElement('figure');
						  figure.className = 'tm-person';
				  
						  var img = document.createElement('img');
						  img.src = image;
						  img.alt = 'Image';
						  img.className = 'img-fluid tm-gallery-item';
				  
						  var figcaption = document.createElement('figcaption');
						  figcaption.className = 'tm-person-description';
				  
						  var h4 = document.createElement('h4');
						  h4.className = 'tm-person-name';
						  h4.textContent = name;
				  
						  var pTitle = document.createElement('p');
						  pTitle.className = 'tm-person-title';
						  pTitle.textContent = title;
				  
						  var pAbout = document.createElement('p');
						  pAbout.className = 'tm-person-about';
						  pAbout.textContent = about;
				  
						  var socialLinks = document.createElement('div');
						  socialLinks.innerHTML = `
							<a href="${facebookLink}" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
							<a href="${twitterLink}" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
							<a href="${instagramLink}" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
						  `;
				  
						  // Menambahkan elemen-elemen ke dalam elemen kontainer orang
						  figcaption.appendChild(h4);
						  figcaption.appendChild(pTitle);
						  figcaption.appendChild(pAbout);
						  figcaption.appendChild(socialLinks);
				  
						  figure.appendChild(img);
						  figure.appendChild(figcaption);
				  
						  article.appendChild(figure);
				  
						  personList.appendChild(article);
						});
					  })
					  .catch(function (error) {
						console.error(error);
					  });
				  </script>
			</div>
			<div class="tm-container-inner tm-featured-image">
				<div class="row">
					<div class="col-12">
						<div class="placeholder-2">
							<div class="parallax-window-2" data-parallax="scroll" data-image-src="img/office/marvel.jpg"></div>		
						</div>
					</div>
				</div>
			</div>
			<div class="tm-container-inner tm-features">
				<div class="row">
					<div class="col-lg-4">
						<div class="tm-feature">
							<i class="fas fa-4x fa-pepper-hot tm-feature-icon"></i>
							<p class="tm-feature-description">Kami menggunakan cabai pilihan terbaik untuk sambal yang kami buat, memastikan rasa pedas yang autentik dan kualitas yang tak tertandingi. Kami selalu berkomitmen untuk memberikan pengalaman kuliner yang memuaskan dan memanjakan lidah Anda dengan sambal kami yang lezat. Nikmati setiap sajian dengan cita rasa yang khas, karena bagi kami, kualitas adalah segalanya.</p>
							
						</div>
					</div>
					<div class="col-lg-4">
						<div class="tm-feature">
							<i class="fas fa-4x fa-seedling tm-feature-icon"></i>
							<p class="tm-feature-description">Kami tidak hanya selektif dalam memilih cabai, tetapi juga sangat memperhatikan pemilihan sayuran terbaik. Kami selalu menghadirkan sayuran segar dan berkualitas tinggi dalam setiap hidangan kami. Dengan ini, kami berusaha memberikan rasa yang seimbang dan menyehatkan dalam setiap sajian kami. Kami yakin bahwa bahan-bahan terbaik adalah kunci kelezatan makanan kami, dan kami berkomitmen untuk memberikan kualitas terbaik kepada pelanggan kami.</p>
		
						</div>
					</div>
					<div class="col-lg-4">
						<div class="tm-feature">
							<i class="fas fa-4x fa-cocktail tm-feature-icon"></i>
							<p class="tm-feature-description"> Minuman yang kami sajikan hanya menggunakan bahan-bahan minuman terbaik untuk menciptakan minuman yang segar dan nikmat. Mulai dari kopi pilihan, teh berkualitas, hingga buah-buahan segar yang digunakan dalam minuman kami. Kami percaya bahwa minuman yang berkualitas adalah pelengkap sempurna untuk hidangan kami, dan kami berupaya untuk memberikan pengalaman minum yang istimewa kepada setiap pelanggan kami..</p>
							
						</div>
					</div>
				</div>
			</div>
			<div class="tm-container-inner tm-history">
				<div class="row">
					<div class="col-12">
						<div class="tm-history-inner">
							<img src="img/office/logo6.png" alt="Image" class="img-fluid tm-history-img"  />
							<div class="tm-history-text"> 
								<h4 class="tm-history-title">History of Taichan 99</h4>
								<p class="tm-mb-p">Taichan 99 berdiri pada tahun 2019 di Solo, Jawa Tengah, dan sejak itu telah menjadi tujuan utama bagi pencinta makanan pedas. Kami bangga atas sejarah kami dalam menyajikan hidangan taichan yang lezat dan pedas. Terus ikuti kami karena kami terus berkembang untuk memberikan pengalaman kuliner yang tak terlupakan.</p>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</main>
		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2023 AK 
           </p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
</body>
</html>