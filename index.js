var block1 = document.querySelector(".block1");

block1.addEventListener("click", function(){
	alert("JS connected!");
});
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 	block1.classList.add("block1");
}