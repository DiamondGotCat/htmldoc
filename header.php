<?php
    $title = "HTMLDoc";
    $docbaseurl = "https://wiki.kamu.jp/htmldoc/";
    $copyright = "(C) DiamondGotCat | Template by DiamondGotCat"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Documentation'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
@import url('https://fonts.googleapis.com/css2?family=M+PLUS+2:wght@100..900&display=swap');

body {
  font-family: "M PLUS 2", serif;
  font-optical-sizing: auto;
  font-style: normal;
}

.title {
    font-size: 2.25rem; /* 36px */
    line-height: 2.5rem; /* 40px */
}

section {
    padding: 2rem;
}
p a {
    color: #0080ff;
}
    </style>
</head>
<body>
    <header class="navbar bg-accent text-accent-content">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <a href="<? echo "$docbaseurl"; ?>" class="text-lg font-bold"><?php echo $title ?? 'Documentation'; ?></a>
            <nav class="space-x-4">
                <a href="<? echo "$docbaseurl"; ?>" class="link link-hover">Home</a>
            </nav>
        </div>
    </header>
    <footer class="footer bg-neutral text-neutral-content p-4">
        <div class="container mx-auto text-center">
            <p><? echo $copyright; ?></p>
        </div>
    </footer>
    <main class="container mx-auto px-4 py-6">