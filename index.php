<html>
 <head>
  <title>File Splitter</title>
    </head>

    <body>
	<div style="margin:0 auto;width:980px;">
	<header>
	<h1 style="text-align:center;">Export Tool for CMS</h1>
	<span>To use this tool, you'll need to:</span>
	<ul>
	<li>To get old data, go to [[site]]/s/LiveUpdate/default.asp?op=DataExport</li>
	<li>Export data (#3) as YAML text</li>
	<li>Save as a .txt document.</li>
	<li>Use dropdown below and select YAML formatted .txt document</li>
	<li>You can get the new .html files for the new CMS under tools/exporter/temp</li>
	<li>Please delete everything in the temp folder before usuing again</li>
	</ul>
	</header>
	<section>
<form enctype="multipart/form-data" action="parse.php" method="POST">
<b>Choose a file to upload:</b> <br/><input name="uploadedfile" type="file" /><br /><br />
<input type="submit" value="Upload File" />
</form>
</section>
<footer>
<small>Please note: This tech is in alpha production. If you have any issues/questions, please email the creator at: <a href="mailto:jduplisea@adnetinc.com">jduplisea@adnetinc.com</a></small>
</footer>
</div>
    </body>
</html>