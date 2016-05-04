<?php
$connection = mysqli_connect("localhost","root","");
    if(!$connection){
        die("Database connection failed:".mysql_error());
    }
    
    
    mysqli_query($connection,"DROP DATABASE fiesta;");
    
    $db = mysqli_query($connection,"CREATE DATABASE fiesta;");
    if(!$db)
    {
        echo "database creation failed".mysqli_error($connection);
        
    }
    mysqli_select_db($connection,"fiesta");
    
    
    $tables_created = mysqli_query($connection,"CREATE TABLE EVENT(
                                    DATE DATE NOT NULL,
                                    EVENT_ID INT(10) NOT NULL AUTO_INCREMENT ,
                                    NAME VARCHAR(30),
                                    VENUE VARCHAR(30),
                                   
                                    AVAILABILITY VARCHAR(30),
                                    STATUS INT(3),
                                    HIT_COUNTER INT(8),
                                    SHORT_NOTE VARCHAR(200),
                                    ENTRY_FEE FLOAT,
                                    FEATURED BOOLEAN,
                                    FACEBOOK_LINK VARCHAR(200),
                                    ORGANIZATION VARCHAR(100),
                                    PRIMARY KEY(EVENT_ID)
                                    
                                    );");
    if(!$tables_created){
        die("table2 creation failed".mysqli_error($connection));
    
    }
    echo "Table2 created\n";
   
     $tables_created = mysqli_query($connection,"CREATE TABLE REGISTERED_USER(
                                   USER_ID INT(10) NOT NULL AUTO_INCREMENT,
                                   FIRST_NAME VARCHAR(30),
                                   LAST_NAME VARCHAR(30),
                                   PASSWORD VARCHAR(30),
                                   CONTACT_NUMBER INT(15),
                                   ADDRESS VARCHAR(30),
                                   DOB DATE,
                                   GENDER INT(1),
                                   EMAIL VARCHAR(30),
                                   PRIMARY KEY(USER_ID)
                                    );");
    if(!$tables_created){
        die("table3 creation failed".mysqli_error($connection));
    
    }
    echo "Table3 created\n";
    
     
    
    
    
     $tables_created = mysqli_query($connection,"CREATE TABLE EVENT_HOST(
                                   
                                   ID INT(10) NOT NULL AUTO_INCREMENT,
                                   USER_ID INT(10) NOT NULL ,
                                   EVENT_ID INT(10) NOT NULL,
                                   
                                  
                                   FOREIGN KEY (USER_ID) REFERENCES REGISTERED_USER(USER_ID),
                                   FOREIGN KEY (EVENT_ID) REFERENCES EVENT(EVENT_ID),
                                   PRIMARY KEY(ID)
                                 
                                    );");
    if(!$tables_created){
        die("table4 creation failed".mysqli_error($connection));
    
    }
    echo "Table4 created\n";
    
    $tables_created = mysqli_query($connection,"CREATE TABLE NOTES(
                                    NOTE_ID INT(10) NOT NULL AUTO_INCREMENT,
                                    ARTICLE TEXT,
                                    RUMOR TEXT,
                                    TAG VARCHAR(30),
                                    EVENT_ID INT(10) NOT NULL,
                                    
                                    PRIMARY KEY(NOTE_ID),
                                    FOREIGN KEY (EVENT_ID) REFERENCES EVENT(EVENT_ID)
                                    );");
    if(!$tables_created){
        die("table5 creation failed".mysqli_error($connection));
    
    }
    echo "Table5 created\n";

    
      $tables_created = mysqli_query($connection,"CREATE TABLE COMMENT(
                                   COMMENT_ID INT(10) NOT NULL AUTO_INCREMENT,
                                   COMMENT TEXT,
                                   USER_ID INT(10) NOT NULL ,
                                   EVENT_ID INT(10) NOT NULL,
                                   
                                   PRIMARY KEY(COMMENT_ID), 
                                   FOREIGN KEY (USER_ID) REFERENCES REGISTERED_USER(USER_ID),
                                   FOREIGN KEY (EVENT_ID) REFERENCES EVENT(EVENT_ID)
                                 
                                    );");
    if(!$tables_created){
        die("table7 creation failed".mysqli_error($connection));
    
    }
    echo "Table7 created\n";
    
     $tables_created = mysqli_query($connection,"CREATE TABLE VIDEO(
                                   VIDEO_ID INT(10) NOT NULL AUTO_INCREMENT,
                                   VIDEO BINARY,
                                   PRIMARY KEY(VIDEO_ID), 
                                  
                                   EVENT_ID INT(10) NOT NULL,
                                   
                                   FOREIGN KEY (EVENT_ID) REFERENCES EVENT(EVENT_ID)
                                 
                                    );");
    if(!$tables_created){
        die("table8 creation failed".mysqli_error($connection));
    
    }
    echo "Table8 created\n";
    
     $tables_created = mysqli_query($connection,"CREATE TABLE INVITED_GUESTS(
                                   GUEST_ID INT(10) NOT NULL AUTO_INCREMENT,
                                   NAME VARCHAR(30),
                                   DETAILS TEXT,
                                   PRIMARY KEY(GUEST_ID), 
                                  
                                   EVENT_ID INT(10) NOT NULL,
                                   
                                   FOREIGN KEY (EVENT_ID) REFERENCES EVENT(EVENT_ID)
                                 
                                    );");
    if(!$tables_created){
        die("table9 creation failed".mysqli_error($connection));
    
    }
    echo "Table9 created\n";
    
      $tables_created = mysqli_query($connection,"CREATE TABLE IMAGE(
                                   IMAGE_ID INT(10) NOT NULL AUTO_INCREMENT,
                                   IMAGE BINARY,
                                   PRIMARY KEY(IMAGE_ID), 
                                  
                                   EVENT_ID INT(10) NOT NULL,
                                   
                                   FOREIGN KEY (EVENT_ID) REFERENCES EVENT(EVENT_ID),
                                   
                                   USER_ID INT(10) NOT NULL, 
                                   FOREIGN KEY (USER_ID) REFERENCES REGISTERED_USER(USER_ID)
                                   
                                  
                                 
                                    );");
    if(!$tables_created){
        die("table10 creation failed".mysqli_error($connection));
    
    }
    echo "Table10 created\n";
    
    
    
?>

