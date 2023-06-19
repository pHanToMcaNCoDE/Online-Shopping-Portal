<?php


class Brands{

    public function getBrands($bID, $bName, $bEmail, $contact, $status, $rating){
        $connect = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

        if($connect->connect_error){
            die('Cannot connect to the database'.$connect->connect_error);
        }else{

            $bID = $connect->real_escape_string($bID);
            $bName = $connect->real_escape_string($bName);
            $bEmail = $connect->real_escape_string($bEmail);
            $contact = $connect->real_escape_string($contact);
            $status = $connect->real_escape_string($status);
            $rating = $connect->real_escape_string($rating);

            // $sql = " VALUES('".$bID."','".$bName."','".$bEmail."','".$contact."','".$status."','".$rating."')";

            
            // $connect->query($sql);

            // return true;


            $sql = $connect->prepare("INSERT INTO Brands(`Brand_ID`, `Brand_Name`, `Brand_Email`, `Brand_Contact`, `Brand_Status`, `Brand_Rating`) VALUES (?, ?, ?, ?, ?, ?);");

            $sql->bind_param("ssssss", $bID, $bName, $bEmail, $contact, $status, $rating);

            $sql->execute();

    
            return true;
        }

        $connect->close();

    }  

}


?>