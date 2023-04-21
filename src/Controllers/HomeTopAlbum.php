<?php 

class HomeTopAlbum extends Controller {
   

    public function index()
    {
      

        $this->view('Listener/index_TopAll_PostCast', [
           
            'Page' => 'topAmbul'
        ]);
    }

}

?>