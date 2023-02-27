<?php

class UserModels
{

   static public function add($data)
   {
      $stmt = DB::connect()->prepare('INSERT INTO user  (nom,prenom,email,type_comp,datex,passwords) VALUES (:nom,:prenom,:email,:type_comp,:datex,:passwords)');
      $stmt->bindParam(':nom', $data['nom']);
      $stmt->bindParam(':prenom', $data['prenom']);
      $stmt->bindParam(':email', $data['email']);
      $stmt->bindParam(':type_comp', $data['type_comp']);
      $stmt->bindParam(':datex', $data['datex']);
      $stmt->bindParam(':passwords', $data['passwords']);
      if ($stmt->execute()) {
         return 'ok';
      } else {
         return 'error';
      }

      $stmt = null;
   }


 
}
