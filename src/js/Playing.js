const url = "https://upload.wikimedia.org/wikipedia/en/a/a9/Webern_-_Sehr_langsam.ogg";
const audio = new Audio(url);
const playBtn = document.getElementsByClassName("buttonRun")[0];
const progressEl = document.querySelector('input[type="range"]');
let mouseDownOnSlider = false;

audio.addEventListener("loadeddata", () => {
    progressEl.value = 0;
});

audio.addEventListener("timeupdate", () => {
    if (!mouseDownOnSlider) {
      progressEl.value = audio.currentTime / audio.duration * 100;
    }
});

//   audio.addEventListener("ended", () => {
//     playBtn.textContent = "▶️";
//   });

playBtn.addEventListener("click", () => {
  audio.paused ? audio.play() : audio.pause();
  // playBtn.textContent = audio.paused ? "▶️" : "⏸️";
})

progressEl.addEventListener("change", () => {
  const pct = progressEl.value / 100;
  audio.currentTime = (audio.duration || 0) * pct;
});
progressEl.addEventListener("mousedown", () => {
  mouseDownOnSlider = true;
});
progressEl.addEventListener("mouseup", () => {
  mouseDownOnSlider = false;
});