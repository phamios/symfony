<?php

namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\Session\Session;

class Auth
{
  public function __construct(){

  }

  public function checkLogin(){
     $session = new Session();
    if($session->get('username') <> null ){
       return 1;
    } else {
       return 0;
    }
  }

  public function setSessionLogin($username,$userid,$usertype){
    $session = new Session();
    $session->set('username',$username);
    $session->set('usertype',$usertype);
    // $session->set('usertype',$usertype);
    // $session->set('userid',$userid);

    // $this->get('session')->set('username',$username);
    // $this->get('session')->set('usertype',$usertype);
    // $this->get('session')->set('username',$username);
  }

  public function logoutSession(){
    $session = new Session();
    $session->remove('username');
    $session->remove('usertype');
  }
}
