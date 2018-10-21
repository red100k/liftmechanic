<?php
// Проверка разрешения
include $_SERVER['DOCUMENT_ROOT']."/function/protection.php";
echo '
<div class=" row header">
<div class="header__logo">
    <div class="header__logo__icon">
        <img src="/media/img/favicon.png">
    </div>
    <div class="heder__logo__text">
        <svg
             xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"
             width="230px" height="27px">
            <image  x="0px" y="0px" width="230px" height="27px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOYAAAAbCAQAAADCbzv3AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfiBAEUNRaXrq3HAAAFBElEQVRo3u1a65WjOgz+vOc24BbYEpgS2BKYEkgJUEJSAlMCKSGUEJeQlBBK0P0BAcnY2DBkT87Z0Z+AEbIe1pOAMprghgBQwbBL61lJF/b0wp9TRjeqLWwbcotePsMo8UIQHL10p60aDsGvnVjQdMURGVvKcByfNbggCRJJA/c/EICdjInSoXoDAFTggTyKRha4/4EA7GVMl+INQAnqaBop6emG0h/PXAv/rcQ3qNj1BFrgnAEUuK/mpsBpvP5X/dKn4QhYaUxlIjY4KAMws8RD6rn+hyBKwx5YGWbntVZfA4ry5vqsZonA6+Pnu36fyzzXS/w0jKMjebMzpVTSQ+AWAdolXUfs2s015bOqvJxV5RwjoUTwUc+wF6vZgBTfbU0cLcbYmnieZAvvpSPTLigtwW4OnCvNfJq0MLkHV3DUOGgfLaqJaMUk3cRDt3ZgN3HGDEuxVwG0F2TWrxcow9XZ7qS4SHOSxsVTT6e4kLtlyh20S9E5azReLlM0nieuaJDbx8Qpb4QU72rMQDNDiVddgEbD62LUC/lXL9CZQ8noFotZPaW4dmxO1wcRUnzfmAYVKnRs5YQKFc4wqEQZ1GNWjip3SvkZaYA0Y9xdDpSifm5RCbxk8gAqrINxskqzdCF32ria+SIPgR0qVGgl3QWdnfBlrQQiUaQU+4zzRIbh+SLh+UJQkplkSuq5GOQ9RJYZdiQtckbhoPgY9+F57dbzRokoIhrH+2Pes7J36eD/9vQrwWvjlHTiIffQdWo4Top3CbPTqU7BT3XrxOa+dFbDKVcnhq37vElanPmDugOAurNzbTx7VANu3zXPQJ2UUgoHVDioZ1zilHyB83Oge/bs64BYKdYODV4FZgwjGXjQMc4ih6+14np6M4OBDF9GTbi9gb5UBzdwXMNCnGUiNYZLKqARHowbZRjdibvlyXWkFO9hzI57phjktc5swkWvyT0w1DNMlqvFqXaBr3Gf+RuVACKq0TkP6KLfipTiTYypDE13jVh3GTNc+7lw4pUXhUup9Z1oJ7rbKbxLzuS+MJ1DX1aJMeb3IKh0ynHdMD9eP69eAe/hmQDQ+j6iOYCr+sujoPnqjkeAtPU1qALUiTJcXq2mJSnex5guw/nO8Z1nVXWGH7jZRZFBD2i0aAG15ZNAwZRq1Mdw9aqIESnF+4TZ1rPmCnjcyMuhjh+RdOqAKYVG/2+IIy2N/n3Ao8h0GML/ptgGkVL8TWP6Re0A1c180/gbB3ZdjMN5TQ/qB/xji6CMOAxT1ck71W7DRyfug4NclKBYTScKYqX4m8ZMKaGMSvIZtQ3cT8KdhXBXKgBK0Ti9jQ/OcmooAai2xg7ra0yhXCoAKqL+57QVoqSQxkzIB8FBX4TQGjdccPROLU3gnoPMczWRVVvex9b6S/CQ40ZkedCWnCl5q4lQW6bcN39GSfFiz1SuEOYTM9ozAXUKhMbPEfOOwyLmSW1pF85BjF3/KREnxevD7FxsjzFVJwqbZ8b0hcA/C+b8w4ZmUOfJtA4lVNgA6g73e0yCVR/BwjtGSPFyY6pTRBh7qoCb5+mXHmOqTn1Yn956+MJvZfm0OuPDcagMPreZcpDr09q9w0EofOdyKCyFoiTuX619N0YpH4JPShN/cJiNr0kzwYanlLFAdO5DnVhre+8S/Bk1C73ieafs74QSd5lLvjuXja/fZVfLng1v8D0Gna2i69NwjBT/A78kEFnZQo1QAAAAAElFTkSuQmCC" />
        </svg>
        <p class="header__logo__text__slogan">Мы любим лифты...</p>
    </div>
</div>
';

// Модуль навигации
include $_SERVER['DOCUMENT_ROOT']."/view/template/html__navigation.php";
echo '
</div>
';
?>