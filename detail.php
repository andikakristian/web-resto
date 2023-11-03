<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House - Contact Page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>

<body> 
	<div id="notification" style="display: none;" class="tm-notification">Pesan terkirim</div>
	
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
								<li class="tm-nav-li"><a href="index.php" class="tm-nav-link ">Home</a></li>
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
				<h2 class="col-12 text-center tm-section-title">Event</h2>
				<p class="col-12 text-center">Beragam event di Kota Solo dan sekitarnya yang anda bisa hadiri</p>
			</header>

			<div class="container">
        <section class="tm-container-inner-2">
            <div class="row" id="projects">
                <!-- Daftar proyek akan ditampilkan di sini -->
            </div>
        </section>
    </div>
            

			
			
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2023 AK</p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	
	<script src="js/axios.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        // Mengambil parameter 'id' dari URL
        const urlParams = new URLSearchParams(window.location.search);
        const projectId = urlParams.get('id');

        // Mengambil data detail proyek dari REST API
        axios.get(`apiOffice.php?id=${projectId}`)
            .then(function (response) {
                console.log('dari detail.php ====>',response.data);
                var project = response.data;

                // Menampilkan daftar proyek
                var projectsContainer = document.getElementById('projects');
                var projectCard = document.createElement('div');
                projectCard.className = 'col-sm-12';
                projectCard.innerHTML = `
                    <h2 class="mt-2"> ${project.nama} </h2>
                    <h5>${project.jenis}<br>${project.rank}</h5>
                    <img src="img/office/${project.gambar}" class="img-fluid">
                    <br>
                    <br>
                    ${project.deskripsi}
                       
                `;
                projectsContainer.appendChild(projectCard);
            })
            .catch(function (error) {
                console.error(error);
            });
    </script>
	
	
</body>
</html>