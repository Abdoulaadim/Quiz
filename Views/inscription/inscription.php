<?php
if (isset($_POST['submit'])) {
    $user = new UserControllers();
    $user->addUser();
    
}
?>
<body class="bg-dark">

    <div class="container">
        <div class="row vh-100 p-3 align-items-center justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-6  bg-white rounded p-4 shadow">
                <div class="row justify-content-center mb-4">
                <img src="../../../file_rouge_quiz/ass/img/Quiz logox.png" class="w-25">
                </div>
                <div class="text-center mb-4">
                    <h1>Inscription</h1>
                </div>
                <form action="" method="post">
                    <div class="mb-2">
                        <label for="nom" class="form-label h6">Nom : </label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                    </div>
                    <div class="mb-2">
                        <label for="prenom" class="form-label h6">Prenom : </label>
                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prenom">
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label h6">Adresse Email : </label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="mb-2">
                        <label for="correspond" class="form-label h6">Le type de compte qui te correspond : </label>
                        <select class="form-select" name="type_comp" aria-label="Default select example">
                            <option selected>tu dois choisir</option>
                            <option value="Enseignant">Enseignant</option>
                            <option value="Eleve">Éléve</option>
                            <option value="Personnel">Pérsonnel</option>
                            <option value="Professionnel">Professionnel</option>
                          </select>
                    </div>
                    <div class="mb-2">
                        <label for="date_naissance" class="form-label h6">Date Naissance: </label>
                        <input type="date" class="form-control" name="datex" id="datex">
                    </div>
                    <div class="mb-2">
                        <label for="passwords" class="form-label h6">Mots de passe: </label>
                        <input type="password" class="form-control" id="passwords" id="passwords">
                    </div>
                    <div class="mb-4">
                        <label for="c_passwords" class="form-label h6">Confirmation de Mots de Passe: </label>
                        <input type="password" class="form-control" id="c_passwords" id="c_passwords">
                    </div>
                   
                    <button type="submit" name="submit" class="btn btn-outline-success h5 w-100">Inscription</button>
                </form>
                <p class="mb-0 mt-3 h6 text-center">Tu as déja un compte ? <a href="#">Login</a></p>

            </div>
        </div>
    </div>

</body>

</html>