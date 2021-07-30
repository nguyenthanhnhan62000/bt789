<?php
    require_once('dbHelp.php');
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
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">Quan li thong tin sinh vien</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Họ và Tên</th>
                                <th>Địa chỉ</th>
                                <th>Email</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = 'select * from students';
                                $studentList = executeResult($sql);
                                foreach ($studentList as $std) {
                                    echo ' <tr> <td>'.$std['id'].'</td>
                                                <td>'.$std['fullname'].'</td>
                                                <td>'.$std['address'].'</td>
                                                <td>'.$std['email'].'</td>
                                                <td width = "60px"><button class="btn btn-warning" onclick= window.open("input.php?id='.$std["id"].'","_seft") >Edit</button></td>
                                                <td width = "60px"><button class="btn btn-danger">Delete</button></td>
                                            </tr>'
                                                ;
                                        }
                            ?>                           
                            
                        </tbody>
                    </table>
                    <button class="btn btn-success" onclick= "window.open('input.php','_seft')">AddStudent</button>
                </div>
            </div>
        </div>

    
</body>
</html>