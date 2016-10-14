<?php
class Message
{
  private $text;
  function __construct($text)
  {
    $this->text = $text;
  }
  function __get($property)
  {
    return $this->$property;
  }
}
$message = new Message('Hello world');
echo $message->text;