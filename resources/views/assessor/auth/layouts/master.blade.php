<!DOCTYPE html>
<html lang="en">

<head>
    @include('assessor.auth.layouts.partials.header')
<style>
body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif; /* Use Poppins font */
    background-color: #f4f4f4; /* Neutral background to match the logo */
}

.login-container {
    display: flex;
    height: auto; /* Allow height to adjust naturally */
    margin: 50px 0; /* Add top and bottom margin */
    border-radius: 15px; /* Add rounded corners to the container */
    overflow: hidden; /* Ensure content stays within the rounded corners */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle shadow */
}

.left-panel {
    width: 50%;
    background-color: #f4f4f4; /* Light gray to match the logo's neutral tones */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 30px;
    background-image:
        url('{{ asset('img/footer-trim.png') }}'),
        url('{{ asset('img/sunray.jpg') }}');
    background-position: bottom left, top center; /* Position the images */
    background-repeat: no-repeat, no-repeat; /* Prevent repeating of images */
    background-size: contain, cover; /* Adjust size */
    border-top-left-radius: 15px; /* Add rounded corners to the top-left */
    border-bottom-left-radius: 15px; /* Add rounded corners to the bottom-left */
}



.logo-container {
    text-align: center;
}

.logo {
    width: 150px;
    margin-bottom: 15px;
}

.logo-container h2 {
    font-size: 20px;
    color: #0047ba; /* Deep blue matching the logo */
    font-weight: bold;
    margin: 10px 0;
}

.logo-container p {
    font-size: 14px;
    color: #ba001f; /* Red matching the logo */
}

.badges {
    display: flex;
    gap: 15px;
    margin-top: 20px;
}

.badge {
    width: 70px;
}

.right-panel {
    width: 50%;
    background-color: #fff;
    padding: 60px; /* Increase padding for a bigger look */
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: hidden; /* Ensure no overflow issues */
    border-top-right-radius: 15px; /* Add rounded corners to the top-right */
    border-bottom-right-radius: 15px; /* Add rounded corners to the bottom-right */
}

.right-panel::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 150px; /* Adjust width */
    height: 150px; /* Adjust height */
    background-color: #fbb03b; /* Yellow matching the building accents on the left panel */
    clip-path: polygon(100% 0, 100% 100%, 0 0);
    z-index: 0; /* Ensure it doesn't cover content */
}

.login-box {
    width: 100%;
    max-width: 400px;
    text-align: center;
    position: relative;
    z-index: 1; /* Ensure content is above the triangle */
}


.title {
    font-size: 24px;
    font-weight: bold;
    color: #0047ba; /* Red matching the logo */
    margin-bottom: 10px;
}

.subtitle {
    font-size: 16px;
    color: #0047ba; /* Deep blue matching the logo */
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 20px;
    text-align: left;
}

.form-group label {
    font-size: 14px;
    color: #333; /* Neutral text */
    margin-bottom: 5px;
    display: block;
}

.form-group input {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #dcdcdc;
    border-radius: 5px;
    outline: none;
    transition: border-color 0.3s ease;
}

.form-group input:focus {
    border-color: #0047ba; /* Deep blue matching the logo */
}

.btn-login {
    width: 100%;
    padding: 12px;
    font-size: 16px;
    font-weight: bold;
    color: #fff; /* Keep the text white */
    background-color: #0047ba; /* Deep blue matching the left panel */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-login:hover {
    background-color: #003a94; /* Slightly darker blue for hover effect */
}
.powered-by {
    font-size: 12px;
    color: #666; /* Neutral text color */
    margin-top: 10px; /* Adjust the top margin */
    text-align: center;
    display: flex; /* Flexbox for horizontal alignment */
    align-items: center; /* Vertically center the text and logo */
    justify-content: center; /* Center the entire block */
    gap: 10px; /* Space between text and logo */
}

.footer-logo {
    width: 55px; /* Adjust size */
    height: auto; /* Maintain aspect ratio */
}

.typing-container {
    display: inline-block;
    overflow: hidden; /* Ensures the text is cut off until animation reveals it */
    white-space: nowrap; /* Prevents the text from wrapping */
    border-right: 2px solid #0047ba; /* Creates a cursor effect */
    animation: typing 4s steps(50, end), blink-caret 0.5s step-end infinite;
    padding-right: 15px;
    padding-left: 15px; /* Add some space after typing animation */
}

.typing-animation {
    font-size: 18px; /* Slightly smaller text size */
    font-weight: bold;
    color: #0047ba; /* Match the blue color of your design */
    display: inline-block;
    white-space: nowrap; /* Prevents line breaks */
}

@keyframes typing {
    from {
        width: 0;
    }
    to {
        width: 100%; /* Reveals the full text */
    }
}

@keyframes blink-caret {
    from, to {
        border-color: transparent;
    }
    50% {
        border-color: #0047ba; /* Matches the blue text color */
    }
}



</style>
</head>

<body class="hold-transition login-page">
    @yield('contents')
    @include('assessor.auth.layouts.partials.scripts')
</body>

</html>
