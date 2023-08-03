<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .btn{
            background-color: #27ae60 !important;
        }
        input{
            font-size: 2rem !important;
        }
        label{
            font-size: 2rem !important;
            margin-right: 2% !important;
        }
        .container{
            margin-top: 2.5% !important;
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    <div class = "container">
        <div class = "login-container">
        <div class = "kbox">
            <h1 class = "intro">Add admin</h1>
            <br/>
            <form action="signup.php" method="post">
                <div class = "mb-3 row ">
                    <label class = " col-sm-3 col-form-label"> Username:</label>
                    <div class = "col-sm-9 ">
                        <input
                            type="text"
                            class = "form-control"
                            name = "name"
                            required
                        />
                    </div>
                </div>
      <br/>


                <div class = "mb-3 row ">
                    <label class = "form-label col-sm-3 col-form-label"> Password: </label>
                    <div class = "col-sm-9 ">
                        <input
                            type="password"
                            class = "form-control"
                            name = "password"
                            required
                        />
                    </div>
                </div>
<br>
            
                    <div class="center">
                        <button class = "btn btn-success ms-8 mt-4" type="submit" name="submit">Add admin</button>
                    </div>     
            </form>
            </div>
        </div>
    </div>
</body>
</html>
