TaskFreak! Multi Users 0.6.4
============================
Released: June, the 27th, 2010

FIRST OF ALL
------------
If you update from an older version, please edit your config.php
(read instructions below carefully, few important changes need to be made)
Also please check CHANGES.txt to see what has been done

CHANGES.txt also lists the exact files that have been modified since previous
version: easier for a quicker update. You'd still need to edit your config.php
according to the instructions below.

RIGHTS.txt answers a few FAQ about how to set up access rights for users

Please report bugs or ask for help at http://forum.taskfreak.com

UPDATE FROM 0.6.3
-----------------
update your config.php file:
[code]
define('FRK_VERSION','0.6.4');
define('FRK_VERSION_RELEASE','2010-06-27');
[/code]

If you're upgrading to PHP 5.2.x or later, you might want to turn some alerts
off, by modifying config.php in line 11 :
[code]
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
[/code]

or, for any version of PHP, if you really don't want to get any errors
[code]
error_reporting(0);
[/code]



/* --- NEW OPTIONS IN 0.6.2 ------ */

// do not keep user connected (disable background ajax request)
// set to false = keep connected, 
// set to true = kick out when session times out
define('FRK_DISCONNECT_ON_TIMEOUT',FALSE); // by default


UPDATE FROM 0.5.x
----------------------------

/* --- NEW RIGHTS in 0.6.1 ------- */

// add new line in confProjectsRights
// this defines rights for user accessing tasks not associated with
// the project the task belongs to
$GLOBALS['confProjectRights'] = array(
	0 => '11000', // not associated to project
	...
);
// in this example, user can see comments and post a new one
// only the first 5 rights are used

/* --- NEW OPTIONS IN 0.6.1 ------ */
// hide far future tasks
// e.g. if set to 0, all future tasks will show
// e.g. if set to 30, will not show tasks with deadline more than a month
// later
// basically, set it to 0 or the number of days
define('FRK_DEFAULT_FAR_FUTURE_HIDE',0);

/* --- NEW OPTIONS SINCE 0.5.7 --- */
// add this if you still have problems with slashes added when using quotes
define('TZN_MAGIC_FIX',TRUE);

/* --- NEW OPTIONS SINCE 0.5.6 --- */
// would the page reload for real every XX minutes?
define('FRK_RELOAD_FOR_REAL',5);

/* --- NEW OPTIONS SINCE 0.5.4 --- */
// show own tasks (TRUE) or all users' tasks (FALSE) by default
define('FRK_DEFAULT_VIEW_OWN_TASKS',FALSE);

/* --- NEW OPTIONS SINCE 0.5.3 --- */
// add a confirmation request when completing a task (from task list)
define('FRK_CONFIRM_STATUS_CLOSE',TRUE);

// in RSS, either show only own tasks, or all users'
define('FRK_DEFAULT_RSS_OWN_ONLY',TRUE);

if you're experiencing prolems with UTF-8 support (your browser displays weird
characters instead of accents or other non ascii characters), add this in your
config.php file:

[code]
define('TZN_FORCE_UTF-8',TRUE);
[/code]

UPGRADE FROM 0.4.x
------------------
update all .php files

in config.php, add/update the following:

[code]
// update deadline on completed
define('FRK_COMPLETE_DEADLINE',TRUE);
// US date format mm/dd (eg. 14th may = 5/14 vs. 14/5)
define('TZN_DATE_US_FORMAT',FALSE);

// === DATE FORMATS ===========================================
define("TZN_DATE_SHT","%d %b %y");
define("TZN_DATE_SHX","%a %d %b %y");
define("TZN_DATE_LNG","%d %B %Y");
define("TZN_DATE_LNX","%A %d %B %Y");
define("TZN_DATETIME_EUR","%d/%m/%y %H:%M");
define("TZN_DATETIME_USA","%m/%d/%y %I:%M%p");
define("TZN_DATETIME_SHT","%d %b %y %H:%M");
define("TZN_DATETIME_SHX","%a %d %b %y %H:%M");
define("TZN_DATETIME_LNG","%d %B %Y, %H:%M");
define("TZN_DATETIME_LNX","%A %d %B %Y, %H:%M");
[/code]


UPGRADE FROM 0.2.2
------------------
edit your config.php and add/update the following:

error_reporting(E_ALL ^ E_NOTICE);	// at the top of the file

define('FRK_MYSQL_VERSION_GT_4_1',TRUE); // well, true if your mysql is > 4.1

// --- following changes is not compulsory but might fix some bugs ---

$GLOBALS['confProjectRights'] = array(
	1 => '000000000000000',	// extern
	2 => '110000000000000',	// official
	3 => '110001000000000', // member
	4 => '111101111011000',	// moderator
	5 => '111111111111111'	// leader
);
// comments: see all/add/edit/delete/-
// tasks   : add/edit/status/delete/-
// project : manage users/status/edit/delete/-

// --- member global access rights ---
$GLOBALS['confGlobalRights'] = array(
	1 => '000000000000000',	// guests
	2 => '100000000011000',	// intern
	3 => '110000100111000',	// manager
	4 => '111111111111111'	// administrator
);
// users   : see all/add/edit/delete/-
// projects: see all/add/edit/delete/status
// others  : create own tasks/view internal tasks/-/edit any task/system
// settings



