<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleJquerymobileController extends Controller
{
  
   
   
   public function homejquerymobileAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:JquerymobileArticle:jquerymobile_home.html.twig");
	  
   }
   
     public function introducejquerymobileAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:JquerymobileArticle:jquerymobile_introduction.html.twig");
	  
   }
   
   public function testjquerymobileAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:JquerymobileArticle:jquerymobile_test.html.twig");
	  
   }
   
   
   
}