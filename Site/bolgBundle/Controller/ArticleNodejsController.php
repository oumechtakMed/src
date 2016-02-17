<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleNodejsController extends Controller
{
  
   
   
   public function homenodejsAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:NodejsArticle:nodejs_home.html.twig");
	  
   }
   
     public function introducenodejsAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:NodejsArticle:nodejs_introduction.html.twig");
	  
   }
   
    public function testnodejsAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:NodejsArticle:nodejs_test.html.twig");
	  
   }
   
   
}