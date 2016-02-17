<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PrincipalController extends Controller
{
  
   
   
   public function homeAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:Principal:home.html.twig");
	  
   }
   
   
  
   
  
}
