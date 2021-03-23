<?php

class Controller{

	private $template = "";
	
	public function __construct($request){
		$this->request = $request;
		$this->template = !empty($request["view"]) ? $request["view"] : "faq_list";
	}

	public function display(){
		$view = new View();
		$model = new Model();
		switch($this->template){
			case "insert":
				
				$categories = $model->get_categories();
				$view->setTemplate("insert");
				$view->setVariables("categories", $categories);
				break;

			case "faq_list":
			default:
				$faq_rows = $model->get_faq();
				$view->setTemplate("faq_list");
				$view->setVariables("faq_rows", $faq_rows);
		}
		return $view->loadTemplate();
	}
}
?>