<?php
$servername = "localhost";
$username = "root";
$password = "password"; // أدخل كلمة المرور التي استخدمتها للدخول إلى MySQL
$dbname = "dictionary";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
