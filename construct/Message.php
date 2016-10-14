<?php
class Message
{
  public $text;
  function __construct($text)
  {
    $this->text = $text;
  }
}
$message = new Message('Hello world');

echo $message->text;

