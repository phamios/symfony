<?php

namespace Phs\Backend\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\EntityManager;


use Phs\Backend\Entity\Users;


class AdminPanelController extends Controller
{

  /**
  *The main of file when login into Backend
  **/
  public function indexAction(){
    $checklogin = $this->get('authlogin')->checkLogin();
    if($checklogin == 0){
      return $this->redirectToRoute("logincp");
    }
  }


/**
* Function: Login into System
* Return:
*/
  public function loginAction(){
    $checklogin = $this->get('authlogin')->checkLogin();
    if($checklogin == 0){
        $request = Request::createFromGlobals();
        $result = "";
        $name = $request->request->get('username');
        $pass = $request->request->get('userpass');
        $params = array(
          'username'=>$name,
          'userpass'=>$pass,
        );

        $db = $this->getDoctrine()->getManager();
        $result = $db->getDoctrine()->getRepository('BackendBundle:Users')->findOneBy($params);

        if(!$result){
          $result = "User not exits";
        }else {
          //Set session
          $this->get('authlogin')->setSessiongLogin($result->getUsername(),$result->getId(),$result->getUsertype());
          return $this->redirectToRoute('admincp');
        }
        return $this->render('backend\login.html.twig');
    }else{
      return redirectToRoute('admincp');
    }
  }
}
