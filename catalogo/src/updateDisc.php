<?php

require_once 'class/Disco.php';

$disco = new Disco();

if (!empty($_GET["id"])) {
    $disco->id = $_GET["id"];
    $res = $disco->getDisco();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Atualizar</title>
</head>

<body>
    <?php include_once 'nav.php'; ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["inputName"]) && !empty($_POST["inputImrSrc"])) {
            $editDisco = new Disco();
            $editDisco->id = $disco->id;
            $editDisco->artista = $_POST["inputName"];
            $editDisco->img = $_POST["inputImrSrc"];
            $editDisco->album = $_POST['inputAlbum'];
            $editDisco->age = $_POST['inputAge'];
            $editDisco->update();
        }
        header('Location:index.php');
    }
    ?>
    <div class="updateDisc">


        <div class="album py-5 ">
            <div class="container">

                <div class="row justify-content-md-center">

                    <!-- Card -->
                    <div class="col-md-6">
                        <div class="card mb-6 " style="width: 30rem;">
                            <img src="<?php echo $res['img'] ?>" class="card-img-top" alt="..." height="300">

                            <div class="card-body">

                                <form method="POST" action="">
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="inputName">Name</label>
                                            <input type="text" class="form-control" name="inputName" value="<?php echo $res['artista'] ?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputAge">age</label>
                                            <input type="number" class="form-control" name="inputAge" value="<?php echo $res['age'] ?>">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="inputAlbum">Álbum</label>
                                            <input type="text" class="form-control" name="inputAlbum" value="<?php echo $res['album'] ?>">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputImrSrc">Image address</label>
                                            <input type="text" class="form-control" name="inputImrSrc" value="<?php echo $res['img'] ?>">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-warning">Atualizar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!--end row-->
            </div>
        </div>
    </div>

    <?php include_once 'footer.php'; ?>
</body>

</html>