<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleW3cssController extends Controller
{
  
   
   
   public function homew3cssAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:W3cssArticle:w3css_home.html.twig");
	  
   }
   
     public function introducew3cssAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:W3cssArticle:w3css_introduction.html.twig");
	  
   }
   
    public function testw3cssAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:W3cssArticle:w3css_test.html.twig");
	  
   }
   
}