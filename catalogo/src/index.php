<?php

require_once 'class/Disco.php';

$disco = new Disco();
$lista = $disco->selectAll();

// echo "<pre>";
// print_r($lista);
// echo "</pre>";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <!-- local -->
    <!-- <link rel="stylesheet" href="css/home.css"> -->
</head>

<body>
    <?php include_once 'nav.php'; ?>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["inputName"]) && !empty($_POST["inputImrSrc"])) {
            $newDisco = new Disco();
            $newDisco->artista = $_POST["inputName"];
            $newDisco->img = $_POST["inputImrSrc"];
            $newDisco->album = $_POST['inputAlbum'];
            $newDisco->age = $_POST['inputAge'];
            $newDisco->insert();
        }
        header('Location:index.php');
    }
    ?>
    <div class="home">


        <div class="album py-5 ">
            <div class="container">


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModalCenter">
                    Adicionar Novo
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Adicionar ao Catálogo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="">
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="inputName">Name</label>
                                            <input type="text" class="form-control" name="inputName" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputAge">age</label>
                                            <input type="number" class="form-control" name="inputAge" placeholder="Age">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="inputAlbum">Álbum</label>
                                            <input type="text" class="form-control" name="inputAlbum" placeholder="Álbum">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputImrSrc">Image address</label>
                                            <input type="text" class="form-control" name="inputImrSrc" placeholder="Image address link">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Adicionar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->

                <div class="row">
                    <?php foreach ($lista as $disco) : ?>
                        <!-- Card -->
                        <div class="col-md-4">
                            <div class="card mb-4 " style="width: 18rem;">
                                <img src="<?php echo $disco['img'] ?>" class="card-img-top" alt="..." height="200">

                                <div class="card-body">
                                    <p align="justify" style="font-size: small"> <strong><?php echo $disco['artista'] ?></strong> <br>
                                        Álbum: <?php echo $disco['album'] ?><br>
                                    </p>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="deleteDisc.php?id=<?php echo $disco['id'] ?>" class="btn btn-sm btn-outline-secondary">Delete</a>
                                            <a href="updateDisc.php?id=<?php echo $disco['id'] ?>" class="btn btn-sm btn-outline-secondary"> Edit</a>
                                        </div>
                                        <small class="text-muted">Age <?php echo $disco['age'] ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    <?php endforeach ?>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>

    <?php include_once 'footer.php'; ?>
</body>

</html>