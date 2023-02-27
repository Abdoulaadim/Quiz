<?php

class CategorieControllers{
 
      
    public function addCategories(){
        if(isset($_POST['submit'])){
            $data=array(
  
              'nom_categorie'=>$_POST['nom_categorie'],
              
            );
            
            $result=CategorieModels::add($data);
            
  
            if($result==='ok'){
              session::set('success','categorie a été choisis avec success');
              Redirect::to('../titrequiz/titrequiz');
            }else{
                echo $result;
            }
        
        }
    }

    
      public function getcategoried(){
        $categorie= CategorieModels::getcategoried();
        return $categorie;
        }
    

      
  



  

}