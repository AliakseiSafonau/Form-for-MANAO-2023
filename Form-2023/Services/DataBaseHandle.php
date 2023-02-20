<?php

    namespace Services;
    
    class DataBaseHandle {
        
        public function getData() {
            $json = file_get_contents('DataBase/database.json');
            return json_decode($json, true);
        }

        public function readDB($data) {
            $currdata = $this->getData();
            $result = 0;
            foreach ($currdata as &$value) {
                foreach ($value as $key2 => $value2){
                    if ($key2 === 'login' && $value2 === $data['login'] &&
                        $key2 === 'password' && $value2 === $data['password']) {
                            $result = $value;
                            break;
                    }
                };
            }
            return $result;
        }

        public function createDB($data) {
            $currdata = $this->getData();
            $currdata[] = $data;
            file_put_contents('DataBase/database.json', json_encode($currdata, JSON_PRETTY_PRINT));
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
            file_put_contents('DataBase/database.json', json_encode($currdata, JSON_PRETTY_PRINT));
        }
        public function deleteDB($data) {
            $currdata = $this->getData();
            $currdata[] = $data;
            file_put_contents('DataBase/database.json', json_encode($currdata, JSON_PRETTY_PRINT));
        }
    }
?>
