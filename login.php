<?php 

require_once('db.php');

$login =  $_POST['login'];
$pass =  $_POST['password'] ;

if (empty($login) || empty($pass)) {
    echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn -> query($sql);

    if($result -> num_rows > 0 ) {
        while($row = $result ->fetch_assoc()) {
            // echo "You are welcome, " . $row ['login'] . "!";
        //    require('page.php');
        //    header('Location: ./page.php');?> 
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .d-flex {
            margin-left: auto;
        }
        .dropbtn {
            width: 100px;
margin-left: 10px;
  padding: 7px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  /* border-radius: 5px; */
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
body {
    margin: 0 auto;
}
.card {
    margin-top: 20px;
}
.content {
    display:flex;
}
.btn {
    margin: 10px;
}
    </style>
</head>
<body > 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid container">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <img src="https://ikkm.uz/wp-content/uploads/2019/06/ofd2.png"width="40px">
                <a class="navbar-brand" href="#">WS Kassa</a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link" href="#">История чеков</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="addcheck.php">Добавить чек</a>
                </li> -->
                <li class="nav-item">
                <a class="nav-link" href="addcheck.php">Добавить рабочее пространство</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <a class="btn btn-outline-success" type="submit">Поиск</a>
                <div class="dropdown">
                    <a class="dropbtn btn"> <?php echo $userLogin = $row['login'];?> &#9660;</a>
                    <div class="dropdown-content">
                        <a href="index.php">Log Out</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </nav>
    <!-- <div class="container" style="display:flex" >
    <div class="card" style="width:70%">
  <div class="card-body">
    <h5 class="card-title">Ваша онлайн касса</h5>
    <p class="card-text">Онлайн - касса — это кассовый аппарат с онлайн передачей фискальных данных в режиме реального времени.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Наличных на кассе 2 885 649</li>
    <li class="list-group-item">Сумма продаж на сегодня 2 885 649</li>
    <li class="list-group-item">Сумма покупок на сегодня 2 885 649</li>
  </ul> -->

  <!-- <div class="card-body">
    <a href="#" class="card-link">Ссылка карты</a>
    <a href="#" class="card-link">Другая ссылка</a>
  </div> -->
<!-- </div>
    <div class="card" style="width:30%">
  <ul class="list-group list-group-flush">
    <a href="addcheck.php"> <button type="button" class="btn btn-success">Добавить чек</button></a>
    <a href=".php"> <button type="button" class="btn btn-success">Поиск чеков</button></a>
    <a href=".php"> <button type="button" class="btn btn-success">Возврат</button></a>
    <a href=".php"> <button type="button" class="btn btn-success">Внесение наличных </button></a>
    <a href=".php"> <button type="button" class="btn btn-success">Закрыть отчет </button></a> -->
 
  <!-- <button type="button" class="btn btn-success">Поиск чеков</button>
  <button type="button" class="btn btn-success">Возврат</button>
  <button type="button" class="btn btn-success">Внесение наличных</button>
  <button type="button" class="btn btn-success">Закрыть отчет</button> -->
  </ul>
</div>
</body>
</html>
        <?php
        }
    }
    else {
        echo  "incorrect information ";
    }
}