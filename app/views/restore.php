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
    <h1>Restore Adventurer</h1>

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
            <th>Deleted At</th>
            <th>Action</th>
        </tr>
        <?php foreach($users as $user):?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['Name']; ?></td>
                <td><?= $user['Class']; ?></td> 
                <td><?= $user['Level']; ?></td>
                <td><?= $user['deleted_at']; ?></td>
                <td>
                    <a href="<?= site_url('/user/retrieve/'.$user['id']); ?>" class="btn">Restore</a> | 
                    <a href="<?= site_url('/user/delete/'.$user['id']); ?>" class="btn danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php
	echo $page;?>
	</div>

    <div class="actions">
        <a href="<?= site_url('/user/create'); ?>" class="btn create">➕ Recruit</a>
        <a href="<?= site_url('/user/show'); ?>" class="btn create">📃List</a>
        <a href="<?= site_url('/'); ?>" class="btn create">🏰 Home</a>
    </div>
</body>
</html>
