<?php
/************************************************************/
/*       This software was developed by PhireWare Inc       */
/*                                                          */
/*   All files are protected under the GPL GNU v2 Licnese   */
/*                Do Not Remove This Header                 */
/*                                                          */
/*                  PhireWare.com - 2011                    */
/************************************************************/

header('Content-type: application/json');

$clientversion = $_GET['v'];
$clientappid = $_GET['id'];

if($clientappid == ""){
	echo "Error";
}
else {

if(is_dir("apps/" . $clientappid . "/")) {
	
	include("apps/" . $clientappid . "/config.php");
	
	if($clientversion == $version){

		$output = array(
			"appname" => "$appname",
			"appid" => "$appid",
			"yourversion" => "$clientversion",
			"version" => "$version",
			"status" => "App is up-to-date",
			"message" => "$yesmessage",
			"download" => ""
		);

			echo json_encode($output);

		}

	else {

		$output = array(
			"appname" => "$appname",
			"appid" => "$appid",
			"yourversion" => "$clientversion",
			"version" => "$version",
			"status" => "App is not up-to-date",
			"message" => "$nomessage",
			"download" => "$download"
		);

			echo json_encode($output);

		}
}
else {
	
	$output = array(
		"appname" => "X",
		"appid" => "X",
		"yourversion" => "X",
		"version" => "X",
		"status" => "App Error",
		"message" => "No such app found! (Wrong app ID)"
	);

		echo json_encode($output);
		
}

}

?>