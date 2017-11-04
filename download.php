<?php
	$thefiledata = 'thefiledata';  // file which contains the data
	$thefilename = 'thefilename';  // file which contains only the filename
	$thefilecode = 'thefilecode';  // file which contains code 
	$autoeraseafterdownload = 1;   // delete file after a download

	if( isset( $_POST["downloadbtn"] ) ) {
		extract( $_POST );

		// get value from file
		$filecode = fopen($thefilecode, 'r');
		$savedcode = fgets($filecode);
		fclose($filecode);

		// get value from form
		$newcode = $_POST["randomcodeinput"];

		// compare values
		if( $savedcode == $newcode && $newcode != "" ) {
		    $fname = file_get_contents($thefilename);
		    header('Content-Description: File Transfer');
		    header('Content-Type: application/octet-stream');
		    header('Content-Disposition: attachment; filename="' . $fname . '"');
		    header('Expires: 0');
		    header('Cache-Control: must-revalidate');
		    header('Pragma: public');
		    header('Content-Length: ' . filesize($thefiledata));
		    readfile($thefiledata);

		    if ($autoeraseafterdownload) 
		    {
		        unlink($thefiledata);
		        unlink($thefilename);
		        unlink($thefilecode);
		    }
		}else {
			echo "<script> alert('Wrong code. Try again'); </script>";
		}

		exit;
	}
?>

<html>
	<head>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<style type="text/css">
			*{
				color:white;
				font-family:sans-serif;
				padding:0em;
				margin:0;
				-webkit-touch-callout:none;
				-webkit-user-select:none;
				-khtml-user-select:none;
				-moz-user-select:none;
				-ms-user-select:none;
				user-select:none
			}

			body{
				width:100%;
				top:0;
				position:
				absolute;
				background-color:#f90;
				height:100%;
				left:0
			}

			div{
				position:absolute;
				top:45%;
				height:auto;
				text-align:center;
				width:100%;
				font-size: 2em;
				text-decoration:none;
				display:block
			}

			input[type="text"] {
				-webkit-appearance : none;
				color: black;
				text-align: center;
				height: 2em;
				margin-bottom: 5px;
			}

			input[type="submit"] {
				-webkit-appearance : none;
				height : 2em;
				color : black;
			}

		</style>
		<title>Yopp</title>
	</head>

	<body> 
		<div>

			ENTER CODE TO DOWNLOAD <br>
			
			<form method="POST" >
				<input type="text" name="randomcodeinput" maxlength="4" /> <br>
				<input type="submit" name="downloadbtn" value="Get my file!" />
			</form>


		</div>
	</body>
</html>