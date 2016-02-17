<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleSvgController extends Controller
{
  
   
   
   public function homesvgAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:SvgArticle:svg_home.html.twig");
	  
   }
   
     public function introducesvgAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:SvgArticle:svg_introduction.html.twig");
	  
   }
   
    public function testsvgAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:SvgArticle:svg_test.html.twig");
	  
   }
   
}