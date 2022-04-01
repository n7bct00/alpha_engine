<?php
require __DIR__ . '/vendor/autoload.php';

$q = $_POST['querys'];
$client = new GoogleSearch("c6f189202258c6742ec4963e39b7c05deb2c61970d3967b411554bed690cccbd");
$query = ["q" => $q,"tbm" => "isch","ijn" => "0"];
$response = $client->get_json($query);
$output = null; 
foreach($response->images_results as $image_result) {
$output .='<div class="col-md-3"><img class="img-fluid img-thumbnail rounded mx-auto d-block" src="'.$image_result->original.'"><h4>'.$image_result->title.'</h4></div>';
}
echo $output;
?>