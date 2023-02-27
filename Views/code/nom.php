<?php
if (isset($_POST['submit'])) {
    $code = new CodeControllers();
    $code->addnomcode();
    
}
?>
<body class="bg-dark">

    <div class="container">
        <div class="row vh-100 p-3 align-items-center justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4  bg-white rounded p-4 shadow">
                <div class="row justify-content-center mb-4">
                <img src="../../../file_rouge_quiz/ass/img/Quiz logox.png" class="w-25">
                </div>
                <div class="text-center mb-4">
                    <h1>Nom Prenom</h1>
                </div>
                <form action="" method="post">
                    <div class="mb-2">

                        <input type="text" class="form-control" name="nom_inviter" id="nom_inviter" placeholder="Nom Prenom">
                        <input type="text" class="form-control" name="code" id="code" readonly value="<?php  echo $_SESSION['code'];?>">
                    </div>

                    <button type="submit" name="submit" class="btn btn-outline-success h5 w-100">Valider</button>
                </form>


            </div>
        </div>
    </div>

</body>

</html>