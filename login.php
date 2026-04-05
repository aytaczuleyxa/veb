<?php
// Bazaya qoşulma faylını çağırırıq
include 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // HTML-dəki 'name' hissələri ilə eyni olmalıdır
    $u = $_POST['istifadeci'];
    $p = $_POST['sifre'];

    // SQL sorğusu - cədvəl adının 'users' olduğuna əmin ol
    $sql = "SELECT * FROM users WHERE username = '$u' AND password = '$p'";
    
    // Burada $conn dəyişəni db.php-dən gəlir
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<h2 style='color:green; text-align:center; margin-top:50px;'>Təbriklər! Giriş uğurludur. ✅</h2>";
    } else {
        echo "<h2 style='color:red; text-align:center; margin-top:50px;'>Xəta: İstifadəçi adı və ya şifrə yanlışdır! ❌</h2>";
    }
    
    echo "<p style='text-align:center;'><a href='login.html'>Geri qayıt</a></p>";
}
?>
