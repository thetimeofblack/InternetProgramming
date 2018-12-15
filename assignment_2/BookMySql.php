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

    function __construct(){

     //echo "DataBase Connection Object create successfully!<br/>" ;
    }

    /**
     *      save book into the database
     */
    public function giveBook($bookobject){
        $this->bookob = $bookobject;
    }
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
            echo "<br/>".$query."<br/>" ;
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

        $sql = "SELECT bookid, bookname, bookstatus,title,rate,bookcomment,author FROM library.book order by bookstatus";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

                echo "<div class='w3-card w3-yellow'>
                       <p>id: " .$row['bookid']. " Name:".$row["bookname"]." Author: ".$row["author"]." Title: ".$row["title"]." BookStatus ". $row["bookstatus"]." Rate: ".$row["rate"]." bookcomment: ".$row["bookcomment"]."</p>
                    </div> ";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }
    public function showBookStatusList(){
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

        $sql = "SELECT bookid, bookname, bookstatus,title,rate,bookcomment,author FROM library.book order by bookstatus";
        $result = $conn->query($sql);
        echo "<div class=\"w3-container\">
        <h2 class='w3-center'>Book Table</h2>
        <p class='w3-center'>Order by Status:</p>
         ";
        echo "<table class=\"w3-table-all w3-large\">";
        echo "<tr>
        <th>Name</th>
        <th>Title</th>
        <th>Author</th>
        <th>Status</th>
        <th>Rate</th>
        <th>Comment</th>
        </tr>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["bookname"]."</td>";
                echo "<td>".$row["title"]."</td>";
                echo "<td>".$row["author"]."</td>";
                echo "<td>".$row["bookstatus"]."</td>";
                echo "<td>".$row["rate"]."</td>";
                echo "<td>".$row["bookcomment"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }
    public function showBookTitleList(){
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

        $sql = "SELECT bookid, bookname, bookstatus,title,rate,bookcomment,author FROM library.book order by title";
        $result = $conn->query($sql);
        echo "<div class=\"w3-container\">
        <h2 class='w3-center'>Book Table</h2>
        <p class='w3-center'>Order by Title:</p>
         ";
        echo "<table class=\"w3-table-all w3-large\">";
        echo "<tr>
        <th>Name</th>
        <th>Title</th>
        <th>Author</th>
        <th>Status</th>
        <th>Rate</th>
        <th>Comment</th>
        </tr>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

                echo "<tr>";
                echo "<td>".$row["bookname"]."</td>";
                echo "<td>".$row["title"]."</td>";
                echo "<td>".$row["author"]."</td>";
                echo "<td>".$row["bookstatus"]."</td>";
                echo "<td>".$row["rate"]."</td>";
                echo "<td>".$row["bookcomment"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }

    public function showBookRatingList(){
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

        $sql = "SELECT bookid, bookname, bookstatus,title,rate,bookcomment,author FROM library.book order by rate ";
        $result = $conn->query($sql);
        echo "<div class=\"w3-container\">
        <h2 class='w3-center'>Book Table</h2>
        <p class='w3-center'>Order by Rate:</p>
         ";
        echo "<table class=\"w3-table-all w3-large\">";
        echo "<tr>
        <th>Name</th>
        <th>Title</th>
        <th>Author</th>
        <th>Status</th>
        <th>Rate</th>
        <th>Comment</th>
        </tr>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["bookname"]."</td>";
                echo "<td>".$row["title"]."</td>";
                echo "<td>".$row["author"]."</td>";
                echo "<td>".$row["bookstatus"]."</td>";
                echo "<td>".$row["rate"]."</td>";
                echo "<td>".$row["bookcomment"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
            }
        echo "</table>";
        echo "</div>";

        $conn->close();
    }
}


?>


