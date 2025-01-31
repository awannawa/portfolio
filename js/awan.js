window.onload = function () {
  let countdown = 7;
  const countdownElement = document.getElementById("countdown");

  const interval = setInterval(function () {
    countdown--;
    countdownElement.textContent = countdown;
    if (countdown === 0) {
      clearInterval(interval);
      window.location.href = "https://awannawa.github.io/portofolio";
    }
  }, 1000);
};

//load image from gdrive
function updateImages() {
  const images = document.querySelectorAll(".gdrive-image");
  images.forEach(function (img) {
    const imageId = img.getAttribute("idLink");
    img.src = `https://drive.google.com/thumbnail?id=${imageId}&sz=s1080`;
  });
}
window.addEventListener("load", updateImages);
