<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="https://tympanus.net/Development/DistortionHoverEffect/js/hover.js"></script>

</head>
<body>

<div class="my-div"></div>

<script>
    var myAnimation = new hoverEffect({
        parent: document.querySelector('.my-div'),
        intensity: 0.3,
        image1: '{{ asset('storage/site/blog/1.png') }}',
        image2: '{{ asset('storage/site/blog/2.png') }}',
        displacementImage: '{{ asset('storage/site/blog/3.png') }}'
    });
</script>
</body>
</html>
