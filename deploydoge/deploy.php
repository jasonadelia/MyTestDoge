<pre>
<?php
	/**
	 * JDelia - Heavily Influenced by
	 * GIT DEPLOYMENT SCRIPT
	 *
	 * Used for automatically deploying websites via github or bitbucket, more deets here:
	 *
	 *		https://gist.github.com/1809044
	 */
	if (file_exists('configs'.$_GET['proj'].'-config.php')){
		require_once 'configs'.$_GET['proj'].'-config.php';

		if (!isset($_GET['sat']) || $_GET['sat'] !== SECRET_ACCESS_TOKEN) {
			die("<span style=\"color:#c33\">No amaze. Much FAIL. Code iz bad. So secret.</span>");
		}
 
		// The commands
		$commands = array(
			//'echo $PWD',
			//'whoami',
			sprintf('cd %s && sudo git reset --hard 2>&1', TARGET_DIR),
			sprintf('cd %s && sudo git clean -d -f 2>&1', TARGET_DIR),
			sprintf('cd %s && sudo git pull 2>&1', TARGET_DIR),

		);
	 
		// Run the commands for output
		$output = '';
		foreach($commands AS $command){
			// Run it
			$tmp = shell_exec($command);
			// Output
			$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
			$output .= htmlentities(trim($tmp)) . "\n";
		}
	 
		// Make it pretty for manual user access (and why not?)
		echo $output;
	}
	else{
		echo "<span style=\"color:#c33\">No amaze. Much FAIL. Need config file.</span>";
	}
?>
</pre>