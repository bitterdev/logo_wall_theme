<?php

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Entity\File\File;
use Concrete\Core\Entity\File\Version;

$images = $images ?? [];

?>

<div class="grid-container">
    <?php foreach ($images as $image) { ?>
        <?php if ($image['file'] != null) { ?>
            <?php if ($image['file'] instanceof File) { ?>
                <?php $fv = $image['file']->getApprovedVersion(); ?>
                <?php if ($fv instanceof Version) { ?>
                    <div class="grid-item">
                        <a href="<?php echo (string)$fv->getAttribute("link"); ?>" target="_blank">
                            <img src="<?php echo $fv->getThumbnailURL("gallery_thumbnail"); ?>"
                                 alt="<?php echo h($fv->getTitle()); ?>">
                        </a>
                    </div>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</div>