<?php
	#Recieve the script name (absolute pathname of the currently executing script) and attribute a page and a title
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/faq.php":
			$CURRENT_PAGE = "faq"; 
			$PAGE_TITLE = "FAQ";
			break;
		case "/about.php":
			$CURRENT_PAGE = "about"; 
			$PAGE_TITLE = "Sobre nós";
			break;
		case "/client_home.php":
			$CURRENT_PAGE = "client"; 
			$PAGE_TITLE = "Área de clientes";
			break;
		case "/client_review.php":
			$CURRENT_PAGE = "review"; 
			$PAGE_TITLE = "Área de reviews";
			break;		
		default:
			$CURRENT_PAGE = "index";
			$PAGE_TITLE = "Bem vindos à Algarve From Sky";
	}
?>