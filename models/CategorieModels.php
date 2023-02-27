<?php

class CategorieModels{

    


   static public function add($data){
      $stmt=DB::connect()->prepare('INSERT INTO categorie (nom_categorie) VALUES (:nom_categorie)');
      $stmt->bindParam(':nom_categorie',$data['nom_categorie']);
      if($stmt->execute()){
       return 'ok';
    }else{
       return 'error';
    }
    
    $stmt=null;

   }

    static public function getcategoried() {

        $stmt = DB::connect()->prepare('SELECT id_categorie FROM categorie ORDER BY id_categorie DESC LIMIT 1');
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
        $stmt->null;
  
     }
   
   



  
}