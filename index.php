<?php
    $mes = '';
    class Main {        
        private $host = "localhost";
        private $user = "root";
        private $paswd = "root";
        private $dbname = "php_test";
        private $query = "";
        private $db;
                
        function __construct() {
            $this->db = new mysqli($this->host, $this->user, $this->paswd, $this->dbname);
            if ($this->db->connect_errno) {
                echo "Could not connect to MySQL: ($this->db->connect_errno) " . $this->db->connect_error;
            }
        }
        
        public function request($param) {
            if (array_key_exists("form1", $param)){
                return $this->write($param);
            } else {
                return $this->read($param);
            }
            $this->db->close();
        }
        
        private function write($param) {
            $this->query = "INSERT INTO `phone-email` (`id`, `phone`, `email`) VALUES (NULL, '" . 
                    htmlentities($param["phone"], ENT_QUOTES) . "', '" . 
                    htmlentities($param["email"], ENT_QUOTES) ."');";
            $result = $this->db->query($this->query);
            if ($result === TRUE) {
                return "New record created successfully!";
            } else {
                return "Error: " . $this->query . "<br>" . $this->db->error;
            }
        }
        private function read($param) {
            $this->query = "SELECT * FROM `phone-email` WHERE `email` = '" . 
                    htmlentities($param["email"], ENT_QUOTES) . "';";
            $result = $this->db->query($this->query);
            if ($result === FALSE) {
                return "Error: " . $this->query . "<br>" . $this->db->error;
            } else {
                $row = $result->fetch_assoc();
                return ($row) ? $row : "Data not found.";
            }
        }
    }
    
    if ($_POST){
        $main = new Main();
        $mes = $main->request($_POST);
    }    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            h2, h3 {
                text-align: center;
            }
            form{
                width: 300px;
                margin: 16px auto;
                padding: 8px 16px;
                border: 1px solid lightblue;
            }
        </style>
    </head>
    <body>
        <?php
        if ($mes and is_array($mes)) {
            echo "<h2>" . $mes["phone"] . " = " . $mes["email"] . "</h2>";
        } elseif ($mes != '') {
            echo "<h2>" . $mes . "</h2>";
        }
        ?>
        <h3>Form 1</h3>
        <form action="index.php" method="POST">
            <input type="hidden" name="form1">
            <label>Phone: </label>
            <input type="tel" name="phone">
            <label>E-mail: </label>
            <input type="email" name="email">
            <button type="submit">Submit</button>
        </form>
        <h3>Form 2</h3>
        <form action="index.php" method="POST">
            <input type="hidden" name="form2">
            <label>E-mail: </label>
            <input type="email" name="email">
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
