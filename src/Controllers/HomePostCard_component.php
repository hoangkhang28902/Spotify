<?php 

class HomePostCard_component extends Controller {
   

    public function index()
    {
      

        $this->view('Listener/index_TopAll_PostCast', [
           
            'Page' => 'PostCard_component'
        ]);
    }

}

?>