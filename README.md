MetaTrack is a user-friendly web application built with PHP, HTML, CSS, and MySQL that helps users track their daily calorie intake, monitor nutritional goals, and visualize their health progress over time.

🚀 Features
✨ Modern landing page with animated transitions

👤 User registration & login system with password validation

🍽️ Meal and calorie tracking (dashboard coming soon)

📈 Visual progress insights & goal setting

🙋‍♂️ Responsive FAQ and testimonial sections

💡 Built with a clean, consistent UI for desktop and smaller screens

🔐 Passwords securely hashed & validated with regex rules (uppercase, number, 8+ characters)

📁 Tech Stack
Frontend: HTML, CSS (custom styles, no frameworks), vanilla JavaScript

Backend: PHP (with POST/GET handling and prepared statements)

Database: MySQL (via phpMyAdmin)

🧱 File Structure
<pre><code>``` metatrack/ │ ├── assets/ │ └── images/ │ ├── logo.png │ └── slides/ │ ├── calorie_monitoring.png │ ├── goal_setting.png │ ├── meal_logging.png │ └── progress_tracking.jpg │ ├── css/ │ └── styles.css │ ├── js/ │ └── scripts.js │ ├── includes/ │ ├── db.php │ ├── header.php │ └── footer.php │ ├── register.php ├── login.php ├── dashboard.php ├── index.php └── README.md ```</code></pre>

🔧 Setup Instructions
Clone the repository

Import the provided SQL file in phpMyAdmin

Update DB connection in includes/db.php

Run locally on XAMPP or similar PHP server
