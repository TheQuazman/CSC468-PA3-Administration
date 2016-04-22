<?php
    if(isset($_POST['tutorial']))
    {
        $fileName = 'tutorials.xml';
        $xml = simplexml_load_file($fileName);
        foreach($xml->item as $a)
        {
            if($a['id'] == $_POST['tutorial'])
            {
                echo $a->asXML();
                $item=dom_import_simplexml($a);
                $item->parentNode->removeChild($item);
            }
        }

        $xml->asXML($fileName);
    }
    if(isset($_POST['tool']))
    {
        $fileName = 'tools.xml';
        $xml = simplexml_load_file($fileName);
        foreach($xml->item as $a)
        {
            if($a['id'] == $_POST['tool'])
            {
                $item=dom_import_simplexml($a);
                $item->parentNode->removeChild($item);
            }
        }

        $xml->asXML($fileName);
    }
    if(isset($_POST['book']))
    {
        $fileName = 'books.xml';
        $xml = simplexml_load_file($fileName);
        foreach($xml->item as $a)
        {
            if($a['id'] == $_POST['book'])
            {
                $item=dom_import_simplexml($a);
                $item->parentNode->removeChild($item);
            }
        }

        $xml->asXML($fileName);
    }

    $previous = "javascript:history.go(-1)";
    if(isset($_SERVER['HTTP_REFERER']))
        $previous = $_SERVER['HTTP_REFERER'];
    header("Location:$previous");
?>