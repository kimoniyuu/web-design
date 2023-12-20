<!DOCTYPE html>
<html>
<head>
    <title>เกี่ยวกับฉัน</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .profile {
            border: 3px solid #ccc;
            padding: 30px;
            width: 300px;
        }
        .profile h2 {
            margin-top: 0;
        }
        .profile p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="profile">
        <h2>แนะนำตัว</h2>
        <?php
        $image_url = "https://scontent-bkk1-2.xx.fbcdn.net/v/t39.30808-6/342346195_1262444974664075_7573293500538853148_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=cp_V_zGWOeQAX9ms2cw&_nc_ht=scontent-bkk1-2.xx&oh=00_AfCL7K3gjcckS-8FdzODoh6g4WU1VC2BigHxrf30hm1_uw&oe=65868C56";
        $name = "Parinthonr Sutthikhun";
        $nickname = "Champ";
        $id = "6506021621080";
        $age = 19;
        $weight = 57;
        $height = 173;

        echo "<img src='$image_url' alt='รูปภาพของฉัน' style='width: 200px; height: auto;'>";
        echo "<p>ชื่อ: $name</p>";
        echo "<p>ชื่อเล่น: $nickname</p>";
        echo "<p>ไอดี: $id</p>";
        echo "<p>อายุ: $age ปี</p>";
        echo "<p>น้ำหนัก: $weight กิโลกรัม</p>";
        echo "<p>ส่วนสูง: $height เซนติเมตร</p>";
        ?>
    </div>
</body>
</html>
