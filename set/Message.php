<?php
class Message
{
  private $text;
  public function __set($property, $value)
  {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }
  }

  function __get($property)
  {
    return $this->$property;
  }
}
$message = new Message();
$message->text = 'Hello world';


echo $message->text;