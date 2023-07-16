<?php
function navbar()
{
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Gambling</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="nav-link" href="inventory.php">Inventory</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Games
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="play_solo.php">Single Player</a></li>
                            <li><a class="dropdown-item" href="#">Battle VS AI</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <div class="d-flex align-items-center">
                            <h6 class="me-2s" style="font-size: 30px;"><?php echo $_SESSION['username']; ?></h6>
                            <a href="profile.php">
                                <img src="image/avatar/<?php echo $_SESSION['avatar']; ?>" alt="Avatar" style="width: 40px; clip-path: circle(); object-fit: contain;">
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-dark" href="signout.php" role="button">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
}
