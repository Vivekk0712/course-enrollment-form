# Online Course Enrollment Form

A web-based course enrollment form for EduLearn Academy built with HTML, CSS, JavaScript, jQuery, and PHP.

## Features

- Modern responsive design with blue theme
- Real-time form validation using jQuery
- Collects student information including:
  - Personal details (name, email, student ID)
  - Course selection from dropdown
  - Previous education background
  - Payment method selection
  - Terms & conditions acceptance
- PHP backend for form processing
- Formatted display of enrollment details upon successful submission
- Unique enrollment ID generation

## Technologies Used

- HTML5
- CSS3
- JavaScript
- jQuery 3.6.0
- PHP

## Setup Instructions

1. Install XAMPP (or any PHP server)
2. Copy the project folder to `htdocs` directory
3. Start Apache server from XAMPP Control Panel
4. Open browser and navigate to `http://localhost/course-enrollment/`

## File Structure

```
course-enrollment/
├── index.html          # Main enrollment form
├── style.css           # Styling and layout
├── script.js           # jQuery validation
├── process.php         # PHP form processing
└── README.md           # Documentation
```

## Validation Rules

- Name: Required, minimum 3 characters, letters only
- Email: Required, valid email format
- Student ID: Required, alphanumeric
- Course: Must be selected
- Education: Required
- Payment Method: Must be selected
- Terms: Must be accepted

## Author

Created for Programming Assignment 2
