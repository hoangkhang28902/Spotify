<?php 

class HomeAlbum extends Controller {
   

    public function index()
    {
        $this->view('Listener/index_Library', [
           
            'Page' => 'Album2'
        ]);
    }
}

?>