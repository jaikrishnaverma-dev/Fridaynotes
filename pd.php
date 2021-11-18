<!DOCTYPE html>


<?php
    if(isset($_GET["data"]))
    {
        $data = $_GET["data"];
        
    }
    ?>
<html>
<head>
 <title>Adobe Document Services PDF Embed API Sample</title>
 <meta charset="utf-8"/>
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
 <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body style="margin: 0px">
<div id="adobe-dc-view"></div>
<script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
<script type="text/javascript">
	document.addEventListener("adobe_dc_view_sdk.ready", function(){ 
		var adobeDCView = new AdobeDC.View({clientId: "3c0aadb5de044993ae9d2357d4b9d249", divId: "adobe-dc-view"});
		adobeDCView.previewFile({
			content:{location: {url: "http://fridaynotes.rf.gd/upload/<?php echo $data ?>"}},
			metaData:{fileName: "<?php echo $data ?>"}
		}, {showDownloadPDF: false, showPrintPDF: false});
	});
</script>
</body>
</html>
