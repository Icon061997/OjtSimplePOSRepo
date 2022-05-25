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


<body>
    <?php include 'navbar.php'?>

    <div class="d-flex" id="wrapper">

        <div id="main" class="wrapper" style="margin-left: 10px;">

            <div class="container-fluid px-4">
                <div class="row g-3 my-4">
                    <div class="col-md-6 col-lg-3 col-sm-12 my-2">
                        <div class="p-3 bg-white d-flex justify-content-around  rounded card">
                            <div>
                                <h3 class="fs-5">Total Sales</h3>
                                <h3 class="fs-2">720</h3>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 col-sm-12 my-2">
                        <div class="p-3 bg-white d-flex justify-content-around  rounded card">
                            <div>
                                <h3 class="fs-5">Total Users</h3>
                                <h3 class="fs-2">1</h3>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 col-sm-12 my-2">
                        <div class="p-3 bg-white d-flex justify-content-around  rounded card">
                            <div>
                                <h3 class="fs-5">Total Item</h3>
                                <h3 class="fs-2">720</h3>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 col-sm-12 my-2">
                        <div class="p-3 bg-white d-flex justify-content-around  rounded card">
                            <div>
                                <h3 class="fs-5">Total Categories</h3>
                                <h3 class="fs-2">100</h3>
                            </div>

                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-12 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 my-3">
                                    <div class="card-container">
                                        <h3 class="">Top Items by Sales</h3>
                                        <div class="table-responsive table-fixed" style="height: 250px;overflow: scroll; ">
                                            <table class="table table-hover table-striped table-fixed table-scroll" id="data-table">
                                                <thead class="thead-box">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Item</th>
                                                        <th>Sales</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>

                                                        <td>1</td>
                                                        <td>Umbrella</td>
                                                        <td>200</td>


                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 my-3">
                                    <div class="card-container">
                                        <h3 class="">Top Items by Categories</h3>
                                        <canvas id="piechart" style="width:100%;max-width:700px"></canvas>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                    <div class="row">

<div class="col-md-12 col-lg-6 col-sm-12">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 my-3">
            <div class="card-container">
                <h3 class="">Top Items by Sales</h3>
                <div class="table-responsive table-fixed" style="height: 250px;overflow: scroll; ">
                    <table class="table table-hover table-striped table-fixed table-scroll" id="data-table">
                        <thead class="thead-box">
                            <tr>
                                <th>No</th>
                                <th>Item</th>
                                <th>Sales</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td>1</td>
                                <td>Umbrella</td>
                                <td>200</td>


                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>

                </div>


            </div>

        </div>

    </div>  


        <!-- piechart -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            var xValues = ["musical instrument", "Electronics", "funitures", "Clothes", ];
            var yValues = [500, 90, 200, 10];
            var barColors = [
                "#00FFFF",
                "#0047AB",
                "#89CFF0",
                "#0096FF",
            ];

            new Chart("piechart", {
                type: "doughnut",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    title: {
                        display: true,
                    }
                }
            });
        </script>

        <!-- line graph -->

        <script>
            var xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];


            new Chart("myChart", {
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                        data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                        borderColor: "lightblue",
                        fill: false
                    }, {
                        data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                        borderColor: "bluegreen",
                        fill: false
                    }, {
                        data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                        borderColor: "blue",
                        fill: false
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: "sales line graph"
                    }
                }
            });
        </script>


</body>

</html>