//get cookie by name
function getCookie(name) {
    const value = `; ${document.cookie}`; // เริ่มต้นด้วย ; เพื่อให้การค้นหามีความแม่นยำมากขึ้น
    const parts = value.split(`; ${name}=`); // แยก string โดยใช้ชื่อ cookie
    if (parts.length === 2) {
        // ถอดรหัสค่าของ cookie โดยใช้ decodeURIComponent
        return decodeURIComponent(parts.pop().split(';').shift());
    }
    return null; // ถ้าหาไม่พบ ให้คืนค่า null
}

function replaceText(oldText, newText) {
    $('*').filter(function() {
        return $(this).text().trim() === oldText; // ตรวจสอบข้อความ
    }).text(newText); // เปลี่ยนข้อความ
}


//load interface
$(document).ready(function() {

    replaceText('user_name', getCookie('user_name'));
    replaceText('user_mail', getCookie('user_mail'));

    console.log(getCookie('user_mail'));
});

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

    //when click tag a if attribute data-page is not null
    $(document).on('click', 'a', function() {
        const page = $(this).data('page');
        if (page) {
            loadPage(page);
        }
    });

    // เมื่อคลิกที่ลิงก์ในเมนู
    $('.nav-link').on('click', function(e) {
        e.preventDefault(); // ป้องกันการโหลดใหม่
        const page = $(this).data('page'); // ดึงชื่อไฟล์
        const id = $(this).attr('id'); // ดึง ID
    
        // ลบ class active ออกจาก li ทั้งหมด
        $('.nav-item').removeClass('submenu active');
    
        // เพิ่ม class active ที่ li ของลิงก์ที่ถูกคลิก
        $(this).parent().addClass('active');
    
        loadPage(page); // โหลดหน้า
    });
    
});