function ajax () {
	var xhtmlHttpReg = null;
	if (window.AcctiveXObject) {
		xmlHttpReg = new AcctiveXObject("Microsoft.XMLHTTP");
	} else if (window.XMLHTTPRequest) {
		xmlHttpReg = new XMLHTTPRequest();
	}
	if (xmlHttpReg!=null) {
		xmlHttpReg.open("get","http://localhost/webPageGame/home/handle.php?action=msgSubmit");
		xmlHttpReg.send(null);
		xmlHttpReg.onreadystatechange = doResult;
	};
	function doResult () {
		if (xmlHttpReg.readystatechange == 4) {
			if (xmlHttpReg.status == 200) {
				document.getElementById('resText').innerHtml = xmlHttpReg.responseText;
			};
		};
	}
}