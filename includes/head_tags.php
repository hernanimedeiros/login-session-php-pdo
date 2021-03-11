<title><?php 
	print $PAGE_TITLE;
?></title>

<?php switch ($CURRENT_PAGE){
		#Setup meta tags for a specific view
		case "index":?>
			<meta name="description" content="index description">
			<meta name="keywords" content="index keywords"> 
			<?php break;
		case "faq":?>
			<meta name="description" content="faq description">
			<meta name="keywords" content="faq keywords"> 
			<?php break;
		case "about":?>
			<meta name="description" content="aboutdescription">
			<meta name="keywords" content="about keywords"> 
			<?php break;
		case "client":?>
			<meta name="description" content="home description">
			<meta name="keywords" content="home keywords"> 
			<?php break;
		default:?>
			<meta name="description" content="index description">
			<meta name="keywords" content="index keywords"> 
<?php }?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="webartisans.pt">