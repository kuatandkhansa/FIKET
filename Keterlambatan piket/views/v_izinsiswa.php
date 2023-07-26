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
    @import url('https://fonts.googleapis.com/css2?family=Jost&display=swap');
*{
    list-style: none;
    text-decoration: none;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Jost', sans-serif;
}

body{
    background: #f5f6fa;
}

.wrapper .sidebar{
    background: #1D2D85;
    position: fixed;
    top: 0;
    left: 0;
    width: 225px;
    height: 100%;
    padding: 20px 0;
    transition: all 0.5s ease;
}
.wrapper .sidebar .profile{
    margin-bottom: 30px;
    text-align: center;
}

.wrapper .sidebar .profile img{
    display: block;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin: 0 auto;
}

.wrapper .sidebar .profile h3{
    color: #ffffff;
    margin: 10px 0 5px;
}

.wrapper .sidebar .profile p{
    color: rgb(206, 240, 253);
    font-size: 14px;
}
.wrapper .sidebar ul li a{
    display: block;
    padding: 13px 30px;
    border-bottom: 1px solid #1D2D85;
    color: rgb(241, 237, 237);
    font-size: 16px;
    position: relative;
}

.wrapper .sidebar ul li a .icon{
    color: #dee4ec;
    width: 30px;
    display: inline-block;
}


.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
    color: #1D2D85;

    background:white;
    border-right: 2px solid #1D2D85;
}

.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon{
    color: #1D2D85;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
    display: block;
}
.wrapper .section{
    width: calc(100% - 225px);
    margin-left: 225px;
    transition: all 0.5s ease;
}

.wrapper .section .top_navbar{
    background: #1D2D85;
    height: 50px;
    display: flex;
    align-items: center;
    padding: 0 30px;

}

.wrapper .section .top_navbar .hamburger a{
    font-size: 28px;
    color: #f4fbff;
    
}

.wrapper .section .top_navbar .hamburger a:hover{
    color: #a2ecff;
}

body.active .wrapper .sidebar{
    left: -225px;
}

body.active .wrapper .section{
    margin-left: 0;
    width: 100%;
}
.petugas-piket{
    margin-left: 45px;
    color: #fff;
    font-size: 28px;
}
.large-btn {
width: 400px;
height: 230px;
  margin-top: 20vh;
  margin-left: 40vh;
  font-size: 1.5em; 
  padding: 1em 2em; 
  border-radius: 10px; 
  background-color: #1E53C9; 
  color: white; 
  text-transform: uppercase;
  font-weight: bold; 
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); 
  transition: all 0.3s ease-in-out; 
}

.large-btn:hover {
  background-color: #1D2D85; /* change the background color on hover */
  box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.2); /* change the shadow effect on hover */
}
.large-btn2 {
width: 400px;
height: 230px;
  margin-top: 20vh;
  margin-left: 40vh;
  font-size: 1.5em; 
  padding: 1em 2em; 
  border-radius: 10px; 
  background-color: #BEDB0B; 
  color: white; 
  text-transform: uppercase;
  font-weight: bold; 
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); 
  transition: all 0.3s ease-in-out; 
}

.large-btn2:hover {
  background-color: #86990E; /* change the background color on hover */
  box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.2); /* change the shadow effect on hover */
}
.large-btn3 {
width: 400px;
height: 230px;
  margin-top: 20vh;
  margin-left: 40vh;
  font-size: 1.5em; 
  padding: 1em 2em; 
  border-radius: 10px; 
  background-color: #16BE3B; 
  color: white; 
  text-transform: uppercase;
  font-weight: bold; 
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); 
  transition: all 0.3s ease-in-out; 
}

.large-btn3:hover {
  background-color: #098223; /* change the background color on hover */
  box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.2); /* change the shadow effect on hover */
}
.large-btn4 {
width: 400px;
height: 230px;
  margin-top: 20vh;
  margin-left: 40vh;
  font-size: 1.5em; 
  padding: 1em 2em; 
  border-radius: 10px; 
  background-color: #EB0909; 
  color: white; 
  text-transform: uppercase;
  font-weight: bold; 
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); 
  transition: all 0.3s ease-in-out; 
}

.large-btn4:hover {
  background-color: #EB0909; /* change the background color on hover */
  box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.2); /* change the shadow effect on hover */
}
.das{
    margin-left: 10px;
    color: white;
    font-size: 20px;
    text-align: center;
}
#nama{
    font-style: inherit;
}
label{
    color: #000000;
    ;
}
#tombol{
    size: 20px;
    color:black ;
}
th{
    color: #000000;
    background-color: aliceblue;
}
tr{
    background-color: #668DDA;
}
table{
    width: 1100px;
    height: 100px;
}
    </style>
</head>
<body>
    


        </div>
    <div class="wrapper">
    <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
                <div class="das">IZIN SISWA
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
    <!--isi konten-->
    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <!-- ... Bagian HTML lainnya ... -->
            </div>
            <table>
            <div class="content">
                <h1>Pendataan Siswa Yang Izin</h1>
                <br>
        <tr>
            <td><label for="nama">Nama Siswa:</label>
        <input type="text" id="nama" name="nama" required>
        
        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" required>
        
        <label for="tanggal">Tanggal:</label> 
        <input type="date" id="tanggal" name="tanggal" required>
        
        <label for="jam">Jam:</label>
        <select id="jam" name="jam" required>
            <option value="">Pilih Jam</option>
            <option value="1">Jam 1</option>
            <option value="2">Jam 2</option>
            <option value="3">Jam 3</option>
            <option value="4">Jam 4</option>
            <option value="5">Jam 5</option>
            <option value="6">Jam 6</option>
            <option value="7">Jam 7</option>
            <option value="8">Jam 8</option>
            <option value="9">Jam 9</option>
            <option value="10">Jam 10</option>
            <!-- Tambahkan opsi lain sesuai kebutuhan -->
        </select>
   
        <label for="keterangan">Keterangan:</label>
        <input id="keterangan" name="keterangan" required></input><br><br><br>
    
        <input type="submit" value="Submit" id="tombol"></td>
    </form> </tr>
</table>
               
    
                <br>
                
                <table border="1" id="izintable">
                    <thead>
                        <tr><br>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody id="tabelData">
                        <!-- Data izin siswa akan ditampilkan di sini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    


   
    <script>
        var form = document.getElementById("izinForm");
        var tbody = document.getElementById("tabelData");

        form.addEventListener("submit", function(e){
            e.preventDefault(); // Mencegah pengiriman form ke server

            // Ambil nilai input form
            var nama = document.getElementById("nama").value;
            var kelas = document.getElementById("kelas").value;
            var tanggal = document.getElementById("tanggal").value;
            var jam = document.getElementById("jam").value;
            var keterangan = document.getElementById("keterangan").value;

            // Tambahkan data ke tabel
            var newRow = tbody.insertRow();
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            var cell4 = newRow.insertCell(3);
            var cell5 = newRow.insertCell(4);
            cell1.innerHTML = nama;
            cell2.innerHTML = kelas;
            cell3.innerHTML = tanggal;
            cell4.innerHTML = jam;
            cell5.innerHTML = keterangan;

            // Reset form
            form.reset();
        });
    </script>
                      
        
  <script>
 var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
  </script>
</body>
</html>