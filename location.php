<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Taichan 99 - Location</title>
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
								<li class="tm-nav-li"><a href="about.php" class="tm-nav-link ">About</a></li>
								<li class="tm-nav-li"><a href="contact.php" class="tm-nav-link">Contact</a></li>
								<li class="tm-nav-li"><a href="contact.html" class="tm-nav-link active">Location</a></li>
								<li class="tm-nav-li"><a href="Event.php" class="tm-nav-link">Event</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Location</h2>
				<p class="col-12 text-center">Temukan Lokasi outlet Taichan 99 di dekat anda</p>
			</header>



			<div class="tm-container-inner tm-persons">
				

				<div class="row" id="row">
					<!-- Data akan ditampilkan di sini -->
				  </div>
				  <script src="js/axios.min.js"></script>
				<script src="js/bootstrap.bundle.min.js"></script>
				  <script>
					// Menggunakan Axios untuk mengambil data dari API
					axios.get('apiOffice.php?endpoint=location')
					  .then(function (response) {
						var persons = response.data;
				  
						// Mendapatkan elemen kontainer untuk daftar orang
						var personList = document.getElementById('row');
				  
						// Loop melalui data dan tambahkan setiap orang ke elemen kontainer
						persons.forEach(function (person) {
						  var name = person.nama;
						  var image = 'img/office/' + person.gambar;
						  
						  var about = person.deskripsi;
						  
				  
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
				  
						 
				  
						  var pAbout = document.createElement('p');
						  pAbout.className = 'tm-person-about';
						  pAbout.textContent = about;
				  
						  
				  
						  // Menambahkan elemen-elemen ke dalam elemen kontainer orang
						  figcaption.appendChild(h4);
						  
						  figcaption.appendChild(pAbout);
						  
				  
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
			
			<div class="tm-container-inner tm-history">
				<div class="row">
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