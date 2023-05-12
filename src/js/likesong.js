const likeBtns = document.querySelectorAll('.btn_like');
const likedBtns = document.querySelectorAll('.btn_liked');

likeBtns.forEach((likeBtn, index) => {
  likeBtn.addEventListener('click', function() {
    likeBtn.style.display = 'none';
    likedBtns[index].style.display = 'inline-block';
  });
});

likedBtns.forEach((likedBtn, index) => {
  likedBtn.addEventListener('click', function() {
    likedBtn.style.display = 'none';
    likeBtns[index].style.display = 'inline-block';
  });
});

function handleReactLike(reactLiked) {
  console.log('handle');
  likeBtns.forEach((likeBtn, index) => {
    likeBtn.addEventListener('click', function() {
        console.log('Likebtn ', likeBtn.dataset.id);
        // Checked like
        if (typeof(likeBtn) != 'undefined' && likeBtn != null) {
            // TODO
        } else {
          reactLiked()
        }
    });
});
}