<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleJavascriptController extends Controller
{
  
   
   
   public function homejavascriptAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:JavascriptArticle:javascript_home.html.twig");
	  
   }
   
     public function introducejavascriptAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:JavascriptArticle:javascript_introduction.html.twig");
	  
   }
   
   public function testjavascriptAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:JavascriptArticle:javascript_test.html.twig");
	  
   }
   
}