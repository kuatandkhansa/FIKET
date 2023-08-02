<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    @import url('dashboard.css');
    @import url('https://fonts.googleapis.com/css2?family=Jost&display=swap');

    </style>
</head>
<body>       
    <div class="wrapper">
    <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
                <div class="das">DASHBOARD
                    
            </div>
        </div>
        
        <div class="sidebar">
            <h3 class="petugas-piket">Petugas Piket</h3>
              <div class="profile">
                <br>
                <img src="user (2).png">
                <h3>Agus</h3>
                <p>Admin</p>
                <ul>
                <li>
                    <a href="v_dasboard.php">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="v_izinsiswa.php">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Izin Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="v_keterlambatan.php">
                        <span class="icon"><i class="fas fa-stopwatch"></i></span>
                        <span class="item"></span>Keterlambatan Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="v_peringatan.php">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Peringatan</span>
                    </a>
                </li>
                <li>
                    <a href="v_informasi.php">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Informasi</span>
                    </a>
                </li>
                <li>
                    <br><br><br><br>
                    <a href="v_setting.php">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
            </div>
        </div>
    </div>
  <script>
 var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
  </script>
</body>
</html>