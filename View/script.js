function updateTime() {
	let now = new Date();
	let hours = now.getHours();
	let minutes = now.getMinutes();
	let seconds = now.getSeconds();
	minutes = checkTime(minutes);
	seconds = checkTime(seconds);
	document.getElementById('demo').innerHTML = hours + ":" + minutes + ":" + seconds
	let t = setTimeout(updateTime, 500);
}

function checkTime(i) {
	if (i < 10) {i = "0" + i};
	return i;
}
window.onload = updateTime;