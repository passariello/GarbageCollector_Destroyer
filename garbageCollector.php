
function GarbageCollector(){
	$array = array_keys(get_defined_vars());
		foreach ($array as $item) {
			unset($item);
			$item = null;
		}
		
	$array = array_keys(get_included_files());
		foreach ($array as $item) {
			unset($item);
			$item = null;
		}
		

	foreach($GLOBALS as $key => $val) {
    unset($GLOBALS[$key]);
	}
  gc_collect_cycles();
}
