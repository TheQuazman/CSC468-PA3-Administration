<?php
/**
 * Example PHP file.
 */
?>
<html>
    <head>
        <title>Tutorials</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="shortcut icon" href="SDSMT-Logo.jpg"/>
        <?php include('displayXML.php'); ?>
    </head>
    <body>        

<!-- #This section needs to be checking for certain permissions in order to display. -->
<!-- Currently displays regardless of permissions. -->
    <div class="adminButtons">
    <p>Welcome, Admin!</p>
        <button type="button" id="viewButton" onclick="alert('Hello world!')">View All Elements</button>
        <button type="button" id="addButton" onclick="alert('Hello world!')">Add</button>
        <button type="button" id="editButton" onclick="alert('Hello world!')">Edit</button>
        <button type="button" id="deleteButton" onclick="alert('Hello world!')">Delete</button>
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
				    <summary style="font-size:30px;">Tutorials and References</summary>
                    <div style="padding-left:30px; background: inherit;">
				        <?php displayXML('tutorials.xml');?>
                    </div>
			    </details>
			    <details open>
    				    <summary style="font-size:30px;">Tools</summary>
                    <div style="padding-left:30px; background: inherit;">
				        <?php displayXML('tools.xml');?>
                    </div>
			    </details>
			    <details open>
				    <summary style="font-size:30px;">Books</summary>
                    <div style="padding-left:30px; background: inherit;">
				        <?php displayXML('books.xml');?>
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
