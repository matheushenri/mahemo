<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if( is_front_page() ) { bloginfo('name'); } else {} ; ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
    <div class="inner">
        <div class="breadcrumb">
            <?php echo esc_attr__( bloginfo( 'name' ) ); ?>
        </div>