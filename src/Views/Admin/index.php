<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Index page</h1>
    <?php if (!empty($data['user'])):
        foreach ($data['user'] as $user) : ?>
            <h3>
                <?= $user['Username']; ?>
            </h3>
    <?php endforeach; endif; ?>
</body>
</html>