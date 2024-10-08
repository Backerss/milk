$(document).ready(function() {
    // โหลดหน้าแรกเมื่อเปิดเว็บ
    loadPage('assets/inc/home.php');

    // ฟังก์ชันสำหรับโหลดหน้า
    function loadPage(page) {
        $('#content-show').fadeOut(500, function() {
            $.get(page, function(data) {
                $('#content-show').html(data);
                $('#content-show').fadeIn(500);
            }).fail(function() {
                $('#content-show').html('<h1>ไม่สามารถโหลดหน้าได้</h1>').fadeIn(500);
            });
        });
    }

    // เมื่อคลิกที่ลิงก์ในเมนู
    $('.nav-link').on('click', function(e) {
        e.preventDefault(); // ป้องกันการโหลดใหม่
        const page = $(this).data('page'); // ดึงชื่อไฟล์
        console.log(page);
        loadPage(page); // โหลดหน้า
    });
});