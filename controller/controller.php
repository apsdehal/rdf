
<?php
class Controller{
public static function onClickLink($link) {
header("Location:$link");
}
public function render($view){
include_once($view);
}
}
?>
