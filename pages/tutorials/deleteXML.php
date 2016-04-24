<?php
    //This PHP file deletes a node from XML given an ID

    //if it is an item in tutorials.xml
    if(isset($_POST['tutorial']))
    {
        //load XML
        $fileName = 'tutorials.xml';
        $xml = simplexml_load_file($fileName);

        //iterate through the items and delete the corresponding ID
        foreach($xml->item as $a)
        {
            if($a['id'] == $_POST['tutorial'])
            {
                //delete the node that matches the ID
                $item=dom_import_simplexml($a);
                $item->parentNode->removeChild($item);
            }
        }

        //save XML
        $xml->asXML($fileName);
    }

    //if it is an item in tools.xml
    if(isset($_POST['tool']))
    {
        //load XML
        $fileName = 'tools.xml';
        $xml = simplexml_load_file($fileName);

        foreach($xml->item as $a)
        {
            if($a['id'] == $_POST['tool'])
            {
                //delete the node that matches the ID
                $item=dom_import_simplexml($a);
                $item->parentNode->removeChild($item);
            }
        }

        //save XML
        $xml->asXML($fileName);
    }

    //if it is an item in books.xml
    if(isset($_POST['book']))
    {
        //load XML
        $fileName = 'books.xml';
        $xml = simplexml_load_file($fileName);

        foreach($xml->item as $a)
        {
            if($a['id'] == $_POST['book'])
            {
                //delete the node that matches the ID
                $item=dom_import_simplexml($a);
                $item->parentNode->removeChild($item);
            }
        }

        //save XML
        $xml->asXML($fileName);
    }

    //redirect to previous page
    $previous = "javascript:history.go(-1)";
    if(isset($_SERVER['HTTP_REFERER']))
        $previous = $_SERVER['HTTP_REFERER'];
    header("Location:$previous");
?>