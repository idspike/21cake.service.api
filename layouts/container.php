<div class="container grid-s165m0 layout">
    <?php
        if ($method == 'help') {
            require_once('help_right.php');
        } else {
            require_once('right.php');
        }
        require_once('left.php');
    ?>
</div>