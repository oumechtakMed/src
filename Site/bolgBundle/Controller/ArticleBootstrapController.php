<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleBootstrapController extends Controller
{
  
   
   
   public function homebootstrapAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:BootstrapArticle:bootstrap_home.html.twig");
	  
   }
   
     public function introducebootstrapAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:BootstrapArticle:bootstrap_introduction.html.twig");
	  
   }
   
    public function testbootstrapAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:BootstrapArticle:bootstrap_test.html.twig");
	  
   }
   
   
}