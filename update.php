<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="assets/icon/mstile-310x310.png" type="image/x-icon">
  </head>

    <!-- PHP -->
    <?php
    $id = $_GET['ID'];
    include "config.php";
    $Rdata = mysqli_query($con,"select * from tbltodo where id = $id");
    $data = mysqli_fetch_array($Rdata);
    ?>

  <body class="text-white">
    <form action="update1.php" method="post">
        <div class="container">
            <div class="row justfy justify-content-center m-auto mt-3 py-3 col-md-6">
                <h3>Ubah</h3>
                <div class="col-8">
                    <input type="text" value="<?php echo $data['list'] ?>" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-info">Edit</button>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                </div>
            </div>
        </div>
    </form>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>