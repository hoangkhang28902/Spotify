<?php 

class HomeArtist extends Controller {
   

    public function index()
    {
      

        $this->view('Listener/index_Library', [
           
            'Page' => 'Artist2'
        ]);
    }

}

?>