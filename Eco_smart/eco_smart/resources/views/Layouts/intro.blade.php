<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logo Intro Animation</title>
    <style>
        
        body {
            height: 100%; 
            margin: 0; 
            display: flex; 
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #0088ff, #eaf60d); 
            overflow: hidden; 
        }

        
        @keyframes fadeInOut {
            0% { opacity: 0; } 
            50% { opacity: 1; } 
            100% { opacity: 0; } 
        }

        
        #logo-container {
            width: 500px; 
            height: 500px; 
            margin-top: 10%;
            background-image: url("{{ asset('images/logo.png') }}"); 
            background-size: contain; 
            background-repeat: no-repeat; 
            background-position: center; 
            animation: fadeInOut 3s ease-in-out forwards; 
           
        }
    </style>
</head>
<body>
   
    <div id="logo-container"></div>

    
    <script>
       
        setTimeout(function() {
            window.location.href = "{{ route("acceuil") }}";
        }, 3000); 
    </script>
</body>
</html>
