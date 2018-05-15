<?php

//Blaupause übernommen

class ActivityModel
{

	public static function getAllActivities($aktId)
	{
		$db = new Database();

		$sql = "SELECT t.tierid, m.termin, m.bezeichnung, t.name FROM map_aktivitaet m JOIN tier t ON m.tier=t.tierid WHERE m.tier=".intval($aktId);
		$result = $db->query($sql);

		if($db->numRows($result) > 0)
		{
			$aktArray = array();

			while($row = $db->fetchObject($result))
			{
				$aktArray[] = $row;
			}

			return $aktArray;
		}

		return null;
	}

    public static function createNewActivity($data)
    {
        $db = new Database();

        $termin = $db->escapeString($data['termin']);
        $bezeichnung = $db->escapeString($data['bezeichnung']);
        $tier = $data['tier'];
        $nutzer = $data['nutzerid'];

        $sql = "INSERT INTO map_aktivitaet(termin, bezeichnung, tier, nutzer) VALUES('".$termin."','".$bezeichnung."','".$tier."','".$nutzer."')";
        $db->query($sql);

    }
}