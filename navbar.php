<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- sweet allert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- ccss file -->

    <link href="navbar.css" rel="stylesheet">
    <!-- fa fa icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <style>
        .card {


            border: 5px solid blue;
            margin-right: 2px;
            padding: 10px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0px 5px 5px 0px rgb(138, 135, 135);
            border-right: none;
            border-left: none;
            border-bottom: none;

        }

        .card-container {

            padding: 10 px;
            border: 5px solid blue;
            width: 100%;
            height: fit-content;
            padding: 10px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0px 5px 5px 0px rgb(138, 135, 135);
            align-items: center;
            border-right: none;
            border-left: none;
            border-bottom: none;

        }

        i {
            margin-right: 10px;
        }



        #main {
            transition: margin-left .6s;
            margin-top: 50px;
            margin-right: 10px;
            width: 99%;
            height: fit-content;
            padding: 16 px;
            margin-right: 2px;
            height: fit-content;
            padding: 10px;
            border-radius: 10px;
            background-color: white;
            align-items: center;
        }


        .nav_bar {
            margin-top: 40px;
            position: absolute;
            grid-row: auto;
            height: 60px;
            width: 100%;
            background-color: white;
            box-shadow: 2px 2px 5px grey;
            display: grid;
            grid-template-columns: max-content auto max-content;
            column-gap: 20px;
            justify-self: center;

        }

        #btn_toggle {

            display: inline;
            position: absolute;
            width: 100px;
            height: 60px;
            border: none;
        }

        button:hover {

            background-color: grey;
            text-emphasis-color: black;
        }

        .imgs {

            border-radius: 50%;
        }

        .downdrop_button {

            position: relative;
            min-width: 200px;
            display: grid;
            height: 60px;   
            float: right;
            grid-template-columns: max-content auto max-content;
            grid-row: auto;
            background-color: white;
            text-emphasis-color: white;
            padding: 10px;
            align-items: center;

        }

        .downdrop_button:hover,
        .downdrop_button:focus {
            background-color: skyblue;
        }

        .dropdown_content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 210px;
            float: right;
            overflow: auto;
            margin-left: 68px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            margin-top: 60px;
            border-bottom-left-radius: 10px;
            transition: .4s;
        }

        .dropdown_div {
            position: relative;
            display: inline-block;

        }

        .dropdown_content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: .4s;
        }


        .dropdown_content a:hover {
            background-color: whitesmoke;
        }

        .show {
            display: block;
        }

        /* side bar */


        #side_bar {
            position: absolute;
            padding-top: 50px;
            margin-top: 42.5px;
            height: 100%;
            width: 250px;
            background-color: black;
            z-index: 1;
            left: -250px;
            transition: .6s;
            overflow-x: hidden;
            overflow: hidden;
        }

        #side_bar a {
            color: #f1f1f1;
            font-size: 15px;
            padding-right: 1px;
            padding-left: 5px;
            margin-left: 0;
            padding-top: 15px;
            padding-bottom: 15px;
            margin-right: 10px;
            text-align: center;
            text-transform: uppercase;
            text-decoration: none;
            display: flex;
            align-items: center;
            text-emphasis-color: white;
        }

        #side_bar.active {
            left: 0;
        }

        #side_bar a:hover {

            background-color: rgb(24, 24, 24);
            border-radius: 10px;

        }

        i:hover {

            color: black;
        }

        @media screen and (max-height:420px) {
            #side_bar {
                padding-top: 15px;
            }

            #side_bar a {
                font-size: 18px;
            }
        }
       .btn {

        border-radius: none;

        }
    </style>

<body>
    <!-- TOP NAVBAR -->
    <header>
        <div class="wrapper">
            <div class="navbar">
                <div class="nav_bar">
                    <div class="toggle_btn">
                        <button id="btn_toggle" class="btn" onclick="togglemenu()"><img src="image/humberger2.png" alt="icon" width="40px" height="40px;"></button>
                        <!-- DROPDOWN -->
                        <img class="imgs" src="image/logo.png" alt="logo" width="60px" height="60px" style="margin-left: 120px;">


                    </div>
                    <div style="padding-top:15px;">
                        <h3 style="display:flex ;"> EzShop Administration </h3>
                    </div>
                    <div class="dropdown_div" style="float: right;">
                        <button class="downdrop_button" onclick="dropbtn()">
                            <img class="imgs" src="image/user2.png" alt="logo" width="45px" height="45px">
                            <div style="padding: 5px;">
                                <h5> Jimuel Leal</h5>
                            </div>

                            <i class="fa fa-chevron-down" style="font-size:15px"></i>
                        </button>

                        <div class="dropdown_content" id="dd_btn">
                            <a href="#home"><i class="fa fa-user"></i> My account </a>
                            <a href="index.php"><i class=" fa fa-signout"></i>Log-out</a>

                        </div>
                        <span style="float: right; font-size: 35px; color:#2980B9; padding-top:5px;"><i class="fa fa-bell mx-3" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>

            <div class="container">
                <!-- sidebar -->
                <div id="side_bar">

                    <ul>
                        <a href="main.php" routerlinkactive="active"><i class=" fa fa-line-chart"></i> dashboard</a>
                        <a href="sales.php"><i class=" fa fa-money"></i> Sales</a>
                        <a href="reports.php"><i class=" fa fa-file"></i> Reports</a>
                        <a href="items.php"><i class=" fa fa-cog"></i>items</a>
                        <a href="categories.php"><i class=" fa fa-cog"></i>Categories</a>
                        <a href="#"><i class=" fa fa-Users"></i>Co stumers</a>
                        <a href="#"><i class=" fa fa-cog"></i>Supliers</a>
                        <a href="#"><i class=" fa fa-cog"></i>Settings</a>

                    </ul>
                </div>
            </div>


    </header>


    <script>
        function dropbtn() {
            document.getElementById("dd_btn").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.downdrop_button')) {
                var dropdowns = document.getElementsByClassName("dropdown_content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }


        function togglemenu() {
            document.getElementById('side_bar').classList.toggle('active');
            document.getElementById("main").style.marginLeft = "";
        }

    </script>




</body>

</html>