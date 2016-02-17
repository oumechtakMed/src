<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleAngularjsController extends Controller
{
  
   
   
   public function homeangularjsAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:AngularjsArticle:angularjs_home.html.twig");
	  
   }
   
     public function introduceangularjsAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:AngularjsArticle:angularjs_introduction.html.twig");
	  
   }
   
   public function testangularjsAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:AngularjsArticle:angularjs_test.html.twig");
	  
   }
   
}