document.querySelector('.li-admin').addEventListener('mouseenter', () => {
    document.querySelector('.small-li').classList.remove('none-li');
});
document.querySelector('.li-admin').addEventListener('mouseleave', () => {
    document.querySelector('.small-li').classList.add('none-li');
});
function getCurrentDateTime() {
    const now = new Date();
    const dateString = now.toLocaleDateString();
    const timeString = now.toLocaleTimeString();
    const dateTimeDisplay = document.getElementById('timeDisplay');
    dateTimeDisplay.textContent = `Bây giờ là:  ${timeString} ${' - '}${dateString}`;
}
setInterval(getCurrentDateTime, 1000);
