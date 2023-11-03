<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Taichan 99 - Tidak Pedas Tidak Enak</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>

<body> 
	
	<div class="container">
	
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
								<li class="tm-nav-li"><a href="index.php" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="about.php" class="tm-nav-link">About</a></li>
								<li class="tm-nav-li"><a href="contact.php" class="tm-nav-link">Contact</a></li>
								<li class="tm-nav-li"><a href="location.php" class="tm-nav-link">Location</a></li>
								<li class="tm-nav-li"><a href="event.php" class="tm-nav-link">Event</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">	
				<img class="col-12" src="img//office/logo2.png" alt="Logo" width="300" height="150" /> 
			</header>
			
			<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link active">Food</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Coffee</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Snack</a></li>
					</ul>
				</nav>
			</div>

			
			
			<div class=" tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-food" class="tm-gallery-page">
					<!-- Data akan ditampilkan di sini -->
				</div>

				<script src="js/axios.min.js"></script>
				<script src="js/bootstrap.bundle.min.js"></script>
				<script>
					// Menggunakan Axios untuk mengambil data dari API
					axios.get('api.php?endpoint=makanan')
					  .then(function (response) {
						var projects = response.data;
				  
						// Mendapatkan elemen kontainer galeri untuk salad
						var galleryContainerFood = document.getElementById('tm-gallery-page-food');
				  
						// Loop melalui data dan tambahkan setiap item ke elemen kontainer galeri food
						projects.forEach(function (project) {
						  var title = project.nama;
						  var image = 'img/menu/' + project.gambar; // Menambahkan direktori gambar
						  var description = project.deskripsi;
						  var price ='Rp ' + project.harga;
				  
						  // Buat elemen untuk setiap item
						  var article = document.createElement('article');
						  article.className = 'col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item';
				  
						  var figure = document.createElement('figure');
				  
						  var img = document.createElement('img');
						  img.src = image;
						  img.alt = 'Image';
						  img.className = 'img-fluid tm-gallery-img';
				  
						  var figcaption = document.createElement('figcaption');
				  
						  var h4 = document.createElement('h4');
						  h4.className = 'tm-gallery-title';
						  h4.textContent = title;
				  
						  var pDescription = document.createElement('p');
						  pDescription.className = 'tm-gallery-description';
						  pDescription.textContent = description;
				  
						  var pPrice = document.createElement('p');
						  pPrice.className = 'tm-gallery-price';
						  pPrice.textContent = price;
				  
						  // Menambahkan elemen ke dalam elemen kontainer galeri food
						  figcaption.appendChild(h4);
						  figcaption.appendChild(pDescription);
						  figcaption.appendChild(pPrice);
				  
						  figure.appendChild(img);
						  figure.appendChild(figcaption);
				  
						  article.appendChild(figure);
				  
						  galleryContainerFood.appendChild(article);
						});
					  })
					  .catch(function (error) {
						console.error(error);
					  });
				  </script>
				 <!-- gallery page 1 -->
				
				<!-- gallery page 2 -->
				<div id="tm-gallery-page-coffee" class="tm-gallery-page hidden">
					<!-- Data akan ditampilkan di sini -->
				</div>

				<script src="js/axios.min.js"></script>
				<script src="js/bootstrap.bundle.min.js"></script>
				<script>
					// Menggunakan Axios untuk mengambil data dari API
					axios.get('api.php?endpoint=minuman')
					  .then(function (response) {
						var projects = response.data;
				  
						// Mendapatkan elemen kontainer galeri untuk salad
						var galleryContainerCoffee = document.getElementById('tm-gallery-page-coffee');
				  
						// Loop melalui data dan tambahkan setiap item ke elemen kontainer galeri coffee
						projects.forEach(function (project) {
						  var title = project.nama;
						  var image = 'img/menu/' + project.gambar; // Menambahkan direktori gambar
						  var description = project.deskripsi;
						  var price ='Rp ' + project.harga;
				  
						  // Buat elemen untuk setiap item
						  var article = document.createElement('article');
						  article.className = 'col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item';
				  
						  var figure = document.createElement('figure');
				  
						  var img = document.createElement('img');
						  img.src = image;
						  img.alt = 'Image';
						  img.className = 'img-fluid tm-gallery-img';
				  
						  var figcaption = document.createElement('figcaption');
				  
						  var h4 = document.createElement('h4');
						  h4.className = 'tm-gallery-title';
						  h4.textContent = title;
				  
						  var pDescription = document.createElement('p');
						  pDescription.className = 'tm-gallery-description';
						  pDescription.textContent = description;
				  
						  var pPrice = document.createElement('p');
						  pPrice.className = 'tm-gallery-price';
						  pPrice.textContent = price;
				  
						  // Menambahkan elemen ke dalam elemen kontainer galeri coffee
						  figcaption.appendChild(h4);
						  figcaption.appendChild(pDescription);
						  figcaption.appendChild(pPrice);
				  
						  figure.appendChild(img);
						  figure.appendChild(figcaption);
				  
						  article.appendChild(figure);
				  
						  galleryContainerCoffee.appendChild(article);
						});
					  })
					  .catch(function (error) {
						console.error(error);
					  });
				  </script>

				
				
				
				
				<!-- gallery page 2 -->
				
				<!-- gallery page 3 -->
				
				
				
				<div id="tm-gallery-page-snack" class="tm-gallery-page hidden">
					<!-- Data akan ditampilkan di sini -->
				</div>

				<script src="js/axios.min.js"></script>
				<script src="js/bootstrap.bundle.min.js"></script>
				<script>
					// Menggunakan Axios untuk mengambil data dari API
					axios.get('api.php?endpoint=snack')
					  .then(function (response) {
						var projects = response.data;
				  
						// Mendapatkan elemen kontainer galeri untuk snack
						var galleryContainerSnack = document.getElementById('tm-gallery-page-snack');
				  
						// Loop melalui data dan tambahkan setiap item ke elemen kontainer galeri food
						projects.forEach(function (project) {
						  var title = project.nama;
						  var image = 'img/menu/' + project.gambar; // Menambahkan direktori gambar
						  var description = project.deskripsi;
						  var price ='Rp ' + project.harga;
				  
						  // Buat elemen untuk setiap item
						  var article = document.createElement('article');
						  article.className = 'col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item';
				  
						  var figure = document.createElement('figure');
				  
						  var img = document.createElement('img');
						  img.src = image;
						  img.alt = 'Image';
						  img.className = 'img-fluid tm-gallery-img';
				  
						  var figcaption = document.createElement('figcaption');
				  
						  var h4 = document.createElement('h4');
						  h4.className = 'tm-gallery-title';
						  h4.textContent = title;
				  
						  var pDescription = document.createElement('p');
						  pDescription.className = 'tm-gallery-description';
						  pDescription.textContent = description;
				  
						  var pPrice = document.createElement('p');
						  pPrice.className = 'tm-gallery-price';
						  pPrice.textContent = price;
				  
						  // Menambahkan elemen ke dalam elemen kontainer galeri snack
						  figcaption.appendChild(h4);
						  figcaption.appendChild(pDescription);
						  figcaption.appendChild(pPrice);
				  
						  figure.appendChild(img);
						  figure.appendChild(figcaption);
				  
						  article.appendChild(figure);
				  
						  galleryContainerSnack.appendChild(article);
						});
					  })
					  .catch(function (error) {
						console.error(error);
					  });
				  </script>
				
				
				<!-- gallery page 3 -->
			</div>
			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="img/office/ps3.jpg" alt="Image" class="img-fluid " />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title">Taichan 99 hadir di Pasar Seni dan Budaya Solo 2023</h4>
							<p class="tm-mb-45">Rasakan Keindahan Tradisi dan budaya di PASAR SENI DAN BUDAYA 2023! <br>
							Temukan Taichan 99 di Booth Pasar Seni dan Budaya.<br>Hari & Tanggal:Kamis – Minggu, 26 – 29 Oktober 2023
							<br>Lokasi: Halaman Graha Wisata Niaga
							<br>Waktu: 15.00 – 22.00.</p>
							<a href="detail.php?id=7" class="tm-btn tm-btn-default tm-right">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2023 AK</p>
            
           
		</footer>
	</div> 
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>