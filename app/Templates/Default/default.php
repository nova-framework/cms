<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>
    <meta charset="utf-8">
    <title><?= isset($browserTitle) ? $browserTitle : $title .' - ' .Config::get('app.name', SITETITLE); ?></title>
<?php
echo isset($meta) ? $meta : ''; // Place to pass data / plugable hook zone

Assets::css([
    template_url('dist/css/bootstrap.min.css', 'Default'),
    template_url('dist/css/bootstrap-theme.min.css', 'Default'),
    'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
    template_url('css/style.css', 'Default'),
]);

echo $css; // Place to pass data / plugable hook zone
?>
</head>
<body style='padding-top: 28px;'>

<?= $afterBody; // Place to pass data / plugable hook zone ?>

<div class="container">
    <p>
        <img src='<?= template_url('images/nova.png', 'Default'); ?>' alt='<?= Config::get('app.name', SITETITLE); ?>'>
    </p>

    <p><?=GlobalBlocks::get('Phone Number', 'input');?>

    <div class='row'>

        <div class='col-md-2'>
            <?php
            if (isset($leftSidebars)) {
                foreach ($leftSidebars as $row) {
                    echo "<div class='widget $row->class'>"; 
                        echo "<div class='widgetTitle'>$row->title</div>"; 
                        echo "<div class='widgetBody'>$row->content</div>"; 
                    echo "</div>";
                }
            }
            ?>
        </div>

        <div class='col-md-8'>
            <?=$content;?>
            <?php
            if (isset($pageID)) {
                echo PageBlocks::get($pageID, 'Sample Block', 'textarea');
                echo PageBlocks::get($pageID, 'Social Media Info', 'textarea');
            }
            ?>
        </div>

        <div class='col-md-2'>
            <?php
            if (isset($rightSidebars)) {
                foreach ($rightSidebars as $row) {
                    echo "<div class='widget $row->class'>"; 
                        echo "<div class='widgetTitle'>$row->title</div>"; 
                        echo "<div class='widgetBody'>$row->content</div>"; 
                    echo "</div>";
                }
            }
            ?>
        </div>

    

</div>

<footer class="footer">
    <div class="container-fluid">
        <div class="row" style="margin: 15px 0 0;">
            <div class="col-lg-4">
                <p class="text-muted">Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.novaframework.com/" target="_blank"><b>Nova Framework <?= VERSION; ?></b></a>

                <?=GlobalBlocks::get('Footer', 'input');?>
                </p>
            </div>
            <div class="col-lg-8">
                <p class="text-muted pull-right">
                    <?php if(Config::get('app.debug')) { ?>
                    <small><!-- DO NOT DELETE! - Profiler --></small>
                    <?php } ?>
                </p>
            </div>
        </div>
    </div>
</footer>

<?php
Assets::js([
    'https://code.jquery.com/jquery-1.12.4.min.js',
    template_url('dist/js/bootstrap.min.js', 'Default'),
]);

echo $js; // Place to pass data / plugable hook zone

echo isset($footer) ? $footer : ''; // Place to pass data / plugable hook zone
?>

<!-- DO NOT DELETE! - Forensics Profiler -->

</body>
</html>
