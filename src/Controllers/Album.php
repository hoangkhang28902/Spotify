<?php
class Album extends Controller
{
    private $albumModel;

    function __construct()
    {
        $this->albumModel = $this->model('Album');
    }

    function show($id)
    {
        $arrAlbum = $this->albumModel->getAlbum($id);
        $arrArtist = $this->albumModel->getArtist($id);
        $likeForUser = $this->albumModel;
        $fullArtist = '';

        // foreach ($arrArtist as $artist) {
        //     $fullArtist .= $artist['ArtistName'] . ', ';
        // }

        for ($i = 0; $i < count($arrArtist); $i++) {
            $fullArtist .= $arrArtist[$i]['ArtistName'];

            if ($i != count($arrArtist) - 1) {
                $fullArtist .= ', ';
            }
        }

        $this->view('Listener/index', [
            'listsong' => $arrAlbum,
            'listartist' => $arrArtist,
            'artist' => $fullArtist,
            'like' => $likeForUser,
            'Page' => 'SongList',
            'type' => 'Album'
        ]);
    }

    function like() {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $likeSong = $this->albumModel->reactLike(2, $songId, date('Y-m-d'));
        }
    }

    function unLike() {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $unLikeSong = $this->albumModel->unLike(2, $songId);
        }      
    }

    function playSong() {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $playSong = $this->albumModel->countOfSong($songId);
        }
    }
}
