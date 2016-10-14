<?php
class Message
{
  private $text = 'Hello world!';
  public function  __unset($property)
  {
    unset($this->$property);
  }
}
$message = new Message();
unset($message->text);