# Web Security Mini Lab (XSS, SQL Injection, CSRF)

A small educational web application demonstrating three common web vulnerabilities:

- Cross-Site Scripting (XSS)
- SQL Injection (SQLi)
- Cross-Site Request Forgery (CSRF)

Each vulnerability includes:
- A **vulnerable implementation**
- A demonstration of the attack
- A **secure fixed version**

⚠️ This project is for educational purposes only.

---

## 🛠 Tech Stack

- PHP
- MySQL
- HTML / CSS
- XAMPP (or any local PHP server)

---

## 🎯 Learning Objectives

This project demonstrates:

- How user input can be exploited if not properly validated
- The risks of unsanitized database queries
- The importance of CSRF tokens
- Secure coding practices in web development

---

# 1️⃣ XSS Demo (Reflected XSS)

### Vulnerable Version
- User input is directly printed into the page.
- No sanitization is performed.

Example payload:
<script>alert('XSS')</script>

### Secure Version
- User input is sanitized using:
htmlspecialchars()

- Output encoding prevents script execution.

---

# 2️⃣ SQL Injection Lab

### Vulnerable Version
- Login form uses raw SQL query:

SELECT * FROM users WHERE username='$username' AND password='$password'


Example attack:
' OR '1'='1


### Secure Version
- Uses prepared statements with parameterized queries.
- Prevents injection by separating SQL logic from user input.

---

# 3️⃣ CSRF Proof of Concept

### Vulnerable Version
- A form changes user email without verifying request origin.
- No CSRF protection.

Attack concept:
- Attacker crafts a hidden form that submits automatically.

### Secure Version
- CSRF token is generated and stored in session.
- Token is validated before processing request.

---

## 🚀 How to Run

1. Install XAMPP (or any local PHP server).
2. Clone the repository:

git clone https://github.com/CAjmnz/Web-Security-Mini-Lab-XSS-SQL-Injection-CSRF-.git

3. Move the project folder to:

htdocs/


4. Start Apache and MySQL.

5. Import the provided SQL file into phpMyAdmin.

6. Visit:

http://localhost/web-security-mini-lab


---

## 📸 Screenshots

(Add screenshots of:)
- XSS alert popup
- SQL injection login bypass
- CSRF attack demo
- Secure versions working correctly

---

## 📁 Project Structure

/xss
vulnerable.php
secure.php

/sqli
vulnerable_login.php
secure_login.php

/csrf
vulnerable_email_change.php
secure_email_change.php


---

## 🔒 Security Disclaimer

This project is intentionally vulnerable for demonstration purposes.

Do NOT deploy this on a public server.
Do NOT use these techniques against systems without authorization.

---

## 📄 License

MIT License


