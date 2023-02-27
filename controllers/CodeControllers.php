<?php
 
class CodeControllers{


    public function  code(){
        //Détermine si une variable est déclarée et est différente de null  
        
        
        if(isset($_POST['submit'])){
            
            $data['code']=$_POST['code'];
            
            $result=CodeModels::Code($data);
           

            //Vérifie qu'un mot de passe correspond à un hachage
            if($result->code === $_POST['code']){
                     
                     $_SESSION['code']=$result->code;
                     $_SESSION['id_quizma']=$result->id_quizma;
                     Redirect::to('../code/nom');
                
            }
            else{
                session::set('error','Code est incorrect');
                Redirect::to('code');
                }
           

        }
    


    }

    public function addnomcode(){
        
        if(isset($_POST['submit'])){
            $_SESSION['nom_inviter']=$_POST['nom_inviter'];
            $data=array(
  
              'nom_inviter'=>$_POST['nom_inviter'],
              'code'=>$_POST['code'],
              
            );
            
            $result=CodeModels::add($data);
            
  
            if($result==='ok'){
              session::set('success','nom a été enregistrer  avec success');
              Redirect::to('../code/question');
            }else{
                echo $result;
            }
        
        }
    }
     
    public function getquestion($idx){

        
        $question= CodeModels::getquestion($idx);
    //   die(print_r($question));
        
                
            $rowCount = count($question);
           
                $_SESSION['questionx']=  $question[$idx]["questionx"];
                $_SESSION['choix1']= $question[$idx]["choix1"];
                $_SESSION['choix2']= $question[$idx]["choix2"];
                $_SESSION['choix3']= $question[$idx]["choix3"];
                $_SESSION['choix4']= $question[$idx]["choix4"];
                $_SESSION['reponse']= $question[$idx]["reponse"];
               
               
                $param = $_SESSION['param'] + 1;
               $_SESSION['param']=$param;

              
           if($_SESSION['param']==$rowCount || $_SESSION['param']>$rowCount){
            $idin= CodeModels::getidinviter($_SESSION['nom_inviter']);
            
            $data=array(
                
                'id_inviter'=>$idin,
                'id_quizma'=>$_SESSION["id_quizma"],
                'score'=>$_SESSION['score'],
                'reponse_correct'=>$_SESSION['repcor'],
                'reponse_incorrect'=>$_SESSION['repincor'],
                     
              );
              
              
             
              $_SESSION['id_score']=CodeModels::addscore($data);
              foreach($_SESSION as $key => $val)
                {

                    if ($key !== 'id_score')
                    {

                    unset($_SESSION[$key]);

                    }

                }
             //session_destroy();
            Redirect::to('../code/score');
           }
        //   session_destroy();
            // return $rowCount;
           
    
    }

    public function getscore(){
        $score= CodeModels::getscore();
        return $score;
    }

    public function logout (){
        session_destroy();//Detruit une session 

    }


        
    
}
