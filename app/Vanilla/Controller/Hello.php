<?php
namespace Vanilla\Controller;

use Pimf\Controller\Base, Pimf\View;

class Hello extends Base
{
  /**
   * A index action - this is a framework restriction!
   */
  public function indexAction()
  {
    $firstname = $this->request->fromGet()->get('firstname', array('World'));

    echo new View(
          'hello.phtml',
          array(
            'blog_title'   => 'Welcome to PIMF Vanilla bundle',
            'blog_content' => 'Hello '.join(' ', $firstname).'!!!',
            'blog_footer'  => 'Please type at the URL "/hello/Barry" and see what happens!'
          )
    );
  }
}