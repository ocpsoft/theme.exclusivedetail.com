<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta name="designer" content="Lincoln Baxter, III | http://ocpsoft.org" />

<!-- Service Verifications -->
<!-- End Service Verifications -->

<meta name="viewport" content="width=device-width" />

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/ico/favicon.ico" />
<link rel="icon" type="image/gif" href="ico/favicon.gif" />
<?php wp_get_archives('type=monthly&format=link'); ?>

<!-- HTML5 shim (for IE6-8 support of HTML5 elements) -->
<!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/ie9.css" /><![endif]-->
<!--[if lte IE 8]><script src="<?php bloginfo('stylesheet_directory');?>/js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
<!--[if lte IE 7]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/ie7.css" /><![endif]-->

<!-- IE9 CSS Gradient support -->
<!--[if gte IE 9]>
<style type="text/css">
	.gradient {
		filter: none;
	}
</style>
<![endif]-->

<?php wp_head(); ?>

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css">

</head>
