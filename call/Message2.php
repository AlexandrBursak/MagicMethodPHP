<?php
class Message2
{
  static function __callStatic($method, $parameters)
  {
    echo "Запускаем статический метод: '" . $method . "' c параметром: '" . implode(', ', $parameters) . "'";
  }
}
Message2::save('Hello', 'world');