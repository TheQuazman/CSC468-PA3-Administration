<?php
    function displayXML($fileName)
    {
        echo '<table style="width:100%">';
        $xml = simplexml_load_file($fileName);
        foreach($xml->item as $a)
        {
            $name = "";
            $link = "";
            $description = "";

            foreach($a->attributes() as $b => $c)
            {
                switch($b)
                {
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
            echo '<tr>';
            echo '<td width="20%" style="padding-bottom:20px">';
            echo "<a href=\"$link\" target=\"_blank\">$name</a></td>";
            echo '<td width="80%" style="padding-bottom:20px">';
            echo "$description</td>";
            echo '</tr>';
        }
        echo "</table>";
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
            displayXML("tutorials.xml");
            echo "<h1>Tools</h1>";
            displayXML("tools.xml");
            echo '</div>';
            echo "<h1>Books</h1>";
            displayXML("books.xml");
        ?>
    </body>
</html>
