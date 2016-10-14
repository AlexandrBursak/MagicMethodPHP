<?php
class Message
{
  private $text = 'Hello world';
  public function __toString()
  {
    return $this->text;
  }
}
$message = new Message();
print $message;