UPGRADE FROM 0.2.0 and 0.2.1
----------------------------
- update all files (but config.php if you don't want to enter your
settings / parameters again)

- edit your config.php and add/update the following if missing:

define('FRK_DEFAULT_CURRENT_TASKS',0);
define('FRK_DEFAULT_RSS_SIZE',8);
define('FRK_DEFAULT_VISIBILITY',1);

Make sure you clean your browser cache after upgrading: CSS and javascript
files need to be updated. You can force the browser to completly reload those
files by pressing CTRL + F5.

that's it.

UPGRADE FROM 0.1.x
------------------
config.php had quite a few changes and needs to be updated.
Mostly, some constants had been renamed
eg. FRK_DEFAULT_LANGUAGE to FRK_LANGUAGE

I suggest you overwrite your copy of config.php with the sample config.php
(after making a backup of your file, of course) and then modify your file
again.

Once you're done, copy all files from the new version.
The cpaint folder and cpaint related files have been removed, so you might
want to clean them up too.

Then point your browser to your install/ folder, and click on the first link
check install to check your installation is fine.

INSTALLATION NOTES
------------------

-- 1. Files & Directories ----------------

Simply create a subfolder (say taskfreak/) and upload every files.

For maximum security, you shouldn't put the include folder under your webroot.
If you don't know what this mean, don't bother and move directly to step 2.

If you move the include folder from its original location, you may need to
edit
the _include.php file and put the correct path to the config.php file.

-- 2. Configuration ----------------------

Edit the config.php file from the include/ folder.
Well, I think it's pretty much straight forward. Commented and all.

The database section sets the username and password to access mySQL DB.
In most case this is the only change you need to make.

define("TZN_DB_HOST","localhost");
define("TZN_DB_USER","root");
define("TZN_DB_PASS","");
define("TZN_DB_BASE","taskfreak");

If you moved the include/ folder (step 2.) you might have to modify the line
58:

define('PRJ_INCLUDE_PATH',PRJ_ROOT_PATH.'include/');

-- 3. Database ---------------------------

If you haven't done it yet, create a new database.
You can use the same as for TaskFreak! single user version, data
won't be erased.

AT THIS STAGE YOU CAN POINT YOUR BROWSER TO THE install/index.php PAGE
TO CHECK YOUR INSTALLATION. THE SCRIPT WILL CREATE TABLES FOR YOU AND
CHECK FILE PERMISSIONS.

THE install/index.php SCRIPT CAN ALSO COPY TASKS FROM A PREVIOUS SINGLE USER
INSTALLATION.

-- 3. File permission --------------------

If you are installing TaskFreak! under windows (for the server part), you can
move
directly to next step.

If you are under a unix-like operating system (linux, macosx, etc...) you
might
have to change the file permissions.

Open a terminal, and run the following commands:

  cd /path/to/webroot/
  chmod -R 755 taskfreak/

Of course you need to change /path/to/webroot/ with the real path, and
taskfreak/ 
with the actual folder if you chose another name.

-- 5. Login -------------------------------

One user is created by default:

username : admin
(no password)

Go to manage > users to create new users.

I suggest you put a new password to your admin user by going to
Manage > My profile

-- 6. Customize contexts ------------------

To customize the contexts, you'll have to edit the language file 
include/language/en/options.php

Modify the list in langItemContext array starting on line 50.
If you add more than 8 items, you will have to modify the confContext array
in config.php accordingly.

If you prefer to see the context in full text rather than just a letter,
turn the FRK_DEFAULT_CONTEXT_LONG to TRUE in config.php


-- 7. Customize looks / change theme ------

TaskFreak! now comes in 2 themes: a reddish one and a blueish one.

To swith from one to another edit config.php in line 102:
define('FRK_DEFAULT_SKIN_FOLDER','redfreak');
define('FRK_DEFAULT_SKIN_FOLDER','bluefreak');

-- 8. Delete the install folder -----------

For maximum security please delete the install/ folder


USER RIGHTS
-----------
By default, one user is created: the supreme administrator.

General permissions:
- guests, interns and managers can view only tasks that belong to the
  projects they are associated with
- interns, managers and administrator can create tasks (guests can not)
- interns, managers and administrator can see internal tasks (guests can not)
- managers and administrator can create projects
- managers and administrator can create users
- administrator can edit everything (tasks, projects, users)

Then we can give a specific position to a user when linking him to a project:
- extern: can only see tasks, can not do anything
- official: can add comments (later)
- member: can create tasks
- moderator: can add, edit, delete tasks and comments, manage users and change
  project's status
- leader: can do everything

Associating a task to a user is only for you to organize yourself.
Someone who has access to the system and is associated to a project can see
all (public) tasks of the project.


This can possibly be customized but good luck if you try to mess with it.
(you need to edit confProjectRights and confGlobalRights in config.php)


KNOWN BUGS
----------
There's an annoying CSS bug affecting the Task menu under IE. Tried but
couldn't fix it. Mouseover effects also looks ugly under my version of Opera.
And I haven't tested it under Safari or Konqueror so I don't know about them.


MISSING FEATURES
----------------
A whole lot.

FINAL WORD
----------
Happy freaking tasking!

