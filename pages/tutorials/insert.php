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
        <form method="post">
            <input type="submit" id="viewButton" value="View All Elements" formaction="index.php"/>
            <input type="submit" id="addButton" value="Add" formaction="insert.php"/>
            <input type="submit" id="modifyButton" value="Modify" formaction="modify.php"/>
        </form>
    </div>
<!-- # -->

        <header>
            <a href="http://www.sdsmt.edu/">
            <img class="header-logo " src="SDSMT-Logo.jpg"/></a>
            Mathematics and Computer Science Department
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
				    <summary style="font-size:30px;">Add a Resource</summary>
                    <div style="padding-left:30px; background: inherit;">
				        <form id="entryForm" action="insertXML.php" method="post">
                            Resource Type:<br/>
                            <input type="radio" name="type" value="tutorial" checked> Tutorial/Reference<br>
                            <input type="radio" name="type" value="tool"> Tool<br>
                            <input type="radio" name="type" value="book"> Book<br/><br/>
                            Resource Name: <input type="text" name="name" /><br/><br/>
                            Link: <input type="text" name="link"/><br/><br/>
                            Description:<br/><br/><textarea form="entryForm" name="description" style="height:100px;width:300px"></textarea><br/><br/>
                            <input type="submit" name="ok" value="add"/>
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
