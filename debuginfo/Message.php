<?php
class Message
{
  private $text;
  function __construct($text)
  {
    $this->text = $text;
  }
  public function __debugInfo() {
    return [
      'Result' => 'denied'
    ];
  }
}
var_dump(new Message('Hello world'));
// object(Message)#1 (1) {
// ["Result"]=>
//   string(6) "denied"
// }