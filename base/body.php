<div id="header" style="min-height:40px;">
	
	<div id="title" style="float:left">
		<h1 style="font-weight: bold;">Juego <?php echo $group->title; ?></h1>
	</div>
	<div style="float:right; width:250px; border: 1px solid blue; height: 100px;">
		Mapa o notificaciones
	</div>
	<div id="menu">
		<ul>
			<li>menu</li>
			<li>menu</li>
			<li>menu</li>
			<li>menu</li>
		</ul>
	</div>
</div>

<div class="separador" style="height:1px; clear: both; width:100%;"></div>


<div id="leftCol">
	<ul class="uiSideNav">
		<?php $lftMenuItems = array('Noticias', 'Noticias','Menu', 'Menu');
		foreach ($lftMenuItems as $item){
		?>
		<li class="sideNavItem selectedItem">
			<a class="item" href="/?s=<?php echo $item; ?>">
				<span class="imgIco bgPos4"></span>
				<span class="linkWrap"><?php echo $item; ?></span>
			</a>
			<span class="loadingIndicator"></span>
		</li>
		<?php } ?>
	</ul>
</div>

<div id="content">
	content
</div>


<div id="rightCol">
	<ul class="uiSideNav">
		<?php $lftMenuItems = array('Eventos', 'Ataques','Publicidad', 'Publicidad');
		foreach ($lftMenuItems as $item){
		?>
		<li class="sideNavItem selectedItem">
			<a class="item" href="/?s=<?php echo $item; ?>">
				<span class="imgIco bgPos4"></span>
				<span class="linkWrap"><?php echo $item; ?></span>
			</a>
			<span class="loadingIndicator"></span>
		</li>
		<?php } ?>
	</ul>
</div>
