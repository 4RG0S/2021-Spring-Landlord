<?
    $username = isset($_POST['student_no']) ? $_POST['student_no'] : NULL;
    $password = isset($_POST['student_pw']) ? $_POST['student_pw'] : NULL;

    if ($username && preg_match("/[0-9]{9}/", $username)) {
        $host = 'localhost';
        $id = $_POST['student_no'];
        $pw = $_POST['student_pw'];
        $db = "db_" . $_POST['student_no'];

        $dsn = "mysql:host=$host,dbname=$dbname;charset=utf8";

        try {
            $conn = new PDO($dsn, $id, $pw, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);

            echo "연결 성공!<br />";
        } catch (Exception $e) {
            echo "연결 실패...<br />";
            echo "오류: " . $e->getMessage() . "<br />";
        }
    }
?>

<form method="post">
    <input type="text" name="student_no" placeholder="학번" />
    <input type="password" name="student_pw" placeholder="비밀번호" />
    <input type="submit" value="테스트" />
</form>