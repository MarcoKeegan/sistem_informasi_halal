    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <!-- Cutting Start from here -->
                        <?php if($data['user']['role_id'] == 2 || $data['user']['role_id'] == 1):?>
                        <div class="sb-sidenav-menu-heading">Cutting</div>
                        <a class="nav-link" href="<?=BASE_URL?>/Panel/cutting">
                            <div class="sb-nav-link-icon"><i class="fa fa-cutlery"></i></div>
                            Cutting List
                        </a>
                        <?php endif;?>
                        <!-- Distribution Start from here -->
                        <?php if($data['user']['role_id'] == 3 || $data['user']['role_id'] == 1):?>
                        <div class="sb-sidenav-menu-heading">Distribution</div>
                        <a class="nav-link" href="<?=BASE_URL?>/Panel/distribution">
                            <div class="sb-nav-link-icon"><i class="fa fa-truck"></i></div>
                            Distribution List
                        </a>
                        <?php endif;?>
                        <!-- Pengolahan start from here -->
                        <?php if($data['user']['role_id'] == 4 || $data['user']['role_id'] == 1):?>
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="<?=BASE_URL?>/Panel/menu">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            Menu List
                        </a>
                        <!-- Ingredients start from here -->
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="<?=BASE_URL?>/Panel/ingredient">
                            <div class="sb-nav-link-icon"><i class="fa fa-carrot"></i></div>
                            Ingredients List
                        </a>
                        <!-- display start from here -->
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="<?=BASE_URL?>/Panel/display">
                            <div class="sb-nav-link-icon"><i class="fa fa-tv"></i></div>
                            Display List
                        </a>
                        <?php endif;?>
                        <!-- assesment start from here -->
                        <?php if($data['user']['role_id'] == 5 || $data['user']['role_id'] == 1):?>
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="<?=BASE_URL?>/Panel/assesment">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            Audit List
                        </a>
                        <a class="nav-link" href="<?=BASE_URL?>/Panel/main">              <!-- punya marco -->
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            Audit List (Marco)
                        </a>
                        <?php endif;?>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?=$data['user']['name']?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
    