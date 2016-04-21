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
  
  <div class="container" style="">
    <img class="header" src="header.png" />
  </div>

<div class="container" style="float: left; width: 15%;">
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

  	<div class="container" style="display: block; float: left; width: 80%; background-color: white; padding-left: 5px; padding-right: 15px>
        <div class="content">
            <details>
				<summary>Tutorials and References</summary>
				<?php displayXML('tutorials.xml');?>
			</details>

			<details>
				<summary>Tools</summary>
				<?php displayXML('tools.xml');?>
			</details>

			 <details>
				<summary>Books</summary>
				<?php displayXML('books.xml');?>
			</details>
        </div>
    </div>
    
    <div id="footer">
      This is sample text.
      
      <br>
      
      Really.
      
    </div>
    
    </body>
</html>
