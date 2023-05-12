<base href="http://localhost:81/Spotify/Home">
     <h1>Song</h1>
    <div class="card-newplay">
        <?php include_once "./src/Views/components/Card.php";
        $arrayArt2 = array('JVKE');
        ?>
        <?php if (!empty($data['song'])) :
            foreach ($data['song'] as $song) : ?>
                <?php echo Card($song['SongID'], $song['SongName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($song['SongImage']), $song['SongAudio']); ?>
        <?php endforeach;
        endif; ?>