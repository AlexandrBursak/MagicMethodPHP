<?php

class Message
{
  function __destruct()
  {
    echo 'Class had destruct'.PHP_EOL;
  }
}

$message = new Message();
unset($message);