<?php
	$term = get_term_by("slug",get_query_var("term"),get_query_var("taxonomy"));
?>
	<h1>Tous les travaux dans: <?php echo($term->name); ?>  </h1>