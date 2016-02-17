<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleHtmlController extends Controller
{
  
   
   
   public function homehtmlAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:HtmlArticle:html_home.html.twig");
	  
   }
   
     public function testhtmlAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:HtmlArticle:html_test.html.twig");
	  
   }
   
   
   
   
   
   public function introducehtmlAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:HtmlArticle:html_introduction.html.twig");
	  
   }
   
   
   public function basichtmlAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:HtmlArticle:html_basic.html.twig");
	  
   }
   
   
   public function elementshtmlAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:HtmlArticle:html_elements.html.twig");
	  
   }
   
  
}
