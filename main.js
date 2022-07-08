// swiper
var mySwiper = new Swiper ('.popular-content', 
	{
    slidesPerView:1,
    spaceBetween:10,
    speed:1000,
		direction: 'horizontal',
		navigation: 
		{
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		},
		pagination: 
		{
			el: '.swiper-pagination',
			dynamicBullets: true,
		},
		zoom: true,
		keyboard: 
		{
			enabled: true,
			onlyInViewport: false,
		},
		mousewheel: 
		{
			invert: true,
		},
    autoplay: 
    {
      delay: 2000,
    },
    breakpoints:{
        280:{
            slidesPerView:1,
            spaceBetween:10,
        },
        320:{
            slidesPerView:2,
            spaceBetween:10,
        },
        510:{
            slidesPerView:2,
            spaceBetween:10,
        },
        758:{
            slidesPerView:3,
            spaceBetween:15,
        },
        900:{
            slidesPerView:4,
            spaceBetween:20,
        },
    },
    loop: true,
	}); 

// Show Video
let playButton = document.querySelector(".play-movie")
let video = document.querySelector(".video-container")
let myvideo = document.querySelector("#myvideo")
let closebtn = document.querySelector(".close-video")

playButton.onclick = ()=>{
    video.classList.add("show-video")
    myvideo.play()
}

closebtn.onclick = ()=>{
    video.classList.remove("show-video")
    myvideo.pause()
}