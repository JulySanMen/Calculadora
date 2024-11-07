// pediremos recomendaciones de lugares de Colombia de acuerdo con su clima, ubicación o atractivo turístico

$weather = array("Bogota" => "Frio", "Monteria" => "Calido", "Medellin" => "Templado" );
$ubication = array ("Guajira"=> "Norte", "Leticia"=>"Sur", "Santander"=>"Este", 
"Antioquia"=>"Oeste");
$tourism = array("Santa Marta"=>"Mar", "Villavicencio"=>"Llano", "Rioacha"=>"Desierto", 
"Quindio"=>"Valle" );

$search = readline("Seleccione la opción de su interes:   1.Clima 2.Ubicación 3.Turismo  ");