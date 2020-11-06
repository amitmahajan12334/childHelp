<?php
    require "../db1.php";
    extract($_GET);
    $sql1 = "SELECT * from records where ngo_id=? AND child_id=?";
    $query1 = $dbh ->prepare($sql1);
    $query1->execute([$ngo_id, $child_id]);
    $count = count($query1 -> fetchALL(PDO::FETCH_OBJ));
    if($status == 1){
        if($count > 0){
            echo "record already exists";
            exit(0);
        }
        $sql2 = "INSERT INTO records (`ngo_id`, `child_id`) values (?,?)";
        $query2 = $dbh ->prepare($sql2);
        $query2->execute([$ngo_id, $child_id]);
    }
    else{
        $sql3 = "DELETE FROM records where ngo_id=? AND child_id=?";
        $query3 = $dbh ->prepare($sql3);
        $query3->execute([$ngo_id, $child_id]);
    }
    $sql3 = "UPDATE child_details set `status`=$status where id=?";
    $query3 = $dbh ->prepare($sql3);
    $query3->execute([$child_id]);
    header("Location: ./request.php");
    
?>