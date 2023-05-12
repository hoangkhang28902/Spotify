<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/Global.css">
    <link rel="stylesheet" href="Home.css">

</head>
<body> -->
<base href="http://localhost:81/Spotify/Home">
<div class="container">
    <h1>Song</h1>
    <!-- Phần Song -->
    <a class="showAll" href="Home/ShowAllSong">Show all</a> 
    <div class="card-newplay">
        <?php include_once "./src/Views/components/Card.php";
        $arrayArt2 = array('JVKE');
        ?>
        <?php if (!empty($data['arrSong'])) :
            foreach ($data['arrSong'] as $song) : ?>
                <?php echo Card($song['SongID'], $song['SongName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($song['SongImage']), $song['SongAudio']); ?>
        <?php endforeach;
        endif; ?>


        <?php
        // $arrayArt1 = array('Relax and indulge with beautiful piano pieces');
        // $arrayArt2 = array('JVKE');
        // $arrayArt3 = array('Your daily update of the most played tracks right now - Vietnam.');
        // include_once "../components/Card.php";
        // echo Card('Peaceful Piano', $arrayArt1, 'https://www.pianoramix.com/assets/media/298-peaceful-piano-spotify-300x300r.jpeg');
        // echo Card('This is what losing someone feels like', $arrayArt2, 'https://i.scdn.co/image/ab67616d00001e029a087af6a3bf8fa7d5db50e2');
        // echo Card('Top 50 - VietNam', $arrayArt3, 'https://charts-images.scdn.co/assets/locale_en/regional/daily/region_vn_default.jpg');
        ?>
    </div>

    <h1><a href="">Artist</a></h1>
    <a class="showAll" href="Home/ShowAllArtist">Show all</a>       
    <div class="card-showtest">

        <?php include_once "./src/Views/components/Card.php";
        $arrayArt2 = array('JVKE');
        ?>
        <?php if (!empty($data['arrArtist'])) :
            foreach ($data['arrArtist'] as $artist) : ?>
                <?php echo Card($artist['ArtistID'], $artist['ArtistName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($artist['ArtistImage']), $artist['ArtistDob']); ?>
        <?php endforeach;
        endif; ?>
        <?php
        // $arrayArt1 = array('Web5ngay');
        // $arrayArt2 = array('HieuNguyen');
        // $arrayArt3 = array('Thuần Podcast');
        // $arrayArt4 = array('Vì sao thể nhỉ!');
        // $arrayArt5 = array('Sunhuyn');
        // $arrayArt6 = array('The Rogan');
        // $arrayArt7 = array('MÂY Podcast');
        // $arrayArt8 = array('Tun Cảm Ơn');
        // $arrayArt9 = array('Vietcetera');
        // $arrayArt10 = array('Giang Ơi Radio');
        // include_once "../components/Card.php";
        // echo Card('Tri Kỉ Cảm Xúc', $arrayArt1, 'https://i.scdn.co/image/ab6765630000ba8af0ac6fb61b796aed7347f27d');
        // echo Card('HIEU.TV', $arrayArt2, 'https://i.scdn.co/image/ab6765630000ba8a5b61945f5f6bf820d3d43fbe');
        // echo Card('Thuần', $arrayArt3, 'https://i.scdn.co/image/aaab8e8e00afd69b8f96974ebc32e7a5ebf31050');
        // echo Card('Vì sao thế nhỉ!', $arrayArt4, 'https://i.scdn.co/image/ab6765630000ba8ab39c89714304bdc026f57cb0');
        // echo Card('Sunhuyn Podcast', $arrayArt5, 'https://i.scdn.co/image/ab6765630000ba8aeb5b14182d1f591c2df02a7d');
        // echo Card('The Joe Rogan Experience', $arrayArt6, 'https://i.scdn.co/image/9af79fd06e34dea3cd27c4e1cd6ec7343ce20af4');
        // echo Card('MÂY Podcast', $arrayArt7, 'https://i.scdn.co/image/ab67656300005f1fc6fb84589b4c059ff911753b');
        // echo Card('Đắp Chăn Nằm Nghe Tun Kể', $arrayArt8, 'https://i.scdn.co/image/ab6765630000ba8ab5a86f37275368a1d066e781');
        // echo Card('Have A Sip', $arrayArt9, 'https://i.scdn.co/image/ab6765630000ba8a917f9ae333ba086fd2d59c3e');
        // echo Card('Giang Ơi Radio', $arrayArt10, 'https://i.scdn.co/image/210fc188aed15156a4b341702122cabca5caad93');
        ?>
    </div>

    <h1><a href="">Album</a></h1>
    <a class="showAll" href="Home/ShowAllAlbum">Show all</a>
    <div class="haythucachkhac">
        <?php include_once "./src/Views/components/Card.php";
        $arrayArt2 = array('JVKE');
        ?>
        <?php if (!empty($data['arrAlbum'])) :
            foreach ($data['arrAlbum'] as $album) : ?>
                <?php echo Card($album['AlbumID'], $album['AlbumName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($album['AlbumImage']), $album['AmountSong']); ?>
        <?php endforeach;
        endif; ?>
        <?php
        // $arrayArt1 = array('Những gì mà bạn đang nghe. Ảnh bìa: thuy,MIN');
        // $arrayArt2 = array('Đông tới Tây, đây là những ca khúc thịnh hành nhất ở Việt Nam. Ảnh bìa: tlinh');
        // $arrayArt3 = array('Dòng chảy của rap Việt luôn cuồn cuộn. Ảnh bìa: Đen');
        // $arrayArt4 = array('Your daily update of the most played tracks right now - Global.');
        // $arrayArt5 = array('V-Pop đã đơm hoa trên những khúc ca này. Ảnh bìa: RPT MCK');
        // $arrayArt6 = array('Your weekly update of the most played tracks right now - Global.');
        // $arrayArt7 = array('Những ca khúc hay nhất từ dòng nhạc rất đa dạng. Ảnh bìa: Vũ');
        // $arrayArt8 = array('Make your shower more uplifting by singing along to these hits.');
        // $arrayArt9 = array('Playlist Coi Leray is on top of the Hottest 50!');
        // $arrayArt10 = array('Your daily update of the most played tracks right now - Vietnam.');

        // include_once "../components/Card.php";
        // echo Card('Thiên Hạ Nghe Gì', $arrayArt1, 'https://i.scdn.co/image/ab67706f0000000292f39a1f51d65e1b0d68781f');
        // echo Card('Hot Hits VietNam', $arrayArt2, 'https://i.scdn.co/image/ab67706f00000002899a5b5da66fb66d41c31b85');
        // echo Card('Hip-Hop Việt', $arrayArt3, 'https://i.scdn.co/image/ab67706f000000031200bb7811edb121a06937b3');
        // echo Card('Top 50 - Global', $arrayArt4, 'https://charts-images.scdn.co/assets/locale_en/regional/daily/region_global_default.jpg');
        // echo Card('V-Pop Không Thể Thiếu', $arrayArt5, 'https://i.scdn.co/image/ab67706f0000000261a8c4edd26fb6441b720273');
        // echo Card('Top Songs - Global', $arrayArt6, 'https://charts-images.scdn.co/assets_generated/locale_vi/regional/weekly/region_global_default.jpg');
        // echo Card('Indie Việt', $arrayArt7, 'https://i.scdn.co/image/ab676161000051749896fc9a2e28384f2d705c45');
        // echo Card('Songs to Sing in the Shower', $arrayArt8, 'https://i.scdn.co/image/ab67706f00000002329e2c5d3104f8c6a1d16a34');
        // echo Card('Todays Top Hits', $arrayArt9, 'https://i.scdn.co/image/ab67706f00000002b8ab81c772b59e3750917f5e');
        // echo Card('Top 50 - VietNam', $arrayArt10, 'https://charts-images.scdn.co/assets/locale_en/regional/daily/region_vn_default.jpg');


        ?>
    </div>
    <h1><a href="">Playlist</a></h1>
    <a class="showAll" href="Home/ShowAllPlaylist">Show all</a>
    <div class="bangxephangnoibat">
        <?php include_once "./src/Views/components/Card.php";
        $arrayArt2 = array('JVKE');
        ?>
        <?php if (!empty($data['arrPlaylist'])) :
            foreach ($data['arrPlaylist'] as $playlist) : ?>
                <?php echo Card($playlist['PlaylistID'], $playlist['PlaylistName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($playlist['PlaylistImage']), $playlist['AmountSong']); ?>
        <?php endforeach;
        endif; ?>
        <?php
        // $arrayArt1 = array('Your weekly update of the most played tracks right now - Global.');
        // $arrayArt2 = array('Your weekly update of the most played tracks right now - Vietnam.');
        // $arrayArt3 = array('Your daily update of the most played tracks right now - Global.');
        // $arrayArt4 = array('Your daily update of the most played tracks right now - Vietnam.');
        // $arrayArt5 = array('Your daily update of the most viral tracks right now - Global.');
        // $arrayArt6 = array('Your daily update of the most viral tracks right now - Vietnam.');
        // include_once "../components/Card.php";
        // echo Card('Top Songs - Global', $arrayArt1, 'https://charts-images.scdn.co/assets_generated/locale_vi/regional/weekly/region_global_default.jpg');
        // echo Card('Top Songs - VietNam', $arrayArt2, 'https://charts-images.scdn.co/assets_generated/locale_vi/regional/weekly/region_vn_default.jpg');
        // echo Card('Top Songs - Global', $arrayArt3, 'https://charts-images.scdn.co/assets/locale_en/regional/daily/region_global_default.jpg');
        // echo Card('Top 50 - VietNam', $arrayArt4, 'https://charts-images.scdn.co/assets/locale_en/regional/daily/region_vn_default.jpg');
        // echo Card('Viral - Global', $arrayArt5, 'https://charts-images.scdn.co/assets/locale_en/viral/daily/region_global_default.jpg');
        // echo Card('Viral 50 - VietNam', $arrayArt6, 'https://charts-images.scdn.co/assets/locale_en/viral/daily/region_vn_default.jpg');   
        ?>
    </div>

    <h1><a href="">Podcast</a></h1>
    <a class="showAll" href="Home/ShowAllPodcast">Show all</a>
    <div class="bangxephangnoibat">
        <?php include_once "./src/Views/components/Card.php";
        $arrayArt2 = array('JVKE');
        ?>
        <?php if (!empty($data['arrPodcast'])) :
            foreach ($data['arrPodcast'] as $podcast) : ?>
                <?php echo Card($podcast['PodcastID'], $podcast['PodcastName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($podcast['PodcastImage']), $podcast['PodcastAuthor']); ?>
        <?php endforeach;
        endif; ?>


        <?php
        // $arrayArt1 = array('Your weekly update of the most played tracks right now - Global.');
        // $arrayArt2 = array('Your weekly update of the most played tracks right now - Vietnam.');
        // $arrayArt3 = array('Your daily update of the most played tracks right now - Global.');
        // $arrayArt4 = array('Your daily update of the most played tracks right now - Vietnam.');
        // $arrayArt5 = array('Your daily update of the most viral tracks right now - Global.');
        // $arrayArt6 = array('Your daily update of the most viral tracks right now - Vietnam.');
        // include_once "../components/Card.php";
        // echo Card('Top Songs - Global', $arrayArt1, 'https://charts-images.scdn.co/assets_generated/locale_vi/regional/weekly/region_global_default.jpg');
        // echo Card('Top Songs - VietNam', $arrayArt2, 'https://charts-images.scdn.co/assets_generated/locale_vi/regional/weekly/region_vn_default.jpg');
        // echo Card('Top Songs - Global', $arrayArt3, 'https://charts-images.scdn.co/assets/locale_en/regional/daily/region_global_default.jpg');
        // echo Card('Top 50 - VietNam', $arrayArt4, 'https://charts-images.scdn.co/assets/locale_en/regional/daily/region_vn_default.jpg');
        // echo Card('Viral - Global', $arrayArt5, 'https://charts-images.scdn.co/assets/locale_en/viral/daily/region_global_default.jpg');
        // echo Card('Viral 50 - VietNam', $arrayArt6, 'https://charts-images.scdn.co/assets/locale_en/viral/daily/region_vn_default.jpg');   
        ?>
    </div>
</div>
<script>

</script>
<!-- </body>
</html> -->