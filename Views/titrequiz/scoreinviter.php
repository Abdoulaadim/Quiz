<?php

if (isset($_POST['scorex'])) {
    
     $code = new TitrequizmaControllers();
     $score=$code->scoreinviter();
     
     
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
    <div class="container py-5">
        <h1> Score inviter </h1>
        <div class="row my-4">
            <div class=" col-md-10 mx-auto">
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">nom_inviter</th>
                                <th scope="col">code</th>
                                <th scope="col">score</th>
                                <th scope="col">reponse_correct</th>
                                <th scope="col">reponse_incorrect</th>




                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($score as $scorex) { ?>
                                <tr>
                                    <td><?php echo $scorex['nom_inviter']; ?></td>
                                    <td><?php echo $scorex['code'];  ?></td>
                                    <td><?php echo $scorex['score'];  ?></td>
                                    <td><?php echo $scorex['reponse_correct'];  ?></th>
                                    <td><?php echo $scorex['reponse_incorrect'];  ?></td>

                                </tr>

                            <?php }; ?>

                        </tbody>
                    </table>
                </div>
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