<HTML>

<HEAD>

<TITLE> Switch case  </TITLE>

</HEAD>

<BODY>

<?PHP
     $d=Date("D");
   
     switch($d)
      {
         case "Mon" : echo"Today is Monday";
                      break;

         case "Tue" : echo"Today is Tuesday";
                      break;

         case "Wed" : echo"Today is Wednesday";
                      break;

         case "Thu" : echo"Today is Thursday";
                      break;

         case "Fri" : echo"Today is Friday";
                      break;

         case "Sat" : echo"Today is Saturday";
                      break;

         case "Sun" : echo"Today is Sunday";
                      break;
         default :
                      echo"Not Valed format";
     }
?>
</Body>
</Html>