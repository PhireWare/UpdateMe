<?php
/************************************************************/
/*       This software was developed by PhireWare Inc       */
/*                                                          */
/*   All files are protected under the GPL GNU v2 Licnese   */
/*                Do Not Remove This Header                 */
/*                                                          */
/*                  PhireWare.com - 2011                    */
/************************************************************/

/*  Update Server  */
$server = "http://example.com/server/check.php"; /* Server to check if there is an update. Example: http://update.phireware.com/check.php */

/*  Application Configuration  */
$appname = "Test App"; /* This is the name of your app */
$appid = "com.phireware.app.TestApp"; /* Unique ID for your app. Example: com.phireware.TestApp */
$clientversion = "1.0.0"; /* This is the current version of your software */



/*  DO NOT EDIT THIS  */
$jsondataurl = "" . $server . '?v=' . $clientversion . '&id=' . $appid . '';
$jsondata = file_get_contents($jsondataurl);
$updateme = json_decode($jsondata);

?>