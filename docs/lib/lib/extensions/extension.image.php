<?php
class ImageExtension extends Extension{
	protected $allowDetail = true;
	protected $extensionString = 'image';

	public function getDetailCode($fileObj){
		return '<div class="markdown"><img src="'.$fileObj->getFullString(true).'" alt="#"/></div>';
	}
}

$ext=new ImageExtension();
$ext->register(array('jpg','gif','png'));
?>