<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruit</title>
    <link rel="stylesheet" href="<?=base_url();?>public/css/style.css">

</head>
<body>
    <h1>Recruit</h1>

    <div class="form-box">
        <form action="<?= site_url('/user/create'); ?>" method="post" enctype="multipart/form-data">
            <label for="Name">Name</label><br>
            <input type="text" name="Name" id="Name" class="form-input" required><br><br>

             <label for="Level">Level</label><br>
            <input type="number" name="Level" id="Level" min="1" max="100" class="form-input" placeholder="Enter Level" required><br><br>
           
            <label for="Class">Class</label><br>
            <select name="Class" id="Class" class="form-input" required>
                <option value="">Select Class</option>
                <option value="Swordsman">Swordsman</option>
                <option value="Warrior">Warrior</option>
                <option value="Catalyst">Catalyst</option>
                <option value="Marksman">Marksman</option>
                <option value="Lancer">Lancer</option>
            </select><br><br>

            <label for="Weapon">Choose your Weapon</label><br>
            <input type="file" name="Weapon" id="Weapon" class="form-input" placeholder="Upload your Weapon" required ><br><br>

            <input type="submit" value="➕ Recruit" class="btn create"><br>
            <a href="<?= site_url('/user/restore/'); ?>" class="btn create">🔄 Restore</a>
            <a href="<?= site_url('/user/show/'); ?>" class="btn create">📃 List</a>
            <a href="<?= site_url('/'); ?>" class="btn danger">🏰 Home</a>
        </form>
    </div>
</body>
</html>
