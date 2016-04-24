<?php
    if(isset($_POST['update']))
    {
        if($_POST['type'] == 'tutorial')
        {
            $fileName = 'tutorials.xml';
            $xml = simplexml_load_file($fileName);
            foreach($xml->item as $a)
            {
                if($a['id'] == $_POST['id'])
                {
                    $item=dom_import_simplexml($a);
                    $a['name'] = $_POST['name'];
                    $a['link'] = $_POST['link'];
                    $a['description'] = $_POST['description'];
                }

            }
            echo $xml->asXML($fileName);
        }
        if($_POST['type'] == 'tool')
        {
            $fileName = 'tools.xml';
            $xml = simplexml_load_file($fileName);
            foreach($xml->item as $a)
            {
                if($a['id'] == $_POST['id'])
                {
                    $item=dom_import_simplexml($a);
                    $a['name'] = $_POST['name'];
                    $a['link'] = $_POST['link'];
                    $a['description'] = $_POST['description'];
                }
            }
            $xml->asXML($fileName);
        }
        if($_POST['type'] == 'book')
        {
            $fileName = 'books.xml';
            $xml = simplexml_load_file($fileName);
            foreach($xml->item as $a)
            {
                if($a['id'] == $_POST['id'])
                {
                    $item=dom_import_simplexml($a);
                    $a['name'] = $_POST['name'];
                    $a['link'] = $_POST['link'];
                    $a['description'] = $_POST['description'];
                }
            }
            $xml->asXML($fileName);
        }

        header("Location:modify.php");
    }
?>
