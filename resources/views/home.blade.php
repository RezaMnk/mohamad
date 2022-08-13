<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="POST">
    @csrf

    <div class="my-div">
        <textarea name="testingEditor" id="test" cols="30" rows="10">
            for test
        </textarea>
    </div>
    <button type="submit">Submit</button>
</form>

<x-ckeditor text-area-id="test"></x-ckeditor>
</body>
</html>
