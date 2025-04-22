<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Pending</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS file -->
    <style>
        /* Popup styles */
        .popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            z-index: 1000;
        }
        .popup.active {
            display: block;
        }
        .popup-overlay {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        .popup-overlay.active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="popup-overlay" id="popup-overlay"></div>
    <div class="popup" id="popup">
        <h1>Account Created</h1>
        <p>Your account has been created successfully. Please wait for admin approval before accessing your account.</p>
        <button onclick="closePopup()">OK</button>
    </div>
    <script>
        // Show the popup on page load
        window.onload = function() {
            document.getElementById('popup').classList.add('active');
            document.getElementById('popup-overlay').classList.add('active');
        };

        // Close the popup
        function closePopup() {
            document.getElementById('popup').classList.remove('active');
            document.getElementById('popup-overlay').classList.remove('active');
            // Optionally redirect or do something after closing
            window.location.href = "{{ route('home') }}"; // Redirect to homepage or any other route
        }
    </script>
</body>
</html>
