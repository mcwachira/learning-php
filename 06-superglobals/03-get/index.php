<?php


//echo isset($_GET['name']) ? $_GET['name'] : "";
echo htmlspecialchars($_GET['name'] ?? '');
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=John