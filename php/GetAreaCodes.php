<?php
/**
 * @file        GetAreaCodes.php
 * @brief       Handles Areacode variables and HTML
 * @copyright   Copyright (c) 2018 GOautodial Inc. 
 * @author      Christopher Lomuntad
 *
 * @par <b>License</b>:
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

	require_once('APIHandler.php');
	$api 							= \creamy\APIHandler::getInstance();
	
	$start       					= $_POST["start"];
	$length       					= $_POST["length"];
	$order       					= $_POST["order"];
	$user_group						= $_SESSION["usergroup"];
	$perm 							= $api->goGetPermissions('campaign', $user_group);

	//$output 						= $api->API_getAllAreacodes();

	$data 							= '[';
	$i								= 0;

	
	//for($i=0;$i<=count($output->campaign_id);$i++) {
	//	if(!empty($output->pause_code[$i])){
	//		$data 					.= '[';
	//		$data 					.= '"'.$output->pause_code[$i].'",';
	//		$data 					.= '"'.str_replace('+',' ',$output->pause_code_name[$i]).'",';
	//		$data 					.= '"'.$output->billable[$i].'",';
	//		$data 					.= '"<a style=\"margin-right: 5px;\" href=\"#\" class=\"btn-edit-pc btn btn-primary'.($perm->campaign_update === 'N' ? ' hidden' : '').'\" data-camp-id=\"'.$output->campaign_id[$i].'\" data-code=\"'.$output->pause_code[$i].'\" data-name=\"'.str_replace('+',' ',$output->pause_code_name[$i]).'\" data-billable=\"'.$output->billable[$i].'\"><span class=\"fa fa-pencil\"></span></a><a href=\"#\" class=\"btn-delete-pc btn btn-danger'.($perm->pausecodes_delete === 'N' ? ' hidden' : '').'\" data-camp-id=\"'.$output->campaign_id[$i].'\" data-code=\"'.$output->pause_code[$i].'\"><span class=\"fa fa-trash\"></span></a>"';
	//		$data 					.= '],';
	//	}
	//}
	
	$data 							= rtrim($data, ",");    
	$data 							.= ']';		

	echo json_encode($order);

?>
