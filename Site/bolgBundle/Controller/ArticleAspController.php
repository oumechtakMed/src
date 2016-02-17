<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleaspController extends Controller
{
  
   
   
   public function homeaspAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:AspArticle:asp_home.html.twig");
	  
   }
   
     public function introduceaspAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:AspArticle:asp_introduction.html.twig");
	  
   }
   
   public function testaspAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:AspArticle:asp_test.html.twig");
	  
   }
   
}