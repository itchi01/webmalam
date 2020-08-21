<html>

<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="assets/css/Paralax-Hero-Banner-1.css">
    <link rel="stylesheet" href="assets/css/Paralax-Hero-Banner.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Parallax-Effect-Template-Landing-Page-Bootstrap-4-1.css">
    <link rel="stylesheet" href="assets/css/Parallax-Effect-Template-Landing-Page-Bootstrap-4.css">
    <style>
    p {
        margin-bottom: 0px;
    }

    h5::after {
        font-family: FontAwesome;
        content: " \f101";
        position: absolute;
        margin-left: 5px;
    }

    ul a {
        text-decoration: none;
        color: inherit;
        font-weight: ;
        font-family: Helvetica;
    }

    * {
        max-width: 1920px;
    }

    span .garis:before {
        content: "";
        position: absolute;
        height: 4px;
        width: 25%;
        display: inline-block;
        margin-top: 15px;
        left: 10%;
        background-color: #d9d9d9;
    }

    span .garis:after {
        content: "";
        position: absolute;
        height: 4px;
        width: 25%;
        display: inline-block;
        margin-top: 15px;
        right: 10%;
        background-color: #d9d9d9;
    }

    .garis-judul:after {
        content: "";
        position: absolute;
        height: 4px;
        width: 50%;
        background-color: #d9d9d9;
        display: inline-block;
        margin-top: 15px;
        right: 5%;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark" style="margin-bottom: 20px;">
        <div class="col-sm-4">
            <a class="navbar-brand" href="index.php"><img src="img/Logos.png" width="50%;"></a>
        </div>
        <div class="col-sm-4">
            <form class="form-inline my-2 my-lg-0">
                <label class="icon fa fa-search"
                    style="position: absolute; margin-left: 10px; font-weight: 600; opacity: 0.8;"></label>
                <input class="form-control mr-sm-2" style="width: 100%; font-weight: 600; text-indent: 20px;"
                    type="search" placeholder="Search everything" aria-label="">
            </form>
        </div>
        <div class="row col-sm-4">
            <a class="mr-5 pr-5"></a>
            <a class="nav-link btn btn-warning mx-2" href="admin/login.php">Login</a>
            <a class="nav-link btn btn-outline-info mr-3" href="#">Register</a>
            <a href="#" class="nav-link disabled mr-0 pr-0" tabindex="-1" role="button" aria-disabled="true"><i
                    class="fa fa-user-o" aria-hidden="true"></i> Guest<span class="sr-only">(current)</span></a>
        </div>
    </nav>