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
