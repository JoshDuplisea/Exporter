<html>
<head>
  <title>File Splitter :: Results</title>
 </head>
 <body>
 <div style="margin:0 auto;width:980px;">
 <header>
	<h1 style="text-align:center;">Export DATA</h1>
	<span>Keep this tab open while you migrate the data:</span>
	<ul>
	<li>You can navigate to the tools/exporter/temp directory to mass download these copies</li>
	<li>Go to the web directory for the new website, and place these files under the section you are copying over</li>
	</ul>
	</header>
	<section>
 <?php
$ROOT = dirname(__FILE__);
$target_path = "/uploads/";
$target_path = $ROOT . $target_path . basename( $_FILES['uploadedfile']['name']); 
$myfile = fopen($target_path, "w+") or die("Unable to open file!");
$file = file_get_contents($_FILES['uploadedfile']["tmp_name"], true);
file_put_contents($target_path, $file);
$newfiles = explode("-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=", $file);
$newfiles = array_map('trim', $newfiles);
fclose($myfile);

foreach ($newfiles as $value) {
    $value = str_replace("reportid","---\nreportid",$value);
	$value = str_replace("%0d%0a","",$value);
	$value = str_replace("\\n\\n","<br/>",$value);
    $newvalue = explode("\n", $value);
	foreach ($newvalue as $slug) {
	    $slug = trim($slug);
		if (strpos($slug, 'slug:') !== false){
			$slug = explode("'", $slug);
			$slug = $slug[1];
			$slug = trim($slug);
			echo "<a target='_blank' href='http://tools.adnetdev.com/exporter/temp/{$slug}'>" . $slug . "</a><br/>";
			$handle = fopen($ROOT . "/temp/" . $slug, 'w+') or die("Unable to open file!");
			file_put_contents("temp/" . $slug,$value);
			fclose($handle);
		}
	}
}

// Get real path for our folder
//$rootPath = realpath('temp');

// Initialize archive object
//$zip = new ZipArchive;
//$zip->open('file.zip', ZipArchive::CREATE);

// Initialize empty "delete list"
//$filesToDelete = array();

// Create recursive directory iterator
//$files = new RecursiveIteratorIterator(
 //   new RecursiveDirectoryIterator($rootPath),
 //   RecursiveIteratorIterator::LEAVES_ONLY
//);

//foreach ($files as $name => $file) {
    // Get real path for current file
    //$filePath = $file->getRealPath();

    // Add current file to archive
  //  $zip->addFile($filePath);

    // Add current file to "delete list" (if need)
    //if ($file->getFilename() != 'important.txt') 
  //  {
  //      $filesToDelete[] = $filePath;
   // }
//}

// Zip archive will be created only after closing object
//$zip->close();

// Delete all files from "delete list"
//foreach ($filesToDelete as $file)
//{
    //unlink($file);
//}
?>
</div>
</section>
<footer>
<small>Please note: This tech is in alpha production. If you have any issues/questions, please email the creator at: <a href="mailto:jduplisea@adnetinc.com">jduplisea@adnetinc.com</a></small>
</footer>
<body>
</html>