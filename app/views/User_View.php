<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventurer's Guild</title>
    <link rel="stylesheet" href="<?=base_url();?>public/css/style.css">
</head>
<body>
    
    <div class="header-row">
    <h1>Adventurer's List</h1>

    <form action="<?=site_url('user/show');?>" method="get">
        <?php
        $q = '';
        if(isset($_GET['q'])) {
            $q = $_GET['q'];
        }
        ?>
        <input class="search" name="q" type="text" placeholder="Search" value="<?=html_escape($q);?>">
        <button type="submit" class="btn">Search</button>
    </form>
</div>

    <table class="guild-table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Class</th>
            <th>Level</th>
            <th>Action</th>
        </tr>
        <?php if(!empty($all)): ?>
        <?php foreach($all as $user): ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['Name']; ?></td>
                <td><?= $user['Class']; ?></td>
                <td><?= $user['Level']; ?></td>
                <td>
                    <a href="<?= site_url('/user/update/'.$user['id']); ?>" class="btn">Update</a> | 
                    <a href="<?= site_url('/user/soft_delete/'.$user['id']); ?>" class="btn danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
         <?php else:?>
            <tr>
                <td colspan='5'>
                    No Adventurers Found.
                </td>
            </tr>
        <?php endif;?>    
    </table>
    <?php
	echo $page;?>
	</div>

    <div class="actions">
        <a href="<?= site_url('/user/create'); ?>" class="btn create">➕ Recruit</a>
        <a href="<?= site_url('/user/restore'); ?>" class="btn create">🔄 Restore</a>
        <a href="<?= site_url('/'); ?>" class="btn create">🏰 Home</a>
    </div>
</body>
</html>
