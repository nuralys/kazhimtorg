<li>
	<a href="/category/<?php echo $category['Category']['id']; ?>"><?php echo $category['Category']['title']; ?></a>
	<?php if($category['children']) : ?>
	<ul class="sub_side_bar_list">
		<?php echo $this->_catMenuHtml($category['children']); ?>
	</ul>
	<?php endif; ?>
</li>