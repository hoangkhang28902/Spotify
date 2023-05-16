<?php
class Podcast extends Controller
{
    private $podcastModel;
    private $episodeModel;
    function __construct()
    {
        $this->podcastModel = $this->model('Podcast');
        $this->episodeModel = $this->model('Episode');
    }

    function show($id)
    {
        $arrPodcast = $this->podcastModel->getPodcasts($id);
        $arrEpisode = $this->episodeModel->getEpisodes($id);
        
        $this->view('Listener/index', [
            'listsong' => $arrPodcast,
            'listsongepisode' => $arrEpisode,
            'Page' => 'DetailPodcast',
            'type' => 'Podcast',
        ]);
    }
    
    
}
