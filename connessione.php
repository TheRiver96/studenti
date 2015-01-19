<?php 
  $dbhost='studenti.cardano.pv.it';
  $dbuser='5bi';
  $dbpass='20qu1nta12';
  $dbname='2008_5bi08';
  $conn=mysql_connect($dbhost,$dbuser,$dbpass) or die ('connessione al server impossibile');
  mysql_select_db($dbname) or die ('impossibile trovare database');
