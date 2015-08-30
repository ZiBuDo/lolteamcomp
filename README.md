# lolteamcomp
Analyzes Team Compositions, Duo Compositions, Brawler Compositions, and Item Compositions across a team.

There is another readme in the blackmarket folder that explains the server side process.

Concept: 

Most other League of Legends Fan sites or Statistic sites focus mainly on the idea of a singluar champion, singular item, or an item build on a champion. LoL Team Comp's objective is to focus on team compositions, duo champion combinations, brawler compositions, and item compositions across a team. There is an enormous amount of possible team comps, a large amount of brawler comps, and many possible item duos across a team. This creates a difficult task when it comes to tracking all of this information; however, it is possible to see the synergy of two champions in the duo combos section of the site. The Duo compositions also show 5-man compositions that have been played with that duo. The 5-man compositions are usually pretty bare in the statistics section because of the limit of 100k match IDS; however, this idea is being adapted into a larger scale site. Brawlers are limited to 5 man teams where we can see how 5 razorfins may affect the win rate of the match. Then users can check the razorfin and see the best build path for upgrades for those razorfins. The new items with their new unique interactions are analyzed when we check their synergies across a team. The site allows users to see item duos that had the most success and derive the implication of that item combo.

It is important to note that win rates derived from these statistics are interesting to see such as Zilean and Karthus having a high winrate in most categories where a player may speculate that this combo is deadly because of the Revive and After-death combo of this duo.

You will need to: Get an API key from the Riot Games Developer site.
  https://developer.riotgames.com/
  
Create a file in blackmarket folder with your api key pasted in as plain text. Name file apikey.txt.

Note: this project was made using a developer key which has a higher request rate, it may be necessary to modify sleep values in files in /blackmarket/ with naming pattern m(region).php such as mna.php where the script sleeps for 429 errors.


Tech Stack

    Linux - Debian based OS
    Apache
    MySQL - relational database
    PHP 5.6 - server side scripting
    
    Basic LAMP stack
    
To create a LoL Team Comp:
  1.)Aggregate data using execute.sh in blackmarket folder - documented in the other readme
  2.)Create MySQL tables which is outlined as a MySQL command in mysql_tables.txt
    Note: a file needs to be created that contains MySQL username and password in JSON array format. Name file mysql.txt.
    Put this file in both blackmarket folder and bm folder.
  3.)Analyze the data that has been parsed by running the php scripts - also documented in the other readme
  4.)The server will pull everything from the MySQL database as all the pages are coded in html interlaced with php.
    Note: There are some hardcoded http://www.lolteamcomp.com, please remove these and add your own directory.
  
Finaly Note on Set-up: There are 3 JSONs, one for items, brawlers, and champions. Champions was created using a static call
to Riot's API. The other two follow the same format as champions, but were handwritten. The information such as Item IDS were found
using more static calls to the API.

Production:

This project is running at: http://www.lolteamcomp.com/bm/index.html . The site was an idea to analyze team compositions and duo combinations,
but with the announcement of the API challenge the idea was adapted to Black Market Brawlers. The server is not a VPS, but just a
website hosting service that supports LAMP. In the future it is possible that this site will be moved to a VPS for more efficiency; 
however, the SSD and space are more than plenty as matches are parsed into space efficient JSONs. All skeletons of these JSONs are documented
if you wish to see them. The site will be later adapted from the /bm extension to contain all matches from every region of all ranked games
in order to aid players in better understanding the team aspect of League of Legends rather than soley focusing on one champion, but
stressing the synergy of two champions, items, or brawlers together.
  
Usefule Commands:

nohup [command] - this allows a script to run without being terminated and all output is redirected to nohup.out
  Careful: if a php script utilizes echo, nohup.out will become cluttered and take a large amount of disk space.

disown - like nohup, this allows a script to run without being terminated. Run this after a command, usually in a screen.
  Allows you to see the display, useful when the script utilizes echo.

screen - a standard command for Linux systems, allows users to have multiple windows in their command lines while using ssh

sh execute.sh - this will aggregate the matches and parse them into their respective JSONs, make sure to be in /blackmarket/

pkill php - kills all php scripts, in case you make a mistake

mysql -u [user] -p  - allows you to connect to your mysql database
