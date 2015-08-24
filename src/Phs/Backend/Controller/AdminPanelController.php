<?php

namespace Phs\Backend\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class AdminPanelController extends Controller
{

  /**
  *The main of file when login into Backend
  **/
  public function indexAction(){
    $checklogin = $this->get('authlogin')->checkLogin();
    if($checklogin == 0){
      return $this->redirect
    }
  }
}
