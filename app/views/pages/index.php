<?php require_once APPROOT.'/views/inc/header.php' ?>
<h1><?php echo $data['title']?> </h1>
<ul>
    <?php foreach($data['users'] as $user){
        echo $user->name.'<br>';
    } ?>
</ul>
<?php require_once APPROOT.'/views/inc/footer.php' ?>
