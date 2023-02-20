<?php
namespace FormModule\View;

final class FormView {
    public $controller;
    public function __construct($controller) {
        $this -> controller = $controller;
      }
    public function render() {
        require './FormModule/View/Titles.php';
    }
}
?>