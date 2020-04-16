<?php


namespace App\controller;
use Symfony\Component\HttpFoundation\Response;
/**
 *
 */
class helloController extends AbstractController
{

  function hello()
  {
      return new response('hello');
  }
}
