<?php
class Message
{
  private $text;
  function __invoke($value)
  {
    $this->text = $value;
  }
}
$message = new Message();
$message('Hello world!');

