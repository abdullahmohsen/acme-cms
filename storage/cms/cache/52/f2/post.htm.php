<?php 
class Cms5f8c1c9ded297125163716_97973ddbe801738804932a732bb7f23eClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
