<? php
  
  $ peso  =  readline ( " Digite seu Peso: " );
  if ( $ peso  >  0 )
  {
      $ altura  =  readline ( " Digite sua Altura: " );
      if ( $ altura  >  0 )
      {
          $ imc  = ( $ peso / ( $ altura * $ altura ));
          if ( $ imc  <  18,5 )
          {
            echo  " Seu IMC eh: "  .  number_format ( $ imc , 2 ) .  " \ n " ;
            echo  " Cuidado, você esta muito abaixo do peso \ n " ;
          }
          else  if ( $ imc  <=  24,9 )
          {
            echo  " Seu IMC eh: "  .  number_format ( $ imc , 2 ) .  " \ n " ;
            echo  " Seu peso esta normal \ n " ;
          } 
          else  if ( $ imc  <=  29,9 )
          {
            echo  " Seu IMC eh: "  .  number_format ( $ imc , 2 ) .  " \ n " ;
            echo  " Voce esta sobrepeso \ n " ;
          }
          else  if ( $ imc  <=  39,9 )
          {
            echo  " Seu IMC eh: "  .  number_format ( $ imc , 2 ) .  " \ n " ;
            echo  " Cuidado, voce esta com um grau de obesidade \ n " ;
          }
          outro
          {
            echo  " Seu IMC eh: "  .  number_format ( $ imc , 2 ) .  " \ n " ;
            echo  " Procure um médico medico, voce esta com um grau de obesidade grave !! " ;
          }
      }
      outro
      {
          eco  " Valor Invalido !! " ;
      }
  }
  outro
  {
      eco  " Valor Invalido !! " ;
  }
? >