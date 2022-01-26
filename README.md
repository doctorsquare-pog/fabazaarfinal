
  # Bazaar
A platform with various hardware stores with computer components catalogue

## Group Name
Group WebApperz

## Group Members
NAME                                    | MATRIC NO |
--------------------                    | --------- |
Imran Haqeem bin Azidy                  |  1910387  |
Muhammad Adam Qusyairi bin Zamzury      |  1915917  |
Abdul Hakim bin Jesni                   |  1913507  |
Muhammad Wafiuddin bin Abdul Harith     |  1910553  |
Fahd bin Mohd Fauzi                     |  1910773  |

## Introduction
For this group project, we decided to develop an application that focuses on buying and selling activities among IIUM students. The criteria that will be included in our application includes user authentication, user roles (customer, supplier, admin), database system to store the item description and user information and categories of items
## PROBLEM DESCRIPTION

It seems that nowadays, everyone is getting into the selling business. While IIUM does support students to sell items as we can see from i-Ma’luum, a more centralised system should be created where not only everyone can be a customer, but also a seller. This will open up a lot of opportunities for everyone to sell their product and everyone to browse products being sold in the community.

## Background of the problem
- The application will be a web application.
- The users will be the IIUM students.
- There are plenty of IIUM students who are selling products as their side business and do not have a centralised system where they can promote and sell the product easily to the IIUM community.
- Other than that, the IIUM students are having a hard time getting rid of their belongings, especially people who will be leaving IIUM. They have to find people by physical interaction that slows down the process to give out their stuff.

## Problem Statement
The problems that students encounter with the current buy and sell system is the lack of inventory check for both customer and seller. Apart from that, there are no admins to moderate the items sold using the system.


## Objective
At the end of the project, we’re hoping to have a functioning buy and sell application which has better systems like inventory checks and content moderations. As the report, we are hoping to give some system development process, the final product descriptions and usability test

## Features and functionalities
- Administrator:
-- Overview the whole system
-- Create categories that suppliers/sellers can sell their product
-- See the list of suppliers/sellers and customers registered.
-- Able to see the items purchase from customer, and
-- Able to track from which supplier/seller the customer purchase the product
- Supplier/Seller:
-- Get to sell their products according to categories available.
-- Add products to sell
-- Add stock from preexisting products
- Customer
-- Get to buy items according to seller or categories
-- Add the amount the customer wants to buy for a certain purchase.


## MVC Models
MODELS   |        VIEWS        | CONTROLLERS               | ROUTES
-------- | ------------------- | ------------------------- | ------
User     |   Home               |     Dashboard          | /home -> DashboardController
Item     | inventory        | ItemController         | /inventory -> ItemController
Category | admincategory    | CategoryController | /admincategory -> CategoryController
Purchase    | orders |  PurchaseController      | /orders -> PurchaseController
Supplier  | admin.suppliers            |        AdminController@supplier                   | /listsuppliers -> AdminController@supplier
&nbsp;   | admin.customers             |   AdminController@customer    | /listcustomers -> AdminController@customer
&nbsp;   | inventory.orders  |  OrderController@index  | /listorders  -> OrderController@index

## Sequence Diagram
![sequence diagram](https://user-images.githubusercontent.com/76025064/151092584-9f4c13f4-4f55-494a-b642-e91c7f2b7987.png)


## How to setup the Project
- Go to the project folder. (tips: use Visual Studio Code or Notepad++)
- Go to command prompt/terminal and type: composer install and composer dump-autoload.
- Duplicate `.env.example`, rename it to `.env`, then `php artisan key:generate`
- Start XAMPP, then in your browser, go to https://localhost/phpmyadmin/ and create new database called `fabazaar`.
- Then, in cmd, type `php artisan migrate` and then `php artisan db:seed`.
- Finally, do `php artisan serve` and connect to: https://127.0.0.1:8000


## References
https://shopee.com.my/
https://www.lazada.com.my/


## Project Screen Captured and Explanation





### Challenge and Difficulties
- harder to comprehend from online learning
- difficult to work as a group because of no physical meeting
- slow internet can resort to hard communication
"# fabazaarfinal" 
