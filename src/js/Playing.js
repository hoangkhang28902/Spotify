const audio = document.getElementById('audio');
const songIndex = document.getElementsByClassName('num');
// const itemSong = document.getElementsByClassName('itemSong');
const playingSong = document.getElementById('playingSong');
const playButton = document.querySelectorAll('.playing-icon');
const currentTime = document.getElementById('startPlaying');
const totalDuration = document.getElementById('endPlaying');
const progressEl = document.querySelector('input[type="range"]');
const playLagreButton = document.getElementById('playingLargeIcon');
const volumeSlider = document.getElementById('sliderVolume');
const lyricButton = document.getElementById('lyricButton');
const containerSong = document.getElementById('containerSong');

let playItemButton;
let index = songIndex.textContent;

playingSong.addEventListener('click', function (event) {
  PlayButton(playItemButton);
})

function PlayButton(playItemButton) {
  if (audio.paused) {
    audio.play();

    playingSong.src = "http://localhost:8080/Spotify/src/assets/icons/pause_black.svg";
    playLagreButton.src = "http://localhost:8080/Spotify/src/assets/icons/pause_small.svg";
    playItemButton.src = "https://open.spotifycdn.com/cdn/images/equaliser-animated-green.f5eb96f2.gif";

    playItemButton.onmouseover = function() {
      playItemButton.src = "http://localhost:8080/Spotify/src/assets/icons/pause_small.svg";
    }
    // playItemButton.onmousedown = function() {
    //   playItemButton.src = "https://open.spotifycdn.com/cdn/images/equaliser-animated-green.f5eb96f2.gif";
    // }
  } else {
    audio.pause();

    playingSong.src = "http://localhost:8080/Spotify/src/assets/icons/play_black.svg";
    playLagreButton.src = "http://localhost:8080/Spotify/src/assets/icons/play_small.svg";
    // itemSong.classList.remove("selected");
    playItemButton.src = "http://localhost:8080/Spotify/src/assets/icons/play_small.svg";

    playItemButton.onmouseover = function() {
      playItemButton.src = "http://localhost:8080/Spotify/src/assets/icons/play_small.svg";
    }
  } 
}

function Lyrics() {
  containerSong.style.overflow = "hidden";
}


function PlayingMusic(event, audioSongMusic) {

  playItemButton = event.target;

  let mouseDownOnSlider = false;

  if (audio.src != audioSongMusic)   audio.src = audioSongMusic;
  
  setInterval(setUpdate, 1000);
  
  // itemSong.classList.add("selected");

  PlayButton(playItemButton);

  audio.addEventListener("loadeddata", () => {
      progressEl.value = 0;
  });

  audio.addEventListener("timeupdate", () => {
      if (!mouseDownOnSlider) {
      progressEl.value = audio.currentTime / audio.duration * 100;
      }
  });

    audio.addEventListener("ended", () => {
      playItemButton.src = "http://localhost:8080/Spotify/src/assets/icons/play_small.svg";
    });

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
}

function setVolume() {
  audio.volume = volumeSlider.value / 100;
}

function nextSong() {
  let next;

  for (let i = 0; i < playButton.length; i++) {
    if (playButton[i] == playItemButton && i < playButton.length - 1) {
      next = playButton[i + 1];
      break;
    }
  }

  next.click();

  console.log(next);

}

function previousSong() {
  let previous;

  for (let i = 0; i < playButton.length; i++) {
    if (playButton[i] == playItemButton && i < playButton.length - 1) {
      previous = playButton[i - 1];
      break;
    }
  }

  console.log(previous);

  previous.click();
}

function loopSong() {
  if (audio.loop) {
    audio.loop = false;
  } else {
    audio.loop = true;
  }
}

function setUpdate() {
  let seekPosition = 0;
  if (!isNaN(audio.duration)) {
    seekPosition = audio.currentTime * (100 / audio.duration);
    progressEl.value = seekPosition;

    let currentMinutes = Math.floor(audio.currentTime / 60);
    let currentSeconds = Math.floor(audio.currentTime - currentMinutes * 60);
    let durationMinutes = Math.floor(audio.duration / 60);
    let durationSeconds = Math.floor(audio.duration - durationMinutes * 60);

    if (currentSeconds < 10) {currentSeconds = "0" + currentSeconds; }
    if (durationSeconds < 10) { durationSeconds = "0" + durationSeconds; }
    if (currentMinutes < 10) {currentMinutes = "0" + currentMinutes; }
    if (durationMinutes < 10) { durationMinutes = "0" + durationMinutes; }

    currentTime.textContent = currentMinutes + ":" + currentSeconds;
    totalDuration.textContent = durationMinutes + ":" + durationSeconds;
  }
}

function nextQueue() {
  songIndex++;

}