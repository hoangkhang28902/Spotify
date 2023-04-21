<?php 

class HomePlaylist extends Controller {
   

    public function index()
    {

        $this->view('Listener/index_Library', [
           
            'Page' => 'playlist2'
        ]);
    }

}

?>