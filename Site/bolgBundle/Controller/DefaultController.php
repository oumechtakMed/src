<?php

namespace Site\bolgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction(){
		return $this->render("SitebolgBundle:Default:index.html.twig");
	}
	
	 public function articleAction($id,$title){
		return $this->render("SitebolgBundle:Default:article.html.twig", array(
		
		'articleId' => $id,
		'articleTitle' => $title
		
		));
	}
	
	
	public function pageAction($id){
		return $this->render("SitebolgBundle:Default:page.html.twig", array(
		
		'pageId' => $id
		
		
		));
	}
}
