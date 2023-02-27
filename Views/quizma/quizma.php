<?php
if (isset($_POST['submit'])) {
    if (isset($_SESSION["cpt"])) {
        $cpt = $_SESSION["cpt"];
    } else {
        $cpt = 0;
    }

    $titre = new QuestionControllers();
    $titre->addquestion($cpt);
}
$data = new TitrequizmaControllers();
$quizma = $data->getquizmad();



?>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../../../file_rouge_quiz/ass/img/logonav.png" class="w-50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav nav-pills nav-fill me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item h3">
                        Quizma
                    </li>
                    <li class="nav-item">
                        <button class="btn  btn-dark mx-2 "> <a href="<?php echo BASE_URL; ?>titrequiz/questionbanck" class="nav_link"> Banck </a> </button>
                    </li>


                </ul>
                <form class="d-flex">
                    <button class="btn btn-warning mx-2 "> <a href="<?php echo BASE_URL; ?>logout/logout" class="nav_link"> Signout </a> </button>
                    <button class="btn btn-info mx-2">
                        <div class="h6"><?php echo $_SESSION['nom'] . "    " . $_SESSION['prenom']; ?></div>
                    </button>




                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row m-xxl-5 card bg-light">
            <form action="" method="post">

                <legend class="h1 mb-4 text-center  mt-3 ">
                    <img src="../../../file_rouge_quiz/ass/img/Quiz logox.png" width="200">
                </legend>

                <div class="row">
                    <label for="Titre" class="mb-2 h3">Titre</label>
                    <div class="col mb-2">

                        <input type="text" class="form-control" name="questionx" placeholder="Titre">
                    </div>
                    <div class="container overflow-hidden mt-5 mb-5">
                        <div class="container">
                            <div class="container overflow-hidden">
                                <div class="row gy-5">
                                    <div class="col-lg-6 col-xxl-6">
                                        <div class="p-3 border bg-light">
                                            <div class="mb-3 h5">Choix 1</div>
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="check()" id="choixradio1" type="radio" name="flexRadioDefault">

                                                <input type="text" name="choix1" class="choix" id="choix1" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xxl-6">
                                        <div class="p-3 border bg-light">
                                            <div class="mb-3 h5">Choix 2</div>
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="check()" type="radio" name="flexRadioDefault" id="choixradio2">
                                                <input type="text" name="choix2" class="choix" id="choix2" rows="2" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xxl-6 ">
                                        <div class="p-3 border bg-light">
                                            <div class="mb-3 h5">Choix 3</div>
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="check()" type="radio" name="flexRadioDefault" id="choixradio3">
                                                <input type="text" name="choix3" class="choix" id="choix3" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xxl-6">
                                        <div class="p-3 border bg-light">
                                            <div class="mb-3 h5">Choix 4</div>
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="check()" type="radio" name="flexRadioDefault" id="choixradio4">
                                                <input type="text" name="choix4" class="choix" id="choix4" rows="2" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="reponse" id="reponse" class="form-control">
                                    <input type="hidden" class="form-control" name="id_quizma" value="<?php echo ($quizma->id_quizma); ?>">
                                    <input type="hidden" class="form-control" id="nbr_question" name="nbr_question" value="<?php echo ($quizma->nbr_question); ?>">

                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="suivant" name="submit" class="btn btn-primary">Suivant</button>
                    </div>
            </form>

        </div>
    </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../../file_rouge_quiz/ass/js/javascriptx.js"></script>
</body>

</html>