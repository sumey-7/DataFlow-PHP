<?php

$host     = "sql302.infinityfree.com"; 
$username = "if0_42420115";              
$password = "NAArrtQxTiINjZ2";       
$dbname   = "if0_42420115_myfirst";         

try {
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // 3. استلام البيانات باستخدام $_GET (بدلاً من $_POST)
    $name  = $_GET['name']; // تأكد أن الاسم يطابق name="..." في الهوتمل
    $age = $_GET['age'];    // تأكد أن الاسم يطابق name="..." في الهوتمل


    $sql  = "INSERT INTO user (name, age) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $age]);

    echo "تم حفظ البيانات بنجاح!";
} catch(PDOException $e) {
    echo "خطأ: " . $e->getMessage();
}
?>