<?php
class Message
{
  public static $howManyClones = 0;
  function __clone()
  {
    ++static::$howManyClones;
  }
}
$message = new Message();

for( $i=0; $i<10; $i++ )
{
  $new_mass = clone $message;
}
echo Message::$howManyClones;
