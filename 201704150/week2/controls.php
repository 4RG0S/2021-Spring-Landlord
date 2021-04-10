<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h3>input type=text</h3>
        <div>
            <input type="text" placeholder="placeholder로 설명을 추가" />
            <input type="text" placeholder="placeholder로 설명을 추가" value="안녕하세요!" />
        </div>
        <h3>input type=password</h3>
        <div>
            <input type="password" placeholder="password도 설명 추가 가능" />
            <input type="password" placeholder="password도 설명 추가 가능" value="fewiofjwioefj" />
        </div>
        <h3>input type=checkbox</h3>
        <div>
            <input type="checkbox" name="food[]" value="피자" />
            피자
            <input type="checkbox" name="food[]" value="치킨" />
            치킨
            <input type="checkbox" name="food[]" value="햄버거" />
            햄버거
        </div>
        <h3>input type=radio</h3>
        <div>
            <input type="radio" name="sex" value="남자" />
            남자
            <input type="radio" name="sex" value="여자" />
            여자
        </div>
        <h3>select</h3>
        <div>
            <select>
                <option>선택해주세요</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
            </select>

            <select>
                <option>선택해주세요</option>
                <option>A</option>
                <option selected>B</option>
                <option>C</option>
            </select>
        </div>
        <h3>textarea</h3>
        <div>
            <textarea></textarea>
        </div>
        <h3>input type=submit</h3>
        <div>
            <input type="submit" value="등록하기" />
        </div>
    </body>
</html>