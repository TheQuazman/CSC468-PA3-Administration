<?php
    if(isset($_POST['ok']))
    {
        $fileName = "";
        switch ($_POST['type'])
        {
            case "tutorial":
                $fileName = "./tutorials.xml";
                break;
            case "tool":
                $fileName = "./tools.xml";
                break;
            case "book":
                $fileName = "./books.xml";
                break;
        }
        $xml = simplexml_load_file($fileName);
        
		$link = $_POST['link'];
		if (!preg_match("~^(?:f|ht)tps?://~i", $link))
		{
			$link = "http://" . $link;
		}

        $item = $xml->addChild(item);
        $item->addAttribute('name', $_POST['name']);
        $item->addAttribute('link', $link);
        $item->addAttribute('description', $_POST['description']);

        $xml->asXML($fileName);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>XML Form Entry</title>
    </head>
    <body>
        <form id="entryForm" action="insertXML.php" method="post">
            Resource Type:<br/>
            <input type="radio" name="type" value="tutorial" checked> Tutorial/Reference<br>
            <input type="radio" name="type" value="tool"> Tool<br>
            <input type="radio" name="type" value="book"> Book<br/><br/>
            Resource Name: <input type="text" name="name" /><br/><br/>
            Link: <input type="text" name="link"/><br/><br/>
            Description:<br/><br/><textarea form="entryForm" name="description" style="height:100px;width:300px"></textarea><br/><br/>
            <input type="submit" name="ok" value="add"/>
        </form>
    </body>
</html>
