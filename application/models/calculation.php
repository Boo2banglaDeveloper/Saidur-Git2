<?php
class Calculation extends CI_Model{
    
    public function Basic_tax($input1,$gender,$age){
       
    
    
                $tax1=0;
                if ($input1<250000) {
                
                   $tax1=0;
                }
                 elseif (($input1<300000&& $gender=='Female') || (($input1<300000) &&($gender=='Male' && $age=='Avobe 65 Years' ))){
                
                    $tax1=0;
                } 
                
                elseif ((($input1>300000 && $input1<400000)&& $gender=='Female') || (($input1>300000 && $input1<400000) &&($gender=='Male' && $age=='Avobe 65 Years'))){
                
                   $tax1=($input1-300000)*10/100;
                } 
                elseif($input1>=250000 && $input1<=400000){
                    $tax1=($input1-250000)*10/100;
                    
                }
                elseif ((($input1>400000 && $input1<500000)&& $gender=='Female') || (($input1>400000 && $input1<500000) &&($gender=='Male' && $age=='Avobe 65 Years' ))){
                
                    $tax1=(10000+($input1-400000)*15/100);
                }
                elseif($input1>=400000 && $input1 <500000){
                    $tax1=(15000+($input1-400000)*15/100);
                    
                }
                elseif ((($input1>500000 && $input1<600000)&& $gender=='Female') || (($input1>500000 && $input1<600000) &&($gender=='Male' && $age=='Avobe 65 Years' ))){
                
                     $tax1=(10000+15000+($input1-500000)*20/100);
                }
                elseif($input1>=500000 && $input1 <600000){
                    $tax1=(15000+15000+($input1-500000)*20/100);
                    
                }
                elseif ((($input1>600000 && $input1<3000000)&& $gender=='Female') || (($input1>600000 && $input1<3000000) &&($gender=='Male' && $age=='Avobe 65 Years' ))){
                
                    $tax1=(10000+15000+20000+($input1-600000)*25/100);
                }
                elseif($input1>=600000 && $input1< 3000000){
                    $tax1=(15000+15000+20000+($input1-600000)*25/100);
                    
                }
                elseif (($input1>=3000000 && $gender=='Female') || ($input1>=3000000 &&($gender=='Male' && $age=='Avobe 65 Years' ))){
                
                    $tax1=(10000+15000+20000+600000+($input1-3000000)*30/100);
                }
                elseif($input1>=3000000){
                    $tax1=(15000+15000+20000+600000+($input1-3000000)*30/100);
                    
                }
                return $tax1;
             }
    
             public function Home_tax($input2){
                  $tax2=0;
                 if ($input2<120000) {
                 
                    $tax2=0;
                 }
                 elseif($input2>=120000){
                     $tax2=($input2-120000)*10/100;
                     
                 }
                 
                 return $tax2;
             
             }
             public function Transport_tax($input3){
                 $tax3=0;
                 
               
                 if ($input3<12000) {
                 
                     $tax3=0;
                 }
                 elseif($input3>=12000){
                     $tax3=($input3-12000)*10/100;
                     
                 }
                 
                 return $tax3;
             }
             
             public function Medicare_tax($input4){
                  $tax4=0;
                 if ($input4<36000) {
                 
                     $tax4=0;
                 }
                 elseif($input4>=36000){
                     $tax4=($input4-36000)*10/100;
                     
                 }
                   
                 return $tax4;
             }
             
             public function Other_tax($input5){
                 $tax5=0;
                 if ($input5<50000) {
                      
                     $tax5=0;
                 }
                 elseif($input5>=36000){
                     $tax5=($input5-36000)*10/100;
                      
                 }
                  
                 return $tax5;
             }
        

}