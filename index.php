<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todolis App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="assets/icon/mstile-310x310.png" type="image/x-icon">
  </head>
  <body class="text-white">
    <form action="insert.php" method="post">
        <div class="container">
            <div class="row justfy justify-content-center m-auto mt-3 py-3 col-md-6">
                <h3>Todolist App</h3>
                <div class="col-8">
                    <input type="text" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-info">Tambahkan</button>
                </div>
            </div>
        </div>
    </form>
    <!-- get data -->
    <?php
    include "config.php";
    $rawData= mysqli_query($con, "select * from tbltodo");

    ?>

    <!-- table -->
    <div class="container">
        <div class="col-8 m-auto mt-3">
            <table class="table text-white">
                <tbody>
                    <?php
                    while($row = mysqli_fetch_array($rawData)){
                    ?>
                    <tr>
                        <td><?php echo$row['list']?></td>
                        <td style="width: 10%;" ><a href="delet.php? ID= <?php echo$row['id']; ?>" class="btn btn-danger">Hapus</a></td>
                        <td style="width: 10%;" ><a href="update.php? ID= <?php echo$row['id']; ?>" class="btn btn-warning">Ubah</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div>
        </div>
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>