<?php

 function filterRequest($request){
    return htmlspecialchars(strip_tags($_POST[$request]));
 }

?>