<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style2.css">
    <link rel="stylesheet" href="../../css/testCss.css">
    <link rel="shortcut icon" href="./img/Spotify_icon.svg.png" type="image/x-icon">

    <title>Spotify</title>
</head>

<body> -->
   
<div class="home_container row">

<!-- ******************************       Phần Menu Left  *****************************************-->
  

 <!-- ******************************       Phần Body chứa nội dung của spotify  *****************************************-->


   <div class="playlist_container col-sm-10 ">

         <!-- ******************************       Phần Option của spotify  *****************************************-->
       <div class="playlist_option">

            <!-- ******************************       Phần Btn Back_Next của spotify  *****************************************-->
           <div class="btn_back_next">
               <button class="playlist_option__btn_back"><svg role="img" height="16" width="16" aria-hidden="true"
                       class="" viewBox="0 0 16 16" data-encore-id="icon">
                       <path
                           d="M11.03.47a.75.75 0 0 1 0 1.06L4.56 8l6.47 6.47a.75.75 0 1 1-1.06 1.06L2.44 8 9.97.47a.75.75 0 0 1 1.06 0z">
                       </path>
                   </svg></button>
             <a href="./podscast.html">  <button class="playlist_option__btn_back"><svg role="img" height="16" width="16" aria-hidden="true"
                       class="" viewBox="0 0 16 16" data-encore-id="icon">
                       <path
                           d="M4.97.47a.75.75 0 0 0 0 1.06L11.44 8l-6.47 6.47a.75.75 0 1 0 1.06 1.06L13.56 8 6.03.47a.75.75 0 0 0-1.06 0z">
                       </path>
                   </svg></button></a>
           </div>

            <!-- ******************************       Phần Option menu của spotify  *****************************************-->
           <div class="playlist_option_menu">
               <ul class="playlist_option__List_Menu">
                   <li class="playlist_option__Item_Menu option_current"><a
                           class="playlist_option__Item_Menu__Link " href="playlist2.html">Playlists</a></li>
                   <li class="playlist_option__Item_Menu"><a class="playlist_option__Item_Menu__Link"
                           href="podscast.html">Podcasts</a></li>
                   <li class="playlist_option__Item_Menu"><a class="playlist_option__Item_Menu__Link"
                           href="artists2.html">Artists</a></li>
                   <li class="playlist_option__Item_Menu "><a class="playlist_option__Item_Menu__Link"
                           href="albums2.html">Albums</a></li>
               </ul>
           </div>

             <!-- ******************************       Phần user của spotify  *****************************************-->
           <div class="playlist_option__user">
               <button class="playlist_option__user_btn">
                   <img class="playlist_option__user_img"
                       src="https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=935788870129556&amp;height=300&amp;width=300&amp;ext=1682139408&amp;hash=AeRjPs31imnE_490HGk"
                       alt="Hoàng Khang">
                   <span class="playlist_option__user_name">Hoàng Khang</span>
                   <svg class="playlist_option__user_icon" role="img" height="16" width="16" aria-hidden="true"
                       class="Svg-sc-ytk21e-0 gQUQL eAXFT6yvz37fvS1lmt6k" viewBox="0 0 16 16"
                       data-encore-id="icon">
                       <path d="m14 6-6 6-6-6h12z"></path>
                   </svg>
               </button>


           </div>
           
       </div>

               <!-- ******************************       Phần option_menu user của spotify  *****************************************-->
        <div id="context-menu">
          
               <ul class="context-menu__list">
                   <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Account</span><svg role="img" height="16" width="16"
                       aria-hidden="true" aria-label="External link" viewBox="0 0 16 16"
                       data-encore-id="icon" class="">
                       <path
                           d="M1 2.75A.75.75 0 0 1 1.75 2H7v1.5H2.5v11h10.219V9h1.5v6.25a.75.75 0 0 1-.75.75H1.75a.75.75 0 0 1-.75-.75V2.75z">
                       </path>
                       <path
                           d="M15 1v4.993a.75.75 0 1 1-1.5 0V3.56L8.78 8.28a.75.75 0 0 1-1.06-1.06l4.72-4.72h-2.433a.75.75 0 0 1 0-1.5H15z">
                       </path>
                   </svg></button></li>
                   <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Profile</span>
                       </button></li>
                   <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Upgrade to Premium</span><svg role="img" height="16" width="16"
                       aria-hidden="true" aria-label="External link" viewBox="0 0 16 16"
                       data-encore-id="icon" class="">
                       <path
                           d="M1 2.75A.75.75 0 0 1 1.75 2H7v1.5H2.5v11h10.219V9h1.5v6.25a.75.75 0 0 1-.75.75H1.75a.75.75 0 0 1-.75-.75V2.75z">
                       </path>
                       <path
                           d="M15 1v4.993a.75.75 0 1 1-1.5 0V3.56L8.78 8.28a.75.75 0 0 1-1.06-1.06l4.72-4.72h-2.433a.75.75 0 0 1 0-1.5H15z">
                       </path>
                   </svg></button></li>
                   <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Support</span><svg role="img" height="16" width="16"
                       aria-hidden="true" aria-label="External link" viewBox="0 0 16 16"
                       data-encore-id="icon" class="">
                       <path
                           d="M1 2.75A.75.75 0 0 1 1.75 2H7v1.5H2.5v11h10.219V9h1.5v6.25a.75.75 0 0 1-.75.75H1.75a.75.75 0 0 1-.75-.75V2.75z">
                       </path>
                       <path
                           d="M15 1v4.993a.75.75 0 1 1-1.5 0V3.56L8.78 8.28a.75.75 0 0 1-1.06-1.06l4.72-4.72h-2.433a.75.75 0 0 1 0-1.5H15z">
                       </path>
                   </svg></button></li>
                   <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Download</span><svg role="img" height="16" width="16"
                       aria-hidden="true" aria-label="External link" viewBox="0 0 16 16"
                       data-encore-id="icon" class="">
                       <path
                           d="M1 2.75A.75.75 0 0 1 1.75 2H7v1.5H2.5v11h10.219V9h1.5v6.25a.75.75 0 0 1-.75.75H1.75a.75.75 0 0 1-.75-.75V2.75z">
                       </path>
                       <path
                           d="M15 1v4.993a.75.75 0 1 1-1.5 0V3.56L8.78 8.28a.75.75 0 0 1-1.06-1.06l4.72-4.72h-2.433a.75.75 0 0 1 0-1.5H15z">
                       </path>
                   </svg></button></li>
                   <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Settings</span>
                       </button></li>
           
                  
                   <li class="context-menu__item btn_final"><button
                           data-testid="user-widget-dropdown-logout" class="context-menu__item_btn" role="menuitem"
                           tabindex="-1"><span dir="auto"
                               class="context-menu__item_btn__name"
                               data-encore-id="type">Log out</span></button></li>
               </ul>
         
       </div> 
          <!-- ******************************       Phần content của spotify  *****************************************-->
          <div class="propose_ambum">
                    <div class="Title_amblu">
                        <a class="Title_amblu__TopAmbum" href="">Top podcasts</a>
                    
                    </div>
                      <!-- ******************************       Một hàng của propose_amble  *****************************************-->
                    <div class="Trending_abum" style="display: flex;padding-left: 1.5em;margin-top: 1.5em;">

                   

                        <a href="./PostCard_component.html"><div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                            <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                <img src="https://i.scdn.co/image/ab67656300005f1fce11c81cfc4b6e1c258f9987" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                            </div>
                                
                             <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">MEDI WITH EHO</h1>
                                <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Eros Healing Organization</span>
                             </div>
                        </div></a> 
 
                    <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                        <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                            <img src="https://i.scdn.co/image/ab67656300005f1f5b61945f5f6bf820d3d43fbe" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                        </div>
                            
                         <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                            <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">HIEU.TV</h1>
                            <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Hieu Nguyen</span>
                         </div>
                    </div>

                    <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                        <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                            <img src="https://i.scdn.co/image/ab67656300005f1ff0ac6fb61b796aed7347f27d" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                        </div>
                            
                         <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                            <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Try Kỷ Cảm Xúc</h1>
                            <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Vì sao thế nhỉ!</span>
                         </div>
                    </div>

                    <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                        <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                            <img src="https://i.scdn.co/image/158f91de15c44cb4205e7b4ef8f33236b22f2196" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                        </div>
                            
                         <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                            <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Giang ơi Radio</h1>
                            <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Giang ơi Radio</span>
                         </div>
                    </div>

                    <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                        <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                            <img src="https://i.scdn.co/image/ab67656300005f1f44ee4a30a91a8aa12ee7fa11" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                        </div>
                            
                         <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                            <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Mây kể chuyện</h1>
                            <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">M.</span>
                         </div>
                    </div>

                    <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;">
                        <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                            <img src="https://i.scdn.co/image/ab67656300005f1fb7afab05136305bf1c92e9b2" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                        </div>
                            
                         <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                            <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Dan Foolish</h1>
                            <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Dan Foolish</span>
                         </div>
                    </div>
                    

                  
                    </div>
                         
         
        
                          <!-- ******************************       Một hàng của propose_amble  *****************************************-->           
                        <div class="Trending_abum" style="display: flex;padding-left: 1.5em;margin-top: 1.5em;">

                   

                            <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                                <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                    <img src="https://i.scdn.co/image/aaab8e8e00afd69b8f96974ebc32e7a5ebf31050" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                                </div>
                                    
                                 <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                    <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Thuần</h1>
                                    <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Thuần Posdcast</span>
                                 </div>
                            </div>
         
                            <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                                <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                    <img src="https://i.scdn.co/image/ab67656300005f1fb5a86f37275368a1d066e781" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                                </div>
                                    
                                 <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                    <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Đắp Chăn Nằm Nghe</h1>
                                    <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Tun Cảm Ơn</span>
                                 </div>
                            </div>
        
                            <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                                <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                    <img src="https://i.scdn.co/image/ab67656300005f1feb5b14182d1f591c2df02a7d" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                                </div>
                                    
                                 <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                    <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Sunhuyn Postcast</h1>
                                    <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Sunhuyn</span>
                                 </div>
                            </div>
        
                            <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                                <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                    <img src="https://i.scdn.co/image/ab67656300005f1f605f6ed1daadc80968e03d7b" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                                </div>
                                    
                                 <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                    <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Đọc sách cùng em</h1>
                                    <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Hoang Thi My Ngoc</span>
                                 </div>
                            </div>
        
                            <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                                <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                    <img src="https://i.scdn.co/image/ab67656300005f1f33e903d1f9adb0a2f087c5e0" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                                </div>
                                    
                                 <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                    <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Better Version</h1>
                                    <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Better Version</span>
                                 </div>
                            </div>
        
                            <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;">
                                <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                    <img src="https://i.scdn.co/image/617a2443d0de8c9c8689d9eed8b86edaf9d2a33b" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                                </div>
                                    
                                 <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                    <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Đắc Nhân Tâm</h1>
                                    <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Voiz FM & Thư Viện sách nói</span>
                                 </div>
                            </div>
                            
        
                          
                            </div>
    
                                
    
                    <!-- ******************************       Một hàng của propose_amble  *****************************************-->
                            <div class="Trending_abum" style="display: flex;padding-left: 1.5em;margin-top: 1.5em;">

                   

                                <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                                    <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                        <img src="https://i.scdn.co/image/e695319e9b9a04521acb90cc5ec34c8b5871bf1a" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                                    </div>
                                        
                                     <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                        <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Pháp Âm Phật Giáo</h1>
                                        <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Pháp Âm Phật Giáo</span>
                                     </div>
                                </div>
             
                                <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                                    <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                        <img src="https://i.scdn.co/image/edb35c2c0b8ce048ee40860ad9af715890556b2d" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                                    </div>
                                        
                                     <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                        <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">MEDITION SEFT</h1>
                                        <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">MEDITION SEFT</span>
                                     </div>
                                </div>
            
                                <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                                    <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                        <img src="https://i.scdn.co/image/ab67656300005f1f6eb0a5050f7c3cd43cad2428" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                                    </div>
                                        
                                     <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                        <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Yêu Lành</h1>
                                        <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Thầy Minh Niệm</span>
                                     </div>
                                </div>
            
                                <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                                    <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                        <img src="https://i.scdn.co/image/ab67656300005f1f79dc05a91180a599fa84c26a" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                                    </div>
                                        
                                     <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                        <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Sách Nói Tài Chính</h1>
                                        <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Orchid</span>
                                     </div>
                                </div>
            
                                <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                                    <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                        <img src="https://i.scdn.co/image/fafc0f198e6424f644f3f2219278c3669a9742ee" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                                    </div>
                                        
                                     <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                        <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Lam's Story </h1>
                                        <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Lam</span>
                                     </div>
                                </div>
            
                                <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;">
                                    <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                        <img src="https://i.scdn.co/image/ab67656300005f1fc55abd69d374b2cfdb6806f2" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                                    </div>
                                        
                                     <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                        <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Anna Nguyen</h1>
                                        <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Anna Nguyen</span>
                                     </div>
                                </div>
                                
            
                              
                                </div>
                      
                          <!-- ******************************       Một hàng của propose_amble  *****************************************-->
                                <div class="Trending_abum" style="display: flex;padding-left: 1.5em;margin-top: 1.5em;">

                   

                                    <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                                        <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                            <img src="https://i.scdn.co/image/ab67656300005f1fa95835a48070c9ed2c72c7c5" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                                        </div>
                                            
                                         <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                            <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Bồ Đề Tâm</h1>
                                            <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Bồ Đề Tâm</span>
                                         </div>
                                    </div>
                 
                                    <div class="CardLibrary_container" style="background-color: #181818;width: 20em;height: 25em;margin-top: 0.3em;padding:1.6em;border-radius: 0.4em;margin-right: 2em;">
                                        <div class="CardLibrary_img" style="width: 100%;height: 16em;border-radius: 0.4em;">
                                            <img src="https://i.scdn.co/image/ab67656300005f1f778968b7a48e93b4fd5f5c49" alt="" style="width: 100%;height: 100%;border-radius: 0.4em;">
                                        </div>
                                            
                                         <div class="CardLibrary_content" style="width: 100%;height: 5.5em;margin-top: 2em;">
                                            <h1 class="CardLibrary_title" style="font-size: 1.4em;color: white;font-weight: 700;">Trạm Dừng Chân</h1>
                                            <span class="CardLibrary_description" style="font-size: 1em;color: #aaaaaa;font-weight: 500;">Trạm Dừng Chân</span>
                                         </div>
                                    </div>
                
                
                                  
                                    </div>
                        
                 </div>
   </div>

</div>


<!-- ******************************       Phần Play Music  *****************************************-->



<!-- ******************************JS show menu user******************************  -->

<script>const contextMenu = document.getElementById("context-menu");
const userBtn1 = document.querySelector(".playlist_option__user_btn");

userBtn1.addEventListener("click", () => {
   contextMenu.classList.toggle("clicked");

   if (contextMenu.classList.contains("clicked")) {
       contextMenu.style.display = "block";
   } else {
       contextMenu.style.display = "none";
   }
});</script>
<script>

const userBtn = document.querySelector('.playlist_option__user_btn');
const userIcon = userBtn.querySelector('.playlist_option__user_icon');

userBtn.addEventListener('click', function () {
userIcon.classList.toggle('rotate');
});


</script>

<!-- 
</body>

</html> -->