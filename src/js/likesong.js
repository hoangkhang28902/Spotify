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


// Fix KhangProPlayer
// Chức năng seach bài hát trong playlist


function searchSong() {
    let term = document.getElementById('searchTermValue').value;
  
    console.log('term ', term);
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost:8080/Spotify/SeachListSong/show');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4) { 
        if (xhr.status === 200) {
          let songList = document.getElementById('song-list');
          songList.innerHTML = xhr.responseText;
        } else {
          console.log('Error: ' + xhr.statusText);
        }
      }
    };
  
    
    // Gửi chuỗi tìm kiếm lên server
    xhr.send('searchTerm=' + term);
    console.log('Search term:', term);
  
    // hàm lấy id bài hát và id playlist hiện tại
  
    let songList = document.getElementById('song-list');
    songList.addEventListener('click', function(event) {
      let clickedElement = event.target;
      if (clickedElement.classList.contains('btn_addSongToPlaylist')) {
  
        const songId = clickedElement.dataset.songId;
        const currentUrl = window.location.href;
        const pattern = /\/(\d+)$/;
        const matches = currentUrl.match(pattern);
        const lastValue = matches ? matches[1] : null;
        xhr.open('POST', 'http://localhost:8080/Spotify/SeachListSong/show');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  
        //
  
     // Gửi id bài hát và id playlist lên server
  
     // Bug *** searchTerm bị lập lại ****
  
        xhr.send('searchTerm=' + term + '&songId=' + songId + '&lastValue=' + lastValue);
        console.log('Song ID:', songId);
        console.log('Last Value:', lastValue);
        location.reload();
      }
    });
  }
  
  
  
  
  let searchForm = document.getElementById('searchForm');

  searchForm.addEventListener('submit', function(event) {
    event.preventDefault(); 
    searchSong(); 
  });
  
  
  let searchBtn = document.getElementById('btn_seach');
  searchBtn.addEventListener('click', searchSong);
  
  
  
  
  /////////////////////////////////////////////////////////////////////////////////////////////
  
  
  
  
  
  
  
  
  
  // Hàm để lấy ID của tất cả bài hát 
  
  function getSongIds(selector) {
    const songItems = document.querySelectorAll(selector);
    const songIds = [];
    songItems.forEach(item => {
      const songId = item.getAttribute('data-song-id');
      songIds.push(songId);
    });
    return songIds;
  }
  const songIds = getSongIds('.song-item');
  console.log(songIds); // log ra mảng các ID của các bài hát
  
  // Lấy ID của 1 bài hát 
  
  // function showSongId() {
  //   const button = document.querySelector('.btn_addSongToPlaylist');
  //   const songId = button.dataset.songId;
  //   console.log(songId);
  // }
  
  // showSongId();
  
  // Hàm tạo một userplaylist mới
  
  // function createPlaylist() {
  //   fetch('http://localhost:8080/Spotify/Home/createPlaylist', {
  //     method: 'POST',
  //     headers: {
  //       'Content-Type': 'application/json'
  //     },
  //     body: JSON.stringify({ action: 'createPlaylist' })
  //   })
  //   .then(response => {
  //     if (response.ok) {
  //       console.log('Playlist created successfully!');
  //       // Thực hiện các hành động khác sau khi tạo playlist thành công
  //     } else {
  //       console.error('Failed to create playlist!');
  //     }
  //   })
  //   .catch(error => {
  //     console.error('An error occurred:', error);
  //   });
  // }
  
  function createPlaylist() {
    fetch('http://localhost:8080/Spotify/Home/createPlaylist', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ action: 'createPlaylist' })
    })
    .then(response => {
      if (response.ok) {
        var notification = document.getElementById('notification');
        var notificationMessage = document.getElementById('notification-message');
        var notificationBtn = document.getElementById('notification-btn');
        
        notificationMessage.textContent = 'Playlist created successfully!';
        notification.classList.add('active');
        
        console.log('Playlist created successfully!');
        // Thực hiện các hành động khác sau khi tạo playlist thành công
      } else {
        console.error('Failed to create playlist!');
      }
    })
    .catch(error => {
      console.error('An error occurred:', error);
    });
  }
  
  
  let notificationBtn = document.getElementById('notification-btn');
  notificationBtn.addEventListener('click', function() {
    var notification = document.getElementById('notification');
    notification.classList.remove('active');
    location.reload();
  });
  
  let createPlaylistBtn = document.getElementById('btn_createPlaylist');
  createPlaylistBtn.addEventListener('click', createPlaylist);
  