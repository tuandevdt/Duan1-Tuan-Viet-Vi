



// Bắt đầu theo dõi thời gian trang tải
window.addEventListener('load', function() {
  // Hiển thị loader
  const loaderElement = document.querySelector('.loading');
  loaderElement.style.display = 'block';

  // Ẩn loader và hiển thị nội dung trang
  loaderElement.style.display = 'none';
});


//SCROLL MENU HEADER
window.onscroll = function() {
    let menuHeader = document.querySelector('.second-hd-contai');
    // console.info(document.documentElement.scrollTop);

    if(document.documentElement.scrollTop > 100) {
        menuHeader.classList.add('second-hd-contai-scroll');
    } else {
        menuHeader.classList.remove('second-hd-contai-scroll');
    }

}

let loginShowLogout = document.querySelector('.login');
loginShowLogout.addEventListener('mouseover', () => {
    document.querySelector('.logout').classList.remove('tranform-logout');
    document.querySelector('.logout').addEventListener('mouseover', () => {
        document.querySelector('.logout').classList.remove('tranform-logout');
    });
});
loginShowLogout.addEventListener('mouseleave', () => {
    document.querySelector('.logout').classList.add('tranform-logout');
});



//SLIDER ICON SUPPORT


//HÀM CHANGE SLIDER
let changeSlider = () => {
let listIcons = document.querySelectorAll('.item-icon');
document.getElementById('list-slider-sp').appendChild(listIcons[0]);
};

let timeChangeSlider = setInterval(changeSlider, 1000);



//CLICK ICON SUPPORT SHOW INFOR
let iconSupport = document.querySelector('.list-icon-support');
let closeSupport = document.querySelector('.close-support');
iconSupport.addEventListener('click', () => {
iconSupport.classList.add('none-open');
closeSupport.classList.remove('none-open');
document.querySelector('.open-support').classList.remove('none-open');
});
closeSupport.addEventListener('click', () => {
iconSupport.classList.remove('none-open');
closeSupport.classList.add('none-open');
document.querySelector('.open-support').classList.add('none-open');
});



