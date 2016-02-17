<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleXmlController extends Controller
{
  
   
   
   public function homexmlAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:XmlArticle:xml_home.html.twig");
	  
   }
   
     public function introducexmlAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:XmlArticle:xml_introduction.html.twig");
	  
   }
   
    public function testxmlAction(){
	   
	   
	   
	   
	 return $this -> render("SitebolgBundle:XmlArticle:xml_test.html.twig");
	  
   }
   
}