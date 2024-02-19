<?php

public function affichern(Request $request)
{   

	$this->validate($request,
      [  
      'chiffre'=>'required',
     ]);
       $number = $request->chiffre;
        $tab = array();
        count($tab)= $number;
        for(i==0,i<=count($tab),i++){
        	echo  $tab[i]=$number;
        }
}


?>