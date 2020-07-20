<?php
    //#####################################################################################
    // Constant
    define("TABLE_NAME", "table1");
    
    // Database connection parameters
    function init(){
        return mysqli_connect('localhost', 'admin', 'admin', 'phpsgm'); //host, username, passwd, database_name
    }
    //#####################################################################################


    // Allow to verify if a keyword exists in the database
    function isExist($entry){
        // Initialize database connection
        $conn = init();

        // Do your stuff
        $req = "SELECT * FROM " . TABLE_NAME.";";
        
        // send the query
        $res = $conn->query($req);

        while ($data = mysqli_fetch_array($res)) {
            if(strcasecmp($data['name'],$entry)==0){
                echo "<div class=\"alert alert-danger alert-dismissible fade show\">  
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>  
                        <strong>Error!</strong> This name already exists.  
                    </div>  ";
                return true;
            }
        }
        return false;
    }

    
    // Insert the keyword you want into the database
    function insertData($entry){
        $conn = init();
        $req = "INSERT INTO ".TABLE_NAME." VALUES ('$entry','29');";
        if(!isExist($entry)){
            $res = $conn->query($req);
            echo "<div class=\"alert alert-success alert-dismissible fade show\">  
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>  
                    <strong>Success!</strong> Your message has been sent successfully..  
                </div>  ";
        }
    }

?>