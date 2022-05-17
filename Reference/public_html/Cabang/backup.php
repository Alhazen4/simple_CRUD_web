<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabang Rumah Sakit</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Navigasi Biru Atas */
        /* nav, .logo, .hosp-name, .profile, .link {
            position: sticky;
        } */
        nav {
            position: absolute;
            width: 100%;
            height: 150px;
            left: 0px;
            top: 0;
            background-color: #3DB2FF;
        }
    
        nav .logo {
        position: absolute;
        left: 52px;
        top: 16px;
        }

        nav .logo img {
        margin-top: 23px;
        margin-left: 10px;
        width: 125px; 
        height: 65px;
        }
    
        nav .hosp-name {
            position: absolute;
            height: 47px;
            left: 32%;
        }
    
        nav .hosp-name h1 {
            background-color: azure;
            width: 600px;
            text-align: center;
            border-radius: 32px;
            font-size: 2em;
        }
    
        nav .link {
            margin: auto;
        }
    
        nav .link ul {
            margin: 0;
            padding: 0;
            overflow: hidden;
            margin: 90px 0 0 497px;
        }
    
        nav .link ul li {
            float: left;
        }
    
        nav .link ul li a{
            width: 150px;
            list-style-type: none;
            text-decoration: none;
            text-align: center;
            padding: 10px;
            background-color: azure;
            border-radius: 25px;
            margin-left: 20px;
            color: black;
            display: block;
        }
    
        nav .profile {
            position: absolute;
            right: 0;
            margin-right: 40px;
            margin-top: 10px;
        }
    
        nav .profile h1 {
            color: black;
            background-color: azure;
            width: 60px; height: 60px;
            border-radius: 100px;
            text-align: center;
            font-size: 40px;
        }

        nav .profile h1 a {
        text-decoration: none;
        font-size: 40px;
        }

        main {
            margin: 3% 10% 0% 10%;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
    
        main .card {
        /* Add shadows to create the "card" effect */
        margin-top: 20px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 18%;
        height: 280px;
        }
    
        /* On mouse-over, add a deeper shadow */
        main .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
    
        /* Add some padding inside the card container */
        .container {
        padding: 2px 16px;
        }

        h4 {
            margin-bottom: -10px;
            margin-top: 10px;
        }
        
        .title {
            margin: 12% 0% 0% 0%;
            text-align: center;
        }

        .maps {
            width: 100%;
            height: 500px;
        }

        .maps iframe {
            width: 1125px; 
            height: 430px; 
            border-style: 0; 
            margin-top: 10px;
            margin-left: 195px;
        }

        .footer {
            background-color: #3DB2FF;
            width: 100%;
            height: 150px;
            margin-top: 100px;
        }

        .loc {
            margin-left: 195px;
        }

        a {
        text-decoration: none;
        }

        a:active, a:visited {
        color: black;
        }
    </style>
</head>

<body>
    <!-- navigasi bar yang di atas -->
    <nav>
        <div class="logo">
            <a href="../Homepage/index.html"><img src="assets/logorehat.png" alt="logo"></a>
        </div>
        
        <div class="hosp-name">
            <a href="homepage.html"></a><h1>RUMAH SAKIT SEJAHTERA</h1>
        </div>
    <!--Ini nama akun-->
        <div class="profile">
            <h1><a href="../Profile/user_profile.php">A</a></h1>
        </div>
        <div class="link">
            <ul style='list-style: none;'>
                <li><a href="../BuatJanji/buatjanji.html">Buat Janji</a></li>
                <li><a href="../DaftarDokter/findoc.html">Daftar Dokter</a></li>
                <li><a href="../Cabang/cabang.html">Cabang</a></li>
            </ul>
        </div>
    </nav>

    <h1 class="title">Cabang Rumah Sakit</h1>

    <main>
        <button class="card" onclick="func1()">
            <img src="assets/timah.jpeg" alt="Avatar" style="width: 100%; height: 170px;">
            <div class="container">
                <h4><b>Rumah Sakit Timah</b></h4>
                <p>Pangkalpinang</p>
            </div>
        </button>

        <button class="card" onclick="func2()">
            <img src="assets/siloam.jpg" alt="Avatar" style="width: 100%; height: 170px;">
            <div class="container">
                <h4><b>Rumah Sakit Siloam</b></h4>
                <p>Jakarta</p>
            </div>
        </button>

        <button class="card" onclick="func3()">
            <img src="assets/pelabuhanjkt.jpg" alt="Avatar" style="width: 100%; height: 170px;">
            <div class="container">
                <h4><b>Rumah Sakit Pelabuhan Jakarta</b></h4>
                <p>Jakarta</p>
            </div>
        </button>

        <button class="card" onclick="func4()">
            <img src="assets/primaya.webp" alt="Avatar" style="width: 100%; height: 170px;">
            <div class="container">
                <h4><b>Rumah Sakit Primaya</b></h4>
                <p>Bekasi</p>
            </div>
        </button>
    </main>

    <h2 class="loc">Click for show the location</h2>

    <div class="maps">
        <iframe src=""></iframe> 
    </div>

    <div class="footer">

    </div>
</body>

<script>
function func1() {
    document.getElementsByTagName("iframe")[0].
    setAttribute("src", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22554.40439166528!2d106.10090464603473!3d-2.1177866833512256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e22c81555555555%3A0x39abdaff2d86d864!2sRumah%20Sakit%20Bakti%20Timah!5e0!3m2!1sid!2sid!4v1633704253164!5m2!1sid!2sid");

    document.getElementsByClass("loc").innerHTML = "Location of Rumah Sakit Timah";
}

function func2() {
    document.getElementsByTagName("iframe")[0].
    setAttribute("src", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.338400547427!2d106.81501301473936!3d-6.219029095498073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f15508fc71f1%3A0x508c6ff6b817c346!2sMRCCC%20Siloam%20Hospitals%20Semanggi!5e0!3m2!1sid!2sid!4v1633703722368!5m2!1sid!2sid");
}

function func3() {
    document.getElementsByTagName("iframe")[0].
    setAttribute("src", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.0434179523413!2d106.9156878147389!3d-6.12485959556521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a20037f001c71%3A0xb746f487752d0519!2sRumah%20Sakit%20Pelabuhan%20Jakarta%20-Radiologi!5e0!3m2!1sid!2sid!4v1633705654305!5m2!1sid!2sid");
}

function func4() {
    document.getElementsByTagName("iframe")[0].
    setAttribute("src", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.491500176509!2d107.29501261473997!3d-6.330305295418816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977cf6f94b8c7%3A0x60ae6897f85158d8!2sRumah%20Sakit%20Primaya!5e0!3m2!1sid!2sid!4v1633705716460!5m2!1sid!2sid");
}

</script>
</html>