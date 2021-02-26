<?php
Class PresentationView {

    public function entete(){
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>

    <?php
    }
    public function description($data){
?>
    <body>
        <div class="container">

        <?php foreach($data as $description)
        { if($description["id"]%2==0)
            { 
            ?>
            <!-- Heading Row -->
            <div class="row align-items-center my-5">
            <div class="col-lg-7">
            
                <img class="img-fluid rounded mb-4 mb-lg-0" src=" <?php echo $description["image"] ?> " alt="">
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-5">
                <h1 class="font-weight-light">École Tatawour</h1>
                <p>  <?php echo $description["contenu"] ?></p>
                <a class="btn btn-primary" href="#">Call to Action!</a>
            </div>
            <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
        <?php
        } else { ?>
            <!-- Heading Row -->
            <div class="row align-items-center my-5">
            <!-- /.col-lg-8 -->
            <div class="col-lg-5">
                <h1 class="font-weight-light">École Tatawour</h1>
                <p>  <?php echo $description["contenu"] ?></p>
                <a class="btn btn-primary" href="#">Call to Action!</a>
            </div>
            <div class="col-lg-7">
                <img class="img-fluid rounded mb-4 mb-lg-0" src=" <?php echo $description["image"] ?> " alt="">
            </div>
            
            <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
        <?php 
        }
    }
        ?>
    </div>
    </body>

    </html>

    <?php
    }
}