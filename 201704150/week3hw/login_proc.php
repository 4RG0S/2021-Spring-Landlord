<?
    // 로그인 정보를 담는 배열
    // $login_info[아이디] = [
    //    'password' => 비밀번호, 
    //    'name'     => 이름
    // ] 순으로 저장됨
    $login_info = [
        'admin' => [
            'password' => '1234',
            'name' => '관리자'
        ],
        '201704150' => [
            'password' => 'gjrkdwns', // 허강준
            'name' => '허강준'
        ]
    ];

    // 로직에서 직접 Superglobal을 사용하는것은 가독성/유지보수에 쥐약!
    // 더욱이 위험하기도 하므로 사용하고자 하는 변수가 넘어왔는지 체크하도록 코딩
    // 아래처럼 삼항연산자를 사용할 수도 있고 if를 이용해서 검사하여도 무방!
    //
    // trim(str) 함수는 문자열 앞 뒤의 공백문자(스페이스바, 개행문자, 탭문자 등)을 제거해줌
    $login_id = isset($_POST["login_id"]) ? trim($_POST["login_id"]) : NULL;
    $login_pw = isset($_POST["login_pw"]) ? trim($_POST["login_pw"]) : NULL;

    // id, pw가 정상적으로 입력되었는지 확인
    // strlen(str) 함수는 문자열의 길이를 계산해주는 함수
    if ($login_id && strlen($login_id) === 0) {
        echo "아이디를 입력해주세요!";
        exit;
    } else if ($login_pw && strlen($login_pw) === 0) {
        echo "비밀번호를 입력해주세요!";
        exit;
    }

    // 아이디, 비밀번호가 맞는지 확인하기
    // empty는 !isset의 역할을 수행하기도 함
    if (empty($login_info[$login_id]) || 
        $login_info[$login_id]['password'] !== $login_pw) {
        echo "아이디나 비밀번호가 올바르지 않습니다!";
        exit;    
    }

    // 세션 처리를 위해 세션 시작
    session_start();

    // 입력한 $login_id에 해당하는 name을 세션의 login_name에 저장
    $_SESSION['login_name'] = $login_info[$login_id]['name'];

    // 로그인 페이지로 다시 이동
    // location 헤더를 전송하면 해당 위치로 리디렉션됨
    header('location: login.php');