
<?php  
	
	session_start();
	if($_SESSION['user']=='')
	{
		header('Location:../index.php');
	}

?>

<html>

	<head>
		
		<title>ROUND 2</title>
		<link href='https://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="finalround.css">
		<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="finalround.js"></script>

	</head>

	<body>

		<?php 

			echo "<span style='font-size:30px; color:yellow;'>Welcome ". $_SESSION['user'] ." ...</span>"; 

		?>

		<h1>WELCOME TO ROUND 2</h1>
		
		<div id="list">
			
			<ul>
				
				<li id="1"><a href="#0">Question 1</a></li>
				<li id="2"><a href="#0">Question 2</a></li>
				<li id="3"><a href="#0">Question 3</a></li>
				<li id="4"><a href="#0">Question 4</a></li>

			</ul>

		</div>

		<div id="main">
			
			<div id="one">
				
				<p>Q1) Given a big text file (file size = 100 Kbytes), split it into 100 files each of size 1Kbytes (Hint: Use split command). </p>
				<p>Then, Merge all files such a way that the output file contains the 'i'th line of all split files before 'j'th line of any split files. (i&lt;j)</p>
				<p>eg : Consider a small file 'sample_file' of size 18 bytes, we split it into 3 files each of size 6 bytes. ( split files be x00, x01, and x02 )</p>
				<p>cat sample_file [enter]</p>
				<ul>
					<li>1</li>
					<li>1</li>
					<li>1</li>
					<li>2</li>
					<li>2</li>
					<li>2</li>
					<li>3</li>
					<li>3</li>
					<li>3</li>
				</ul>

				<p>After executing the script</p>
				<p>cat x00 [enter]</p>
				<ul>
					<li>1</li>
					<li>1</li>
					<li>1</li>
				</ul>
				<p>cat x01 [enter]</p>
				<ul>
					<li>2</li>
					<li>2</li>
					<li>2</li>
				</ul>
				<p>cat x02 [enter]</p>
				<ul>
					<li>3</li>
					<li>3</li>
					<li>3</li>
				</ul>
				<p>cat outputfile [enter]</p>
				<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>1</li>
					<li>2</li>
					<li>3</li> 
				</ul>
			</div>

			<div id="two">
					
				<p>Q2) The killall command in bash kills all the running instances of a process given as argument.</p>
				<p>Eg: 'killall firefox' will kill all the running instances of firefox.</p>
				<p>You have to implement the killall command in bash as a shell script which iterates over every individual running instance of the process(provided as argument) and kills it.</p>
				<p>Eg: 'your_script.sh firefox' should kill all the running instances of firefox.</p>

			</div>

			<div id="three">

				<p>Q3) Given a text file containing student records as:</p>
				</p>StudentName, RollNo, Marks in 5 Subjects out of 100.</p>
				<ul>
					<li>Ross Geller, B130011CS, 65, 79, 50, 15, 96</li>
					<li>Rachel Greene, B130123CS, 80, 68, 75, 76, 92</li>
					<li>Chandler Bing, B110543CS, 58, 40, 96, 93, 81</li>
					<li>Joey Tribbiani, B140444CS, 38, 90, 77, 88, 12</li>
					<li>Phoebe Buffay, B150001CS, 50, 66, 43, 47, 76</li>
					<li>Monica Geller, B150012CS, 100, 96, 94, 91, 80</li>
				</ul>
				<p>Calculate the grade of each student and output it along with their name.</p>
				<p>The grade is calculated as follows:</p>
				<p>If marks in any subject is less than 40 the grade is F</p>
				<p>else calculate the percentage of marks obtained and assign the grade as follows:</p>
				<ul>
					<li>91-100% S</li>
					<li>81-90% A</li>
					<li>71-80% B</li>
					<li>61-70% C</li>
					<li>51-60% D</li>
					<li>41-50% E</li>
				</ul>
				Output for the given case will be:
				<ul>
					<li>Ross Geller, F</li>
					<li>Rachel Greene, B</li>
					<li>Chandler Bing, B</li>
					<li>Joey Tribbiani, F</li>
					<li>Phoebe Buffay, D</li>
					<li>Monica Geller, S</li>
				</ul>

			</div>

			<div id="four">

				<p>Q4) Sort a directory containing a mixture of files into neatly organized directories.</p>
				<p>Redundant files should be avoided.</p>
				<p>(Note : Two input files with different filenames and same content are considered as redundant) </p>
				<p>eg : Following are the list of files :</p>
				<li>ls [enter]</li>
				<li>a.pdf b.pdf file.txt</li> 
				<p>Suppose a.pdf and b.pdf are redundant PDF files</p>
				<p>file.txt is a ASCII text file</p>
				<p>After executing the script :</p>
				<li>ls [enter]</li>
				<li>PDF TEXT</li>
				<p>where PDF and TEXT are directories</p>
				<li>ls PDF [enter]</li>
				<li>a.pdf</li>
				<li>ls TEXT [enter]</li>
				<li>file.txt</li>
				
			</div>

		</div>

		<div id="submitdiv">
			
			<center><a href="end.html"><button>FINISH TEST</button></a></center>

		</div>

	</body>

</html>