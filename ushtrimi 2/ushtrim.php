<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ushtrimi 1</title>
</head>

<body>
<style> table {border-collapse: collapse; padding:5px; } table, th, td { border:1px solid black; padding:10px;} </style> 
    <?php
$Shitjet_Neptun = array(
    "viti_1" => array(
        'emri' => 'Aspirator',
        'sasia' => '567',
    ),
    "viti_2" => array(
        'emri' => 'Televizor',
        'sasia' => '187'
    ),
    "viti_3" => array(
        'emri' => 'Laptopi',
        'sasia' => '177'
    ),
);
    ?>
    
    <?php
 $max =number_format( $Shitjet_Neptun["viti_1"]["sasia"]) ;'<br/>';
foreach ($Shitjet_Neptun as $task=>$task_detail) {
    $sasia= number_format($task_detail["sasia"]);
    if ($max <= $sasia){
    $max = $sasia;
  $emri= $task_detail["emri"];
 } else{
    $min = $sasia;
  $emri2= $task_detail["emri"];
}
}
echo "Maksimumi i shitjeve për të gjitha vitet është"; echo $emri; echo " , me "; echo $max; echo " sasi.", "<br>";
echo "Minimumi i shitjeve për të gjitha vitet është"; echo $emri2; echo " , me "; echo $min; echo " sasi.", "<br>";




 $total = 0;
 foreach ($Shitjet_Neptun as $task=>$task_detail) {
$total=$total+$task_detail["sasia"];
 };
 $mesatarja=$total/count($Shitjet_Neptun);	
 "<br>"; echo "Mesatarja është: " ;echo $mesatarja , "<br>";
echo "Totali është: " ;echo $total ;

     ?>
    
 
<h3>Zgjidh vitin e dëshiruar</h3> -->
<form method="POST">
    <br/><input type="checkbox" id="viti1" name="viti[]" value="viti_1"> VITI 1<br>
    <br/><input type="checkbox" id="viti2" name="viti[]" value="viti_2"> VITI 2<br>
    <br/><input type="checkbox" id="viti3" name="viti[]" value="viti_3"> VITI 3<br>

    <br> <input type="submit" value="Kërko" name="submit">
    </form>
  <?php 
    if(isset($_POST['submit'])){
        if(!empty($_POST['viti'])) {
    
            foreach($_POST['viti'] as $viti){
           
                echo " <br/>Viti i zgjedhur : ". $viti.'<br/>';
               foreach($Shitjet_Neptun as $key=>$value){
                    if($viti == strval($key) ){
                        foreach ( $Shitjet_Neptun[$key] as $cdovit)
                        echo "<table>
                                    <tr>
                                      <td> $cdovit </td>
                                    </tr>
                                  </table>";
                       
               }

        }
            }
            
        }
        else  {
            echo "Duhet të zgjidhni të paktën 1 vit.";
        }
    
    }
   
?>



</body>
</html>