<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).keyup(function (e) {
        if (e.keyCode === 37 ||
            e.keyCode === 38 ||
            e.keyCode === 39 ||
            e.keyCode === 40) {
            console.dir(e.keyCode);
        }
        alert(e.key);
        //не совсем понял 4 задание, продолжить действия каких клавишей?
    });
</script>