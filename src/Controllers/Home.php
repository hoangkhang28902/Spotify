<?php 

class Home extends Controller {
    public function __construct() {
        $this->SongModel = $this->model('Song');
        $this->ArtistsModel = $this->model('Artist');
        $this->AlbumModel = $this->model('Album');
        $this->PlaylistModel = $this->model('Playlist');
        $this->PodcastModel = $this->model('Podcast');
    }

    public function index()
    {
        $song = $this->SongModel->getSongs();
        $artist = $this->ArtistsModel->getArtist();
        $album = $this->AlbumModel->getAlbum();
        $playlist = $this->PlaylistModel->getPlaylist();
        $podcast = $this->PodcastModel->getPodcast();
        
        $this->view('Listener/index', [
            'song' => $song,
            'Page' => 'ContentHome',
            'artist' => $artist,
            'album' => $album,
            'playlist' => $playlist,
            'podcast' => $podcast,
            'Page' => 'ContentHome'
        ]);
    }

    public function song($id)
    {
        $song = $this->SongModel->getSongById($id);

        $this->view('Listener/index', [
            'song' => $song,
            'Page' => 'Playlist',
        ]);
    }

}

?>