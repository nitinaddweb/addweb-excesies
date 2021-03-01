<?php
namespace Html;
class naming {
  public $name;
  public $surname;
  public function msg() {
    echo "name is person is :=> <b><u> $this->name </b></u> and last name is :=> <b><u>$this->surname"."<br>";
    
  }
}
$table = new naming();
$table->name = "Nitin";
$table->surname = "chauhan";
?>


<?php
$table->msg();
?>
