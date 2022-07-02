<header class="header">

    <div class="flex">

        <a href="admin_index.php" class="logo">Admin<span>Panel</span></a>

        <nav class="navbar">
            <a href="admin_index.php">home</a>
            <a href="admin_vehicles.php">vehicles</a>
            <a href="admin_purchase.php">purchase</a>
            <a href="admin_users.php">users</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-user"></div>
        </div>

        <div class="profile">
            <?php
            $sql= (" SELECT * FROM users WHERE id='$admin_id'");
            $query=$connect->query($sql);
            $fetch_profile=mysqli_fetch_assoc($query);
            
         ?>
            <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
            <p><?= $fetch_profile['name']; ?></p>
            <a href="admin_update_profile.php" class="blue-btn">update profile</a>
            <a href="logout.php" class="delete-btn">logout</a>
            <div class="flex-btn">
                <a href="login.php" class="btn">login</a>
                <a href="register.php" class="btn">register</a>
            </div>
        </div>

    </div>

</header>