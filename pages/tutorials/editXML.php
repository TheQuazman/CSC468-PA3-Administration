<?php
    //file to update XML file
    if(isset($_POST['update']))
    {
        //determine which file to edit the item in
        if($_POST['type'] == 'tutorial')
        {
            //load XML
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

            //save XML
            echo $xml->asXML($fileName);
        }
        if($_POST['type'] == 'tool')
        {
            //load XML
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

            //save XML
            $xml->asXML($fileName);
        }
        if($_POST['type'] == 'book')
        {
            //load XML
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

            //save XML
            $xml->asXML($fileName);
        }


        //redirect to modify.php
        header("Location:modify.php");
    }
?>
