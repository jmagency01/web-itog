<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 24.12.2018
 * Time: 13:43
 */

class searchController extends Controller
{



    public function SearchAction($get){
        $view = 'find-maps_view.php';
        $search = $this->searchModel->getSearchById($get);
        $title =  $search['title'];
        $data = [
            'title' => $title,
            'search' => $search
        ];
        parent::generateResponse($view, $data);

    }

}

