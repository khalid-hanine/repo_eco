<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tag for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logo Intro Animation</title>
    <style>
        /* Basic styles for the intro */
        body {
            height: 100%; /* Set the height of body and html to 100% to cover the entire viewport */
            margin: 0; /* Remove default margin */
            display: flex; /* Use flexbox for centering */
            justify-content: center; /* Horizontally center the content */
            align-items: center; /* Vertically center the content */
            background: linear-gradient(to right, #0088ff, #eaf60d); /* Adjust colors as needed */
            overflow: hidden; /* Prevent horizontal scrollbar */
        }

        /* Keyframes for the logo animation */
        @keyframes fadeInOut {
            0% { opacity: 0; } /* Start with opacity 0 */
            50% { opacity: 1; } /* Increase opacity to 1 at 50% of the animation */
            100% { opacity: 0; } /* Fade out at the end of the animation */
        }

        /* Style for your logo container */
        #logo-container {
            width: 500px; /* Set the width of the logo container */
            height: 500px; /* Set the height of the logo container */
            margin-top: 10%; /* Adjust margin-top as needed */
            background-image: url("{{ asset('images/logo.png') }}"); /* Set the background image using asset function */
            background-size: contain; /* Make sure the background image fits within the container */
            background-repeat: no-repeat; /* Prevent the background image from repeating */
            background-position: center; /* Center the background image */
            animation: fadeInOut 3s ease-in-out forwards; /* Apply the fadeInOut animation */
            /* This animation will last for 3 seconds with an ease-in-out timing function */
            /* The forwards keyword ensures that the element retains the styles applied in the last keyframe */
        }
    </style>
</head>
<body>
    <!-- Logo container div -->
    <div id="logo-container"></div>

    <!-- JavaScript for redirection after animation ends -->
    <script>
        // Redirect to the main site after the animation ends
        setTimeout(function() {
            window.location.href = "{{ route("acceuil") }}"; // Redirect to the "acceuil" route
        }, 3000); // 3000 milliseconds = 3 seconds
    </script>
</body>
</html>
