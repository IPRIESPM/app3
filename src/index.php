<?php

const archive = '📁';
const file = '📄';
function listDirectories(string $userPath)
{
    $directories = scandir($userPath);
    echo "<ul>";
    foreach ($directories as $dir) {
        if (is_dir($dir)) {
            if ($dir == "." || $dir == "..") continue;
            $customPath = $userPath . "/ $dir";
            echo "<li>" . archive . " $dir </li>";

            listDirectories($dir);
        } else {
            $filePath = $userPath . "/" . $dir;
            echo "<li> <a href='$filePath'>" . file . "  $dir </a></li>";
        }
    }
    echo "</ul>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de ejercicios</title>
    <style>
        :root {
            --text-color: #fbfbfe;
        }

        body {
            display: grid;
            place-items: center;
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            background-color: #2b2a33;
            color: var(--text-color);

            & ul {
                list-style: none;

                & li {
                    padding-bottom: 10px;
                }
            }

            & a:link,
            a:visited {
                color: var(--text-color);
                text-decoration: none;
            }

        }
    </style>
</head>
<body>
<?= listDirectories("./"); ?>
</body>