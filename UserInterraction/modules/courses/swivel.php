<style>
#f1_container {
    position: relative;
    margin: 10px auto;
    width: 100%;
    height: 50%;
    z-index: 1;
}

#f1_container {
    perspective: 1000;
}

#f1_card {
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
    transition: all 1.0s linear;
}

#f1_container:hover #f1_card {
    transform: rotateY(180deg);
    box-shadow: -5px 5px 5px #aaa;
}

.face {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
}

.face.back {
    display: block;
    transform: rotateY(180deg);
    box-sizing: border-box;
    padding: 10px;
    color: white;
    text-align: center;
    background-color: #98FB98;
}

img {
    margin: 10px auto;
    width: 100%;
    height: 100%;
}
</style>

<a href="/modules/courses/topics/node.html">
    <div id="f1_container">
        <div id="f1_card" class="shadow">
            <div class="front face">
                <img id="logo" src="/modules/courses/images/node.png">
            </div>
            <div class="back face center">
                <p class="hello-world-text" id="php-hello-sample">
                    <code style="font-color:black">
                         var http = require('http');
                        <br> http.createServer(function (req, res) {
                        <br> res.writeHead(200, {'Content-Type': 'text/plain'});
                        <br> res.end('Hello World!');
                        <br> }).listen(8080);
                    </code>
                </p>
            </div>
        </div>
    </div>
</a>