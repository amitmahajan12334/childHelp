<?php

class add_to_ngo{
    function addImage($iid,$qty=1){
        $_SESSION['request']['$iid']['qty'] = $qty;

    }

    function removeImage($iid){
        if(isset($_SESSION['request'][$iid])){
            unset($_SESSION['request'][$iid]);
        }
    }

    function emptyImage(){
        unset($_SESSION['request']);
    }

}

?>