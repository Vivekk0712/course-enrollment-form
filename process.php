<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $studentName = htmlspecialchars(trim($_POST['studentName']));
    $email = htmlspecialchars(trim($_POST['email']));
    $studentId = htmlspecialchars(trim($_POST['studentId']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $course = htmlspecialchars(trim($_POST['course']));
    $education = htmlspecialchars(trim($_POST['education']));
    $paymentMethod = htmlspecialchars(trim($_POST['paymentMethod']));
    $comments = htmlspecialchars(trim($_POST['comments']));
    
    // Generate enrollment ID
    $enrollmentId = 'ENR' . date('Ymd') . rand(1000, 9999);
    $enrollmentDate = date('F d, Y h:i A');
    
    // Course fees mapping
    $courseFees = [
        'Web Development Bootcamp' => '$499',
        'Data Science & Analytics' => '$599',
        'Mobile App Development' => '$549',
        'Digital Marketing Mastery' => '$399',
        'Python Programming' => '$449',
        'UI/UX Design' => '$479'
    ];
    
    $courseFee = isset($courseFees[$course]) ? $courseFees[$course] : 'N/A';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Successful</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="success-container">
            <div class="success-header">
                <div class="success-icon">🎓</div>
                <h1>Enrollment Successful!</h1>
                <p>Welcome to EduLearn Academy</p>
            </div>

            <div class="info-section">
                <h3>Enrollment Details</h3>
                <div class="info-row">
                    <span class="info-label">Enrollment ID:</span>
                    <span class="info-value highlight"><?php echo $enrollmentId; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Enrollment Date:</span>
                    <span class="info-value"><?php echo $enrollmentDate; ?></span>
                </div>
            </div>

            <div class="info-section">
                <h3>Student Information</h3>
                <div class="info-row">
                    <span class="info-label">Full Name:</span>
                    <span class="info-value"><?php echo $studentName; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Email Address:</span>
                    <span class="info-value"><?php echo $email; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Student ID:</span>
                    <span class="info-value"><?php echo $studentId; ?></span>
                </div>
                <?php if (!empty($phone)): ?>
                <div class="info-row">
                    <span class="info-label">Phone Number:</span>
                    <span class="info-value"><?php echo $phone; ?></span>
                </div>
                <?php endif; ?>
            </div>

            <div class="info-section">
                <h3>Course Details</h3>
                <div class="info-row">
                    <span class="info-label">Selected Course:</span>
                    <span class="info-value highlight"><?php echo $course; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Course Fee:</span>
                    <span class="info-value"><?php echo $courseFee; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Education Background:</span>
                    <span class="info-value"><?php echo $education; ?></span>
                </div>
            </div>

            <div class="info-section">
                <h3>Payment Information</h3>
                <div class="info-row">
                    <span class="info-label">Payment Method:</span>
                    <span class="info-value"><?php echo $paymentMethod; ?></span>
                </div>
                <?php if (!empty($comments)): ?>
                <div class="info-row">
                    <span class="info-label">Additional Comments:</span>
                    <span class="info-value"><?php echo nl2br($comments); ?></span>
                </div>
                <?php endif; ?>
            </div>

            <div class="notice-box">
                <strong>Next Steps:</strong>
                <ul>
                    <li>Check your email for course access details</li>
                    <li>Complete payment within 48 hours</li>
                    <li>Join our orientation session</li>
                </ul>
            </div>

            <div style="text-align: center;">
                <a href="index.html" class="back-btn">Enroll Another Student</a>
            </div>
        </div>
    </div>
</body>
</html>
