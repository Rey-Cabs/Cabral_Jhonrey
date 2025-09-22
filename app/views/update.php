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
        <form action="<?= site_url('/user/update/'.$user['id']); ?>" method="post" enctype="multipart/form-data">
            
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
                <option value="Warrior" <?= $user['Class'] == 'Warrior' ? 'selected' : ''; ?>>Warrior</option>
                <option value="Catalyst" <?= $user['Class'] == 'Catalyst' ? 'selected' : ''; ?>>Catalyst</option>
                <option value="Marksman" <?= $user['Class'] == 'Marksman' ? 'selected' : ''; ?>>Marksman</option>
                <option value="Lancer" <?= $user['Class'] == 'Lancer' ? 'selected' : ''; ?>>Lancer</option>
            </select><br><br>

            <label for="Weapon">Current Weapon: 
                <?php if (!empty($user['Weapon_Name'])): ?>
                    <strong><?= htmlspecialchars($user['Weapon_Name']); ?></strong>
                <?php else: ?>
                    <em>No Weapon</em>
                <?php endif; ?>
            </label><br>
            <label for="Weapon">Change Weapon (Optional)</label><br>
            <input type="file" name="Weapon" id="Weapon" class="form-input" accept="image/*"><br><br>

            <input type="submit" value="⚔️ Ascend" class="btn create">
            <a href="<?= site_url('/user/show'); ?>" class="btn danger">❌ Cancel</a>
        </form>
    </div>
</body>
</html>
