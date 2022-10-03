<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <div style="display:block">
        <?php
        $stmt = $pdo->prepare("SELECT * FROM product");
        $stmt->execute();
        ?>
        <?php
        while ($row = $stmt->fetch()) :
        ?>
            ชื่อสมาชิก: <?= $row["pid"] ?><br>
            ที่อยู่: <?= $row["pname"] ?><br>
            email: <?= $row["pdetail"] ?><br>
            email: <?= $row["price"] ?><br>
            <hr>
        <?php endwhile ?>
    </div>
</body>

</html>