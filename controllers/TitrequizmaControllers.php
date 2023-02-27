<?php

class TitrequizmaControllers{
 
      
    public function addtitrequizma(){
        if(isset($_POST['submit'])){
            $data=array(
  
              'titre'=>$_POST['titre'],
              'descriptionx'=>$_POST['descriptionx'],
              'langue'=>$_POST['langue'],
              'nbr_question'=>$_POST['nbr_question'],
              'id_user'=>$_POST['id_user'],
              'id_categorie'=>$_POST['id_categorie'],
              
            );
            
            $result=TitrequizmaModels::add($data);
           
            
  
            if($result==='ok'){
              session::set('success','titre de quiz a été enregistré avec success');
              Redirect::to('../quizma/quizma');
            
            }else{
                echo $result;
            }
        }
      }

      public function getquizmad(){
        $titre= TitrequizmaModels::getquizmad();
        return $titre;
        }


        public function getquizma(){
          $quizma= TitrequizmaModels::getquizma();
          return $quizma;
      }


      public function code(){

        if(isset($_POST['id_quizma'])){
            $data['id_quizma']=$_POST['id_quizma'];
            $result=TitrequizmaModels::code($data);
            //  die(print_r($result));
            return $result;
        }
      }

        public function scoreinviter(){
          if(isset($_POST['scorex'])){
              $data['id_quizma']=$_POST['scorex'];
              $result=TitrequizmaModels::scoreinviter($data);
              return $result;
          }
        }
  

    
          
         
      
    
      
    

      
  



  

}