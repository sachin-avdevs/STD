<?php // -- File Folder listing (Development Only), Version # 24051202 -- ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File and Folder List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .folder {
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>File and Folder List</h1>

<?php
// Recursive function to get the list of files and folders, excluding specific folders
function listFilesAndFolders($directory, $excludeFolders) {
    $contents = scandir($directory);
    // Remove . and .. from the list
    $contents = array_diff($contents, array('.', '..'));

    echo '<ul>';
    foreach ($contents as $item) {
        if (!in_array($item, $excludeFolders)) {
            $path = $directory . '/' . $item;
            $url = str_replace(' ', '%20', $path); // Encode spaces in URLs
            echo '<li>';
            if (is_dir($path)) {
                echo '<span class="folder"><a href="' . $url . '">' . $item . '</a></span>';
                // Recursively list files and folders in subdirectory
                listFilesAndFolders($path, $excludeFolders);
            } else {
                echo '<a href="' . $url . '">' . $item . '</a> (File)';
                echo ' - Last Modified: ' . date('Y-m-d H:i:s', filemtime($path));
            }
            echo '</li>';
        }
    }
    echo '</ul>';
}

// Specify the directory path
$rootDirectory = '.';
$excludeFolders = ['.well-known','@fur_BLFI', '@gbl_V05', '@PHPMailer'];

// Call the function to list files and folders
listFilesAndFolders($rootDirectory, $excludeFolders);
?>

</body>
</html>
