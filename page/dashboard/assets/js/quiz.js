// ฟังก์ชันเพื่อโหลดคำถามจากไฟล์ JSON
function loadQuestions() {
    if (isQuestionsLoaded) return; // หากคำถามถูกโหลดแล้ว จะไม่ทำอะไร

    $.getJSON('../../data/quiz.json', function (data_quiz) {
        questions = data_quiz; // เก็บข้อมูลคำถาม
        isQuestionsLoaded = true; // ตั้งค่า Flag ว่าคำถามถูกโหลดแล้ว
        showQuestion(); // เริ่มแสดงคำถามแรก
        console.log(questions);
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

    // อ่านตัวเลือกจาก JSON และสร้าง radio buttons
    $.each(currentQuestion.options, function (key, value) {
        $('.options').append(`<label><input type="radio" name="answer" value="${key}"> ${key}: ${value}</label><br>`);
    });

    // แสดงคำถามและตัวเลือก
    $('.question').show();
    $('.options').show();
    $('#nextBtn').show();
}

// ฟังก์ชันเพื่อประมวลผลคำตอบ
function CalculateQuiz() {
    // ตัวอย่างการคำนวณหรือการวิเคราะห์คำตอบของผู้ใช้
    // สามารถนำข้อมูล userAnswers มาวิเคราะห์หาข้อมูลเชิงลึก เช่น ผู้ตอบชอบอาหารไทยประเภทไหนมากที่สุด
    const answerCount = {
        A: 0,
        B: 0,
        C: 0,
        D: 0
    };

    // นับจำนวนคำตอบของแต่ละตัวเลือก
    userAnswers.forEach(answer => {
        answerCount[answer]++;
    });

    //คำนวณว่าผู้ตอบชอบอาหารไทยประเภทไหนมากที่สุด
    const maxAnswer = Object.keys(answerCount).reduce((a, b) => answerCount[a] > answerCount[b] ? a : b);
    let result = '';

    switch (maxAnswer) {
        case 'A':
            result = 'You like spicy food the most';
            break;
        case 'B':
            result = 'You like sweet food the most';
            break;
        case 'C':
            result = 'You like sour food the most';
            break;
        case 'D':
            result = 'You like salty food the most';
            break;
        default:
            result = 'You like all types of food';
            break;
    }

    // แสดงผลลัพธ์
    Swal.fire('Result', result, 'success');

    //clear คำตอบ
    userAnswers = [];
    currentQuestionIndex = 0;
    questions = [];
    isQuestionsLoaded = false;
    $('.question').hide();
    $('.options').hide();
    $('#nextBtn').hide();

    // แสดงปุ่มเริ่มต้นใหม่
    $('#introduction').show();
    

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
            $('.question').hide(); // ซ่อนคำถาม
            CalculateQuiz(); // เรียกใช้ฟังก์ชันเพื่อประมวลผลคำตอบ
        }
    } else {
        Swal.fire('Please select an option', '', 'warning');
    }
});

// เริ่มต้นเมื่อโหลดหน้าเว็บ
$(document).ready(function () {
    // ปล่อยให้ผู้ใช้กดปุ่มเริ่มต้น
});
