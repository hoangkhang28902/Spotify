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
            'Page' => 'SongList',
            'type' => 'Album'
        ]);
    }
}
