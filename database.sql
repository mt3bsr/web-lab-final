CREATE DATABASE IF NOT EXISTS portfolio_db;
USE portfolio_db;

DROP TABLE IF EXISTS profile;
CREATE TABLE profile (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(100),
  job_title VARCHAR(150),
  summary TEXT,
  location VARCHAR(100),
  email VARCHAR(100),
  phone VARCHAR(30),
  university VARCHAR(100),
  degree VARCHAR(150),
  graduation VARCHAR(10)
);

DROP TABLE IF EXISTS skills;
CREATE TABLE skills (
  id INT AUTO_INCREMENT PRIMARY KEY,
  category VARCHAR(100),
  skill_list VARCHAR(255)
);

DROP TABLE IF EXISTS projects;
CREATE TABLE projects (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(150),
  description TEXT,
  tools VARCHAR(255)
);

DROP TABLE IF EXISTS messages;
CREATE TABLE messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  subject VARCHAR(100),
  reply_by VARCHAR(20),
  message TEXT
);

INSERT INTO profile (full_name, job_title, summary, location, email, phone, university, degree, graduation)
VALUES ('Muteb Salameh Alrashdan',
        'Software Engineering Student | Product Management | Business Analysis',
        'Software Engineering student and CAPM certified professional with hands on experience in Product Management and Business Analysis across technology startups. Skilled in business requirements and product development, combining technical knowledge with strategic thinking to solve business challenges and drive growth. Passionate about Management and Technology Consulting.',
        'Hail, Saudi Arabia', 'muteb.alrashdan@gmail.com', '0530151298',
        'University of Hail', 'Bachelor of Science in Software Engineering', '2027');

INSERT INTO skills (category, skill_list) VALUES
('Business & Strategy', 'Business Analysis, Competitor Benchmarking, Market Research, Strategic Thinking'),
('Product Management', 'Product Development, Product Backlog Management, User Stories, BRD Development, Requirements Gathering'),
('Project Management', 'Agile, Scrum, Waterfall, Stakeholder Communication');

INSERT INTO projects (title, description, tools) VALUES
('Library Management System', 'A system to manage books, members, and borrowing records.', 'HTML, CSS, PHP, MySQL'),
('Student Management System', 'A web application to add, edit, delete, and search student records.', 'HTML, CSS, JavaScript, PHP, MySQL'),
('Online Store Website', 'A shopping website with a product list, a shopping cart, and orders.', 'HTML, CSS, JavaScript, PHP, MySQL');
