/**********************************************************************
Filename:	README_WINDOWS.txt:
Author:		Jez Hancock
Support:	http://forums.munk.me.uk/
Version:	$Id: README_WINDOWS.txt 19 2007-04-09 09:40:42Z Jez $

Description:
This file contains instructions for installing the simpleauth package on
MS Windows.
**********************************************************************/

/**********************************************************************
Installing Apache, MySQL and PHP for Windows (WAMP) and SimpleAuth
**********************************************************************/

/**********************************************************************
Introduction
**********************************************************************/
	This is an article intended for users who wish to install WAMP
	(Apache, MySQL and PHP for Windows) and get simpleauth running on
	this setup.

	Please follow the instructions very carefully and do not deviate
	from them.  Once you have a basic setup running you can then go back
	and change various options.

	Note:
	-----
	These instructions are correct at the time of writing.  URLs of
	course are subject to change and it should be simple enough to find
	the correct link if one of the links below is dead.

	Please let me know via the forum if there are any problems with this
	text.


/**********************************************************************
Downloading and Installing WAMP
**********************************************************************/

	1.  Download the Firedevpages WAMP package from here:

		http://www.firepages.com.au/phpdev41.htm

		At the time of writing the latest stable release is phpdev423 and
		can be downloaded here:

		http://prdownloads.sourceforge.net/phpdev5/phpdev423.exe

	2.  Run the executable phpdev423.exe.

		When prompted, install to:

		C:\phpdev

	3.  Run the batch file 2k-nt-xp-phpdev_start.bat:

		C:\phpdev\2K-NT-XP-phpdev_start.bat

		This will start the Apache webserver and pop up a web browser
		loading http://localhost.

	Notes:
	-----
	For Windows 9x users, execute C:\phpdev\98-ME-phpdev_start.bat.

	YOU DO NOT NEED TO DO ANYTHING ELSE AT THIS STAGE!!!  WAMP is
	installed and ready to go - please do not change anything at this
	stage, as tempting as it is to investigate and play, please just
	follow these instructions :)


/**********************************************************************
Downloading and Installing SimpleAuth
**********************************************************************/

	1.	Download the latest simpleauth package from here:

		http://simpleauth.munk.me.uk/download/

	2.	Extract the files from the simplauth package into:

		C:\phpdev\www\

		Note:
		-----
		All the files should be extracted into a 'simpleauth'
		subdirectory, c:\phpdev\www\simpleauth.


	3.	Create a 'simpleauth' database and creating a 'users' table -
		open this URL:

		http://localhost/phpmyadmin/

		in your web browser.

		In the textbox under the text 'Create new database', enter
		'simpleauth' to create the 'simpleauth' db.

		Note:
		-----
		On success you will be forwarded to a page where you can enter
		tables into the db.


	4.	In phpmyadmin, click on the 'SQL' link on the next page to enter
		the SQL data into the 'simpleauth' db.  Enter
		'C:\phpdev\www\simpleauth\users.sql' in the 'Or Location of the
		textfile :' text-box and click the 'Go'button.

		Note:
		-----
		This will use the SQL in the file
		'C:\phpdev\www\simpleauth\users.sql' to create the table data in
		the 'simpleauth' db.  If all goes well you should see 'Your
		SQL-query has been executed successfully'.


/**********************************************************************
Configuring SimpleAuth
**********************************************************************/

	1.	Open the file: C:\phpdev\www\simpleauth\config.php in a text
		editor.  Change the following lines so they read:

		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$dbname="simpleauth";

	IMPORTANT:
	----------
	THE ABOVE CONFIGURATION IS ONLY TO CONFIRM THAT SIMPLEAUTH WORKS OK!!!

	You must add a user in MySQL that has access rights only on the
	simpleauth db and then change the previous config.php $dbpass line
	to include that user's password.


/**********************************************************************
Testing the SimpleAuth installation
**********************************************************************/

	1.	Open http://localhost/simpleauth/.

	2.	Click on the 'join' link:

		http://localhost/simpleauth/join.php

	3.	Add a test user by entering 'test' in each of the fields.

	4.	Click on the 'Submit' button - you will be forwarded to the
		members page where you should see the message:

		Welcome to the members page test
		Your password is: test
		Logout


/**********************************************************************
Congratulations
**********************************************************************/
	If you got this far without problems you now have simpleauth up and
	running on your windows machine!
