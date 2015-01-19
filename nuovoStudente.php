<HTML>
<?php
 include("connessione.php");
 
 $matricola=$_POST[matricola];
 $nome=$_POST[nome];
 $cognome=$_POST[cognome];
 $cf=$_POST[cf];
 $classe=$_POST[classe];
 $sql="insert into studente values('$matricola','$nome','$cognome','$cf','$classe')";
 mysql_query($sql);
 mysql_close($conn);
?>
 <BODY>
  <H1><B>Operazione comletata</B></H1>
 </BODY>
</HTML>

 
