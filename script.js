$(document).ready(function() {
    // Real-time validation
    $('#studentName').on('blur', function() {
        validateName();
    });

    $('#email').on('blur', function() {
        validateEmail();
    });

    $('#studentId').on('blur', function() {
        validateStudentId();
    });

    // Form submission
    $('#enrollmentForm').on('submit', function(e) {
        // Clear previous errors
        $('.error-message').text('');
        
        let isValid = true;

        // Validate all fields
        if (!validateName()) isValid = false;
        if (!validateEmail()) isValid = false;
        if (!validateStudentId()) isValid = false;
        if (!validateCourse()) isValid = false;
        if (!validateEducation()) isValid = false;
        if (!validatePayment()) isValid = false;
        if (!validateTerms()) isValid = false;

        if (!isValid) {
            e.preventDefault();
            return false;
        }
    });

    function validateName() {
        const name = $('#studentName').val().trim();
        if (name === '') {
            $('#nameError').text('Name is required');
            return false;
        }
        if (name.length < 3) {
            $('#nameError').text('Name must be at least 3 characters');
            return false;
        }
        if (!/^[a-zA-Z\s]+$/.test(name)) {
            $('#nameError').text('Name should contain only letters');
            return false;
        }
        $('#nameError').text('');
        return true;
    }

    function validateEmail() {
        const email = $('#email').val().trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        if (email === '') {
            $('#emailError').text('Email is required');
            return false;
        }
        if (!emailPattern.test(email)) {
            $('#emailError').text('Please enter a valid email address');
            return false;
        }
        $('#emailError').text('');
        return true;
    }

    function validateStudentId() {
        const studentId = $('#studentId').val().trim();
        
        if (studentId === '') {
            $('#studentIdError').text('Student ID is required');
            return false;
        }
        if (studentId.length < 4) {
            $('#studentIdError').text('Student ID must be at least 4 characters');
            return false;
        }
        if (!/^[a-zA-Z0-9]+$/.test(studentId)) {
            $('#studentIdError').text('Student ID should be alphanumeric');
            return false;
        }
        $('#studentIdError').text('');
        return true;
    }

    function validateCourse() {
        const course = $('#course').val();
        
        if (course === '') {
            $('#courseError').text('Please select a course');
            return false;
        }
        $('#courseError').text('');
        return true;
    }

    function validateEducation() {
        const education = $('#education').val().trim();
        
        if (education === '') {
            $('#educationError').text('Education background is required');
            return false;
        }
        $('#educationError').text('');
        return true;
    }

    function validatePayment() {
        const payment = $('input[name="paymentMethod"]:checked').val();
        
        if (!payment) {
            $('#paymentError').text('Please select a payment method');
            return false;
        }
        $('#paymentError').text('');
        return true;
    }

    function validateTerms() {
        if (!$('#terms').is(':checked')) {
            $('#termsError').text('You must agree to the terms and conditions');
            return false;
        }
        $('#termsError').text('');
        return true;
    }
});
