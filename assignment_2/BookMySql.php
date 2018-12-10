<?php
/**
 * Created by PhpStorm.
 * User: 11914
 * Date: 2018/12/9
 * Time: 13:32
 */


class DBConnection{
    private $bookob ;
    private $database;

    function __construct($bookobject){
        $this->bookob = $bookobject;

     echo "DataBase Connection Object create successfully!" ;
    }

    /**
     *      save book into the database
     */
    public function saveBook(){
        $database = new mysqli('localhost','root', 'heyining','library');
        if($database) {
            $name = $this->bookob->getBookName();
            $author = $this->bookob->getAuthor();
            $status = $this->bookob->getStatus();
            $title = $this->bookob->getTitle();
            $comment = $this->bookob->getComment();
            $rate = $this->bookob->getRate();

            $query = "insert into library.book(bookname , author , title, bookstatus ,rate ,bookcomment) values('" .
                $name . "','" .
                $author . "','" .
                $title . "','" .
                $status . "','" .
                $rate . "','" .
                $comment .
                "')";
            echo $query."<br/>" ;
            $database->query($query);
            $database->close();
        }

    }

    public function showBookList(){
        $servername = "localhost";
        $username = "root";
        $password = "heyining";
        $dbname = "library";

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT bookid, bookname, bookstatus FROM library.book";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["bookid"]. " - Name: " . $row["bookname"]. " " . $row["bookstatus"]. "<br/>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }
}

$db = new mysqli('localhost','root', 'heyining','library');
if($db) echo "DataBase Connection Successful" ;
?>