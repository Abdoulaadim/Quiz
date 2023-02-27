<?php

class LoginControllers{


    public function  auth(){
        //Détermine si une variable est déclarée et est différente de null  
        if(isset($_POST['submit'])){
            $data['email']=$_POST['email'];
            $data1['passwords']=$_POST['passwords'];
            $result=LoginModels::login($data);

            
          $resultuser=LoginModels::loginuser($data,$data1);
          
          
           
           
       
            //Vérifie qu'un mot de passe correspond à un hachage
            if($result->email === $_POST['email']){
                     $_SESSION['logged']=true;
                     $_SESSION['email']=$result->email;
                     $_SESSION['nom']=$result->nom;
                     $_SESSION['prenom']=$result->prenom;
                     $_SESSION['id_user']=$result->id_user;
                     Redirect::to('../categorie/categorie');
                
            }
            else{
                session::set('error','Pseudo ou mot de passe  est incorrect');
                Redirect::to('login');
                }
           

        }
    


    }
        
    



   public function logout (){
        session_destroy();//Detruit une session 

    }
}
