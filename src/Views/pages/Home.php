<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Global.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../../js/Sidebar.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="mainHome">
        <div id="containerMainHome">
            <div class="sideBarHome">
                <?php include_once "../layouts/Sidebar/Sidebar.php" ?>
            </div>
            <div class="containercontentMainHome">
                <div class="navBarHome">
                    <?php include_once "../layouts/Navbar/Navbar.php" ?>
                </div>
                <div id="<?php echo empty($_GET['page']) ? 'contentMainHome': '' ?>" class="contentMainHome">
                    <!-- <h1>Home page</h1> -->
                </div>
            </div>
        </div>
        <?php include_once "../Listener/Playing.php" ?>
    </div>
    <script src="../../js/Playing.js"></script>
    <script src="../../utils/ColorIdentify.js"></script>
</body>
</html>


