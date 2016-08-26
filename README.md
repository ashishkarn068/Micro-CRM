**CRM Web App**: CRM to collect user data and send them an email using mailgun


* Quick summary

*This is a web based Customer Relationship Management Application developed using PHP and Mailgun API. With this web application, a user can add new client to a mailing list in  Mailgun, create a whole new Mailgun Mailing List and Send email to any of the list he/she wants to.*




### How to set up this web application ###

* Summary of set up

To simply use this web application clone this repository and extract it a folder named **webapp**. Now go to the htdocs into your Xampp installation directory (we need xampp to run this) and copy the **webapp** folder there. Now go start your xampp server and go to your browser and open **http://localhost/phpmyadmin**, **create a database** and name it **webapp**.
Now import the database from the folder **webapp/Database File/webapp.sql**.Now open the **url ->  http://localhost/webapp/** in your browser, you will be asked to login 
username is **webapp@causecode.com** and the password is **webapp123**. Now you are in, use it your way.



* Configuration

To use this web application you need to create your own **verified Mailgun Account** and replace my **API keys, Public Keys** and **Domain name** with yours in the **init.php** file.To get full features you should use you own verified domain, but if you don't have one then use free domain provided by Mailgun.

* Dependencies

We are using **Mailgun API** to fuel our CRM, so it is dependency and it is installed using **compser** that installs required files for Mailgun API in PHP.

* Database configuration

There is only one database named **webapp** and it contains only one table called **users**
* How to run tests

After setting up database and init.php file just open the link http://localhost/webapp in your browser.

* Deployment instructions

When you are using a free sandbox domain provided by Mailgun, then to add a new client use only the email address you used to register at Mailgun. To add other  email Ids you need to add your own domain to your Mailgun Account. For test purpose u can use my email ID **ashishkarn068@gmail.com** but you won't be able to see any confirmation mail as it will be reaching to my email ID.



### Who do I talk to? ###

* *Ashish Karn* : ***ashishkarn068@gmail.com***