<?php
    function optionXML($fileName)
    {
        if($fileName == "tutorials.xml")
            $type = "tutorial";
        if($fileName == "tools.xml")
            $type = "tool";
        if($fileName == "books.xml")
            $type = "book";
        echo "<form action='deleteXML.php' method='post'>";
        echo "<select id='$type' name='$type'>";
        $xml = simplexml_load_file($fileName);
        foreach($xml->item as $a)
        {
            $id = "";
            $name = "";
            $link = "";
            $description = "";
            $editButtonName = $type . "_edit" ;
            $deleteButtonName = $type . "_delete";

            foreach($a->attributes() as $b => $c)
            {
                
                switch($b)
                {
                    case "id":
                        $id = $c;
                        break;
                    case "name":
                        $name = $c;
                        break;
                    case "link":
                        $link = $c;
                        break;
                    case "description":
                        $description = $c;
                        break;
                }
            }

            echo "<option value='$id'>$name</option>";
        }
        echo "</select>&nbsp";

        echo "<input type='submit' formmethod='post' formaction='edit.php' name='$editButtonName' value='Edit'/>&nbsp";
        echo "<input type='submit' formmethod='post' formaction='deleteXML.php' name='$deleteButtonName' value='Delete'/>";
        echo "</form>";
    }
?>
