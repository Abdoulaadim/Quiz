<?php

class QuestionModels{

    


   static public function add($data){

      
     
      $stmt=DB::connect()->prepare('INSERT INTO question (questionx,choix1,choix2,choix3,choix4,reponse,id_quizma) VALUES (:questionx,:choix1,:choix2,:choix3,:choix4,:reponse,:id_quizma)');
      $stmt->bindParam(':questionx',$data['questionx']);
      $stmt->bindParam(':choix1',$data['choix1']);
      $stmt->bindParam(':choix2',$data['choix2']);
      $stmt->bindParam(':choix3',$data['choix3']);
      $stmt->bindParam(':choix4',$data['choix4']);
      $stmt->bindParam(':reponse',$data['reponse']);
      $stmt->bindParam(':id_quizma',$data['id_quizma']);

      
      if($stmt->execute()){
       return 'ok';
    }else{
       return 'error';
    }
    
    $stmt=null;

   }


   
   



  
}