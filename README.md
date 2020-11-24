# phpmyRequirement
Feedback system to record Requirement & feedback of customers. This is for marketing purpose.

### Project is currently under development, not ready for Production use.

## Introduction
Small companies needs some software to keep track of their customers and provided services (communication purpose). This system is developed to fulfil their needs. The companies which are providing Software Services like Web Development, App Development, SEO, ERP, Desktop Software, Mobile Software - they can use this project for their internal purpose.
The executives of your company can call to customer from phone, and record their feedbacks and requirements in this portal.

Login
![login.png](https://github.com/dineshkummarc/RequirementAnalysis/blob/master/uploads/screenshots/login.png)

Dashboard
![dashboard.png](https://github.com/dineshkummarc/RequirementAnalysis/blob/master/uploads/screenshots/dashboard.png)

Import
![import.png](https://github.com/dineshkummarc/RequirementAnalysis/blob/master/uploads/screenshots/import.png)

CustomerListing
![CustomerListing.png](https://github.com/dineshkummarc/RequirementAnalysis/blob/master/uploads/screenshots/CustomerListing.png)

Report
![employeeReport.png](https://github.com/dineshkummarc/RequirementAnalysis/blob/master/uploads/screenshots/employeeReport.png)

Caching
![caching.png](https://github.com/dineshkummarc/RequirementAnalysis/blob/master/uploads/screenshots/caching.png)


## Requirements
1. Apache/2.4.41
2. ~~PHP 5.6~~ PHP/7.1.33 or greater
3. ~~MySQL 5~~ MySQL/5.0.12-dev
4. [Composer](https://getcomposer.org) - To install php libraries.
5. [Gulp](https://gulpjs.com/) - To minify and uglify assets, js, css. Not necessary and will remove in next version.

## Used PHP tools, Framework & libraries
1. [XAMPP](https://www.apachefriends.org/index.html) XAMPP/3.2.4
2. [CodeIgniter](https://codeigniter.com/) CodeIgniter/3.1.6
3. [Microweber Screen](https://github.com/microweber/screen) : To capture screen-shot of website.
4. [Akeneo Spreadsheet Parser](https://github.com/akeneo-labs/spreadsheet-parser) : To import huge amount of records from excel sheet.
5. [TCPDF](https://github.com/tecnickcom/tcpdf) : To export as PDF.

## How to Install

1. Clone or download the repository in your webroot.
2. Goto ```application/third_party/``` folder and execute command ```composer install``` from command line (terminal on Linux).
3. Create database in mysql using phpmyadmin and import sql file ```RequirementAnalysis.sql``` available in repository.
4. Done!

## Login Credentials
Hit url in your web browser ```http://localhost/RequirementAnalysis/```, login screen will appear. 

### Admin can login with following credentials.

Email : admin@example.com
Password : admin

### Manager can login with following credentials.

Email : manager@example.com
Password : manager

### Users can login with following credentials.

Email : emp1@example.com, emp2@example.com, emp3@example.com, emp4@example.com
Password : admin



## Features
- [x] Login, Logout, Change Password.
- [x] Create, Update, Delete Users.
- [x] Import the list of customers (who are having websites) from excel sheet.
- [x] Assign the customers to executives/telecaller.
- [x] Record the feedbacks for customers & Timeline.
- [x] Take *screenshot* (Desktop & Mobile version) of their websites within one click.
- [x] Get small *SEO Report* of their website.
- [x] Sending company profile/portfolio via email with pdf attachment.
- [x] Record *customers requirements* and export as pdf.
- [x] Generate *PDF reports for exectives/telecaller* for each day.
- [x] Automatic grabbing of screen-shot if you set cron job.
- [x] List of daily schedule for feedback/followup.

## TODO (Remaining Features : Yet to develop)
- [ ] Versions of Requirements.
- [ ] Customer assignment history in case the executive is change.
- [ ] CRUD - serving companies 
- [ ] CRUD - portfolio and profile attachements.
- [ ] CRUD - HTML email templates.
- [ ] Report - Summary
- [ ] CRUD - Cron Job
- [ ] CRUD - Role
- [ ] CRUD - Packages
- [ ] CRUD - Feedback Types
- [ ] CRUD - Attachment Types
- [ ] Calender to list/show the Dates
- [ ] CRUD - Calender Configuration
- [ ] Show call status on calender based on Dates
- [ ] Call Reminder for initiating the call so that no one forgets to attend the call
