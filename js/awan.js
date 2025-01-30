window.onload = function () {
  let countdown = 5;
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
