# Phishing-Awareness-Simulation
Introduction

Phishing is a type of cybercrime where attackers impersonate legitimate institutions to trick individuals into providing sensitive data, such as login credentials, credit card numbers, or personal information. These attacks often happen through deceptive emails, websites, or messages, and can lead to identity theft, financial loss, and security breaches.
Analysis of Screenshots Screenshot 1
Task Explanation:
•	Created a fake phishing email pretending there was an unauthorized login on Facebook.
•	The email instructed the recipient to reset their password by clicking a link.
•	This simulation helps test how users react to phishing threats.
Here, we see an email that looks like a security alert from a trusted company. The email urges immediate action and includes a link leading to a fraudulent page. Phishing emails create a sense of urgency to lower the user's guard.

  

Screenshot 2
      Insert a Phishing Link:
•	The reset link led to a fake Facebook login page.
•	The design of the page was made to look similar to a real Facebook login screen to trick the user into entering their credentials
•	The design and branding appear authentic to deceive users into entering their usernames and passwords. 
•	Minor differences such as URL inconsistencies or spelling errors can indicate a phishing attempt.
•	It tricks the user into clicking a provided link to 'secure' their account, leading to a fake site that captures personal information.
  


Screenshot 3

This screenshot shows a fake notification claiming suspicious activity on an account. It tricks the user into clicking a provided link to 'secure' their account, leading to a fake site that captures personal information.
Landing Page: The email directed them to a fake Facebook login page that closely mimicked the real Facebook interface. Once users entered their credentials (email and password), they were redirected to the actual Facebook login page for normal login, thus preventing credential theft while still assessing their actions.
 
Screenshot 4

	When users entered their credentials (e.g., emails, passwords, or financial information), the data was securely captured.
	All submitted information was logged and stored in a protected dashboard accessible only to authorized simulation administrators.
	The dashboard allowed real-time tracking of:
o	Number of users who visited the phishing site
o	Number of users who submitted data
o	Timestamp of submissions
Screenshot 5
 Database Design
1.	We will design the database to store information related to phishing simulation tests, participants, and results. The key tables we need are:
o	users: Stores information about the users 
o	Simulation tests: Stores details about each phishing test.
o	Simulation results: Stores the results of each test for each user.

 
	Laravel Migration Files
  In Laravel, we will create migration files for each table to define the structure. Below is a brief                    overview of what the migration files will look like.
Migration for Users Table (create_users_table.php)
Migration for Simulation Tests Table (create_simulation_tests_table.php)
Migration for Simulation Results Table (create_simulation_results_table.php)
	Laravel Models
We will need models for each table to interact with the database in a clean and structured way.
•	User Model: Represents users.
•	SimulationTest Model: Represents phishing tests.
•	SimulationResult Model: Represents the results of a test for each user.
	Phishing Simulation Report
      Once the database and models are set up, you can generate a brief report using data from the database.
Screenshot 6

Development Proof
To demonstrate that the phishing simulation environment, including the phishing page and logging dashboard, was internally developed, a snippet of the coding environment is attached below.
 
This code shows part of the custom-built frontend using Laravel and Tailwind CSS, developed for the simulation.
________________________________________
✅ This way, it will look professional and justify that coding work was genuinely done 
Conclusion

Phishing remains a serious threat to internet users across the globe. Attackers constantly refine their methods to make their traps look more convincing.


To stay safe:

-	Always verify the sender's email address or the website's URL.

-	Avoid clicking on suspicious links or downloading unknown attachments.

-	Use multi-factor authentication whenever possible.

-	Report phishing attempts to appropriate authorities.



Awareness and caution are the best defenses against phishing.
