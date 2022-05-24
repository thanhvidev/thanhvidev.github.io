<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./song.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Đăng Nhập</title>
</head>

<body>
    <div class="songmain">
        <div class="songcontent">
            <h2 class="songheading center">Upload nhạc lên Zing Mp3</h2>
            <p class="songheading-sub center">Cùng nhau tận hưởng âm nhạc
                <i class="fa fa-heartbeat"></i>
            </p>
            <form action="song_upload.php" method="POST" class="input">
                <div class="songrow">
                    <p>Tên bài hát</p>
                    <input type="text" name="namesong" required placeholder="VD: Em của ngày hôm qua">
                </div>
                <div class="songrow">
                    <p>Ca sĩ</p>
                    <input type="text" name="singer" required placeholder="Sơn Tùng MTP">
                </div>
                <div class="songrow">
                    <p>Ảnh</p>
                    <input type="file" name="anh" required placeholder="Sơn Tùng MTP">
                </div>
                <div class="songrow">
                    <p>Link nhạc</p>
                    <input type="file" name="nhac" required placeholder="Sơn Tùng MTP">
                </div>
                <div class="songrow songsubmit">
                    <input type="submit" name="songsubmit" value="Upload" class="songbton">
                </div>
            </form>
        </div>
    </div>
</body>

</html>