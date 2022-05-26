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
    </style>

<body>
    <!-- TOP NAVBAR -->
    <header>
        <div class="wrapper">
            <div class="navbar">
                <div class="nav_bar">
                    <div class="toggle_btn">
                        <button id="btn_toggle" onclick="togglemenu()"><img src="image/humberger2.png" alt="icon" width="40px" height="40px;"></button>
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
            document.getElementById("main").style.marginLeft = "250px";
        }


        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>




</body>

</html>