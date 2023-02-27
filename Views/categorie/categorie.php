<?php
if (isset($_POST['submit'])) {
    $categorie = new CategorieControllers();
    $categorie->addCategories();
    
}
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
                <button class="btn btn-info mx-2"><div class="h6"><?php echo $_SESSION['nom'] . "    " . $_SESSION['prenom']; ?></div></button>
                



                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="page-header m-5">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Catégorie</h3>

                </div>
                <div class="col-auto float-right ml-auto">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                        creation de quiz 
                    </button>

                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Catégorie de quizma</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ">

                    <div class="col-xs-2">
                    <select class="form-select" name="nom_categorie" aria-label="Default select example">
                            <option selected>choisir...</option>
                            <option value="Mathematique">Mathématique</option>
                            <option value="Physique">Physique</option>
                            <option value="Science">Science</option>
                            <option value="Informatique">Informatique</option>
                            <option value="Electronique">Électronique</option>
                            <option value="Intelligence artificielle">Intelligence artificielle</option>
                            <option value="Film">Film</option>
                            <option value="Culture generale">Culture générale</option>
                        </select>
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" name="submit"  class="btn btn-primary">Suivant</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <section class="m-5">

            <div class="container px-lg-5">
                <div class="row gx-lg-5">

                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <a href="#">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class=" mb-4 mt-n4 mt-3">
                                        <img src="https://img.icons8.com/fluency-systems-regular/96/000000/math.png" class="w-50" />
                                    </div>
                                    <h2 class="fs-4 fw-bold mb-3"> <u>Mathématique </u></h2>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <a href="#">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class="  mb-4 mt-n4 mt-3">
                                        <img src="https://img.icons8.com/wired/64/000000/physics.png" class="w-50" />
                                    </div>
                                    <h2 class="fs-4 fw-bold mb-3"><u>Physique</u></h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <a href="#">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class=" mb-4 mt-n4 mt-3">
                                        <img src="https://img.icons8.com/glyph-neue/64/000000/biotech.png" class="w-50" />
                                    </div>
                                    <h2 class="fs-4 fw-bold mb-3"><u>Science</u></h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <a href="#">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class=" mb-4 mt-n4 mt-3">
                                        <img src="https://img.icons8.com/glyph-neue/64/000000/computer.png" class="w-50" />
                                    </div>
                                    <h2 class="fs-4 fw-bold mb-3"> <u>Informatique </u></h2>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <a href="#">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class=" mb-4 mt-n4 mt-3">
                                        <img src="https://img.icons8.com/glyph-neue/64/000000/electronics.png" class="w-50" />
                                    </div>
                                    <h2 class="fs-4 fw-bold mb-3"><u>Électronique </u> </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <a href="#">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class=" mb-4 mt-n4 mt-3">
                                        <img src="https://img.icons8.com/glyph-neue/64/000000/learning.png" class="w-50" />
                                    </div>
                                    <h2 class="fs-4 fw-bold mb-3"><u>Intelligence artificielle </u></h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <a href="#">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class=" mb-4 mt-n4 mt-3">
                                        <img src="https://img.icons8.com/ios-filled/50/000000/film-reel--v1.png" class="w-50" />
                                    </div>
                                    <h2 class="fs-4 fw-bold mb-3"> <u>Film </u></h2>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <a href="#">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class=" mb-4 mt-n4 mt-3">
                                        <img src="https://img.icons8.com/ios-filled/50/000000/alligator.png" class="w-50" />
                                    </div>
                                    <h2 class="fs-4 fw-bold mb-3"><u>Animaux </u></h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <a href="#">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class=" mb-4 mt-n4 mt-3">
                                        <img src="https://img.icons8.com/pastel-glyph/64/000000/tower-of-pisa--v2.png" class="w-50" />
                                    </div>
                                    <h2 class="fs-4 fw-bold mb-3"><u>Culture générale</u></h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>