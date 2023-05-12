<?php
class Playlist extends Controller
{
    private $playlistModel;

    function __construct()
    {
        $this->playlistModel = $this->model('Playlist');
    }

    function show($id)
    {
        $arrPlaylist = $this->playlistModel->getPlaylist($id);
        $likeForUser = $this->playlistModel->getLike(2);
        $reactLikePl = $this->playlistModel;
        $this->view('Listener/index', [
            'listsong' => $arrPlaylist,
            'like' => $likeForUser,
            'reactLike' => $reactLikePl,
            'Page' => 'SongList',
            'type' => 'Playlist'
        ]);
    }
}
