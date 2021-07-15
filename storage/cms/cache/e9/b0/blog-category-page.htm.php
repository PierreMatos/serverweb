<?php 
class Cms60d8f4b535509684380433_16ad3f53684a81c9de67cc6a520a2b7bClass extends Cms\Classes\PageCode
{
public function onEnd()
{
// Optional - set the page title to the category name
if ($this->category)
$this->page->title = $this->category->name;
}
}
