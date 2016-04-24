<?php
    //this file inserts information into an XML file
    if(isset($_POST['ok']))
    {
        $fileName = "";

        //determine which file to add to
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

        //load XML
        $xml = simplexml_load_file($fileName);
        
        //adjust link if it doesn't have http://, ftp:// etc.
		$link = $_POST['link'];
		if (!preg_match("~^(?:f|ht)tps?://~i", $link))
		{
			$link = "http://" . $link;
		}

        //find last item to increment ID
		$attrs = array();
		$nodes = $xml->xpath('/*/item[last()]');
		if (is_array($nodes) && ! empty($nodes))
		{
    		foreach ($nodes[0]->attributes() as $attr)
			{
        		$attrs[$attr->getName()] = (string) $attr;
    		}
		}
		$id = $attrs['id'] + 1;

        //add XML item
        $item = $xml->addChild(item);
		$item->addAttribute('id', (string)$id);
        $item->addAttribute('name', $_POST['name']);
        $item->addAttribute('link', $link);
        $item->addAttribute('description', $_POST['description']);

        //saveXML
        $xml->asXML($fileName);

        //redirect to previous page
	    $previous = "javascript:history.go(-1)";
    	if(isset($_SERVER['HTTP_REFERER']))
        	$previous = $_SERVER['HTTP_REFERER'];
    	header("Location:$previous");
    }
?>