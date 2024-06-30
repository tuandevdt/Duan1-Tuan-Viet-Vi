<?php

class Database {
    private $host = '127.0.0.1:3307';
    private $user = 'root';
    private $password = '';
    private $database = 'duanmau';
    private $connection;

    // Phương thức khởi tạo, mở kết nối với cơ sở dữ liệu
    public function __construct() {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getConnection() {
        return $this->connection;
    }

    // Phương thức thực hiện truy vấn SELECT
    public function select($sql) {
        $results = $this->connection->query($sql);
        if ($results === false) {
            echo "Error: " . $this->connection->error;
            return false;
        }
        $rows = array();
        while ($row = $results->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    // Phương thức thực hiện truy vấn INSERT, UPDATE hoặc DELETE
    public function query($sql) {
        $result = $this->connection->query($sql);
        if ($result === false) {
            echo "Error: " . $this->connection->error;
            return false;
        }
        // return true;
    }

    // Phương thức để ngắt kết nối
    public function __destruct() {
        $this->connection->close();
    }
}

?>
