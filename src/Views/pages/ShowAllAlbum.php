<base href="http://localhost:81/Spotify/Home">
    <h1><a href="">Album</a></h1>
    <div class="haythucachkhac">
        <?php include_once "./src/Views/components/Card.php";
        $arrayArt2 = array('JVKE');
        ?>
        <?php if (!empty($data['album'])) :
            foreach ($data['album'] as $album) : ?>
                <?php echo Card($album['AlbumID'], $album['AlbumName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($album['AlbumImage']), $album['AmountSong']); ?>
        <?php endforeach;
        endif; ?>