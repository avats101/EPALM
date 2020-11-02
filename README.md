# EPALM
## OBJECTIVE
The current system of managing events and their related logistics of participants and speakers and guests is not completely computerised. Now this can lead to some catastrophic failures which in turn can lead to serious monetary problems for the organisers. As there is synchronising in the information being input there is a lot of room for error. This is where we and our project steps in to streamline and add end to end assurance to all colleges.
<br>
## INSTALLATION
  1.Install XAMPP or WAMPP.

  2.Open XAMPP Control panel and start [apache] and [mysql] servers.

  3.Download project from github  OR follow gitbash commands

  1.cd <directory to htdocs>

  2.git clone https://github.com/avats101/EPALM.git

  3.Open localhost/phpmyadmin

  4.Create a Database named "eplam" 

  5.After creating database name click on import and browse the file in directory[EPALM/events.sql].

  6.After importing successfully.Open http://localhost/epalm. in any browser.


## FUTURE WORK
<li>There are a lot of things that we can work on to improve the user experience. At this moment, event registration is not possible as the events table has not been connected to the database. Similarly tables  for club information and venue information are not connected to the database. For the events information table we have decided to add an attribute for event posters.</li>
<li>Showing the posters of the events along with its details will allow the event organizers to better sell their event.</li>
<li>For any event management system, it is best to have three different views which manage three different levels of logistics: administrator view, coordinator view, participant view. These different views should be separated clearly and right now only two views i.e administrator and student are present and that too with not much distinction. So in future our goal would be to add the third i.e coordinator view and make all the three views distinct.</li>
<li>The three views should be easily distinguishable and must be password protected. The features of both the admin and participant view would roughly be the same. Currently there is no password protection for the admin view and that is a major security issue. Also for a student to login, he/she must register again according to the current project design. Some additional php code can help in resolving both of these issues.</li>
<li>The password for the student and some of the card details like CVV are private details and thus must not be displayed openly and thus some checks must be there to prevent privacy breach. To protect the passwords we can use cryptographic hash functions like MD5 or SHA1 which are inbuilt in php library. The hash of the password will be stored in the database instead of the password itself. In this case even the admin cannot see the original password and thus it will be safe. Whenever the password is entered for logging in, it will be hashed and then compared to the hashed password in the database and if it is the same then only access will be granted. This is secure as even with the most powerful computers, cracking the original string through the hash takes time greater than the age of the universe. One more thing that can be improved is the login features.</li>
<li>As stated earlier, the student who registered last or has the smallest card number is displayed after successful registration. There could be some cases where some other record is being displayed instead of the desired records. To solve this we can use timestamp to recognize the last person who logged in and that record only will be displayed. This will also allow us to improve the security as there could be a timeout login option in which after a certain period of inactivity the user will be automatically logged out.</li>
<li>Lastly we can extend this project to help organize more than one fests as right now it is limited to only one college. All of this could be achieved by just adding a few lines of php code or by modifying the database or adding some attributes like password and login credentials and poster images. All these changes will allow for a better and much more secure user experience. </li>
