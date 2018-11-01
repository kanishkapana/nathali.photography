$(document).ready(function () {

    $('.work-item-img > img').click(function(){
        let workId = $(this).attr('id');
        let id = workId.split("-")[1];
        window.location.href = "work/view?id=" + id;
    });
});