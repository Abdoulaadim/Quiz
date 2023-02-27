<?php
if (isset($_POST['id_quizma'])) {
    $code = new TitrequizmaControllers();
     $unique=$code->code();
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
                    <h1>Quizam !! CODE Partage</h1>
                </div>
                <form action="" method="post">
                    <div class="mb-2 text-center text-success h4">

                    <?php echo ($unique->code); ?>
                       
        
                    </div>

                    
                </form>


            </div>
        </div>
    </div>

</body>

</html>