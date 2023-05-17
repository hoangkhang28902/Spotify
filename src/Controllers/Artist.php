<?php
class Artist extends Controller
{
    private $artistModel;

    function __construct()
    {
        $this->artistModel = $this->model('Artist');
    }

    function show($id)
    {
        $arrArtist = $this->artistModel->getArtist($id);
        $likeForUser = $this->artistModel;

        $this->view('Listener/index', [
            'listsong' => $arrArtist,
            'Page' => 'SongList',
            'like' => $likeForUser,
            'type' => 'Artist'
        ]);
    }
}
