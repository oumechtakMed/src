<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleJsonController extends Controller
{
  
   
   
   public function homejsonAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:JsonArticle:json_home.html.twig");
	  
   }
   
     public function introducejsonAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:JsonArticle:json_introduction.html.twig");
	  
   }
   
    public function testjsonAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:JsonArticle:json_test.html.twig");
	  
   }
   
}