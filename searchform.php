<!-- search -->
<nav style="margin-top: 8px;" class="custom-color">
	<div class="nav-wrapper">
	  <form id="searchBar" class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	    <div class="input-field" style="width:100%;">
	      <input class="search-input" type="search" name="s" id="blogSearch" required>
	      <label for="search"><i class="material-icons" onclick="document.getElementById('searchBar').submit();" style="cursor: pointer;">search</i></label>
	      <i class="material-icons">close</i>
	    </div>
	  </form>
	</div>
</nav>
<!-- /search -->
