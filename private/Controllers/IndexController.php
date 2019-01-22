<?php

class IndexController extends Controller
{

    public function indexAction(){
        $title = 'Главная';
        $view = 'index_view.php';
        $data = [
            'title'=>$title,
        ];
       parent::generateResponse($view, $data);

    }

}

?>
