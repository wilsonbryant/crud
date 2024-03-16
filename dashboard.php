<!DOCTYPE html>
<html>
    <head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title></title>
        <style>
            body{
                background-image : url("1.jpg");
                color : white;
            }
            header{
                text-align : center;
                font-size : 24px;
                font-family : forte;
            }
            .menu{
                background-color : grey;
                padding : 4em;
                width : 20%;
                height : 40%;
                text-decoration : none;
                border : solid;
                text-align : center;
                border-radius : 15px;
                margin-top : 10px;
            }
            ul li a{
                text-decoration : none;
                font-size : 20px;
            }
            ul li{
                text-decoration : none;
                list-style : none;
            }
            ul li :hover{
                  background-color : black;
                  color : white; 
                  font-size : 20px;
            }
            h3{
                text-align : center;
                font-size : 24px;
                font-family : forte; 
            }
            .navbar{
                margin-left : 450px;
                border : solid;
                width : 35%;
                text-align : center;
                text-decoration : none;
                border-radius : 15px;
                padding : 1em;
                background-color : grey;
            }
            #nav{
                    border : solid;
                    color : blue;
                    background-color : grey;
                    border-radius : 10px;
                    text-decoration : none;
            }
            #nav:hover{
                background-color : black;
                color : white; 
                font-size : 20px;
            }

        </style>
        </head>
        <body>
            <form method ="POST">
            <header class="bg-success"> CARGO LTD </header>
          <div class="container">
            <div class="menu">
                <ul>
                <li><a href="#">HOME</a></li>
                <br>
                <li><a href="report.php">REPORT</a></li>
                <br>
                <li><a href="import.php">IMPORT</a></li>
                <br>
                <li><a href="export.php">EXPORT</a></li>
                <br>
                <li><a href="logout.php">LOGOUT</a></li>
                <br>
             </ul>
            </div>
            <h3>FURNITURE OPTION</h3>
               <div class="navbar">
                <a id="nav" href="add.php"> ADD FURNITURE</a>
                <br> <br>
                <a id="nav" href="import.php">IMPORT REPORT</a>
                <br> <br>
                <a id="nav" href="export.php">EXPORT REPORT</a>
                <br> <br>