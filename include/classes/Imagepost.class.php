<?php
class Imagepost extends Post {

	private $images = Array();
	private $text;

	function __construct($arr){
		$this->images = explode(";",$arr['images']);
		$this->text = $arr['text'];
		parent::__construct($arr);
		return $this;
	}

	public function getImages(){
		return $this->images;
	}

	public function setImages($images){
		$this->images = $images;
	}

	public function getText(){
		return $this->text;
	}

	public function setText($text){
		//Escape html
		$this->text = $text;
	}
}

?>
