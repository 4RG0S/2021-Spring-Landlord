<? 
    // 세션을 사용해야 하므로 세션을 먼저 시작함
    session_start();

    // session_destroy로 현재 세션을 파기
    // 로그인 정보가 전부 삭제됨!
    session_destroy();
    
    // 로그인 페이지로 돌아가기
    // location 헤더를 전송하면 해당 위치로 리디렉션됨
    header("location: login.php");