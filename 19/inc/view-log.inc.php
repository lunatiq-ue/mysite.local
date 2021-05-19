<?
if (is_file('log/'.PATH_LOG)) {
    $log = file('log/'.PATH_LOG);
    foreach($log as $li){
        list($dt, $ref, $page) = explode("|", $li);
			$dt = date('d:m:Y H:i:s', $dt);
			echo "
			<li>
				$dt - $ref -> $page
			</li>
            ";
    }
}