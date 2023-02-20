<?php
namespace FormModule\Controller;

use FormModule\Model\FormModel;

class PHPFormController {
    public FormModel $model;
    public $dataBaseHandle;
    public function __construct(FormModel $model) {
      $this->model = $model;
      $this->dataBaseHandle = new \Services\DataBaseHandle;
    }
    
    public function validateForm($data) {
      $ajaxData = '';
      //if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = isset($_POST['login']) ? $_POST['login'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        return ['password' =>$data];
        /*if (!empty($email)) {
          $ajaxData = [
            'login' => $_POST['login'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'confirm_password' => $_POST['confirm_password'],
            'name' => $_POST['name']
          ];
          $result = 0;
          if ($ajaxData['password'] !== $ajaxData['confirm_password']) {
            $result = -1;
          } else {
            preg_match('/^[a-zA-Z0-9_]{6,}/',  $_POST['login'], $matches, PREG_OFFSET_CAPTURE);
            if(empty($matches)) {
              $ajaxData['login'] = 'failure';
              $result++;
            }
            preg_match('/([a-zA-Zа-яА-ЯёЁ]{1}(\d+)|[a-zA-Zа-яА-ЯёЁ])[a-zA-Zа-яА-ЯёЁ\d]{5,}/', $_POST['password'], $matches, PREG_OFFSET_CAPTURE);
            if(empty($matches)) {
              $ajaxData['password'] = 'failure';
              $result++;
            }
            preg_match('/^[a-zA-Z0-9_]{2,}/',  $_POST['name'], $matches, PREG_OFFSET_CAPTURE);
            if(empty($matches)) {
              $ajaxData['login'] = 'failure';
              $result++;
            }
            preg_match('/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i',  $_POST['email'], $matches, PREG_OFFSET_CAPTURE);
            if(empty($matches)) {
              $ajaxData['email'] = 'failure';
              $result++;
            }
          }
          if($result === 0) {
            $ajaxData = ['result' => 'ok'];
            header('Location: /startpage.php');//$this ->  dataBaseHandle -> createDB($ajaxdata);
            //return $newAjaxData;
            exit;
          } elseif ($result === -1) {
            $ajaxData = ['result' => '-1'];
          }
        }
        if (empty($email)/* && !empty($login) && !empty($password)) {
          $ajaxData = [
            'login' => $_POST['login'],
            'password' => $_POST['password']
          ];
          /*if ($this -> dataBaseHandle -> readDB($ajaxdata)) {

          };
        }*/
      //}
      //return $ajaxData;
    }

    public function logIn() {
      $session = new \Services\DoSessions;
    }
  }
?>