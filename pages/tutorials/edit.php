<?php
    $id = "";
    $name = "";
    $link = "";
    $description = "";

    if(isset($_POST['tutorial']))
    {
        $fileName = 'tutorials.xml';
        $xml = simplexml_load_file($fileName);
        foreach($xml->item as $a)
        {
            if($a['id'] == $_POST['tutorial'])
            {
                $id = $a['id'];
                $type = 'tutorial';
                $name = $a['name'];
                $link = $a['link'];
                $description = $a['description'];
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
                $id = $a['id'];
                $type = 'tool';
                $name = $a['name'];
                $link = $a['link'];
                $description = $a['description'];
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
                $id = $a['id'];
                $type = 'book';
                $name = $a['name'];
                $link = $a['link'];
                $description = $a['description'];
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tutorials</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="shortcut icon" href="SDSMT-Logo.jpg"/>
    </head>
    <body>        

<!-- #This section needs to be checking for certain permissions in order to display. -->
<!-- Currently displays regardless of permissions. -->
    <div class="adminButtons">
    <p>Welcome, Admin!</p>
        <form method="post">
            <input type="submit" id="viewButton" value="View All Elements" formaction="index.php"/>
            <input type="submit" id="addButton" value="Add" formaction="insert.php"/>
            <input type="submit" id="modifyButton" value="Modify" formaction="modify.php"/>
        </form>
    </div>
<!-- # -->

        <div id="header">
            <img class="header-logo " src="SDSMT-Logo.jpg"/>
            Mathematics and Computer Science Department
            <!--<form action="login.php" method="post">    
            <input type="text" name="name">
            </form>-->
        </div>

        <div class="side-nav-container">
            <!-- Left menu tabs -->
            <h2 class="leftmenuheader">Site Map</h2>
            <!--<ul class="leftmenu" style="list-style: none;">-->
            <div class="list-container">
                <ul class="leftmenu">
                    <li class="leftitem1"><a href="../alumni/index.php">Alumni</a></li>
                    <li class="leftitem2"><a href="../checklist/index.php">Checklist</a></li>
                    <li class="leftitem1"><a href="../courses/index.php">Courses</a></li>
                    <li class="leftitem2"><a href="../directory/index.php">Directory</a></li>
                    <li class="leftitem1"><a href="../faculty/index.php">Faculty</a></li>
                    <li class="leftitem2"><a href="../home/index.php">Courses</a></li>
                    <li class="leftitem1"><a href="../login/index.php">Login</a></li>
                    <li class="leftitem2"><a href="../map/index.php">Map</a></li>
                    <li class="leftitem1"><a href="../policy/index.php">Policy</a></li>
                    <li class="leftitem2"><a href="../program/index.php">Program</a></li>
                    <li class="leftitem1"><a href="../research/index.php">Research</a></li>
                    <li class="leftitem2"><a href="../scheduler/index.php">Scheduler</a></li>
                    <li class="leftitem1"><a href="../student-orgs/index.php">Student Organizations</a></li>
                    <li class="leftitem2"><a href="../students/index.php">Students</a></li>
                    <li class="leftitem1"><a href="../submit/index.php">Submit it!</a></li>
                    <li class="leftitem2"><a href="../test/index.php">Test</a></li>
                    <li class="currentleftitem"><a href="../tutorials/index.php">Tutorials</a></li>
                </ul>
            </div>
        </div>

  	    <div class="body-container">
            <div class="content">
                <details open>
				    <summary style="font-size:30px;">Edit a Resource</summary>
                    <div style="padding-left:30px; background: inherit;">
				        <form id="entryForm" action="editXML.php" method="post">
                            <?php
                                echo "<input type='hidden' name='id' value='$id'/>";
                                echo "<input type='hidden' name='type' value='$type'/>";
                                echo "Resource Name: <input type='text' name='name' value='$name'/><br/><br/>";
                                echo "Link: <input type='text' name='link' value='$link'/><br/><br/>";
                                echo "Description:<br/><br/><textarea form='entryForm' name='description' style='height:100px;width:300px'>$description</textarea><br/><br/>";
                            ?>
                            
                            <input type="submit" name="update" value="Update"/>
                        </form>
                    </div>
			    </details>
            </div>
        </div>
    
        <div id="footer">
            <center>
            <br>
            This website was made for Dr. Weiss's CSC 468 - Graphic User Interface class.
            <br>
            Created by Joe Mowry, Ryan Quasney, and Chrissy Sorensen.
            <br>
            April 2016
            <br>
            <br>
            </center>
        </div>
    </body>
</html>

