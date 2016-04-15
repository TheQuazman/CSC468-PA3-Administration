<?php
    if(isset($_REQUEST['ok']))
    {
        $fileName = "";
        switch ($_REQUEST['type'])
        {
            case "tutorial":
                $fileName = "tutorials.xml";
                break;
            case "tool":
                $fileName = "tools.xml";
                break;
            case "book":
                $fileName = "books.xml";
                break;
        }
        $xml = simplexml_load_file($fileName);
        //$xmlRoot = new SimpleXMLElement($xml);

        $item = $xml->addChild(item);
        $item->addAttribute('name', $_REQUEST['name']);
        $item->addAttribute('link', $_REQUEST['link']);
        $item->addAttribute('description', $_REQUEST['description']);

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
