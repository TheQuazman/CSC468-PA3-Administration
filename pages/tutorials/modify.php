<html>
    <head>
        <title>Tutorials</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="shortcut icon" href="SDSMT-Logo.jpg"/>
        <?php include('optionXML.php'); ?>
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

        <header>
            <img class="header-logo " src="SDSMT-Logo.jpg"/>
            Mathematics and Computer Science Department
            <!--<form action="login.php" method="post">    
            <input type="text" name="name">
            </form>-->
        </header>

        <div class="side-nav-container">
            <!-- Left menu tabs -->
            <h2 class="leftmenuheader">Site Map</h2>
            <!--<ul class="leftmenu" style="list-style: none;">-->
            <div class="list-container">
                <ul class="leftmenu">
                    <li><a href="../alumni/index.php">Alumni</a></li>
                    <li><a href="../checklist/index.php">Checklist</a></li>
                    <li><a href="../courses/index.php">Courses</a></li>
                    <li><a href="../directory/index.php">Directory</a></li>
                    <li><a href="../faculty/index.php">Faculty</a></li>
                    <li><a href="../home/index.php">Courses</a></li>
                    <li><a href="../login/index.php">Login</a></li>
                    <li><a href="../map/index.php">Map</a></li>
                    <li><a href="../policy/index.php">Policy</a></li>
                    <li><a href="../program/index.php">Program</a></li>
                    <li><a href="../research/index.php">Research</a></li>
                    <li><a href="../scheduler/index.php">Scheduler</a></li>
                    <li><a href="../student-orgs/index.php">Student Organizations</a></li>
                    <li><a href="../students/index.php">Students</a></li>
                    <li><a href="../submit/index.php">Submit it!</a></li>
                    <li><a href="../test/index.php">Test</a></li>
                    <li class="current-item"><a href="../tutorials/index.php">Tutorials</a></li>
                </ul>
            </div>
        </div>

  	    <div class="body-container">
            <div class="content">
                <details open>
				    <summary style="font-size:30px;">Tutorials and References</summary>
                    <div style="padding-left:30px; background: inherit;">
				        <?php optionXML('tutorials.xml');?>
                    </div>
			    </details>
			    <details open>
    				    <summary style="font-size:30px;">Tools</summary>
                    <div style="padding-left:30px; background: inherit;">
				        <?php optionXML('tools.xml');?>
                    </div>
			    </details>
			    <details open>
				    <summary style="font-size:30px;">Books</summary>
                    <div style="padding-left:30px; background: inherit;">
				        <?php optionXML('books.xml');?>
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
