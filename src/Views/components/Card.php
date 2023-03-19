<?php 
    function Card($NameOfArtist, $Artist = array(), $Thumbail) { ?>
        <div class="card">
            <div class="cardContainer">
                <div class="cardThumbail">
                    <div class="cardImage">
                        <img src="<?php echo $Thumbail ?>" alt="">
                    </div>
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