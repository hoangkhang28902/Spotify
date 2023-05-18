const likeBtns = document.querySelectorAll(".btn_like");
const likedBtns = document.querySelectorAll(".btn_liked");
const userIdItem = document.getElementById("itemSong");

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

// window.onload = function() {

// 	const dataId = userIdItem.dataset.id.split(', ');

// 	$.ajax({
// 		url: "http://localhost:8080/Spotify/Playlist/getLikeSong",
// 		type: "POST",
// 		data: {
// 			userId: dataId[0]
// 		},
// 		success: function (data) {
// 			console.log(JSON.parse(data));
			
// 			let ArraySong = [];

// 			JSON.parse(data).forEach(liked => {
// 				ArraySong.push(liked);
// 			});

// 			var likeSong = false;
			
// 			ArraySong.forEach(liked => {
			
// 			})
// 		}
// 	});
// }


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
        notification.style.zIndex = "9999";
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
  

// Hàm show thông báo 
function showNotification() {
  var notification = document.getElementById("notificationDel");
  notification.style.display = "block";
  notification.style.zIndex = "9999";
  
  var message = document.getElementById("notificationDel-message");
  message.textContent = "Do you want delete Your Playlist ?";
  console.log('Song ID: Khang');
}

// Định nghĩa hàm ẩn thông báo
function hideNotification() {
  var notification = document.getElementById("notificationDel");
  notification.style.display = "none";
}

// Gán sự kiện click cho phần tử cha chung
var playlistContainer = document.getElementById("Container_userplaylist");
playlistContainer.addEventListener('click', function(event) {
  if (event.target.classList.contains('delButton')) {
    showNotification();
  }
});

// Hàm xóa userplaylist
function deletePlaylist() {
  var currentURL = window.location.href;
  var playlistID = currentURL.substring(currentURL.lastIndexOf('/') + 1);

  var formData = new FormData();
  formData.append('action', 'deletePlaylist');
  formData.append('playlistID', playlistID);

  fetch('http://localhost:8080/Spotify/Home/deletePlaylist', {
    method: 'POST',
    body: formData
  })
  .then(response => {
    if (response.ok) {
      console.log('Playlist deleted successfully!');
      location.reload();
    } else {
      console.error('Failed to delete playlist!');
    }
  })
  .catch(error => {
    console.error('An error occurred:', error);
  });
}


let notificationDelBtnYes = document.getElementById('notificationDel-btnYes');
notificationDelBtnYes.addEventListener('click', deletePlaylist);

let notificationDelBtnNo = document.getElementById('notificationDel-btnNo');
notificationDelBtnNo.addEventListener('click', function() {
  location.reload();
});

