<?php
class Message
{
  private $text = 'Hello world!';
  public function  __isset($property)
  {
    return isset($this->$property);
  }
}
$message = new Message();
echo isset($message->text); // true