<?php

class Message
{
  public $text;
  function __construct( $text )
  {
    $this->text = $text;
  }
  public static function __set_state( array $array )
  {
    return new self( $array['text'] );
  }
}
$message = new Message( 'value' );
eval( '$new_message = ' . var_export( $message, true ) . ';' );
print_r( $new_message );