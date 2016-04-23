<?php
/**
 * Example PHP file.
 */
?>
<html>
    <head>
        <title>Tutorials</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <?php include('displayXML.php'); ?>
    </head>
    <body>
        <div class="container" style="padding-top: 15px">
            <img class="header" src="header.jpg" />
        </div>
        <div class="container" style="float: left; width: 15%; padding-right: 10px;">
            <!-- Left menu tabs -->
            <h2 class="leftmenuheader">Site Map</h2>
            <!--<ul class="leftmenu" style="list-style: none;">-->
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

  	    <div class="container" style="display: block; float: left; width: 80%; padding-left: 15px; padding-top: 25px; padding-bottom: 60px;">
            <div class="content" style="background: white;">
                <details>
				    <summary style="font-size:30px;">Tutorials and References</summary>
                    <div style="padding-left:30px; background: inherit;">
				        <?php displayXML('tutorials.xml');?>
                    </div>
			    </details>
			    <details>
				    <summary style="font-size:30px;">Tools</summary>
                    <div style="padding-left:30px; background: inherit;">
				        <?php displayXML('tools.xml');?>
                    </div>
			    </details>
			    <details>
				    <summary style="font-size:30px;">Books</summary>
                    <div style="padding-left:30px; background: inherit;">
				        <?php displayXML('books.xml');?>
                    </div>
			    </details>
            </div>
        </div>
    
        <div id="footer">
            <center>
            This website was made for Dr. Weiss' CSC 468 class.
            <br>
            Created by Joe Mowry, Ryan Quasney, and Chrissy Sorensen.
            </center>
        </div>
    </body>
</html>
