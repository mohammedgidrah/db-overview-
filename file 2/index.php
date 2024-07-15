<?php
// task 1
// SELECT * FROM employees

// task 2
// SELECT name,salary FROM employees

// task 3
// SELECT * FROM employees
// WHERE salary>50000;

// task 4
// SELECT * FROM employees
// WHERE name LIKE 'J%'

// task 5
// SELECT name,department_id FROM employees
// WHERE department_id IN(1,2,3)

// task 6
// SELECT * FROM employees
// ORDER BY hire_date DESC

// task 7
// SELECT COUNT(name) AS numberofemplyee FROM employees


// task 8
// SELECT SUM(salary) AS sum_salary_of_emplyee FROM employees


// task 9
// SELECT avg(salary) AS avg_salary_of_emplyee FROM employees

// task 10

// min
// SELECT MIN(salary) AS min_salary_of_emplyee FROM employees

// max
// SELECT max(salary) AS max_salary_of_emplyee FROM employees

// task 11
// 1.
// SELECT * FROM employees
// WHERE salary>50000

// 2.
// SELECT id, AVG(salary) AS average_salary
// FROM Employees
// GROUP BY id
// HAVING AVG(salary) > 50000;

// task 12
// CREATE TABLE employees (
//     employee_id INT PRIMARY KEY,
//     username VARCHAR(50));
// CREATE TABLE employees_profile (
//     profile_id INT PRIMARY KEY,
//     employee_id INT UNIQUE,
//     profile_data VARCHAR(255),
//     FOREIGN KEY (employee_id) REFERENCES employees(employee_id));

// task 13
// CREATE TABLE departments (
//     department_id INT PRIMARY KEY,
//     department_name VARCHAR(50));
// CREATE TABLE employees (
//     employee_id INT PRIMARY KEY,
//     employee_name VARCHAR(50),
//     department_id INT,
//     FOREIGN KEY (department_id) REFERENCES departments(department_id));

// task 14
// CREATE TABLE students (
//     student_id INT PRIMARY KEY,
//     student_name VARCHAR(50));
// CREATE TABLE courses (
//     course_id INT PRIMARY KEY,
//     course_name VARCHAR(50));
// CREATE TABLE student_courses (
//     student_id INT,
//     course_id INT,
//     PRIMARY KEY (student_id, course_id),
//     FOREIGN KEY (student_id) REFERENCES students(student_id),
//     FOREIGN KEY (course_id) REFERENCES courses(course_id));

// task 15
// CREATE TABLE employees (
//     department_id INT,
//     FOREIGN KEY (department_id) REFERENCES departments(department_id));

// task 16
// ALTER TABLE employees
// MODIFY COLUMN name VARCHAR(100) NOT NULL;

// task 17
// ALTER TABLE employees
// ADD COLUMN email varchar(50) ;

// ALTER TABLE employees
// MODIFY COLUMN email  UNIQUE ;

// task 18
// ALTER TABLE employees
// ADD CONSTRAINT chk_salary CHECK (salary > 0);

// task19
// ALTER TABLE employees
// ADD COLUMN status VARCHAR(10) DEFAULT 'Active';

// task 20
// CREATE TABLE departments (
//     id INT PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(100) NOT NULL UNIQUE
// );

// CREATE TABLE employees (
//     id INT PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(100) NOT NULL,
//     email VARCHAR(100) NOT NULL UNIQUE,
//     salary float CHECK (salary > 0),
//     hire_date DATE DEFAULT CURRENT_DATE,
//     department_id INT,
//     FOREIGN KEY (department_id) REFERENCES departments(id)
// );

// CREATE TABLE projects (
//     id INT PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(100) NOT NULL UNIQUE,
//     budget float CHECK (budget > 0),
//     start_date DATE DEFAULT CURRENT_DATE
// );

// CREATE TABLE employee_projects (
//     employee_id INT,
//     project_id INT,
//     PRIMARY KEY (employee_id, project_id),
//     FOREIGN KEY (employee_id) REFERENCES employees(id) ,
//     FOREIGN KEY (project_id) REFERENCES projects(id) 
// );



