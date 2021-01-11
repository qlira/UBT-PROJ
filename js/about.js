var video = document.getElementById("centered-video");
var videoDiv = document.getElementById("location");

function openVideo(){
  video.removeAttribute("style");
}
function closeVideo(){
  console.log("hini");
  video.setAttribute("style", "display:none")
  // video.style.display = "none";


}

