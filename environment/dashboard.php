<?php
session_start();
if(!$_SESSION(["ID"]))
{
    header("Location:login.html")
}
?>

<-- Completed by:
    Moesha Amos
    Glenroy Logan
    Kimanie Prendergast---->
    
<-- <!DOCTYPE html>-->
<html>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC" rel="stylesheet">   

        <!-- CSS link -->
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- JSCRIPT/JQUERY -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"    type="text/javascript"></script>
        <script src="" type="text/javascript"></script>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        <title>BugMe Issue Tracker</title>

    </head>
    <body>
    <!-- HEADER -->
    <header class="header">
        <h1>BugMe Issue Tracker</h1>
    </header>

    <section>
        <!-- NAVBAR -->
        <nav class="nav ">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <i class="fas fa-home icon"></i>
                    <a href="#">Home</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-user-plus icon"></i>
                    <a href="#">Add User</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-edit icon"></i>
                    <a href="#">New Issue</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-power-off icon"></i>
                    <a href="#">Logout</a>
                </li>
            </ul>
        </nav>

        <!-- MAIN CONTENT -->
        <div class="main">
            <div class="heading">
                <h1 class="title">Issues</h1> 
                <a href="NewIssue.html" type="submit" class="green-btn btn">Create New Issue</a>
            </div>
            <br/>
            
            <div id = "btnContainer">
                Filter by: 
                <button class= "btn active" onclick= "filterSelection('All')"> All</button>
                <button class= "btn active" onclick= "filterSelection('Open')"> Open</button>
                <button class= "btn active" onclick= "filterSelection('id')"> My Tickets</button>
               
            </div>

            <div>
                <table>
                    <thead>
                        <tr>
                            <th><strong>Title</strong></th>
                            <th><strong>Type of Issue</strong></th>
                            <th><strong>Status</strong></th>
                            <th><strong>Assigned To</strong></th>
                            <th><strong>Created</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($Issues as $Issue): ?>
                        <tr>
                            <td><?= $Issue['id], $Issue[Title]; ?></td>
                            <td><?= $Issue['type']?></td>
                            <td><h5 class="new"> New</h5></td>
                            <td><?= $Issue['assigned_to']?> </td>
                            <td><?= $Issue['created']?> </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </body>
</html>