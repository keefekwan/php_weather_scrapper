<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", inital-scale="1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/weather.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 center">

            <h1 class="center white">Weather Forecast</h1>
                <p class="lead center white">Enter your city below to get a forecast weather</p>

                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, San Francisco..."/>
                    </div>
                    <button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
                </form>

                <div id="success" class="alert alert-success">Success</div>
                <div id="fail" class="alert alert-danger">Could not find city. Please try again.</div>
                <div id="noCity" class="alert alert-danger">Please enter a city.</div>

            </div><!-- end center -->
        </div><!-- end row -->
    </div><!-- end container -->

    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/weather.js"></script>
</body>
</html>
