<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">,
  <title>Adventurer's Guild</title>
  <link rel="stylesheet" href="<?=base_url();?>public/css/style.css">
</head>
<body>
  <h1>Welcome to Adventurer's Guild</h1>

  <div class="description-box">
    <p>
      Within these ancient walls, heroes are forged and quests await.  
      Join the ranks of warriors, mages, and rogues who have answered the call of destiny.  
      Whether you seek glory, gold, or honor — your journey begins here.
    </p>
  </div>

  <div class="buttons">
    <a href="<?=site_url('/user/create');?>" class="btn">Recruit</a>
    <a href="<?=site_url('/user/show');?>" class="btn">List</a>
  </div>
</body>
</html>
