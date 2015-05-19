<div class="container container-center">
	<table>
		<thead>
			<tr>
				<th>Tests</th>
			</tr>
		</thead>
		<tbody>
			<?php
				function name_compare($a, $b)
				{
					return strcmp($a->name, $b->name);
				}
				function depth_compare($a, $b)
				{
					return strcmp($b->depth, $a->depth);
				}
				$check_array = array();
				$output_array = array();
				$directory = __DIR__;
				$local_url = 'http://' . LOCALURL;
				$files = get_files_list($directory);
				$depth_array = array();
				foreach($files as $i => $file) {
					$file->depth = count(explode('/', $file->name));
					$depth_array[] = $file->depth;
					$files[$i] = $file;
				}
				usort($files, 'depth_compare');
				$depth_min = min($depth_array);
				$directories = array();
				foreach($files as $file) {
					if($file->depth != $depth_min || $file->name == __FILE__) {
						continue;
					}
					if($file->type == 'dir') {
						$directories[] = $file->name;
						continue;
					}
					$output_array[] = $file;
				}
				foreach($directories as $directory) {
					$files = get_files_list($directory);
					usort($files, 'name_compare');
					$object = (object)array(
						'name' => $directory,
						'type' => 'dir'
					);
					$output_array[] = $object;

					$object->files = $files;
					$check_array[] = $object;
					foreach($files as $file) {
						$output_array[] = $file;
					}
				}
				foreach($output_array as $file) {
					$output = '<tr>';
						if($file->type == 'file') {
							$dir = basename(dirname($file->name));
							$dir = $dir == 'tests' ? '' : $dir . '/';
							$filename = str_replace('.php', '', basename($file->name));
							$url = get_url('tests/' . $dir . $filename);
							$output .= '<td><a href="' . $url . '">' . get_page_name(basename($file->name)) . '</a></td>';
						} else {
							$output .= '<td><strong>' . get_page_name(basename($file->name)) . '</strong></td>';
						}

					$output .= '</tr>';
					echo $output;
				}

				foreach($check_array as $directory) {
					$files = $directory->files;
					foreach($files as $file) {
						$src = str_replace('/tests/', '/', $file->name);
						$exists = file_exists($src);
						if(!$exists) {
							$src = str_replace('.php', '', $src) . '/index.php';
							$exists = file_exists($src);
						}
						if(!$exists && in_dev()) {
							debug(array('No documentation page created for test', $src));
						}
					}
				}

				$core = dirname(__DIR__) . '/core';
				$files = get_files_list($core);
				foreach($files as $file) {
					if($file->type == 'dir') {
						continue;
					}
					$src = str_replace('pages/core', 'pages/tests/core', $file->name);
					if(stripos($src, 'tests/core/index.php') !== false) {
						continue;
					}
					$exists = file_exists($src);
					if(!$exists && in_dev()) {
						debug(array('No test page created for documentation', $src));
					}
				}

				$core = dirname(__DIR__) . '/components';
				$files = get_files_list($core);
				foreach($files as $file) {
					if($file->type == 'dir' || stripos($file->name, 'components/index.php') !== false) {
						continue;
					}
					$src = str_replace('pages/components', 'pages/tests/components', $file->name);
					$array = array_slice(explode('/', $src), 0, 10);
					$src = str_replace('.php.php', '.php', implode('/', $array) . '.php');
					// debug($src);
					if(stripos($src, 'tests/components/index.php') !== false) {
						continue;
					}
					$exists = file_exists($src);
					if(!$exists && in_dev()) {
						debug(array('No test page created for documentation', $src));
					}
				}
			?>
		</tbody>
	</table>
</div>
