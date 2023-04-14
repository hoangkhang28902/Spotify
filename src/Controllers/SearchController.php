<?php 

class SearchController extends Controller {
 
    public function index()
    {

        $this->view('Listener/index', [
            'Page' => 'Search'
        ]);
    }

}

?>