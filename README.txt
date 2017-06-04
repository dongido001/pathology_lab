# How To import the Application Database:

- Extract the file "Software Engineer -PHP.zip "

- Open and Copy the file path.sql in "sql" folder with any text editor.

- Goto your database with phpmyadmin: eg: localhost/phpmyadmin.

- Create a database named : "path"

- Click on the 'sql' tab at the top of the phpmyadmin interface.

- Paste the content you copied to the text Box and Click on go or save. ( You should get a successfull message )

- Then Open applicaion/config/database.php, then set the content of this example
 
 ```php
 	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'path',
```
to the correct information.


  
