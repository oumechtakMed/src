<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleAjaxController extends Controller
{
  
   
   
   public function homeajaxAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:AjaxArticle:ajax_home.html.twig");
	  
   }
   
     public function introduceajaxAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:AjaxArticle:ajax_introduction.html.twig");
	  
   }
   
   public function testajaxAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:AjaxArticle:ajax_test.html.twig");
	  
   }
   
}