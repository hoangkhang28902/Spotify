<?php 

class Search extends Controller {
 
    public function index()
    {

        $this->view('Listener/index', [
            'Page' => 'Search'
        ]);
    }

}

?>