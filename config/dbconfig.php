<?php
// 데이터베이스 연결 설정
$host = 'localhost';
$username = 'root';   // 본인 데이터베이스 이름
$password = '1234';  // 본인 데이터베이스 비밀번호
$dbname = 'kku_git';
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die('Could not connect to the database: ' . mysqli_connect_error());
}
?>