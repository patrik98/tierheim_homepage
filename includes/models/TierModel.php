<?php

class TierModel
{
	public static function getTierById($tierid)
	{
		$db = new Database();
		$sql = "SELECT * FROM tier WHERE id=".intval($tierid);

		$result = $db->query($sql);

		if($db->numRows($result) > 0)
		{
			return $db->fetchObject($result);
		}

		return null;
	}

	public static function getAlleTiereByUserId($tierId)
	{
		$db = new Database();

		$sql = "SELECT * FROM address WHERE userId=".intval($tierId);
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
	}

	public static function createTier($data)
	{
		$db = new Database();

		$sql = "INSERT INTO tier (tierid,name,gebdat,tierart) VALUES('".$db->escapeString($data['tierid'])."','".$db->escapeString($data['name'])."','".$db->escapeString($data['gebdat'])."','".$db->escapeString($data['tierart'])."')";
		$db->query($sql);

		$data['tierid'] = $db->insertId();

		return (object) $data;
	}

	public static function saveTier($data)
	{
		$db = new Database();

		$sql = "UPDATE tier SET name='".$db->escapeString($data['name'])."',gebdat='".$db->escapeString($data['gebdat'])."',tierart='".$db->escapeString($data['tierart'])."' WHERE id=".intval($data['tierid']);
		$db->query($sql);

		return (object) $data;
	}

	public static function deleteTierById($tierid)
	{
		$db = new Database();

		$sql = "DELETE FROM tier WHERE id=".intval($tierid);
		$db->query($sql);
	}
}