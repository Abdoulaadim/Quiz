<?php

class TitrequizmaModels{

    


   static public function add($data){

      $uniq=strtoupper(uniqid());
      $data['code']= $uniq;
     
      $stmt=DB::connect()->prepare('INSERT INTO quizma (titre,descriptionx,langue,code,nbr_question,id_user,id_categorie) VALUES (:titre,:descriptionx,:langue,:code,:nbr_question,:id_user,:id_categorie)');
      $stmt->bindParam(':titre',$data['titre']);
      $stmt->bindParam(':descriptionx',$data['descriptionx']);
      $stmt->bindParam(':langue',$data['langue']);
      $stmt->bindParam(':code',$data['code']);
      $stmt->bindParam(':nbr_question',$data['nbr_question']);
      $stmt->bindParam(':id_user',$data['id_user']);
      $stmt->bindParam(':id_categorie',$data['id_categorie']);
      if($stmt->execute()){
       return 'ok';
    }else{
       return 'error';
    }
    
    $stmt=null;

   }

   static public function getquizmad() {

      $stmt = DB::connect()->prepare('SELECT id_quizma,nbr_question FROM quizma ORDER BY id_quizma DESC LIMIT 1');
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_OBJ);
      $stmt->null;

   }

   static public function getquizma() {
        
      
      $stmt = DB::connect()->prepare("select id_quizma,titre,descriptionx,code,nbr_question,langue from quizma,user where  quizma.id_user =user.id_user and quizma.id_user=".$_SESSION['id_user']);
      $stmt->execute();
      $result= $stmt->fetchAll();  
      
      return $result;
      

   }

   static public function code($data){
      $id_quizma=$data['id_quizma'];
   
         
         $stmt = DB::connect()->prepare('select code from quizma where id_quizma='.$id_quizma);
         $stmt->execute();
         $result=$stmt->fetch(PDO::FETCH_OBJ);
         return $result;

   }

   static public function scoreinviter($data){
      $id_quizma=$data['id_quizma'];
   
         
         $stmt = DB::connect()->prepare('select * from quizma,inviter,score where quizma.code=inviter.code and score.id_inviter=inviter.id_inviter and quizma.id_quizma='.$id_quizma);
         $stmt->execute();
         $result=$stmt->fetchall();
         return $result;

   }

  

   
   



  
}