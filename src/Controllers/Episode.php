<?php
class Episode extends Controller
{
    private $episodeModel;
    function __construct()
    {
        $this->episodeModel = $this->model('Episode');
    }

    function show($id)
    {
        $arrEpisode = $this->episodeModel->getEpisode($id);

        $this->view('Listener/index', [
            'listsong' => $arrEpisode,
            'Page' => 'DetailPodcast',
            'type' => 'Podcast',
        ]);
    }
}
