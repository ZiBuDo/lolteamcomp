This Document provides an overview of the php files of the blackmarket section of LoL Team Comp

All files are documented to explain their inner workings, below is the process of how the files are executed.

Files in php folder are not allowed to be executed so users cannot mess up the site, thus file permissions are 740.
Only exception is champions.txt and other files which need to be read by other files.

1.)Aggregating Data-
	Files with the naming pattern of m(region).php such as mna.php aggregate data based on the match ids downloaded from
	Riot in accordance to their API Challenge 2.0. Match ids are stored in the matches folder and in region.JSON format.
	To execute all files, there is a execute.sh script stored on the server. This will run the scripts with nohup all at the same time.
	Matches are parsed into JSONs and stored into folders respective on the region.

2.)Analyze Data-
	Analyze.php and analyzeduos.php parse the data from the JSONS from step 1 and insert them into tables in MySQL.
	The tables of MySQL are created using commands found in mysql_tables.txt.
	DB info is stored in a file named mysql.txt as a JSON array. This is not uploaded to GIT for security purposes.
	
3.)The Site-
	All files here create the MySQL database which the site utilizes. All files in /bm/ are php files that just parse the mysql database based on filters
	the user sets on the site. /bm/ also contains the search engine php files which redirect based on a similarity algorithm natively supported in php.
	
For more information, all files are documented.