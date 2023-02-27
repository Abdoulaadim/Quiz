<?php


class LoginModels{

    static public function login($data){
        $email=$data['email'];
        
        try{
           $query='select * from user where email=:email';
           $stmt=DB::connect()->prepare($query);
           $stmt->execute((array(":email"=>$email)));
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

     static public function loginuser($data,$data1){
        $email=$data['email'];
        $passwords=$data1['passwords'];
        
        try{
           $query='select * from user where email=:email and passwords=:passwords';
           $stmt=DB::connect()->prepare($query);
           $stmt->execute((array(":email"=>$email,":passwords"=>$passwords)));
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
}

?>