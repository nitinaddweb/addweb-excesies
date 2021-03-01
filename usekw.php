<?php
trait msg {
  public function msg1() {
    echo "It is namespace example"; 
  }
}

class Welcome {
  use msg;
}

$obj = new Welcome();
$obj->msg1();
?>