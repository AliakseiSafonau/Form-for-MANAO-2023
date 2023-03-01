<?php
namespace FormModule\View;

final class FormView {
    public $controller;
    public function __construct($controller) {
        $this -> controller = $controller;
      }
    public function render() {
        require $_SERVER['DOCUMENT_ROOT'].'/FormModule/View/Titles.php';
    }
}
?>