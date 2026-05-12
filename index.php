<!DOCTYPE html>
<html lang="id"> 
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Mahasiswa</title>

    <link rel="stylesheet" href="style.css"> <!--menghubungkan file CSS eksternal-->
<body>

<div class="container"> <!--Sebagai pembungkus seluruh isi form agar mudah diatur tampilannya dengan CSS-->

    <div class="emoji">📚✨</div> <!--Emoji digunakan supaya tampilan lebih menarik.-->

    <h2>Form Absensi Mahasiswa</h2>

    <form method="POST"> <!--Mengirim data form menggunakan metode POST-->

        <label>Nim</label>
        <input type="text" name="nim" placeholder="Masukkan NIM " required>
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" placeholder="Masukkan nama kamu" required>

        <div class="radio-group"> <!--hanya bisa memilih satu pilihan.-->
            <label>
                <input type="radio" name="status" value="Hadir" required>
                 Hadir
            </label>

            <label>
                <input type="radio" name="status" value="Izin">
                 Izin
            </label>

            <label>
                <input type="radio" name="status" value="Sakit">
                 Sakit
            </label>

            <label>
                <input type="radio" name="status" value="Tidak Hadir">
                 Tidak Hadir
            </label>
        </div>

        <button type="submit" name="submit"> <!--Mengirim data form ke PHP-->
            Kirim Absensi 
        </button>

    </form>

    <!--Fungsi no 54: Mengecek apakah tombol submit sudah ditekan. 
    $_POST = Mengammbil data dari form
    isset = Mengecek apakah adat ada -->
    <?php //Mengecek apakah tombol submit sudah ditekan
    if(isset($_POST['submit'])){ 

        $nim = $_POST['nim']; //menyimpan nim
        $nama = $_POST['nama']; //menyimpan nama mahasiswa
        $status = $_POST['status']; //menyimpan status kehadiran


        //echo = menampilkan output
        echo "<div class='hasil'>"; 
        echo "<h3> Hasil Absensi </h3>";
        echo "<p><b>NIM:</b> $nim</p>";
        echo "<p><b>Nama Mahasiswa:</b> $nama</p>";
        echo "<p><b>Status Kehadiran:</b> $status</p>";
        echo "<p><b>Tanggal Hadir:</b> " . date('d-m-Y') . "</p>"; //date = menampilkan tanggal ootomatis

        //$status == mengecek status kehadiran mahasiwa
        if($status == "Hadir"){  //jika hadir
            echo "<p>🎉 Anda hadir hari ini</p>";
        }
        else if($status == "Izin"){ //jika izin
            echo "<p>📌 Anda izin</p>";
        }
        else if($status == "Sakit"){ //jika sakit
            echo "<p>💊 Semoga cepat sembuh</p>";
        }
        else{ //selain itu
            echo "<p>⚠️ Anda tidak hadir hari ini</p>";
        }

        echo "</div>";
    }
    ?>

</div>

</body>
</html>
