<?php 
    function Card($NameOfArtist, $Artist = array(), $Thumbail, $Music) { ?>
        <div class="card" onclick="PlayingMusic('<?php echo $Music ?>')">
            <div class="cardContainer">
                <div class="cardThumbail">
                    <div class="cardImage">
                        <img src="<?php echo $Thumbail ?>" alt="">
                        <div class="cardPlay">
                            <button>
                                <span class="iconButtonCard">
                                    <span class="innerButtonCard">
                                        <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon" class="Svg-sc-ytk21e-0 uPxdw">
                                            <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z">
                                            </path>
                                        </svg>
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="cardSongs">
                    <a href=""><?php echo $NameOfArtist ?></a>
                    <div>
                        <?php for ($x = 0; $x < count($Artist); $x++) { ?>
                            <?php if ($x == count($Artist) - 2): ?>
                                <a href=""><?= $Artist[$x] ?> and </a>
                            <?php elseif ($x == count($Artist) - 1): ?>
                                <a href=""><?= $Artist[$x] ?></a>
                            <?php else: ?>
                                <a href=""><?= $Artist[$x] ?>, </a>
                            <?php endif ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <script>
        function PlayingMusic(audioMusic) {
            console.log('click audio');
            const audio = document.getElementById("audio");
            const playBtn = document.getElementsByClassName("buttonRun")[0];
            const progressEl = document.querySelector('input[type="range"]');
            let mouseDownOnSlider = false;

            audio.pause();
            audio.src = audioMusic;
            audio.load();
            audio.play();

            if (audio.paused) {
                audio.play();
                playBtn.querySelector("i.fas").classList.remove("fa-pause");
                playBtn.querySelector("i.fas").classList.add("fa-play");
            } else {
                playBtn.querySelector("i.fas").classList.add("fa-pause");
                playBtn.querySelector("i.fas").classList.remove("fa-play");
            }


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
                if (audio.paused) {
                    audio.play();
                    playBtn.querySelector("i.fas").classList.remove("fa-play");
                    playBtn.querySelector("i.fas").classList.add("fa-pause");
                } else {
                    audio.pause();
                    playBtn.querySelector("i.fas").classList.add("fa-play");
                    playBtn.querySelector("i.fas").classList.remove("fa-pause");
                }
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
        }
    </script>