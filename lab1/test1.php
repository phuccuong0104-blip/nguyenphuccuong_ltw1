
<?php
// Khoi tao mang menu
$menus = [
    "Trang chủ",
    "Tin tức",
    "Liên hệ",
    "Giới thiệu"
];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu PHP</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        nav {
            background-color: #0b2c5d;
            margin: 15px auto;
            width: 90%;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            flex: 1;
            text-align: center;
        }

        nav ul li a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 15px;
            font-weight: bold;
        }

        nav ul li a:hover {
            background-color: #1555a0;
        }
    </style>
</head>

<body>

    <!-- Menu -->
    <nav>
        <ul>
            <?php foreach ($menus as $menu) { ?>
                <li>
                    <a href="#">
                        <?php echo $menu; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>

</body>
</html>
