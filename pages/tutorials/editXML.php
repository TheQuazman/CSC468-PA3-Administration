<?php
    function editXML($fileName)
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
            //echo '<tr>';
            //echo '<td width="10%" style="padding-bottom:20px">';
            //echo "<input type='hidden' formaction='editXML.php' formmethod='post' name='$buttonName' value='$id'/>";
            //echo "<input type='submit' formaction='editXML.php' formmethod='post' name='edit' value='Edit'"/>
			//echo "<input type='submit' formaction='editXML.php' formmethod='post' name='delete' value='Delete'/></td>";
            //echo '<td width="20%" style="padding-bottom:20px">';
            //echo "<a href=\"$link\" target=\"_blank\">$name</a></td>";
            //echo '<td width="80%" style="padding-bottom:20px">';
            //echo "$description</td>";
            //echo '</tr>';
        }
        echo "</select>";

        echo "<input type='submit' formmethod='post' formaction='deleteXML.php' name='$editButtonName' value='Edit'/>";
        echo "<input type='submit' formmethod='post' formaction='deleteXML.php' name='$deleteButtonName' value='Delete'/>";
        echo "</form>";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>XML Display Test</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            echo "<h1>Tutorials and Reference</h1>";
            editXML("tutorials.xml");
            echo "<h1>Tools</h1>";
            editXML("tools.xml");
            echo '</div>';
            echo "<h1>Books</h1>";
            editXML("books.xml");
        ?>
    </body>
</html>
