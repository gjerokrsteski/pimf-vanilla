<?php
return array(
  new \Pimf\Route('/hello/:firstname+', array('controller' =>'hello'), array('firstname' => '\w+')),
);