<?php
    // 1{   Understanding Databases
    // 1.
    
    // Write a short essay on what a database is. Explain the concept in your own words
    // ................................................................................
    // an organized collection of data, 
    // Databases are used to store
    //  and manage large amounts of data 
    // ................................................................................
    
    // 2.
    
    // Write a brief explanation of what SQL is and its importance in managing databases
    // ................................................................................
    // Structured query language (SQL) is a standard language for database creation 
    // and manipulation with SQL we can use a lot of the crud operation in our data base like 
    // creat insert delete and read the data from the data base 
    // ................................................................................
    // }
    
    // 2{  Types of Databases
    // 1.
    // Create a comparison chart between Relational and Non-relational databases.
    //  Include at least three differences and three examples of each.
    // ...........................................................................................................


    // ...........................................................................................................
    // .    Feature	              Relational Databases	                     Non-relational Databases            .
    // ...........................................................................................................
    // . Data Structure  .	    Tables with rows and columns	.    Flexible, varied structures like documents, . 
    // .                 .                                      .     key-value pairs, graphs, etc.              .
    // ...........................................................................................................     
    // .                 .                                      .                                                .
    // . Schema	         .          Fixed schema	            .         Dynamic schema                         .
    // ...........................................................................................................                  
    // . Relationships	 .      Use of foreign keys and joins to.    Often use embedded documents or links;      .
    // .                 .       establish relationships	    .    relationships can be more flexible          .
    // ...........................................................................................................
    // . Examples	     .      MySQL, PostgreSQL, Oracle	    .    MongoDB, Cassandra, Redis                   .
    // .                 .                                      .                                                .   
    // ...........................................................................................................
    
    
    // ...........................................................................................................

    // 2.
    // Write a summary on what MySQL is, including its features and typical use cases.

    // ...........................................................................................................
    // MySQL is an open-source relational database management system (RDBMS) that uses
    // Structured Query Language (SQL) for accessing, managing, and manipulating data

    // Features of MySQL:

    // 1.Open Source

    // 2.High Performance

    // 3.Scalability

    // 4.Cross-Platform Support

    // 5.Security

    // Typical Use Cases:

    // 1.Web Applications

    // 2.E-commerce

    // 3.SaaS (Software as a Service)

    // 4.Logistics and Inventory Management

    // 5.Financial Applications
    // ...........................................................................................................
    // }



    // 3{   Numeric Data Types
    // 1.
    // List and describe the different numeric data types available in MySQL. Provide examples for each
    // ...........................................................................................................
    //1.INT  
    //  id INT = 123456; 
                                                                
    //2.FLOAT
    //  temperature FLOAT = 36.6;

    //3.DOUBLE 
    //  distance DOUBLE = 123456.789123;   
    // ...........................................................................................................
    // }


    // 4{   String Data Types
    // 1.
    // List and describe the different string data types in MySQL. Provide examples for each
    // ...........................................................................................................
    // 1.CHAR
    // country_code CHAR(3) = 'USA';  

    // 2.VARCHAR(size)
    //   email VARCHAR(255) = 'example@example.com';

    // 3.BLOB(size)
    // blob_data BLOB = 0x4D7953514C537472696E67;   
    // ...........................................................................................................
    // }


    // 5{   Date and Time Data Types
    // 1.
    // : List and describe the date and time data types in MySQL. Provide examples for each
    // ...........................................................................................................
    // 1.DATE
    //  birthdate DATE = '2024-07-14';  

    // 2.TIME(fsp)
    //   duration TIME = '02:30:00';

    // 3.YEAR
    //  year_of_birth YEAR = 1995;;   
    // ...........................................................................................................
    // }

    // 6{  Primary Keys
    // 1.
    // Write a short explanation of what a primary key is and why it is important.
    // ...........................................................................................................

    // A primary key is a unique identifier for each record in a database table. It is a specific column 
    // (or combination of columns) that ensures all rows within the table are uniquely identifiable.

    // it is important becuse throw it we can manibulate each row from its primary key becuse there is not
    // tow primary key of the same number 

    // ...........................................................................................................
    // }


    // 7{  Null and Not Null Constraints
    // 1.
    // Describe the difference between NULL and NOT NULL constraints with examples
    // ...........................................................................................................
    
    // 1.NULL
    // A column defined with the NULL This means that it is not important to provide
    // a value for this column when inserting a new record.


    // 2.NOT NULL
    // A column defined with the NOT NULL 
    // It is important to provide a value for this column when inserting a new record.

    // ...........................................................................................................
    // }



    // 8{  Auto-Increment
    // 1.
    // Explain what AUTO_INCREMENT is and provide an example of how to use it.
    // ...........................................................................................................

    // The AUTO_INCREMENT attribute in MySQL is used to automatically generate unique, sequential values for a column.
    // Typically, it is applied to a primary key column to ensure each row has a unique identifier
    // without having to manually specify the value.

    // example

    // CREATE TABLE users (
    //     user_id INT AUTO_INCREMENT PRIMARY KEY,
    //     username VARCHAR(50) NOT NULL,
    //     email VARCHAR(100) NOT NULL
    // );

    // ...........................................................................................................
    // }


    // 9{  Creating a Database

    // Write the SQL command to create a new database named StudentDB.
    // ...........................................................................................................


    // use this command to creat database

    // 1.CREATE DATABASE StudentDB;

    // ...........................................................................................................
    // }

    // 10{ Creating a Table

    // Write the SQL command to create a table named Students with the following columns
    // ...........................................................................................................

    // use this command to creat table


    // CREATE TABLE Students (
    //     id INT primary key AUTO_INCREMENT,
    //     name VARCHAR(100)  not null,
    //     email VARCHAR(100),
    //     enrollment_date DATE
    // );
        
        
    // ...........................................................................................................
    // }


    // 11{ Insert, Update, Delete

    // 1.Insert Data
    // Write the SQL command to insert a new student record into the Students table.
    // ...........................................................................................................


    // use this command to insert a new student record into the Students tabl  
    
    // INSERT INTO students (name ,email,enrollment_date)
    // VALUES("any name","anyemail","14.7.2024");
    // ...........................................................................................................


    // 2.Update Data
    // Write the SQL command to update the email of the student with id = 1
    // ...........................................................................................................
    

    // use this command to update the email of the student with id 1

    // UPDATE students
    // SET email= "updated email"
    // WHERE id=1

    
    // ...........................................................................................................
    // 3.Delete Data
    // Write the SQL command to delete the student record with id = 1
    // ...........................................................................................................
    

    // use this command to delete the student with id 1

    // DELETE FROM students
    // WHERE id=1


    // ...........................................................................................................

    // }


    // 12{ Using a Database
    // 1.
    // Write the SQL command to select and use the StudentDB database.
    // ...........................................................................................................

    // use this command to go to the data base you want

    // USE studentdb;

    // ...........................................................................................................

    // }
    // 13{ Creating a Database and Table
    // 1.
    // Using phpMyAdmin, create a new database named PracticeDB.
    // ...........................................................................................................

    // craet data base


    // 1.CREATE DATABASE PracticeDB;

    
    // creat table in the data base

    // 2.CREATE TABLE Employees (
    //  emp_id INT primary key AUTO_INCREMENT,
    // 	emp_name VARCHAR(100) not null,
    // 	emp_position VARCHAR(100),
    // 	hire_date DATE
    // );
    
    
    // ...........................................................................................................
    // }

    // 14{ Working with Different Data Types
    // 1.
    // Create additional tables in PracticeDB with columns that use various data types (numeric, string, date/time).

    // ...........................................................................................................

    // use this command to create it 


    // CREATE TABLE persone (
    //     id INT not NULL PRIMARY KEY AUTO_INCREMENT,
    //     name varchar(255),
    //     date_of_birth date
    // );



    // ...........................................................................................................

    // }


    // 15{ Data Manipulation
    // 1.
    // Insert Data: Insert at least three records into the Employees table.

    // use this command to creat it 
    // ...........................................................................................................

    
    // INSERT INTO employees (emp_id, emp_name, emp_position, hire_date)
    // VALUES 
    // ('Johnson', 'HR','10-10-2024'),
    // ('Smith', 'software engineer ','11-10-2024'),
    // ('Brown', 'cams','9-10-2024');

    
    
    
    // ...........................................................................................................
    // 2.
    // 2.	Update Data: Update the emp_position of one of the employees.

    // use this command to creat it 
    // ...........................................................................................................


    // UPDATE employees
    // SET emp_position = 'Senior Developer'
    // WHERE emp_id = 3;

    
    
    
    // ...........................................................................................................
    // 3.
    // Delete Data: Delete one of the employee records from the table.

    // use this command to creat it 
    // ...........................................................................................................

    // DELETE FROM employees 
    // WHERE emp_id=1

    
    // ...........................................................................................................
    // }
