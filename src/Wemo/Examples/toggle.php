<script type="text/javascript" src="update.js"></script> 

<?php
	//$ip = $_REQUEST['ip'];
	//$id = $_REQUEST['id'];

    $ip = "192.168.1.119";
	$id = 1;

	require ("../models/Device.php");
	require ("../models/Outlet.php");

	$outlet = new \wemo\models\Outlet($ip); // Change to location of Outlet on your network
	$status = $outlet->getIsOn();

	// Off State
    // $outlet->setIsOn(false);

    // On State
    // $outlet->setIsOn(true);

    // Toggle State
     $outlet->setIsOn(($status) ? 0 : 1);

    //echo $outlet->getIconUrl(); // e.g. "http://192.168.1.x:49153/icon.png"
    echo $outlet->getDisplayName(); // e.g. "Air Purifier"
    //echo $outlet->getManufacturer(); // e.g. "Belkin"
    //echo $outlet->getModelDescription(); // e.g. "Belkin Plugin Socket 1.0"


	echo '<img onClick="javascript:WemoSetState(\'' . $id . '\',\'' . $ip . '\');" src="icon_status_' . ($status?'off':'on') . '.gif" />';




	unset($outlet);
?>
