<?php 

class HomeController extends Controller {
    public function __construct() {
        $this->SongModel = $this->model('Song');
    }

    public function index()
    {
        $song = $this->SongModel->getSongs();

        $this->view('Listener/index', [
            'song' => $song,
            'Page' => 'ContentHome'
        ]);
    }

}

?>