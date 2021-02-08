<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Autocomplétion PHP & AJAX</title>
    <style>
        body {
            background-color: #f5f5f5;
        }

        .container {
            width: 30%;
            height: 300px;
            border: 3px solid #007bff50;
            border-radius: 4px 4px 4px 4px;
            margin-left: 32%;
            padding: 2%;
            background-color: #fcfcfc;
        }

        #result {
            border: 1px solid #333333;
            border-radius: 4px 4px 4px 4px;
        }

        .form-control {
            width: 100%;
            height: 45px;
            border: 1px solid #333333;
            border-radius: 4px 4px 4px 4px;
            padding: 5%;
        }

        .suggestion {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            color: #333333;
            padding: 2%;
            cursor: pointer;
        }

        .suggestion:hover {
            opacity: 0.5;
            border: 1px solid #33333300;
            background-color: #33333350;
        }
    </style>
</head>

<body>
    <div class="container">
        <form>
            <input autocomplete="false" type="search" id="search" class="form-control">
            <div id="result">
            </div>
        </form>
    </div>

    <script src="index.js"></script>
</body>

</html>