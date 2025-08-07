<?php // -- CBA Page Layout - Version # 25080601 -- ?>
<?php
/**
 * layout.php
 *
 * This is the master layout file that wraps the header, dynamic sections (content),
 * and footer. It provides a consistent HTML structure for all pages.
 *
 * It requires:
 * - $pageTitle (string) - The title of the page.
 * - $content (string) - Dynamic content that will be injected into the layout.
 *
 * Usage:
 * - Assign dynamic page content to the $content variable in your page (e.g., home/index.php).
 * - This file will render the entire page including header, content, and footer.
 */

// If no content is set before layout is included, start output buffering
if (!isset($content)) {
    ob_start();
}

// Set the page title, fall back to a default if not provided
$pageTitle = $pageTitle ?? SITE_NAME;
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<?php include __DIR__ . '/../_inc/_head.php'; ?>

<body class="stretched side-panel-left">

    <?php include __DIR__ . '/../_tpl/sub_nav.php'; ?>

    <?php // Wrapper that holds the entire page ?>
    <div id="wrapper" class="clearfix">
    
        <?php // Include the header ?>
        <?php include __DIR__ . '/header.php'; ?>
    
        <?php // This is where the dynamic page content will be rendered ?>
        <?= $content ?? ob_get_clean(); ?>

        <?php // Include the footer ?>
        <?php include __DIR__ . '/footer.php'; ?>
    
    </div>
    
    <?php // Go To Top Button ?>
    <div id="gotoTop" class="icon-angle-up"></div>

    <?php // External JavaScript Files ?>
    <?php include __DIR__ . '/../_inc/_scripts.php'; ?>

</body>
</html>
