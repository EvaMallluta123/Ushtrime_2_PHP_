<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ushtrimi 1</title>
</head>

<body>
    <?php
    $Shitjet_Neptun = array(
        "viti_1" => array("muaji"=>"Janar","emri" => "Aspirator", "sasia" => "200"),
                         array("muaji"=>"Shkurt","emri" => "Televizor", "sasia" => "340"),
                         array("muaji"=>"Mars","emri" => "Frigrifer", "sasia" => "870"),
                         array("muaji"=>"Prill","emri" => "Telefon", "sasia" => "430"),
                         array("muaji"=>"Maj","emri" => "Aspirator", "sasia" => "200"),
                         array("muaji"=>"Qeshor","emri" => "Aspirator", "sasia" => "200"),
                         array("muaji"=>"Korrik","emri" => "Aspirator", "sasia" => "200"),
                         array("muaji"=>"Gusht","emri" => "Aspirator", "sasia" => "200"),
                         array("muaji"=>"Shtator","emri" => "Aspirator", "sasia" => "200"),
                         array("muaji"=>"Tetor","emri" => "Aspirator", "sasia" => "200"),
                         array("muaji"=>"Nëntor","emri" => "Aspirator", "sasia" => "200"),
                         array("muaji"=>"Dhjetor","emri" => "Aspirator", "sasia" => "200"),
        
//     "viti_2" =>array("muaji"=>"Janar","emri" => "Aspirator", "sasia" => "200"),
//      array("muaji"=>"Shkurt","emri" => "Televizor", "sasia" => "340"),
//      array("muaji"=>"Mars","emri" => "Frigrifer", "sasia" => "870"),
//     array("muaji"=>"Prill","emri" => "Telefon", "sasia" => "430"),
//     "Maj" => array("emri" => "Aspirator", "sasia" => "200"),
//     "Qeshor" => array("emri" => "Aspirator", "sasia" => "200"),
//     "Korrik" => array("emri" => "Aspirator", "sasia" => "200"),
//     "Gusht" => array("emri" => "Aspirator", "sasia" => "200"),
//     "Shtator" => array("emri" => "Aspirator", "sasia" => "200"),
//     "Tetor" => array("emri" => "Aspirator", "sasia" => "200"),
//     "Nëntor" => array("emri" => "Aspirator", "sasia" => "200"),
//     "Dhjetor" => array("emri" => "Aspirator", "sasia" => "200")

// ),
// "viti_3" => array("Janar"=>
//  array("emri" => "Aspirator", "sasia" => "200"),
// "Shkurt" => 
// array("emri" => "Televizor", "sasia" => "340"),
// "Mars" => 
// array("emri" => "Frigrifer", "sasia" => "870"),
// "Prill" => 
// array("emri" => "Telefon", "sasia" => "430"),
// "Maj" => 
// array("emri" => "Aspirator", "sasia" => "200"),
// "Qeshor" => 
// array("emri" => "Aspirator", "sasia" => "200"),
// "Korrik" => 
// array("emri" => "Aspirator", "sasia" => "200"),
// "Gusht" => 
// array("emri" => "Aspirator", "sasia" => "200"),
// "Shtator" => 
// array("emri" => "Aspirator", "sasia" => "200"),
// "Tetor" => 
// array("emri" => "Aspirator", "sasia" => "200"),
// "Nëntor" => 
// array("emri" => "Aspirator", "sasia" => "200"),
// "Dhjetor" => 
// array("emri" => "telefon", "sasia" => "200")

// ),
 );

//  foreach ($Shitjet_Neptun["viti_1"] as $task) {
// 	foreach ($task as $task_detail) {
// 		print_r($task) . '<br>';
// 		echo $task_detail. '<br>';

// 	}
// }
    ?>
    
 
<h3>Zgjidh muajin e dëshiruar</h3>
 <?php 
 foreach ($Shitjet_Neptun as $task=>$task_detail) {
    echo '<form method="POST">';
    echo '<br/><input type="checkbox" id="f_muaji" name="colour[]" value=';echo $task_detail["muaji"] ;'>';
    echo'<label for="f_muaji" name="f_muaji">'; echo  $task_detail["muaji"] ;'</label><br>';
	// 	// echo $task_detail["muaji"]. '<br>';
      
	} 
    echo '<br> <input type="submit" value="Kërko" name="submit">';
    echo'</form>';


    if(isset($_POST['submit'])){

        if(!empty($_POST['colour'])) {
    
            foreach($_POST['colour'] as $value){
                echo " <br/>Muajt e zgjedhur : ". $value.'<br/>';
            }
    
        }
    
    }
   
?>



</body>

</html>