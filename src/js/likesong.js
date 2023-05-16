const likeBtns = document.querySelectorAll(".btn_like");
const likedBtns = document.querySelectorAll(".btn_liked");

likeBtns.forEach((likeBtn, index) => {
    likeBtn.addEventListener("click", function () {
        // NOTE UnLike
        likeBtn.style.display = "none";
        likedBtns[index].style.display = "inline-block";

        // Checked Like
        if (typeof likeBtn != "undefined" && likeBtn != null) {
            // TODO
            // const elementClicked = document.getElementById('btn_like_' + likeBtn.dataset.id);
            console.log('%cヾ(・ω・)メ(・ω・)ノ Like ヾ(・ω・)メ(・ω・)ノ', "color: #f84464; font-size:20px");
            $.ajax({
                url: "http://localhost:8080/Spotify/Playlist/like",
                type: "POST",
                data: {
                    songId: likeBtn.dataset.id,
                },
            });
        }
    });
});

likedBtns.forEach((likedBtn, index) => {
    likedBtn.addEventListener("click", function () {
        likedBtn.style.display = "none";
        likeBtns[index].style.display = "inline-block";

        // Checked UnLike
        if (typeof likedBtn != "undefined" && likedBtn != null) {
            // TODO
            console.log('%cヾ(・ω・)メ(・ω・)ノ Unlike ヾ(・ω・)メ(・ω・)ノ', "color: #f84464; font-size:20px");
            $.ajax({
                url: "http://localhost:8080/Spotify/Playlist/unLike",
                type: "POST",
                data: {
                    songId: likedBtn.dataset.id,
                },
            });
        }
    });
});