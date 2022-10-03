<html>
<head><meta charset="UTF-8"></head>
<body>

<form action="insert-product.php" method="post">
ชื่อสมาชิก: <?= $row["username"] ?><br>
<input type="text" name="username"><br>
password: <?= $row["password"] ?><br>
<input type="text" name="password"><br>
name: <?= $row["username"] ?><br>
<input type="text" name="name"><br>
address: <?= $row["username"] ?><br>
<input type="text" name="name"><br>

<input type="submit" value="เพิ่มสมาชิก ">
</form>
</body>
</html>