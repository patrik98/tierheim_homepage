<?php

class NewsModel
{
	public static function getNewsById($newsid)
	{
		$db = new Database();
		$sql = "SELECT * FROM news WHERE newsid=".intval($newsid);

		$result = $db->query($sql);

		if($db->numRows($result) > 0)
		{
			return $db->fetchObject($result);
		}

		return null;
	}

    public static function getAllNews()
    {
        $db = new Database();

        $sql = "SELECT newsid, ueberschrift, inhalt, datum FROM news";
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $newsArray = array();

            while($row = $db->fetchObject($result))
            {
                $newsArray[] = $row;
            }

            return $newsArray;
        }

        return null;
    }

	/*public static function createNews($data)
	{
		$db = new Database();

		$sql = "INSERT INTO news (newsid,ueberschrift,inhalt,datum) VALUES('".$db->escapeString($data['newsid'])."','".$db->escapeString($data['ueberschrift'])."','".$db->escapeString($data['inhalt'])."','".$db->escapeString($data['datum'])."')";
		$db->query($sql);

		$data['newsid'] = $db->insertId();

		return (object) $data;
	}

	public static function editNews($data)
	{
		$db = new Database();

		$sql = "UPDATE news SET ueberschrift='".$db->escapeString($data['ueberschrift'])."',inhalt='".$db->escapeString($data['inhalt'])."',datum='".$db->escapeString($data['datum'])."' WHERE id=".intval($data['datum']);
		$db->query($sql);

		return (object) $data;
	}

	public static function deleteNewsById($newsid)
	{
		$db = new Database();

		$sql = "DELETE FROM news WHERE id=".intval($newsid);
		$db->query($sql);
	}*/
}