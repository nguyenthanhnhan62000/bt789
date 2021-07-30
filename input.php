
<?php
        require_once('dbHelp.php');
        if (isset($_GET['id'])) {

            $id = $_GET['id'];
            $sql = 'select * from students where id = '.$id;
            $studentList = executeResult($sql);
            $student = $studentList[0];
            $s_name = $student['fullname'];
            $s_email = $student['email'];

        }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    </head>
    <body>
    <div class="form-group">
                    <label for="username"> name:</label>
                    <input value = "<?=$s_name?>" type="text" class="form-control" placeholder="Enter username" name="username">
            </div>
            <div class="form-group">
                    <label for="pwd">email:</label>
                    <input value = "<?=$s_email?>" type="email" class="form-control" placeholder="Enter email" name="email">
            </div>
    </body>
    </html>