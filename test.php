<script type="text/javascript">
	var string = 	'hsdjsdjdhhhhhhhhhsksjkdssdalkasklsdk'; 
	var continueCheck = 0;
	function bomber(string, continueCheck, j) {
		for(var i = 0; i < string.length; i++) {
			if(string[i] == string[i+1]) {
				string = string.slice(0, i) + string.slice(i+1);
				continueCheck = 1;
				return bomber(string, continueCheck, i);
			} else {
				if(continueCheck == 1) {
					string = string.slice(0, j) + string.slice(j+1);
					return bomber(string, 0, i);
				}
			}
		}
		return string;
	}
</script>

hsdjsdjdsksjkalkasklsdk
hsdjsdjdhsksjkalkasklsdk
hsdjhsksjkdalkasklsdk
