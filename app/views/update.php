<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ascend</title>
    <link rel="stylesheet" href="<?=base_url();?>public/css/style.css">

</head>
<body>
    <h1>Ascend</h1>

    <div class="form-box">
        <form action="<?= site_url('/user/update/'.$user['id']); ?>" method="post">
            
            <label for="Name">Name</label><br>
            <input type="text" name="Name" id="Name" 
                   value="<?= html_escape($user['Name']); ?>" 
                   class="form-input"><br><br>

            <label for="Level">Level</label><br>
            <input type="number" name="Level" id="Level" min="1" max="100" 
                   value="<?= html_escape($user['Level']); ?>" 
                   class="form-input"><br><br>

            <label for="Class">Class</label><br>
            <select name="Class" id="Class" class="form-input">
                <option value="Swordsman" <?= $user['Class'] == 'Swordsman' ? 'selected' : ''; ?>>Swordsman</option>
                <option value="Mage" <?= $user['Class'] == 'Mage' ? 'selected' : ''; ?>>Mage</option>
                <option value="Archer" <?= $user['Class'] == 'Archer' ? 'selected' : ''; ?>>Archer</option>
                <option value="Assassin" <?= $user['Class'] == 'Assassin' ? 'selected' : ''; ?>>Assassin</option>
                <option value="Tank" <?= $user['Class'] == 'Tank' ? 'selected' : ''; ?>>Tank</option>
            </select><br><br>

            <input type="submit" value="⚔️ Ascend" class="btn create">
            <a href="<?= site_url('/'); ?>" class="btn danger">❌ Cancel</a>
        </form>
    </div>
</body>
</html>
