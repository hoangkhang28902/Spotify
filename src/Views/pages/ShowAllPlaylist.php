<base href="http://localhost:81/Spotify/Home">
    <h1><a href="">Playlist</a></h1>
    <div class="bangxephangnoibat">
        <?php include_once "./src/Views/components/Card.php";
        $arrayArt2 = array('JVKE');
        ?>
        <?php if (!empty($data['playlist'])) :
            foreach ($data['playlist'] as $playlist) : ?>
                <?php echo Card($playlist['PlaylistID'], $playlist['PlaylistName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($playlist['PlaylistImage']), $playlist['AmountSong']); ?>
        <?php endforeach;
        endif; ?>