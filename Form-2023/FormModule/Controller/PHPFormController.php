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
      $ajaxData = [];
      if (array_key_exists('email', $data)) {
        $ajaxData = [
          'login' => $data['login'],
          'email' => $data['email'],
          'password' => $data['password'],
          'confirm_password' => $data['confirm_password'],
          'name' => $data['name']
        ];

        $result = 0;

        if ($ajaxData['password'] !== $ajaxData['confirm_password']) {
          $result = -1;
        } else {
          preg_match('/^[a-zA-Z0-9_]{6,}/',  $data['login'], $matches, PREG_OFFSET_CAPTURE);
          if (empty($matches)) {
            $ajaxData['login'] = 'failure';
            $result++;
          };
          preg_match('/([a-zA-Zа-яА-ЯёЁ]{1,}((\d+)|[a-zA-Zа-яА-ЯёЁ]+){1,})[a-zA-Zа-яА-ЯёЁ\d]{4,}/', $data['password'], $matches, PREG_OFFSET_CAPTURE);
          if(empty($matches)) {
            $ajaxData['password'] = 'failure';
            $result++;
          };
          preg_match('/^[a-zA-Z0-9_]{2,}/',  $data['name'], $matches, PREG_OFFSET_CAPTURE);
          if(empty($matches)) {
            $ajaxData['login'] = 'failure';
            $result++;
          };
          preg_match('/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i',  $data['email'], $matches, PREG_OFFSET_CAPTURE);
          if(empty($matches)) {
            $ajaxData['email'] = 'failure';
            $result++;
          };
        }

        if($result === 0) {
          $ajaxDataOut = $this -> dataBaseHandle -> readDB($ajaxData);
          if ($ajaxDataOut['email'] === 'failed' || $ajaxDataOut['login'] === 'failed') {
            $ajaxData =  $ajaxDataOut;
          } else {
            $this ->  dataBaseHandle -> createDB($ajaxData);
              $this->login($ajaxData);
              $ajaxData = ['result' => 'ok'];
          }
          } elseif ($result === -1) {
            $ajaxData = ['result' => '-1'];
          } 
        } else {
          $ajaxDataOut = $this -> dataBaseHandle -> readDB($data);
          if (is_array($ajaxDataOut['user'])) {
            if ($ajaxDataOut['login'] === 'ok') {
              $ajaxData = ['result' => 'ok'];
              foreach($ajaxDataOut['user'] as $key => $value) {
                if ($key === 'name') {
                  $this->login(['name' => $value]);
                  break;
                }
              }
            } else {
              $ajaxData = ['result' => 'non valid data'];
            }
          }else {
            $ajaxData = ['result' => 'non valid data'];
          }
        }
      return  $ajaxData;
    }
    
    public function logIn($data) {
      session_start();
      $utils = new \Helpers\Utils;

      if ($utils -> getCookie('name') === 'not') {
          $utils -> setCookie(['name' => 'name', 'title' => $data['name']]);
      }

      session_destroy();
    }
  }
?>