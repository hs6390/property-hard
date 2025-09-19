<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Redirecting...</title>
</head>
<body>
    <h2>Redirecting...</h2>
    <p>If you are not redirected automatically, <a id="manual" href="#">click here</a></p>

    <script>
        // Get query parameters
        const params = new URLSearchParams(window.location.search);
        const subid = params.get('subid') || '';
        const zone = params.get('zone') || '';
        
        // Affiliate base URL
        const aff = 'https://landing.propertysex.com/?ats=eyJhIjoxMjY2MDY5...';
        
        // Build final URL with macros
        const finalURL = aff + '&a1=' + encodeURIComponent(subid) + '&a2=' + encodeURIComponent(zone);
        
        // Optional: set manual link
        document.getElementById('manual').href = finalURL;
        
        // Auto redirect immediately
        window.location.href = finalURL;
    </script>
</body>
</html>
