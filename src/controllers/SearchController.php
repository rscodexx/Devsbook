<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;
use src\models\User;

class SearchController extends Controller {

    private $loggedUser;

    public function __construct(){
        $this->loggedUser = UserHandler::checkLogin();
        if($this->loggedUser == false){
            $this->redirect('/login');
        }
    }

    public function index($atts = []) {

        $searchTerm = filter_input(INPUT_GET, 's');

        if(empty($searchTerm)){
            $this->redirect('/');
        }

        $users = UserHandler::searchUser( $searchTerm );

        $this->render('search', [
            'loggedUser' => $this->loggedUser,
            'searchTerm' => $searchTerm,
            'users' => $users
        ]);

    }

}