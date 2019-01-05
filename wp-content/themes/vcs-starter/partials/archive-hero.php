		<?php
			//gauname uzklausos objekta, duomeis kuriuos WP paprase gauti is DB
			$category = get_queried_object();
			//dump($category);
			$image = get_field('image', $category);
			//dump($image);
		?>

	<aside id="inner-archivehero">
		<div>
			<div class="slogan_container" style="position:relative; background-size: cover;  background-image: url(<?php echo $image['sizes']['large']; ?>">
				<div class="widthcontainer">
					<div class="flex-container2">
						<div>
							<h1><?php echo $category->name; ?></h1>
							<h2><?php echo $category->description; ?></h2>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</aside>




