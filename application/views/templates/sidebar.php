<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <?php
    $menu = $this->db->get('menu')->result_array();
    ?>

    <?php
    foreach ($menu as $m) :
        ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url($m['link']) ?>">
                <i class="<?= $m['icon']; ?>"></i>
                <span><?= $m['nama_menu']; ?></span>
            </a>
        </li>

    <?php endforeach; ?>

</ul>
<div id="content-wrapper">

    <div class="container-fluid">