<<<<<<< HEAD
## Codeigniter User Panel Management / BSEU

TESTED ON => XAMPP v3.2.4 (Web Server with Apache/2.4.41, PHP/7.1.33, MySQL/mysqlnd 5.0.12-dev)

## What is the project about?

BSEU is a management panel with role based application, using CodeIgniter(PHP MVC Framework).
There are tasks in the BSEU user management system. These tasks can only be create by System Admin and Manager. Employees can only complete tasks. All of these operations can be done according to the roles of the users. A user can not perform an action without a role.

![1.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519641377/iejzll6jjdyw5hlxcd9x.png)

As an example, a Employee can not add tasks, but the Manager can add tasks. However, the Manager can not view logs, but Admin can view logs.

I've made 3 roles (Admin, Manager, Employee ) and I've created a controller for all of them (Admin, Manager, User) , so you can edit as you like and you can add or reduce fewer roles in more places.

I added a detailed log system to the system. You can import and delete backups of these logs, as well as restore an old backup to the system for control.

![3.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519641542/fhxbgjxwpsdtxom6be7m.png)

The log page contains an entry showing the size of the table. If this size exceeds 1 GB (1000 MB), automatic backup and deletion  will be done.

### Technology Stack
* [CodeIgniter](https://codeigniter.com) (PHP MVC Framework)
* XAMPP v3.2.4 (Web Server with Apache/2.4.41, PHP/7.1.33, MySQL/mysqlnd 5.0.12-dev )

### Roadmap
We can use this panel in all CodeIgniter projects. It can adapt to any kind of project by changing its roles and functions. This will save us from the start of a project management panel. With your contributions, we can create a management panel for our projects.

### Features
* Login (All roles)

![4.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519642591/hkzknmouyqnt7ravh9bs.png)

* Logout (All roles)

![5.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519642703/ztb6tolajpcqtbusxwgd.png)

* Admin Panel (Admin)

![8.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519643143/u6f6gym4agss35khgkoi.png)

* Change Password (All roles)

![6.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519642862/v1g1iarvu011mdt0sknq.png)

* Last login date and time (All roles)

![7.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519642968/is4gogl6jjnqsl9zwtcn.png)

* Dashboard (All roles) (Number of tasks,finished tasks,users,logs)

![8.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519643143/u6f6gym4agss35khgkoi.png)

* Access Denied Page (Manager/Employee)

![9.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519643437/jciy5jug7hpghqfpalb0.png)

* Tasks / Add Task / Edit Task / Delete Task / Task Completion (Admin or Manager)

![10.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519643657/i8xwgkhxcu6gwyfwqxqj.png)

* Users / Add User / Edit User / Delete User / User Logs (Admin)

![11.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519643818/py9sjzobuf07qlak6a2l.png)

* Log History  / Log History  Export (backup) and Delete (Admin)

![12.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519643985/ym2rqrka79eyydscfgcu.png)

* Log History  Import / Log History Control  (Admin)

![13.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519644138/z76grflkxe4y2rp7cgpg.png)

* Manager Panel (Manager)

![14.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519644277/msi4pjyrbvbrzpphobou.png)

* Employee Panel (Employee)

![15.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519644421/c4dwvjbrnv9ac7vrkfaf.png)

* Employee Tasks (Only task completion)

![16.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519644627/qcdxneltovxmy6ltajas.png)

### Install

Download [BSEU via github](https://github.com/pars11/Codeigniter-User-Panel-Management) or clone your computer.

Clone:

``` language
cd projectfolder

git clone https://github.com/pars11/Codeigniter-User-Panel-Management
```

Open phpmyadmin and create a database with name "cias" and import the file "cias.sql" in that database.

Copy BSEU into your root directory.  

Example : 
``` language

C:\xampp\htdocs\Codeigniter-User-Panel-Management
```

The login screen will appear.

To login, I am going to provide the user email and password below.

Admin : admin@ornek.com / 123456

Manager: yonetici@ornek.com / 123456

Employee : calisan@ornek.com / 123456

### How to contribute?
You can reach me send message on the discord (pars11) or email (sametay153@gmail.com).If you want to make this application better, you can make a Pull Request.

[Github](https://github.com/pars11/Codeigniter-User-Panel-Management)

[Thanks to kishor10d for first commit](https://github.com/kishor10d/Admin-Panel-User-Management-using-CodeIgniter)
=======
# RequirementAnalysis
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
1. Login, Logout, Change Password.
2. Create, Update, Delete Users.
3. Import the list of customers (who are having websites) from excel sheet.
4. Assign the customers to executives/telecaller.
5. Record the feedbacks for customers & Timeline.
6. Take *screenshot* (Desktop & Mobile version) of their websites within one click.
7. Get small *SEO Report* of their website.
8. Sending company profile/portfolio via email with pdf attachment.
9. Record *customers requirements* and export as pdf.
10. Generate *PDF reports for exectives/telecaller* for each day.
11. Automatic grabbing of screen-shot if you set cron job.
12. List of daily schedule for feedback/followup.

## TODO (Remaining Features : Yet to develop)
1. Versions of Requirements.
2. Customer assignment history in case the executive is change.
3. CRUD - serving companies 
4. CRUD - portfolio and profile attachements.
5. CRUD - HTML email templates.
6. Report - Summary
7. CRUD - Cron Job
8. CRUD - Role
9. CRUD - Packages
10. CRUD - Feedback Types
11. CRUD - Attachment Types
12. Calender to list/show the Dates
13. CRUD - Calender Configuration
14. Show call status on calender based on Dates
15. Call Reminder for initiating the call so that no one forgets to attend the call
>>>>>>> old2/master
