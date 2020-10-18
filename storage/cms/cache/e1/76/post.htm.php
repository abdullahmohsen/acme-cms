<?php 
class Cms5f8c3366e508e267065724_aa24e895deaa434aa6f2362626138816Class extends Cms\Classes\PageCode
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
