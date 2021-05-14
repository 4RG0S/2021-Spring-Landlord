<? include ("header.php") ?>

<? if ($login_name) : ?>
    <p>이미 로그인 되었습니다!</p>
<? else : ?>
    <form action="login_proc.php" method="post">
        <div>
            <label for="id_input">아이디</label>
            <input type="text" name="login_id" id="id_input" required />
        </div>

        <div>
            <label for="pw_input">비밀번호</label>
            <input type="password" name="login_pw" id="pw_input" required />
        </div>

        <input type="submit" value="로그인" />
    </form>
<? endif; ?>

<? include ("footer.php") ?>