<?php
class LikeSong extends Controller
{
    private $songModel;

    function __construct()
    {
        $this->songModel = $this->model('LikeSong');
    }

    function show($id)
    {
        $arrSong = $this->songModel->getLikeSong($id);

        $this->view('Listener/index', [
            'listsong' => $arrSong,
            'Page' => 'SongList',
            'type' => 'Liked Song'
        ]);
    }
}
