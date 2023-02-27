<?php

class UserControllers{
   
    public function addUser(){
        if(isset($_POST['submit'])){

            $options=[
                'cost'=>12//augmenter le "cost" par défaut pour BCRYPT par défaut 60
            ];
            $password=password_hash($_POST['passwords'],
            PASSWORD_BCRYPT,$options);
            //créer une clé de hachage standard.
            $data=array(
  
              'nom'=>$_POST['nom'],
              'prenom'=>$_POST['prenom'],
              'email'=>$_POST['email'],
              'type_comp'=>$_POST['type_comp'],
              'datex'=>$_POST['datex'],
              'passwords'=>$password
              
            );

   
            
            $result=UserModels::add($data);
  
            if($result==='ok'){
              session::set('success','User Ajouté avec success');
              Redirect::to('../login/login');
            }else{
                echo $result;
            }
        }
      }

      
   




  

}