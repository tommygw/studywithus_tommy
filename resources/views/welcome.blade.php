<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .container {
            background-color: #ffffff; /* White container background */
            border-radius: 10px; /* Add rounded corners to the container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow to the container */
            padding: 20px; /* Add padding to the container */
            margin-top: 50px; /* Add some top margin */
        }

        h1 {
            color: #007bff; /* Blue header color */
        }

        h2 {
            color: #28a745; /* Green link color */
        }

        a {
            text-decoration: none; /* Remove underlines from links */
        }

        a:hover {
            text-decoration: underline; /* Add underline on hover for links */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row m-5 text-center">
        <div class="col-sm-12">
            <h1>Study With Us</h1>
        </div>
    </div>
    <div class="row m-4 text-center">
        <div class="col-sm-6">
            <h2><a href="/login">Login</a></h2>
        </div>
        <div class="col-sm-6">
            <h2><a href="/register">Register</a></h2>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
