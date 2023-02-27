<?php


    $data = new CodeControllers();
    $score = $data->getscore();
?>
<body class="bg-dark">

    <div class="container">
        <div class="row vh-100 p-3 align-items-center justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-8  bg-white rounded p-4 shadow">
                <div class="row justify-content-center mb-4">
                <img src="../../../file_rouge_quiz/ass/img/Quiz logox.png" class="w-25">
                </div>
                <div class="text-center mb-4">
                    <h1>Score</h1>
                </div>
                <div class="text-center mb-4">
                    <h1><?php  echo $score[0]["score"] ;?> </h1>
                    <h3 class="text-success">Reponse_correct :   <?php  echo $score[0]["reponse_correct"] ;?> </h3>

                    <h3 class="text-danger"> Reponse incorrecte:  <?php  echo $score[0]["reponse_incorrect"] ;?> </h3>

                    <button type="submit" name="submit" class="btn btn-danger m-5 w-25 " > <a href="<?php echo BASE_URL; ?>logout/logout" class="text-dark h4" style="text-decoration:none;">Fin  </a> </button>
                   
                </div>
               

            </div>
        </div>
    </div>

</body>

</html>