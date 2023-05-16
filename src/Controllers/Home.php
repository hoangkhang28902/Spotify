<?php

class Home extends Controller
{
    public function __construct()
    {
        $this->SongModel = $this->model('Song');
        $this->ArtistsModel = $this->model('Artist');
        $this->AlbumModel = $this->model('Album');
        $this->PlaylistModel = $this->model('Playlist');
        $this->PodcastModel = $this->model('Podcast');
        $this->HistorySong = $this->model('HistorySong');
    }

    public function index()
    {
        $arrSong = $this->SongModel->getSongsLimit(0, 5);
        $arrArtist = $this->ArtistsModel->getArtistsLimit(0, 5);
        $arrAlbum = $this->AlbumModel->getAlbumsLimit(0, 5);
        $arrPlaylist = $this->PlaylistModel->getPlaylistsLimit(0, 5);
        $arrPodcast = $this->PodcastModel->getPodcastsLimit(0, 5);

        $song = $this->SongModel->getSongs();
        $artist = $this->ArtistsModel->getArtists();
        $album = $this->AlbumModel->getAlbums();
        $playlist = $this->PlaylistModel->getPlaylists();
        $podcast = $this->PodcastModel->getPodcast();

        $historySong = $this->HistorySong->getSong(5); /// 1 => userId
        $this->view('Listener/index', [

            'song' => $song,
            'artist' => $artist,
            'album' => $album,
            'playlist' => $playlist,
            'podcast' => $podcast,

            'arrSong' => $arrSong,
            'arrArtist' => $arrArtist,
            'arrAlbum' => $arrAlbum,
            'arrPlaylist' => $arrPlaylist,
            'arrPodcast' => $arrPodcast,
            'dataHistory'   => $historySong,
            'Page' => 'ContentHome'
        ]);
    }

    public function ShowAllSong()
    {
        $song = $this->SongModel->getSongs();

        $this->view('Listener/index', [
            'Page' => 'ShowAllSong',
            'song' => $song,
        ]);
    }

    public function ShowAllArtist()
    {
        $artist = $this->ArtistsModel->getArtists();
        $this->view('Listener/index', [
            'Page' => 'ShowAllArtist',
            'artist' => $artist,
        ]);
    }

    public function ShowAllAlbum()
    {
        $album = $this->AlbumModel->getAlbums();
        $this->view('Listener/index', [
            'Page' => 'ShowAllAlbum',
            'album' => $album,
        ]);
    }

    public function ShowAllPlaylist()
    {
        $playlist = $this->PlaylistModel->getPlaylists();
        $this->view('Listener/index', [
            'Page' => 'ShowAllPlaylist',
            'playlist' => $playlist,
        ]);
    }

    public function ShowAllPodcast()
    {
        $podcast = $this->PodcastModel->getPodcast();
        $this->view('Listener/index', [
            'Page' => 'ShowAllPodcast',
            'podcast' => $podcast,
        ]);
    }

    public function song($id)
    {
        $song = $this->SongModel->getSongById($id);

        $this->view('Listener/index', [
            'song' => $song,
            'Page' => 'SongList',
            'type' => 'Song'
        ]);
    }

    // Phần Search
    function searchSong()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $arrays = [];
            if (trim($name) != '') {
                // artist
                $artist = $this->ArtistsModel->search($name);
                $arrays['artist']  = $artist;
                // podcast
                $podcast = $this->PodcastModel->search($name);
                $arrays['podcast']  = $podcast;
                // playlist
                $playlist = $this->PlaylistModel->search($name);
                $arrays['playlist']  = $playlist;
                // album
                $album = $this->AlbumModel->search($name);
                $arrays['album']  = $album;
            } else {
                // artist
                $artist = $this->ArtistsModel->getAll();
                $arrays['artist']  = $artist;
                // podcast
                $podcast = $this->PodcastModel->getAll();
                $arrays['podcast']  = $podcast;
                // playlist
                $playlist = $this->PlaylistModel->getAll();
                $arrays['playlist']  = $playlist;
                // album
                $album = $this->AlbumModel->getAll();
                $arrays['album']  = $album;
            }
            $song = $this->SongModel->search($name);
            $arrays['song']  = $song;
            if ($arrays != null &&  count($arrays) > 0) {
                echo json_encode([
                    "status"    => 200,
                    "data"      => $arrays,
                ]);
            } else {
                echo json_encode([
                    "status"    => 203,
                ]);
            }
        } else {
            echo json_encode([
                "status"    => 401,
            ]);
        }
    }
    
    function album($id)
    {
        $albumartist = $this->ArtistsModel->getAlbum($id);
        $rowsId = [];
        foreach ($albumartist as $val) {
            $rowsId[] = $val['ArtistID'];
        }
        $songartist = $this->ArtistsModel->listIdSong($rowsId);
        $songId = [];
        foreach ($songartist as $val) {
            $songId[] = $val['SongID'];
        }
        $results = $this->SongModel->getList($songId);
        $this->view('Listener/index', [
            'results' => $results,
            'Page' => 'category',
        ]);
    }
    
    function artist($id)
    {
        $songartist = $this->ArtistsModel->listIdSong([$id]);
        $songId = [];
        foreach ($songartist as $val) {
            $songId[] = $val['SongID'];
        }
        $results = $this->SongModel->getList($songId);
        $this->view('Listener/index', [
            'results' => $results,
            'Page' => 'category',
        ]);
    }
    function playlist($id)
    {
        $songPlaylist = $this->PlaylistModel->listIdSong([$id]);
        $songId = [];
        foreach ($songPlaylist as $val) {
            $songId[] = $val['SongID'];
        }
        $results = $this->SongModel->getList($songId);
        $this->view('Listener/index', [
            'results' => $results,
            'Page' => 'category',
        ]);
    }

    function ShowAllHistory()
    {
        $song = $this->HistorySong->showAll(5); /// 1 => userId
        $this->view('Listener/index', [
            'Page' => 'ShowAllRecend',
            'song' => $song,
        ]);
    }
    // Clear All:
    function ClearAllHistory()
    {
        $this->HistorySong->clearAll(5); /// 1 => userId
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
