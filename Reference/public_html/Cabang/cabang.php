<?php
	session_start();
	require_once("../php/conn.php");

	if (!isset($_SESSION['id'])) {
		header('Location: signin.php');
	}
	
	$id = $_SESSION['id'];
	
	$query = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($db, $query);
    $fetch = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../src/nav.css" />
		<link rel="stylesheet" href="../src/footer.css" />
		<link rel="stylesheet" href="../src/cabang.css" />
		<script src="https://kit.fontawesome.com/0567db93f5.js" crossorigin="anonymous"></script>
        <link
        href="https://fonts.googleapis.com/css?family=Open+Sans"
        rel="stylesheet"
        />
    	<link
        href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css"
        rel="stylesheet"
    	/>
    	<script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js"></script>
		<title>Cabang Rumah Sakit</title>
	</head>

	<body>
		<!-- navigasi bar yang di atas -->
		<nav>
			<ul>
				<li class="logo">
					<a href="../Homepage/index.php">
						<img src="../assets/images/logorehat.png" alt="logo" />
					</a>
				</li>
				<li class="menu">
					<a href="cabang.php">Cabang</a>
				</li>
				<li class="menu">
					<a href="../BuatJanji/buatjanji.php">Buat Janji</a>
				</li>
				<li class="menu profile">
					<span><img src="../assets/images/profile.png" alt="" /></span>
					<a href="../Profile/user_profile.php"><?= $fetch["firstname"] . " " . $fetch["lastname"]; ?></a>
				</li>
			</ul>
		</nav>

		<!-- bagian main -->
		<main>
			<h1 class="title">Cabang Rumah Sakit</h1>

			<div class="cabang">
				<button class="card" id="card1" onclick="func1()">
					<img src="../assets/images/timah.jpeg" alt="Avatar" />
					<div class="container">
						<h4><b>Rumah Sakit Timah</b></h4>
						<p>Pangkalpinang</p>
					</div>
				</button>

				<button class="card" id="card2" onclick="func2()">
					<img src="../assets/images/siloam.jpg" alt="Avatar" />
					<div class="container">
						<h4><b>Rumah Sakit Siloam</b></h4>
						<p>Jakarta</p>
					</div>
				</button>

				<button class="card" id="card3" onclick="func3()">
					<img src="../assets/images/pelabuhanjkt.jpg" alt="Avatar" />
					<div class="container">
						<h4><b>Rumah Sakit Pelabuhan Jakarta</b></h4>
						<p>Jakarta</p>
					</div>
				</button>

				<button class="card" id="card4" onclick="func4()">
					<img src="../assets/images/primaya.webp" alt="Avatar" />
					<div class="container">
						<h4><b>Rumah Sakit Primaya</b></h4>
						<p>Bekasi</p>
					</div>
				</button>
			</div>
          
            <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
			<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css">

			<div class="geo-loc">
				<h2 class="loc">Click for show the location</h2>

				<div id="map">
				</div>
			</div>
		</main>

		<!-- bagian footer -->
		<footer>
			<div class="socmed">
				<ul>
					<li>
						<i class="fab fa-instagram fa-lg"><a href=""> Instagram</a></i>
					</li>
					<li>
						<i class="fab fa-facebook-square fa-lg"><a href=""> Facebook</a></i>
					</li>
					<li>
						<i class="fab fa-twitter fa-lg"><a href=""> Twitter</a></i>
					</li>
				</ul>
			</div>
			<div class="partner">
				<ul>
					<li>
						<a href=""><img src="../assets/images/mayoclinic.svg" alt="" /></a>
					</li>
					<li>
						<a href=""><img src="../assets/images/rspelabuhan.png" alt="" /></a>
					</li>
					<li>
						<a href=""><img src="../assets/images/rsprimaya.png" alt="" /></a>
					</li>
					<li>
						<a href=""><img src="../assets/images/rstimah.png" alt="" /></a>
					</li>
					<li>
						<a href=""><img src="../assets/images/siloam.png" alt="" /></a>
					</li>
				</ul>
			</div>
			<div class="contact">
				<ul>
					<li>
						<i class="fas fa-phone-alt"><a href=""> 119</a></i>
					</li>
					<li>
						<i class="fas fa-phone-alt"><a href=""> 021 - 1234567</a></i>
					</li>
                  	<li>
						<i class="fas fa-phone-alt"><a href="php/mail.php"> Contact Us</a></i>
					</li>
				</ul>
			</div>
		</footer>
	</body>

	<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiY3liZXJub25rNDA0IiwiYSI6ImNrdzBmZW1uaDR6MzEybm8wbWs5YnZ3cDAifQ.TxwtpKQkSmYYK_rtgjFbGA';
 
    const geojson = {
        'type': 'FeatureCollection',
        'features': 
        [
            {
                'type': 'Feature',
                'geometry': 
                {
                    'type': 'Point',
                    'coordinates': [107.17065123581443,-6.2851029817700095]
                },

                'properties': 
                {
                    'title': 'Mapbox',
                    'description': 'President University'
                }
            },
      
            {
                'type': 'Feature',
                'geometry': 
                {
                    'type': 'Point',
                    'coordinates': [106.10925125622022, -2.114304280150118]
                },

                'properties': 
                {
                    'title': 'Mapbox',
                    'description': 'Rumah Sakit Timah'
                }
            },
      
            {
                'type': 'Feature',
                'geometry': 
                {
                    'type': 'Point',
                    'coordinates': [106.81720775425707, -6.219006549233216]
                },

                'properties': 
                {
                    'title': 'Mapbox',
                    'description': 'Rumah Sakit Siloam'
                }
            },
      
            {
                'type': 'Feature',
                'geometry': 
                {
                    'type': 'Point',
                    'coordinates': [106.91791222334271, -6.124641267086945]
                },

                'properties': 
                {
                    'title': 'Mapbox',
                    'description': 'Rumah Sakit Pelabuhan Jakarta'
                }
            },
      
        	{
                'type': 'Feature',
                'geometry': 
                {
                    'type': 'Point',
                    'coordinates': [107.2968587555733, -6.329778680321602]
                },

                'properties': 
                {
                    'title': 'Mapbox',
                    'description': 'Rumah Sakit Primaya'
                }
            },
        ]
    };
 
    const map = new mapboxgl.Map
    (
        {
        container: 'map',
        style: 'mapbox://styles/mapbox/satellite-streets-v11',
        center: [107.17065123581443,-6.2851029817700095],
        zoom: 15
        }
    );


    // add markers to map
    for (const feature of geojson.features) 
    {
        // create a HTML element for each feature
        const el = document.createElement('div');
        el.className = 'marker';
    
        // make a marker for each feature and add it to the map
        new mapboxgl.Marker(el)
        .setLngLat(feature.geometry.coordinates)
        .setPopup
        (
            new mapboxgl.Popup({ offset: 25 }) // add popups
            .setHTML
            (
                `<h3>${feature.properties.title}</h3><p>${feature.properties.description}</p>`
            )
        )
        .addTo(map);
    }

    map.addControl(
        new MapboxDirections({
        accessToken: mapboxgl.accessToken
    }),
    'top-left'
    );
      
     //JavaScript for the button card
    document.getElementById('card1').addEventListener('click', () => 
    {
        map.flyTo({
            center: [106.10925125622022, -2.114304280150118],
            essential: true
        });
    });

    document.getElementById('card2').addEventListener('click', () => 
    {
        map.flyTo({
            center:  [106.81720775425707, -6.219006549233216],
            essential: true
        });
    });

    document.getElementById('card3').addEventListener('click', () => 
    {
        map.flyTo({
            center: [106.91791222334271, -6.124641267086945],
            essential: true
        });
    });

    document.getElementById('card4').addEventListener('click', () => 
    {
        map.flyTo({
            center: [107.2968587555733, -6.329778680321602],
            essential: true
        });
    });
    
	</script>
</html>
