<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticlephpController extends Controller
{
  
   
   
   public function homephpAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:PhpArticle:php_home.html.twig");
	  
   }
   
     public function introducephpAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:PhpArticle:php_introduction.html.twig");
	  
   }
   
    public function testphpAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:PhpArticle:php_test.html.twig");
	  
   }
   
}