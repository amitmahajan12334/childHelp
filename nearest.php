<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding-top: 50px;
  padding-bottom: 50px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  padding-right: 150px;;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <thead>
  <tr>
    <th>Name</th>
    <th>Distance In KM</th>
  
  </tr>
  </thead>

  <tbody>
  <?php
include('db1.php');

$v1 = doubleval($_GET['lat']);
$v2 = doubleval($_GET['long']);

$sql = "SELECT id,name, (3959 * acos( cos( radians($v1)) * cos( radians( lat )) * cos( radians( lng ) - radians($v2))
        + sin( radians($v1)) * sin( radians( lat )))) AS distance FROM markers HAVING distance < 15  ORDER BY distance
        LIMIT 0, 20";


$query = $dbh ->prepare($sql);

$query->execute();
$results = $query -> fetchALL(PDO::FETCH_OBJ);

if($query->rowCount()> 0){
    
    foreach($results as $result) {

?>
  <tr>
    <td><?php echo htmlentities($result->name); ?></td>
    <td><?php echo htmlentities($result->distance); ?></td>

  </tr>
  
  <?php
    }
}
?>

  </tbody>
 
 
</table>

</body>
</html>


