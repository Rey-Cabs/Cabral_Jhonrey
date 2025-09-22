<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspect</title>
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/style.css">

    <style>
        .inspect-container {
            background: rgba(245, 222, 179, 0.95);
            border: 4px solid #6b4f2e;
            border-radius: 16px;
            width: 380px; 
            margin: 80px auto;
            padding: 25px;
            box-shadow: 0 0 25px rgba(59,47,27,0.9);
            text-align: center;
            position: relative;
            font-family: "Garamond", serif;
            transition: transform 0.3s ease;
        }

        .inspect-container:hover {
            transform: scale(1.03);
            box-shadow: 0 0 35px rgba(139,94,52,0.9);
        }

        .inspect-container h2 {
            font-size: 30px;
            margin-bottom: 12px;
            color: #3b2f1b;
            text-shadow: 1px 1px #d4c28a;
            border-bottom: 2px solid #6b4f2e;
            padding-bottom: 8px;
        }

        .inspect-container p {
            font-size: 18px;
            margin: 8px 0;
            color: #2c1c0f;
        }

        .weapon-box {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            height: 80%;
            display: flex;
            align-items: center;
            transition: right 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            z-index: 1;
            opacity: 0;
        }

        .weapon-box img {
            height: 100%;
            width: auto;
            border: 4px solid #3b2f1b;
            border-radius: 12px;
            background: rgba(255, 255, 240, 0.95);
            box-shadow: 0 0 18px rgba(59,47,27,0.9);
            padding: 5px;
            transition: transform 0.3s ease, opacity 0.3s ease;
            max-width: 200px;
        }

        .weapon-box img:hover {
            transform: scale(1.1);
        }

        .weapon-box.show {
            right: -160px;
            opacity: 1;
        }

        .inspect-container {
            position: relative;
            overflow: visible;
            margin: 80px auto;
            z-index: 10;
            background: rgba(245, 222, 179, 0.95);
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

    </style>
</head>
<body>
    <h1>Adventurer Profile</h1>

    <div class="inspect-container">
        <h2><?= $user['Name']; ?></h2>
        <p><strong>Class:</strong> <?= $user['Class']; ?></p>
        <p><strong>Level:</strong> <?= $user['Level']; ?></p>
        <?php if (!empty($user['Weapon_Name'])): ?>
            <p><strong>Weapon:</strong> <?= htmlspecialchars($user['Weapon_Name']); ?></p>
        <?php endif; ?>

        <?php if (!empty($user['Weapon'])): ?>
            <div class="weapon-box" id="weaponBox">
                <img src="<?= base_url(); ?>public/Weapons/<?= $user['Weapon']; ?>" alt="Weapon">
            </div>
        <?php else: ?>
            <p>No Weapon Equipped</p>
        <?php endif; ?>
    </div>

    <div class="buttons">
        <a href="<?= site_url('/user/show'); ?>" class="btn">🏹 Back to Guild</a>
    </div>

    <script>
        window.onload = function() {
            const weaponBox = document.getElementById('weaponBox');
            if (weaponBox) {
                setTimeout(() => {
                    weaponBox.classList.add('show');
                }, 300);
            }
        };
    </script>
</body>
</html>
