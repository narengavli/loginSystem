<h1 align="center">LOGIN SYSTEM</h1>
<center><img src="https://github.com/narengavli/loginsystem/blob/fbce8321c6469b2f226dd8836c0500bdfa7d42b2/img/home-page.gif"></center>

**Live Page Link:**

<a href="https://narengavli.github.io/loginsystem" target="_blank"><img src="https://img.shields.io/badge/LOGIN%20SYSTEM-LIVE%20WEBSITE-blue"/></a>

## How to run it
These are the instruction how to run the solution on your machine:

Clone the repo to your www folder or where you prefer `git clone https://github.com/narengavli/loginsystem.git `

This project was built in **PHP/MySQL** and need to be run under an app like **MAMP/WAMP/XAMP** 

If you use one of the app above be aware to clone the repo under your htdocs folder for have access through the localhost or configure your virtualhost and hosts file accordingly to your needs

**Creating Database :**
- Navigate to: http://localhost/phpmyadmin/
- Click the Databases tab at the top
- Under Create database, enter **loginsystem** in the text box
- Select utf8_general_ci as the collation
- Click Create

**Creating Table :**

```
CREATE TABLE IF NOT EXISTS `accounts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`username` varchar(50) NOT NULL,
  	`password` varchar(255) NOT NULL,
  	`email` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES (1, 'admin', 'admin', 'admin@gmail.com');
```

## What was used

- HTML
- CSS
- Javascript
- PHP
- MySQL

<!-- Thank You -->
<h1 align="center">😍 THANK YOU FOR VISITING 💖</h1>
<!-- End of Thank You -->

<!-- Social Media -->
<p align="center">
  <a href="https://www.linkedin.com/in/narengavli/" target="blank"><img align="center" src="https://img.shields.io/badge/NARENDRA GAVLI-%230077B5.svg?style=for-the-badge&logo=linkedin&logoColor=white" /></a>
  <a href="https://www.instagram.com/naren_gavli/" target="blank"><img align="center" src="https://img.shields.io/badge/NAREN GAVLI-%23E4405F.svg?style=for-the-badge&logo=Instagram&logoColor=white" /></a>
  <a href="#" target="blank"><img align="center" src="https://img.shields.io/badge/Telegram-%231877F2.svg?style=for-the-badge&logo=Telegram&logoColor=white" /></a>
  <a href="https://twitter.com/naren_gavli" target="blank"><img align="center" src="https://img.shields.io/badge/NAREN GAVLI-%231DA1F2.svg?style=for-the-badge&logo=Twitter&logoColor=white" /></a>
</p>
<!-- End of Social Media -->
