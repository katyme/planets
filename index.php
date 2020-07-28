<!DOCTYPE html>
<html lang="en">


<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <title>Planets</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <style>
        body {
            background-image: url('images/space.jpg');
        }
    </style>

</head>

<body style="color:white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center"><strong>The Planets in Our Solar System</strong></h1>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Planet</th>
                                <th>Google Maps</th>
                                <th>Description</th>
                                <th>Distance from Sun</th>
                                <th>Radius</th>
                                <th>Mass</th>
                                <th>Length of Day</th>
                                <th>Orbital Period</th>
                            </tr>
                        </thead>
                        <tbody>
                            <? include 'planetsdata.php'; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</body>
</html>