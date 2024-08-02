//SCROLL MENU HEADER
window.onscroll = function() {

    // let menuHeader = document.querySelector('.second-hd-contai');
    // if(document.documentElement.scrollTop > 100) {
    //     menuHeader.classList.add('second-hd-contai-scroll');
    // } else {
    //     menuHeader.classList.remove('second-hd-contai-scroll');
    // }
    
    let rightContent = document.querySelector('.right-cont-detail');
    console.info(document.documentElement.scrollTop);

    if(document.documentElement.scrollTop > 520) {
        rightContent.classList.add('right-cont-detail-scroll');
    } else {
        rightContent.classList.remove('right-cont-detail-scroll');
    }
    if(document.documentElement.scrollTop > 4200) {
        rightContent.classList.remove('right-cont-detail-scroll');
        rightContent.classList.add('right-cont-detail-scroll-bottom');
    } else {
        rightContent.classList.remove('right-cont-detail-scroll-bottom');
    }
    

}