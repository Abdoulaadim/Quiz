<?php


class QuestionControllers{
 
  
     
    public function addquestion($cpt){
     // session::set('cpt','');
        if(isset($_POST['submit'])){
          
          $nbr=$_POST['nbr_question'];

          print_r($cpt);
           

          
         if( $cpt<$nbr){
            $data=array(
              
              'questionx'=>$_POST['questionx'],
              'choix1'=>$_POST['choix1'],
              'choix2'=>$_POST['choix2'],
              'choix3'=>$_POST['choix3'],
              'choix4'=>$_POST['choix4'],
              'reponse'=>$_POST['reponse'],
              'id_quizma'=>$_POST['id_quizma'],
              'nbr_question'=>$_POST['nbr_question'],
              
            );

            
            
            $result=QuestionModels::add($data);
            $x=  $cpt."_".$nbr;
            $cpt++;
            $_SESSION["cpt"]=$cpt;
            Redirect::to("../quizma/quizma?z=$x");
          
          }else{
           
             $_SESSION["cpt"]=0;
              
              session::set('success','la  question a été enregistré avec success');
              Redirect::to('../categorie/categorie');
           
          }
            
        
           
            
        //  if($cpt==$nbr){
        //     if($result=='ok'){
        //       session::set('success','la  question a été enregistré avec success');
        //       Redirect::to('../categorie/categorie');
        //     }else{
        //         echo $result;
        //     }
        //   }

        }
      }

      public function getquizmad(){
        $titre= TitrequizmaModels::getquizmad();
        return $titre;
        }
      
    

      
  



  

}