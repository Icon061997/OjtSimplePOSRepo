
   
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Login</title>
    <link href="style.css" rel="stylesheet" >
    <style>
        hr {
            border: 2px solid black;
            width: 70%;
            margin: auto;
            border-bottom: none;
            border-right: none;
            border-left: none;
        }

        body {
    margin: 0;
    padding: 0;
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #1f3040;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    box-sizing: border-box;
}

form {
    height: fit-content;
    width: fit-content;
    background: white;
    padding: 10px 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    border-radius: 10px;
    box-shadow: -3px 3px 10px rgba(0, 0, 0, 0.4);
}

.container_box {
    justify-content: center;
    align-items: center;
    display: flex;
    align-content: center;
    text-align: center;

}

.img-box {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border-color: black;
    justify-content: center;
    align-content: center;
    align-items: center;
    border: 4px solid #1f3040;
    margin-top: 50px;
}



.input-fields {
    position: relative;
    width: 300px;
    height: 50px;
    margin-top: 15px;
    border-radius: 10px;
}

.input-fields input {
    width: 100%;
    height: 100%;
    outline: 1.4px solid black;
    border: none;
    padding: 5px 10px;
    font-size: 18px;
    border-radius: 10px;
}

.input-fields input:focus {
    outline: 2px solid #1f3040;
    
}

.input-fields input:focus+label {
    top: -10px;
    color: #1f3040;
    font-size: 12px;
}



.input-fields label {
    position: absolute;
    top: 10px;
    left: 5px;
    font-size: 18px;
    padding: 0 5px;
    pointer-events: none;
    transition: top .2s;
    background-color: white;
    color: rgb(99, 99, 99);
}

.input-fields span {
    position: absolute;
    top: 15px;
    left: 400px;
}

#btn {
    margin-top: 30px;
    padding: 10px 20px;
    border: none;
    color: white;
    background-color: #1f3040;
    border-radius: 8px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    margin-bottom: 20px;
}


    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="container_box">
            <form action="main.php">
                <div class="container">
                    <img src="image/logo.png" alt="" class="img-box">
                </div>
                <h4 style="margin-top: 10px;"><b style="color: #1f3040;
                    ;">Ez</b><b style="color: #1f3040;">Shop </b></b>Admin
                </h4>
                <hr>
                <div class="input-fields">
                    <input type="text" name="" id="" placeholder="" >
                    <label for="">Username or Email</label>
                </div>
                <div class="input-fields">
                    <input type="password" name="" id="" placeholder="" >
                    <label for="">Password</label>
                </div>
                <input type="submit" value="Login" name="" id="btn">
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
</html>
