CREATE DATABASE IF NOT EXISTS portfolio_db;
USE portfolio_db;

-- 1. Data dinamis untuk section Expertise
CREATE TABLE IF NOT EXISTS expertise_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    icon_class VARCHAR(100) NOT NULL
);

INSERT INTO expertise_items (title, description, icon_class)
VALUES
('Data Analytics', 'Analyzing data to identify relevant patterns and meaningful insights.', 'bi bi-bar-chart-fill'),
('Data Visualization', 'Presenting data through clear and effective visualizations.', 'bi bi-pie-chart-fill'),
('ICT Analyst', 'Assessing technology needs to support efficient business processes.', 'bi bi-cpu-fill'),
('Problem Solving', 'Developing practical solutions through structured analysis.', 'bi bi-lightbulb-fill');

-- 2. Data angka untuk grafik
CREATE TABLE IF NOT EXISTS expertise_metrics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    label VARCHAR(100) NOT NULL,
    score INT NOT NULL
);

INSERT INTO expertise_metrics (label, score) VALUES
('Data Analytics', 85),
('ICT', 78),
('Problem Solving', 90),
('Technology', 82);

-- 3. Data dari formulir Contact
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
