<?php
try{

    define("HOST", "localhost");

    define("DBNAME", "coffee-blend");


    define("USER","root");
    define("PASS","");

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."",USER,PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch( PDOException $Exception ) {
        // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
        // String.
        echo $Exception->getMessage( );
}


    // if($conn==true){
    //     echo "connection established";
    // }else{
    //     echo "db error";
    // }
