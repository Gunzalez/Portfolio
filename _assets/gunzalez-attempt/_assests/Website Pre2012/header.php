				
		<div id="hgroup">
			<?php if ( $pageName == "home" ){ ?>
			<h1>Virgo Foundation</h1>
			<?php } else { ?>
			<h1><a href="index.php">Virgo Foundation</a></h1>
			<?php } ?>
			<div class="nav">
				<ul>
					<li><a href="index.php"<?php isActive($pageName, 'home', ' class="active"'); ?>>Home</a></li>
					<li><a href="about.php"<?php isActive($pageName, 'about', ' class="active"'); ?>>About us</a></li>
					<li><a href="didyouknow.php"<?php isActive($pageName, 'didyouknow', ' class="active"'); ?>>Did You Know</a></li>
					<li><a href="projects.php"<?php isActive($pageName, 'projects', ' class="active"'); ?>>Projects</a></li>
					<li><a href="gallery.php"<?php isActive($pageName, 'gallery', ' class="active"'); ?>>Gallery</a></li>
					<li class="link-green"><a href="donations.php"<?php isActive($pageName, 'donations', ' class="active"'); ?>>Donations</a></li>
					<li><a href="http://www.virgofoundation.org/news/"<?php isActive($pageName, 'news', ' class="active"'); ?>>News</a></li>
					<li><a href="contact.php"<?php isActive($pageName, 'contact', ' class="active"'); ?>>Contact</a></li>
				</ul>
			</div>
		</div>