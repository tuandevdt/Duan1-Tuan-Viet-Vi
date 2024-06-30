document.querySelectorAll('.edit-cmt').forEach(item => {
    item.addEventListener('click', event => {
        // Lấy ID của bình luận
        var commentID = item.getAttribute('data-comment-id');
        // Hiển thị popup chỉnh sửa
        document.querySelector('#editCommentPopup').style.display = 'block';
        // Lấy nội dung bình luận hiện tại và đặt vào textarea trong popup
        document.getElementById('editedCommentText').value = event.target.parentNode.parentNode.querySelector('.content-cmt span').innerText;
        // Đặt ID của bình luận vào input hidden
        document.getElementById('commentID').value = commentID;
        

        document.querySelector('.close-edit').addEventListener('click', () => {
            document.querySelector('#editCommentPopup').style.display = 'none';
        });
    });
});

