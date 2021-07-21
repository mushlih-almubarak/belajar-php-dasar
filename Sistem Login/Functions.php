<?php
    $koneksi = mysqli_connect("localhost", "root", "", "php_dasar");

    // Logika untuk Register.php
    if (isset($_POST["daftar"])) {
        // Membuat variabel untuk hasil pendaftaran
        $username = strtolower($_POST["username"]);
        $email = $_POST["email"];
        $password = $_POST["password"];
        $konfirmasi = $_POST["password2"];

        // Cek apakah username/email sudah dipakai atau belum
        $cek_username = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");
        $cek_email = mysqli_query($koneksi, "SELECT email FROM user WHERE email = '$email'");
        // Cek username
        if (mysqli_fetch_assoc($cek_username)) {
            echo "<script>alert('Maaf, username tersebut telah terdaftar')</script>";
            return false;
        // Cek password
        } elseif (mysqli_fetch_assoc($cek_email)) {
            echo "<script>alert('Maaf, email tersebut telah terdaftar')</script>";
            return false;
        }

        // Cek konfirmasi password
        if ($password !== $konfirmasi) {
            echo "<script>alert('Maaf, konfirmasi password salah')</script>";
            return false;
        }
        
        // Mengenkripsi password dengan mentode PHP default
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert user ke db
        mysqli_query($koneksi, "INSERT INTO user VALUE ('', '$username', '$email', '$password')");

        // Cek apakah data berhasil ditambahkan
        if (mysqli_affected_rows($koneksi) > 0 ) {
            echo "  <script>alert('Alhamdulillah, user berhasil ditambahkan')
                    window.location.href = 'login.php'</script>";
        } else {
            echo "<script>alert('Maaf, user gagal ditambahkan')</script>";
        }
    }

    // Logika untuk Login.php
    if (isset($_POST["login"])) {
        // Variabel
        $username_login = $_POST["username"];
        $password_login = $_POST["password"];

        // Cek apakah username terdaftar
        $cek_username_login = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username_login'");
        if (!mysqli_fetch_assoc($cek_username_login)) {
            echo "<script>alert('Maaf, username tidak terdaftar')</script>";
            return false;
        }

        // Cek apakah password benar
        $cek_password_login = mysqli_query($koneksi, "SELECT password FROM user WHERE username = '$username_login'");
        $isi_password = mysqli_fetch_assoc($cek_password_login);
        $isi_password = $isi_password["password"];
        if (!password_verify($password_login, $isi_password)) {
            echo "<script>alert('Maaf, password Anda salah!')</script>";
            return false;
        }
        
        // Jika benar semua
        header("Location: ../SQL/Index.php");
    }
?>