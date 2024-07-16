<?php


// task 1 	Inner Join

// SELECT departments.department_name,employees.first_name,employees.employee_id
// FROM employees
// INNER JOIN departments
// ON employees.employee_id = departments.department_id

// task 2 	Left Join:

// SELECT employees.first_name,projects.project_name
// FROM employees
// LEFT JOIN projects
// ON employees.employee_id = projects.project_id

// task 3 	Right Join:

// SELECT employees.first_name,departments.department_name
// FROM departments
// RIGHT JOIN employees
// ON employees.employee_id = departments.department_id

// task 4 	Full Outer Join

// SELECT employees.first_name, projects.project_name
// FROM employees
// FULL OUTER JOIN projects
// ON employees.employee_id = projects.employee_id;

// task 5 	Self Join

// SELECT e1.first_name AS employee_name, e2.first_name AS manager_name
// FROM employees e1
// INNER JOIN employees e2
// ON e1.manager_id = e2.employee_id;

// task 6 	Cross Join:

// SELECT employees.first_name,departments.department_name
// FROM employees
// CROSS JOIN departments

// task 7 	Join with Alias

// SELECT e.first_name, d.department_name
// FROM employees e
// JOIN departments d
// ON e.department_id = d.department_id;

// task 8 	Join with Aggregate Function

// SELECT d.department_name, AVG(salary) AS average_salary
// FROM employees e
// JOIN salaries s ON e.employee_id = s.employee_id
// JOIN departments d ON e.department_id = d.department_id
// GROUP BY d.department_name;

// task 9 	Join with Conditional Filtering

// SELECT e.first_name, e.last_name, p.project_name, p.start_date
// FROM employees e
// JOIN projects ep ON e.employee_id = ep.project_id
// JOIN projects p ON ep.project_id = p.project_id
// WHERE p.start_date > '2023-01-15';

// task 10 	Join with WHERE Clause
// SELECT e.first_name, e.last_name, d.department_name, d.department_id
// FROM employees e
// JOIN departments d ON e.employee_id = d.department_id
// WHERE d.department_name = 'HR';

// task 11

// SELECT customers.customer_name,customers.customer_id ,orders.order_date,orders.order_id
// FROM orders
// INNER JOIN customers
// ON orders.order_id = customers.customer_id

// task 12

// SELECT employees.employee_id, employees.first_name,departments.department_name,departments.department_id
// FROM employees
// INNER JOIN departments USING (department_id)

// task 13

// SELECT c.customer_name, c.customer_id, COUNT( o.order_id) AS number_of_orders
// FROM customers c 
// JOIN orders o ON c.customer_id= o.customer_id
// GROUP BY c.customer_id, c.customer_name;

// task 14

// SELECT c.customer_name, c.customer_id, COUNT( o.order_id) AS number_of_orders
// FROM customers c 
// JOIN orders o ON c.customer_id= o.customer_id
// GROUP BY c.customer_id, c.customer_name
// HAVING COUNT(o.order_id)>5

// task 15

// SELECT e.first_name,
//        e.last_name,
//        d.department_name,
//        CASE 
//            WHEN d.department_name = 'Sales' THEN 'Sales Team'
//            WHENEN d.department_name = 'HR' THEN 'Human Resources'
//            WHEN d.department_name ='Engineering' THEN 'Engineering team'
//            EL d.department_name = 'Marketing' THEN 'Marketing Team'
//            WHSE 'Other Department'
//        END AS employee_category
// FROM employees e
// JOIN departments d USING (department_id);

// task 16

// SELECT e.first_name,
//        e.last_name,
//        d.department_name
// FROM employees e
// INNER JOIN departments d ON e.department_id = d.department_id
// ORDER BY d.department_name, e.last_name, e.first_name;

// task 17

// SELECT e.first_name,
//        e.last_name,
//        d.department_name,
//        p.project_name
// FROM employees e
// INNER JOIN departments d ON e.department_id = d.department_id
// INNER JOIN projects p ON d.department_id = p.project_id
// ORDER BY d.department_name, e.last_name, e.first_name;

// task 18

// SELECT e.first_name,
//        e.last_name,
//        p.project_name,
//        c.client_name
// FROM employees e
//  LEFT JOIN projects p ON e.employee_id = p.project_id
// LEFT JOIN clients c ON p.client_id = c.client_id
// ORDER BY e.last_name, e.first_name;

// task 19

// SELECT d.department_name,
//        e.first_name,
//        e.last_name,
//        s.amount
// FROM departments d
// RIGHT JOIN employees e ON d.department_id = e.department_id
// RIGHT JOIN salaries s ON e.employee_id = s.employee_id
// ORDER BY d.department_name, e.last_name, e.first_name;

// task 20

// SELECT e.first_name,
//        e.last_name,
//        d.department_name,
//        p.project_name
// FROM employees e
// FULL OUTER JOIN departments d ON e.department_id = d.department_id
// FULL OUTER JOIN projects p ON e.employee_id = p.employee_id
// ORDER BY d.department_name, e.last_name, e.first_name;
