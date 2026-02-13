<?php
// URL of the file in the source cPanel server
$fileUrl = 'http://evil.com/evil.zip';

// Path where to save the downloaded file in the destination cPanel server
$savePath = '/home/evil/public_html/newevil.com/well-known.zip';

// Use file_get_contents to get the file content from the URL
$fileContent = file_get_contents($fileUrl);

if ($fileContent === false) {
    die('Failed to download the file.');
}

// Save the file content to the specified path
$result = file_put_contents($savePath, $fileContent);

if ($result === false) {
    die('Failed to save the file.');
}

echo 'File downloaded and saved successfully.';
?>
