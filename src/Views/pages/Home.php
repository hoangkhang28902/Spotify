<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Postcast component -->
    <link rel="stylesheet" href="../../css/PostCard_component_style.css">
    <!-- Playlist2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style2.css">
    <link rel="stylesheet" href="../../css/testCss.css">
    <!-- Artist 2 -->
    <!-- Podcast -->
    <link rel="stylesheet" href="../../css/style_podscast.css">   
    <!-- Top podcast -->
    <!-- <link rel="stylesheet" href="style_podscast_showall.css">
    <link rel="stylesheet" href="testCss.css"> -->
    <link rel="stylesheet" href="../css/Global.css">
    <link rel="stylesheet" href="../../css/Playing.css">
    <link rel="stylesheet" href="../../css/Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Spotify</title>
</head>
<body>
    <div id="mainHome">
        <div id="containerMainHome">
            <div class="sideBarHome">
                <?php include_once APPROOT. '\Views\layouts\Sidebar.php' ?>
            </div>
            <div class="containercontentMainHome">
                <div class="navBarHome">
                    <?php include_once APPROOT. '\Views\layouts\Navbar.php' ?>
                </div>
                <div id="contentMainHome" class="contentMainHome">
                    <div class="container">
                    <h1>Recently played</h1>   
                        <div class="card-newplay">
                            <?php include_once "../components/Card.php";
                                $arrayArt2 = array('JVKE');
                            ?>
                            <?php if (!empty($data['song'])):
                                foreach ($data['song'] as $song) : ?>
                                    <?php echo Card($song['SongName'], $arrayArt2, 'https://i.scdn.co/image/ab67616d00001e029a087af6a3bf8fa7d5db50e2'); ?>
                            <?php endforeach; endif; ?>
                        </div>
                    </div>
                    <!-- End div -->
                </div>
            </div>
        </div>
        <!-- Listener -->
    </div>
    <script src="../../js/Playing.js"></script>
    <script src="../../js/Sidebar.js"></script>
</body>
</html>


