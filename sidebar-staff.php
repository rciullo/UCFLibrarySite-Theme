

<aside>	
	<div id="secondary" class="secondary">
		<div id="widget-area" class="widget-area" role="complementary">
			<h4><a href="<?php echo get_post_type_archive_link( 'staff' ); ?>">All Staff</a></h4>
			<div class="sidebar-collapse">
				<h4 class="widget-title"><a class="menu-toggle" data-toggle="collapse" href="#Department" aria-expanded="true" aria-controls="Department"><span class="glyphicon glyphicon-minus-sign" style="float:right"></span>Departments</a></h4>
				<div class="collapse in" id="Department">
					<?php taxonomy_term_list('department'); ?>
				</div>
			</div>
			<div class="sidebar-collapse">
				<h4 class="widget-title"><a class="menu-toggle" data-toggle="collapse" href="#Unit" aria-expanded="true" aria-controls="Unit"><span class="glyphicon glyphicon-minus-sign" style="float:right"></span>Units &amp; Groups</a></h4>
				<div class="collapse in" id="Unit">
					<?php taxonomy_term_list('unit'); ?>
				</div>
			</div>
		</div><!-- .widget-area -->
	</div>
</aside>
