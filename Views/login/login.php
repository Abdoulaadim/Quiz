<?php

if (isset($_POST['submit'])) {
    $user = new LoginControllers();
    $user->auth();
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
                    <h1>Connexion</h1>
                </div>
                <form action="" method="post">
                    <div class="mb-2">
                        <label for="email" class="form-label h6">Nom d'utilisateur ou Adresse e-mail</label>
                        <input type="text" class="form-control" name="email" placeholder="Email "id="email" aria-describedby="emailHelp">
                        <div class="form-text" id="emailHelp">Nous ne partagerons jamais votre email</div>
                    </div>
                    <div class="mb-4">
                        <label for="passwords" class="form-label h6">Mot de passe</label>
                        <input type="password" class="form-control" name="passwords" id="passwords" aria-describedby="passwordsHelp">
                        <div class="form-text" id="passwordsHelp">Le mot de passe doit comporter plus de 6 caractères.</div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-outline-success h5 w-100">Login</button>
                </form>
                <p class="mb-0 mt-3 h6 text-center">Tu n'as pas de compte ? <a href="#">Inscription</a></p>

            </div>
        </div>
    </div>

</body>

</html>