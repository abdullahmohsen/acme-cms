<?php 
class Cms5f8c1a875e7d4205223812_aee928c70119930eaa3fc54d4bfbe0f3Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
