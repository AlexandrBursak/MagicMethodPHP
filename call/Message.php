<?php
class Message
{
  function __call($method, $parameters)
  {
    echo "Пытаемся запустить метод: '" . $method . "' 
    c параметром: '" . implode(', ', $parameters) . "'";
  }
}
$message = new Message();
$message->save('Hello', 'world');