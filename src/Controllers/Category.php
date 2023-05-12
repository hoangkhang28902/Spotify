<?php
class Category extends Controller
{
    private $Category;
    private $songModel;

    function __construct()
    {
        $this->Category = $this->model('Category');
        $this->songModel = $this->model('Song');
    }

    function index($id)
    {
        $arrCate = $this->Category->listSongId($id);
        $rowsId = [];
        foreach($arrCate as $val){
            $rowsId[] = $val['SongID'];
        }
        $results = $this->songModel->getList($rowsId);
      
        $this->view('Listener/index', [
            'Page'      => 'category',
            'results'   => $results
        ]);
    }
}
