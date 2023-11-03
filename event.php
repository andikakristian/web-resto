<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Taichan 99 - Event</title>
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
								<li class="tm-nav-li"><a href="contact.php" class="tm-nav-link ">Contact</a></li>
								<li class="tm-nav-li"><a href="location.php" class="tm-nav-link">Location</a></li>
								<li class="tm-nav-li"><a href="event.php" class="tm-nav-link active">Event</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Event</h2>
				<p class="col-12 text-center">Beragam event di Kota Solo dan sekitarnya yang anda bisa hadiri, dalam beberapa event Taichan 99 juga akan hadir di boot Festival Kuliner</p>
			</header>
			<div class="tm-container-inner ">
			<div class="row" id="projects">
                <!-- Daftar proyek akan ditampilkan di sini -->
            </div>
            </div>

			<div class="tm-container-inner-2 tm-map-section">
				<div class="row">
					<div class="col-12">
						<div class="tm-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31641.156786930962!2d110.79821258199917!3d-7.559208517092659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16627ad11ab1%3A0xe7fe4e0454bc3095!2sSurakarta%2C%20Kota%20Surakarta%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1698918148359!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
	
	<script src="js/axios.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        // Mengambil data dari REST API
        axios.get('apiOffice.php?endpoint=event')
            .then(function (response) {
                var projects = response.data;
                console.log('dari detail.php ====>',response.data);

                // Menampilkan daftar proyek
                var projectsContainer = document.getElementById('projects');
                projects.forEach(function (project) {
                    var projectCard = document.createElement('div');
                    projectCard.className = 'col-lg-4' ;
                    projectCard.innerHTML = `
                        <h2 class="5"> ${project.nama} </h2>
                        <h5>${project.jenis}<br>${project.rank}</h5>
                        <img src="img/office/${project.gambar}" class="img-fluid"><br>
                        ${truncateText(project.deskripsi, 30)}
                        <a href="detail.php?id=${project.id}">...Read More</a>
                    `;
                    projectsContainer.appendChild(projectCard);
                });
            })
            .catch(function (error) {
                console.error(error);
            });

            // Fungsi untuk memotong teks
            function truncateText(text, limit) {
                if (text.split(' ').length > limit) {
                    var words = text.split(' ');
                    return words.slice(0, limit).join(' ');
                }
                return text;
            }
    </script>
	
	
</body>
</html>