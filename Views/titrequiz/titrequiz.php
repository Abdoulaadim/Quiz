<?php
if (isset($_POST['submit'])) {
    $titre = new TitrequizmaControllers();
    $titre->addtitrequizma();
    
   
    
}
$data = new CategorieControllers();
$categorie = $data->getcategoried();
   
    
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

                    </li>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>

                </ul>
                <form class="d-flex">

                    <div class="h2"><?php echo $_SESSION['nom'] . "    " . $_SESSION['prenom']; ?></div>



                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row m-xxl-5 card bg-light">
            <form action="" method="post">

                <legend class="h1 mb-4 text-center  mt-3 "> <u> Quizma Titre </u> </legend>
                <div class="row">
                    <label for="Titre" class="mb-2">Titre</label>
                    <div class="col mb-2">

                        <input type="text" class="form-control" name="titre" placeholder="Titre">
                    </div>
                    <label for="Description" class="mb-2">Description</label>
                    <div class="col mb-2">

                        <Textarea name="descriptionx" class="form-control"></Textarea>
                    </div>
                    <label for="Langue" class="mb-2">Langue</label>
                    <div class="col mb-2">

                        <select class="form-select" name="langue" aria-label="Default select example">
                            <option selected>choisir...</option>
                            <option value="Français">Français</option>
                            <option value="Arabe">Arabe</option>
                            <option value="Anglais">Anglais</option>
                            <option value="Espaniole">Espaniole</option>
                        </select>
                    </div>
                    <label for="Nombre des questions" class="mb-2">Nombre des questions </label>
                    <div class="col mb-4">
                        <input type="number" class="form-control"  name="nbr_question" placeholder="Nombre des questions">

                    </div>
                    
                        <input type="hidden" class="form-control" name="id_categorie"  value="<?php echo ($categorie->id_categorie); ?>" placeholder="Titre">
                        <input type="hidden" class="form-control" name="id_user" value="<?php echo $_SESSION['id_user']; ?>" placeholder="Titre">

                    
                </div>

                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Suivant</button>
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
</body>

</html>