<?php


class CodeModels{

    static public function Code($data){
        $code=$data['code'];
        
        
        try{
           $query='select * from quizma where code=:code';
           
           $stmt=DB::connect()->prepare($query);
           $stmt->execute((array(":code"=>$code)));
           $user=$stmt->fetch(PDO::FETCH_OBJ);
           return $user;
        
           
           
           if($stmt->execute()){
              return 'ok';
           }
           
  
       }
       catch(PDOException $ex)
       {
        echo 'erreur'.$ex->getMessage();
       }
  
     }
    

     static public function  addscore($data){
        $stmt=DB::connect()->prepare('INSERT INTO  score (id_inviter,id_quizma,score,reponse_correct,reponse_incorrect) VALUES (:id_inviter,:id_quizma,:score,:reponse_correct,:reponse_incorrect)');
        $stmt->bindParam(':id_inviter',$data['id_inviter']);
        $stmt->bindParam(':id_quizma',$data['id_quizma']);
        $stmt->bindParam(':score',$data['score']);
        $stmt->bindParam(':reponse_correct',$data['reponse_correct']);
        $stmt->bindParam(':reponse_incorrect',$data['reponse_incorrect']);
       $stmt->execute();
       
       $result =$stmt->fetchAll();
       //$result=$stmt->fetchAll(\PDO::FETCH_ASSOC);
       return $result;
       
      //  if(){
      //    return 'ok';
      // }else{
      //    return 'error';
      // }
      
      
  
     }
     static public function add($data){
        $stmt=DB::connect()->prepare('INSERT INTO inviter (nom_inviter,code) VALUES (:nom_inviter,:code)');
        $stmt->bindParam(':nom_inviter',$data['nom_inviter']);
        $stmt->bindParam(':code',$data['code']);
        if($stmt->execute()){
         return 'ok';
      }else{
         return 'error';
      }
      
      $stmt=null;
  
     }

     static public function getquestion() {
        
      $code= $_SESSION["id_quizma"];
      // $x="select * from quizma,question,inviter where quizma.id_quizma=question.id_quizma and inviter.code=quizma.code and quizma.code= '" .$code ."'";
      // die(print_r($x));
      $stmt = DB::connect()->prepare("select * from quizma,question where quizma.id_quizma=question.id_quizma  and quizma.id_quizma=".$code);
      $stmt->execute();
      $result= $stmt->fetchAll();
      
   
      return $result;
      $stmt->null;

   }
   static public function getidinviter() {
        
      
      $stmt = DB::connect()->prepare("select id_inviter from inviter where nom_inviter='".$_SESSION['nom_inviter']."'");
      $stmt->execute();
      $result= $stmt->fetchAll();  
      
      return $result[0]["id_inviter"];
      

   }

   
   static public function getscore() {
       //die(print_r($_SESSION['id_score']));
       //$val=intval($_SESSION['id_score']);
        //die(print_r ($val));
      //$stmt = DB::connect()->prepare("select max(id_score),score,reponse_correct,reponse_incorrect from score");
      $stmt = DB::connect()->prepare('SELECT id_score,score,reponse_correct,reponse_incorrect FROM score ORDER BY id_score DESC LIMIT 1');
      $stmt->execute();
      $result=$stmt->fetchAll(); 
      
      return $result;
      

   }
  
  

   
}

?>