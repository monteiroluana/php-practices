<?php

require_once 'class/Disco.php';

$disco = new Disco();
$lista = $disco->selectAll();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <!-- local -->
    <!-- <link rel="stylesheet" href="css/home.css"> -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
                                        <!-- <small class="text-muted">Age <?php echo $disco['age'] ?></small> -->

                                        <a class="btn song" style="font-size: 1.5em; color: #6c757d;" id="<?php echo $disco['id'] ?>" onclick="song(<?php echo $disco['id'] ?>, '<?php echo $disco['youtube_id'] ?>')">
                                            <i class="far fa-play-circle"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    <?php endforeach ?>

                    <div id="player" style="display:none;"></div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>

    <?php include_once 'footer.php'; ?>

    <!-- This code loads the iFrame Player API code asynchronously.-->
    <script src="https://www.youtube.com/iframe_api"></script>

    <script>
        'use strict'

        var play = false;

        function song(elId, elYoutubeId) {
            if (play == false) {
                play = true;
                player.loadVideoById(elYoutubeId);
                player.playVideo();
                document.getElementById(elId).innerHTML = '<i class="far fa-pause-circle"></i>';
                document.getElementById(elId).style.color = "Tomato";
            } else {
                showDefaultBtn();
            }
        }

        function showDefaultBtn() {
            play = false;
            player.stopVideo();
            $(".song").css("color", "#6c757d");
            $(".song").html('<i class="far fa-play-circle"></i>');
        }


        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '360',
                width: '640',
                videoId: '',
            });
        }
    </script>

</body>

</html>