<html>
    <head>
        <title>SDSMT | Department of Mathematics and Computer Science</title>
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
                    <li><a href="../tutorials/index.php">Tutorials</a></li>
                </ul>
            </div>
        </div>

  	    <div class="body-container">
            <div class="content">
<b>Welcome to Mathematics and Computer Science @ SDSM&T</b>
<br/>
We are in the process of moving all our materials to the main campus website. You can find the new department home at <a href="http://www.sdsmt.edu/MCS/">http://www.sdsmt.edu/MCS/</a>.
<br/><br/>
Our department offers a B.S. in Computer Science, a B.S. in Applied and Computational Mathematics, and a new M.S. in Computational Sciences and Robotics. Our B.S. Computer Science degree is accredited by the Computing Accreditation Commission of ABET, <a href="http://www.abet.org">http://www.abet.org</a>.

            <hr/>
<b>A Few Items Still on this Website</b>
<br/>
The code submission page has been redesigned to hopefully make it more user friendly and intuitive. The code submission page can now be found under <a href="../submit/index.php">"Students Submit It!"</a>. 
The Alumni, resources, and policy pages on the left navigation menu are still complete with the information we have been maintaining. Please check out the new department home at <a href="http://www.sdsmt.edu/MCS/">http://www.sdsmt.edu/MCS/</a> to get the latest and greatest information.


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
