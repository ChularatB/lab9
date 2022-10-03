<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8">
</head>
<body>
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
while ($row = $stmt->fetch()) {
echo "ชื่อ: " . $row ["username"] . "<br>";
echo "ที่อยู่ : " . $row ["address"] . "<br>";
echo " เบอร์โทร: " . $row ["mobile"] . "<br>";
echo " email: " . $row ["email"] . "<br>";
echo "<a href='ws6-1.php?username=" .$row["username"]. "'>ลบ</a>";

echo "<hr>\n";
}
?>
</body>
</html>