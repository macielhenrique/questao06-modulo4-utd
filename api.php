<?php

include_once 'connect.php';
include_once 'functions.php';

#gravando os dados via get pela api

$insert = insert ("utdcursos", $_REQUEST);

  return json_encode($insert);

?>