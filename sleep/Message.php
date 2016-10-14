<?php
class Message
{
  public $text = 'Hello world';
  function __sleep()
  {
    return [$this->text];
  }
}
$message = new Message();
echo serialize($message);
// O:7:"Message":1:{s:11:"Hello world";N;}

