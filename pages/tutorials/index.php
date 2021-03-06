<html>
    <head>
        <title>Tutorials</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="shortcut icon" href="SDSMT-Logo.jpg"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="toggle.js"></script>
        <?php include('displayXML.php');?>
        <?php include('../../includes/user.php');?>
        <?php include('../../includes/mcs-user.php')?>
        <script>
            // Don’t use this! See note below.
            if (!('open' in document.createElement('details'))) {
                document.documentElement.className += ' no-details';
            }       
        </script>

        <script>
            // Detect whether `<details>`/`<summary>` are natively supported
            console.log($.fn.details.support ? 'Native support' : 'No native support');
            // Conditionally add a classname to the `html` element, based on native support
            $('html').addClass($.fn.details.support ? 'details' : 'no-details');

            $('details').on({
             'open.details': function() {
                console.log('opened');
              },
              'close.details': function() {
                console.log('closed');
              }
            });
        </script>
    </head>
    <body>        

<!-- #This section needs to be checking for certain permissions in 
        order to display. -->
<!-- Currently displays regardless of permissions. -->

    <!-- If a user is logged in -->    
    <!-- For demo, thow an '!' in here -->
    <?php if( User::isAuthenticated() ): ?>
    <!--Then check here if user is an admin, if so, give them edit
            permission-->
    <div class="adminButtons">
        <p>Welcome, Admin!</p>
        <form method="post">
            <input type="submit" id="viewButton" value="View All Elements" formaction="index.php"/>
            <input type="submit" id="addButton" value="Add" formaction="insert.php"/>
            <input type="submit" id="modifyButton" value="Modify" formaction="modify.php"/>
        </form>
    </div>

    <!-- If a user is not logged in, show login dialog-->
    <?php else: ?>
    <div class="loginButtons">
        <p>Login:</p>
        <form method="post">
            <div class="loginLabel">Username:</div>
                 <input type="text" name="userId"/>
            <br/>
            <div class="loginLabel">Password:</div>
                <input type="text" name="password"/>
                <input type="submit" value="Submit"/>
        </form>
    </div>
    <?php endif ?>

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
                <script>
                $('details').details();
                </script>
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
