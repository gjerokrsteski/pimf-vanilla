<?php
namespace MyFirstBlog\Controller;

use Pimf\Controller\Base, Pimf\View, Pimf\Registry, Pimf\Util\Validator;

class Hello extends Base
{
  /**
   * A index action - this is a framework restriction!
   */
  public function indexAction()
  {
    echo new View(
          'hello.phtml',
          array(
            'blog_title'   => 'Welcome to PIMF Vanilla bundle',
            'blog_content' => 'Hello world!!!',
            'blog_footer'  => 'Learn the terrain and create something beautiful!'
          )
    );
  }
}