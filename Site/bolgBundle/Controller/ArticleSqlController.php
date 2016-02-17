<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleSqlController extends Controller
{
  
   
   
   public function homesqlAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:SqlArticle:sql_home.html.twig");
	  
   }
   
     public function introducesqlAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:SqlArticle:sql_introduction.html.twig");
	  
   }
   
    public function testsqlAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:SqlArticle:sql_test.html.twig");
	  
   }
   
}