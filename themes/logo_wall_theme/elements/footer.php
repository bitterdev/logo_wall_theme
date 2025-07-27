<?php

defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Area\GlobalArea;
use Concrete\Core\Page\Page;
use Concrete\Core\View\View;

/** @var Page $c */
/** @var View $this */

?>

    <footer>
        <?php
        $a = new GlobalArea('Footer Copyright');
        $a->display();
        ?>
    </footer>

<?php $this->inc("elements/footer_bottom.php"); ?>