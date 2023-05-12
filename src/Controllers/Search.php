<?php 

class Search extends Controller {
 
    private $Category;
    function __construct(){
        $this->Category = $this->model('Category');
    }
    public function index()
    {
        $arrCate = $this->Category->getCate();
        $this->view('Listener/index', [
            'Page'  => 'Search',
            'data'  => $arrCate
        ]);
    }
}

?>