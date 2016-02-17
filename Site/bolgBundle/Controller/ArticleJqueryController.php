<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleJqueryController extends Controller
{
  
   
   
   public function homejqueryAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:JqueryArticle:jquery_home.html.twig");
	  
   }
   
     public function introducejqueryAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:JqueryArticle:jquery_introduction.html.twig");
	  
   }
   
   public function testjqueryAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:JqueryArticle:jquery_test.html.twig");
	  
   }
   
}