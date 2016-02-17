<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleGooglemapsController extends Controller
{
  
   
   
   public function homegooglemapsAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:GooglemapsArticle:googlemaps_home.html.twig");
	  
   }
   
     public function introducegooglemapsAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:GooglemapsArticle:googlemaps_introduction.html.twig");
	  
   }
   
    public function testgooglemapsAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:GooglemapsArticle:googlemaps_test.html.twig");
	  
   }
   
}