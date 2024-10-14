// ฟังก์ชันเพื่อโหลดคำถามจากไฟล์ JSON
function loadQuestions() {

    if (isQuestionsLoaded) return; // หากคำถามถูกโหลดแล้ว จะไม่ทำอะไร

    $.getJSON('../../data/quiz.json', function (data_quiz) {
        questions = data_quiz; // เก็บข้อมูลคำถาม
        isQuestionsLoaded = true; // ตั้งค่า Flag ว่าคำถามถูกโหลดแล้ว
        showQuestion(); // เริ่มแสดงคำถามแรก
    }).fail(function () {
        console.error('Error loading quiz questions'); // เพิ่มการจัดการข้อผิดพลาด
    });
}

// ฟังก์ชันเพื่อแสดงคำถาม
function showQuestion() {
    if (questions.length === 0) return; // ตรวจสอบว่ามีคำถามหรือไม่

    const currentQuestion = questions[currentQuestionIndex];
    $('.question-text').text(currentQuestion.question);
    $('.options').empty(); // ล้างตัวเลือกก่อนหน้า

    currentQuestion.options.forEach(option => {
        $('.options').append(`<label><input type="radio" name="answer" value="${option}"> ${option}</label><br>`);
    });

    // แสดงคำถามและตัวเลือก
    $('.question').show();
    $('.options').show();
    $('#nextBtn').show();
}

// ฟังก์ชันเพื่อจัดการการคลิกปุ่ม "Start Quiz"
$('#startBtn').on('click', function () {
    $('#introduction').hide(); // ซ่อนการแนะนำ
    loadQuestions(); // โหลดคำถามจากไฟล์ JSON
});

// ฟังก์ชันเพื่อจัดการการคลิกปุ่ม "Next Question"
$('#nextBtn').on('click', function () {
    const selectedOption = $('input[name="answer"]:checked').val();

    if (selectedOption) {
        userAnswers[currentQuestionIndex] = selectedOption; // บันทึกคำตอบของผู้ใช้
        currentQuestionIndex++; // ไปยังคำถามถัดไป

        if (currentQuestionIndex < questions.length) {
            showQuestion(); // แสดงคำถามถัดไป
        } else {
            alert('Quiz finished! Here are your answers:');
            console.log(userAnswers); // แสดงคำตอบใน Console
            // สามารถส่ง userAnswers ไปยังเซิร์ฟเวอร์หรือจัดการต่อไปได้ที่นี่
        }
    } else {
        Swal.fire('Please select an option', '', 'warning');
    }
});

// เริ่มต้นเมื่อโหลดหน้าเว็บ
$(document).ready(function () {
    // ปล่อยให้ผู้ใช้กดปุ่มเริ่มต้น
});
