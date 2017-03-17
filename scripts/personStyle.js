function  approvalOn(btn, type) {
	if (type == "1") btn.src="./../img/approveTRUE.png";
	if (type == "2") btn.src="./../img/approveFALSE.png";
}

function approvalOff(btn, type) {
	if (type == "1") btn.src="./../img/approveTRUE_not_selected.png";
	if (type == "2") btn.src="./../img/approveFALSE_not_selected.png";
}