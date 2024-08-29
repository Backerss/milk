<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>สมัครสมาชิก</title>
</head>
<body>
    <div class="container mt-5">
        <h2>สมัครสมาชิก</h2>
        <form action="save_regis.php" method="POST">
            <div class="mb-3">
                <label for="user_prefix" class="form-label">คำนนำหน้า</label>
                <select class="form-select" id="user_prefix" name="user_prefix" required>
                    <option value="นาย">นาย</option>
                    <option value="นางสาว">นางสาว</option>
                    <option value="other">อื่นๆ</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="user_name" class="form-label">ชื่อจริง</label>
                <input type="text" class="form-control" id="user_name" name="user_name" required>
            </div>
            <div class="mb-3">
                <label for="user_lastname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="user_lastname" name="user_lastname" required>
            </div>
            <div class="mb-3">
                <label for="user_mail" class="form-label">Gmail</label>
                <input type="email" class="form-control" id="user_mail" name="user_mail" required>
            </div>
            <div class="mb-3">
                <label for="user_birthday" class="form-label">วันเกิด</label>
                <input type="date" class="form-control" id="user_birthday" name="user_birthday" required>
            </div>
            <div class="mb-3">
                <label for="user_sex" class="form-label">เพศ</label>
                <select class="form-select" id="user_sex" name="user_sex" required>
                    <option value="male">ชาย</option>
                    <option value="female">หญิง</option>
                    <option value="other">อื่นๆ</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="user_ids" class="form-label">รหัสนักศึกษา</label>
                <input type="text" class="form-control" id="user_ids" name="user_ids" required>
            </div>
            <div class="mb-3">
                <label for="user_tel" class="form-label">เบอร์โทรศัพท์</label>
                <input type="text" class="form-control" id="user_tel" name="user_tel" required>
            </div>
            <div class="mb-3">
                <label for="user_password" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" id="user_password" name="user_password" required>
            </div>
            <div class="mb-3">
                <label for="user_address" class="form-label">ที่อยู่</label>
                <textarea class="form-control" id="user_address" name="user_address" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
        </form>
    </div>
</body>
</html>
