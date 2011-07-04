<?php
/************************************************************/
/*       This software was developed by PhireWare Inc       */
/*                                                          */
/*   All files are protected under the GPL GNU v2 Licnese   */
/*                Do Not Remove This Header                 */
/*                                                          */
/*                  PhireWare.com - 2011                    */
/************************************************************/
include('config.php');
?>
<html>
	<head>
		<title><?php echo $updateme->appname; ?>'s Info</title>
	</head>

	<body>
	
		<h3><?php echo $updateme->appname; ?>'s Info</h3>
		<p><b>App Name:</b>
			<?php echo $updateme->appname; ?>
			</p>
		<p><b>Your App Version:</b>
		<?php echo $updateme->yourversion; ?>
			</p>
		<p><b>The Current App Version:</b>
			<?php echo $updateme->version; ?>
			</p>
		<p><b>Your App ID:</b>
			<?php echo $updateme->appid; ?>
			</p>
		<p><b>Message:</b>
			<?php echo $updateme->message; ?>
			</p>
		<p><b>Download Link:</b>
			<?php
			if($updateme->download == ""){
				echo "N/A";
			}
			else {
				echo "<a href=\"$updateme->download\">Download Update</a>";
			}
			
			?>
			</p>
			<br>
		<p><b>Status Log:</b>
			<?php echo $updateme->status; ?>
			</p>
	
	</body>
</html>