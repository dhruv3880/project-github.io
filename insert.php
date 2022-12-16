


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dVS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="edited1.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                dVS
            </a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid" style="background-color:rgb(125, 151, 39)";>
            <a class="navbar-brand" href="#">dVS </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Register.html">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="aboutus.html">About us</a></li>
                            <li><a class="dropdown-item" href="contactus.html">Contact us</a></li>
                            <li><a class="dropdown-item" href="GETDATA.html">GET YOUR DATA</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php

//echo "hello";

if(isset($_POST['Name']))
{
    $server = "localhost";
    $user ="root"; 
    $passsword="";
    $database = "dvs";

    $connection=mysqli_connect($server, $user, $passsword, $database);

    if(!$connection)
    {
        die(mysqli_connect_error());
    }
    echo "connected";

    $name = $_POST['Name'];
    $surname = $_POST['Surname'];
    $mobile = $_POST['mobile'];

    echo $sql = "INSERT INTO Register(Name,Surname,Mobile)
    VALUES('$name','$surname','$mobile')";

    $query = mysqli_query($connection, $sql);
    if($query)
    {
        echo "data inserted";
    }


}
?>
</html>