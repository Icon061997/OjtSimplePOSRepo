<!DOCTYPE html>
<html lang="en">

<head>
    <title> Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- sweet allert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
    <!-- ccss file -->
    <link href="style.css" rel="stylesheet">
    <!-- fa fa icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





</head>

<body>

    <div class="contains">
        <div class="container_box">

        <form action="main.php" method="">
            <div class="content-box">
                <div class="container">
                <img src="image/logo2.png" alt="Flowers in Chania" class="img-box">
                <p style="margin-top: 10px;"><b><i>simplePos</i></b>Admin</p>
                <hr>
                </div>

        
                <div class="content">
                <label for="username" class="">Username or email</label>
                <input type="text" name="username" id="username" class="input-box" autocomplete="off" placeholder="  ">
                </div>

                <div class="content">
                <label for="username">Password</label>
                <input type="password" name="password" id="password" class="input-box" autocomplete="off" placeholder="  ">
                </div>
                <br>
                    
                <input type="submit" class="buttons" id="submit" name="submit" value="Login">

             
            </div>
            </form>

        </div>
    </div>






</body>

</html>