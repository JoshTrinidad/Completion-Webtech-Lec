<div class="navig"> 
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php
    if(isset($checkUser)){
        echo '
          <span class="navbar-text">
            logged in as '.$checkUser.'
          </span>
          <div class="divider"></div>
          <a href="../logout.php">
            <button type="button" class="btn btn-sm">
                <span class="glyphicon glyphicon-log-out">Log out</span> 
            </button>
          </a>
        ';
    }?>

      </nav>
</div>