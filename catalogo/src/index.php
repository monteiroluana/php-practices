<?php

require_once 'class/Disco.php';

$dados = [
    new Disco('I Put a Spell on You','Nina Simone', 'https://studiosol-a.akamaihd.net/uploadfile/letras/fotos/2/6/a/8/26a84994724b28b4a042a3a7601d134a.jpg'),
    new Disco('The Miseducation of Lauryn Hill','Lauryn Hill','https://f.i.uol.com.br/fotografia/2019/05/02/15568487735ccba08548d28_1556848773_3x2_md.jpg'),
    new Disco('Homecoming','Beyoncé','https://i.pinimg.com/originals/44/f8/72/44f8721b4bf433a0ce16b02d9c131e9c.jpg'),
    new Disco('The London Session','Mary J. Blige','http://www.soulbounce.com/wp-content/uploads/2014/09/Mary-J-Blige-Black-White-Wearing-Hat.jpg'),
    new Disco('Lost & Found','Ledsi','http://www.soulwalking.co.uk/00Images%202014-1/LEDISI-Nice15.jpg'),
];

function addData($name, $img, $album)
{
    global $dados;

    $newDisco = new Disco($album, $name, $img);
    array_push($dados, $newDisco);
}
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
            $name = $_POST["inputName"];
            $img = $_POST["inputImrSrc"];
            $album = $_POST['inputAlbum'];
            addData($name,  $img, $album);
        }
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
                    <?php
                    foreach ($dados as $disco) {
                        echo '<div class="col-md-4">';
                        echo '  <div class="card mb-4 " style="width: 18rem;">';
                        echo '      <img src="' . $disco->img . '" class="card-img-top" alt="..." height="200">';
                        echo '      <div class="card-body">';
                        echo '          <p align="justify" style="font-size: small"> <strong> ' . $disco->artista . ' </strong> <br>';
                        echo '            Álbum: ' . $disco->nome . '<br>';
                        echo '      </div>';
                        echo '  </div>';
                        echo '</div>' . PHP_EOL;
                    }
                    ?>

                </div>
                <!--end row-->
            </div>
        </div>
    </div>

    <?php include_once 'footer.php'; ?>
</body>

</html>