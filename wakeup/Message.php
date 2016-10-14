<?php
class Message
{
  private $text = 'Hello world';
  function __wakeup()
  {
    $this->text = 'Hello world!';
  }
}
$message = new Message();
echo $save_object = serialize($message); // O:7:"Message":1:{s:13:" Message text";s:11:"Hello world";}
unset($message);
$message = unserialize($save_object);
print_r($message);
//Message Object
//(
//  [text:Message:private] => Hello world!
//)
