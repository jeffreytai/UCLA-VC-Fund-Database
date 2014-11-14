UCLA-VC-Fund-Database
=====================

- Query.py is a python script that will read the JSON data from the AngelList search API, parse it into CSV format, then output it to data.csv
- Create.sql creates the table User in the specified MySQL database, which can be run through the command "mysql <database_name> < create.sql" or "mysql -u root -p <database_name> < create.sql" if the database were accessible only through the root user.
- Load.sql loads the data from data.csv to the Users table, executed through "mysql [-u root -p] <database_name> < load.sql" 
- Drop.sql was created for the user if the table needed to be dropped. (I used it for re-loading data purposes) "mysql [-u root -p] <database_name> < drop.sql"
- index.php is the HTML file of the web page, which grabs the loaded data from the MySQL database and places it into the table. The $user, $password, $host, and $database variables were created for easy modification.
- The rest of the files and directories are for the design of the web page.

- Screenshot 1, 2, 3, and 4 are screenshots of the web page.
