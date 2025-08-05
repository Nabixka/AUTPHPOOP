<?php
include("DB.php");

    class User extends DB{

        public function getAll(){
            return self::$connect->query("SELECT * FROM user")->fetch_all(MYSQLI_ASSOC);
        }

        public function getById($id){
             return $this->connect->query("SELECT * FROM user Where id = '$id'")->fetch_assoc();
        }

        public function create($data){
            $name = $data['name'];
            $username = $data['username'];
            $password = $data['password'];

            return $this->connect->query("INSERT INTO user (name, username, password) VALUES ('$name', '$username', '$password')");
        }

        public function updateName($id, $name, $username){
            return $this->connect->query("UPDATE user SET name = '$name' username = '$username' WhERE id = '$id' ");
        }

        public function delete($id){
            return $this->connect->query("DELETE FROM user WHERE id = '$id' ");
        }

    }

   /* class User extends DB {

    public function getAll() {
        return self::$connect->query("SELECT * FROM user")->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        return self::$connect->query("SELECT * FROM user WHERE id = '$id'")->fetch_assoc();
    }

    public function create($data) {
        $name = $data['name'];
        $username = $data['username'];
        $password = $data['password'];
        return self::$connect->query("INSERT INTO user (name, username, password) VALUES ('$name', '$username', '$password')");
    }

    public function updateName($id, $name) {
        return self::$connect->query("UPDATE user SET name = '$name' WHERE id = '$id'");
    }

    public function delete($id) {
        return self::$connect->query("DELETE FROM user WHERE id = '$id'");
    }
} */



?>