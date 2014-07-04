<?php
namespace HianoApp\Controller\Home;
use HianoApp\Model;
class IndexController extends \Hiano\Controller\Controller{
    function indexAction(){
        $user = new Model\User(['id' => 1]);
    }
}