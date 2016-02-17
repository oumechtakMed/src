<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleCanvasController extends Controller
{
  
   
   
   public function homecanvasAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:CanvasArticle:canvas_home.html.twig");
	  
   }
   
     public function introducecanvasAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:CanvasArticle:canvas_introduction.html.twig");
	  
   }
   
    public function testcanvasAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:CanvasArticle:canvas_test.html.twig");
	  
   }
   
}