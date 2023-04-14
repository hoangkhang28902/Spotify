<h1> Page user </h1>
<?php if (!empty($data['song'])):
        foreach ($data['user'] as $user) : ?>
        <?php echo $user['Username'] ?>
<?php endforeach; endif; ?>