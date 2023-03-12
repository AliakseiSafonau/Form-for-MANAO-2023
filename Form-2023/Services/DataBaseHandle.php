<?php

    namespace Services;
    
    class DataBaseHandle {
        
        public function getData() {
            $json = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/database.json');
            $outData = json_decode($json, true);
            return $outData;
        }

        public function readDB($data) {
            $currdata = $this->getData();
            $result = ['login' => '', 'email' => '', 'user' => ''];
            foreach ($currdata as &$value) {
                foreach ($value as $key2 => $value2) {
                    if (array_key_exists('name', $data)) {
                        if ( $key2 === 'email' && $value2 === $data['email']) {
                            $result['email'] = 'failed';
                        }
                        if ( $key2 === 'login' && $value2 === $data['login']) {
                            $result['login'] = 'failed';
                        }
                    } else {
                        if ($key2 === 'login' && $value2 === $data['login']) {
                            $hashed_password = md5($data['password'].'qviply');
                            if ($value['password'] === $hashed_password) {
                                $result['login'] = 'ok';
                                $result['user'] = $value;
                            }
                        }
                    }
                }
            }
            return $result;
        }

        public function createDB($data) {
            $currdata = $this->getData();
            $currdata[] = $data;
            file_put_contents($_SERVER['DOCUMENT_ROOT'].'/database.json', json_encode($currdata, JSON_PRETTY_PRINT));
        }

        public function updateDB($data) {
            $currdata = $this->getData();
            foreach ($currdata as &$value) {
                foreach ($value as $key2 => $value2){
                    if ($key2 === 'login' && $value2 === $data['login'] &&
                        $key2 === 'password' && $value2 === $data['password']) {
                            $value[$data[3]] = $data[4];
                            break;
                    }
                };
            }
            file_put_contents($_SERVER['DOCUMENT_ROOT'].'/database.json', json_encode($currdata, JSON_PRETTY_PRINT));
        }
        public function deleteDB($data) {
            $currdata = $this->getData();
            $currdata[] = $data;
            file_put_contents($_SERVER['DOCUMENT_ROOT'].'/database.json', json_encode($currdata, JSON_PRETTY_PRINT));
        }
    }
?>
