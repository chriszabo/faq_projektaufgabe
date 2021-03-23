<?php
class View {

	private $template = "faq_list";
	private $template_vars= array();

	public function setVariables($key, $value){
		$this->template_vars[$key] = $value;
	}

	public function setTemplate($template){
		$this->template = $template;
	}

	public function loadTemplate() {
		$file = "templates/" . $this->template . ".php";
		$exists = file_exists($file);

		if ($exists){
			ob_start();
			include $file;
			$output = ob_get_contents();
			ob_end_clean();
				
			return $output;
		}
	}
}
?>