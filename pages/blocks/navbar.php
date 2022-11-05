<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <h1>APPLE</h1>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <?php
                    $menuData = $header->menu();
                    foreach ($menuData as $value) {
                        $menuItems = current($value);
                        $isSubArray = is_array($menuItems) || false;
                        if (!$isSubArray) { ?>
                            <li class="nav-item">
                                <a class="nav-link <?php echo activeClass($menuItems); ?>" href="?page=<?php echo $menuItems ?>"> <?php echo $menuItems; ?> </a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu">
                                <?php
                                foreach ($menuItems as $subItem) { ?>
                                    <li>
                                        <a class="dropdown-item <?php echo activeClass($subItem); ?>" href="?page=<?php echo $subItem;?>"><?php echo $subItem; ?></a>
                                    </li>
                            <?php }
                                }
                            } ?>
                                </ul>
                        </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Admin
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="?page=add-about-hero">Add About Hero</a></li>
                                    <li><a class="dropdown-item" href="?page=manage-about-hero">Manage About Hero </a></li>
                                </ul>
                            </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" name="submit" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>