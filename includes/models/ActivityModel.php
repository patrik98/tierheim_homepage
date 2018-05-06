<?php

//Blaupause übernommen

class ActivityModel
{

	/*public static function getAllActivities($tierId)
	{
		$db = new Database();

		$sql = "SELECT * FROM map_aktivitaet WHERE aktId=".intval($tierId);
		$result = $db->query($sql);

		if($db->numRows($result) > 0)
		{
			$tiereArray = array();

			while($row = $db->fetchObject($result))
			{
				$tiereArray[] = $row;
			}

			return $tiereArray;
		}

		return null;
	}*/

    public static function createNewActivity($data)
    {
        $db = new Database();

        $termin = $db->escapeString($data['termin']);
        $bezeichnung = $db->escapeString($data['bezeichnung']);
        $tier = $db->escapeString($data['tier']);

        $sql = "INSERT INTO `map_aktivitaet`(`termin`, `bezeichnung`, `tier`) VALUES('".$termin."','".$bezeichnung."','".$tier."')";
        $db->query($sql);

    }
}