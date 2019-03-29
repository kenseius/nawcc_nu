Starting A Wordpress Project
-----

[ resources ]

* [Wordpress.org](https://wordpress.org/)
* [Installing Wordpress](https://codex.wordpress.org/Installing_WordPress)

[ directions for macOS Sierra ]

 1. Create a Local Server (MySQL / Apache)
    - Apache = Server
    - MySQL = Database Administration
    - PHP = programming language
    - Using MAMP:
        1. Open phpMyAdmin
        2. Under **Create Database** enter the database name, and click **Create**

2. Setting Wordpress Up Locally Prior To Install
    - Download from [wordpress.org](wordpress.org)
    - Extract the files, and place within the desired directory (we'll be placing it within `Applications/MAMP/htdocs`)
    - Rename `wp-config-sample.php` to `wp-config.php`
    - Open `wp-config.php` in a text editor

This is the part we're aiming for:
~~~
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');
~~~

    - `define('DB_NAME', 'database_name_here');` Replace `database_name_here` with your database name
    - `define('DB_USER', 'username_here');` and
    - `define('DB_PASSWORD', 'password_here');` Both of these values are going to be `root` when developing locally.
    - `/** MySQL hostname */
    define('DB_HOST', 'localhost');` The database host is `localhost` by default, which is what we want.

Here's what it'll look like when updated:

~~~
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'code4pa_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');
~~~

Save this file, and we'll move on to the next step

3. Install Wordpress

* Open a browser, and navigate to the directory to begin installing
    - `http://localhost:8888/OA%20-%20PA%20Hackathonwp-admin/install.php`
    - Note: you can just navigate to `http://localhost:8888/OA%20-%20PA%20Hackathon/`, and it'll automatically navigate to `http://localhost:8888/OA%20-%20PA%20Hackathon/wp-admin/install.php`
* Select your language
* In the next screen, enter
    - `Site Title` 	
    - `Username` 	
    - `Your Email` 	
    - `Search Engine Visibility`
    - Note: Write these down somewhere. The very next screen will ask you to login.

4. Login


## Creating a Theme

All website files needed to style wordpress are within the `wp-content/themes` directory.

At the very minimum, for a theme to work within wordpress, you must include:

1. style.css
2. index.php

Otherwise, for consideration in the WordPress.org theme directory, the minimum required Theme Files are:

1. **style.css**
Your theme’s main stylesheet file. This file will also include information about your theme, such as author name, version number, and plugin URL, in it’s header.

2. **index.php**
The main template file for your theme. This will be the template for the homepage on your site unless a static front page is specified. If you only include this template file, it must include all functionality of your theme. However, you can use as many relevant template files as you want in your theme.

3. **comments.php**
The comment template which is included wherever comments are allowed. This file should provide support for threaded comments and trackbacks, and should style author comments differently then user comments.

4. **screenshot.png**
In the WordPress.org theme directory, screenshot.png acts as a visual indicator of what your theme looks like. It is visible both in the web view and in the admin dashboard. Note: this screenshot can be no larger than 1200x900px.
