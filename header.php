<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
       html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}

body {
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Ensure the body takes the full viewport height */
}

.sidebar {
    width: 250px;
    background-color: #682b7d;
    color: white;
    height: 100%;
    padding: 15px;
    box-sizing: border-box;
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
}

.sidebar h2 {
    color: #4CAF50;
}

.sidebar a {
    display: block;
    color: white;
    padding: 10px;
    text-decoration: none;
    margin-bottom: 10px;
    border-radius: 4px;
}

.sidebar a:hover {
    background-color: #575757;
}

.content {
    margin-left: 250px;
    background-color: rgb(255, 255, 255);
    flex: 1; /* Takes up remaining space */
    display: flex;
    flex-direction: column;
   
}

.header {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px 0; /* Added vertical padding for more space */
    margin-bottom: 20px; /* Added margin to separate from content */
}

.footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px 0; /* Added vertical padding for more space */
    margin-top: auto; /* Pushes footer to the bottom */
}

.form-container {
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-container h2 {
    margin-bottom: 20px;
    text-align: center;
}

.form-container label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-container input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

.form-container button {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

.form-container button:hover {
    background-color: #0056b3;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0; /* Margin for better spacing from other elements */
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    
}

th, td {
    border: 1px solid #ddd;
    padding: 15px; /* Increased padding for better spacing */
    text-align: left;
}

th {
    background-color: #4CAF50;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tbody tr:hover {
    background-color: #ddd;
}

thead th {
    background-color: #4CAF50; /* Ensure the header cells have consistent background color */
    color: white;
    padding: 16px; /* Ensure header cells have consistent padding */
}

tbody td {
    padding: 12px 16px; /* Ensure body cells have consistent padding */
}

    </style>
</head>
<body>
