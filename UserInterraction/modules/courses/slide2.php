<style>
    .php.container {
        position: relative;
        width: 100%;
        height: 60%;
    }

    .overlay {
        position: absolute;
        bottom: 100%;
        left: 0;
        right: 0;
        background-color: #008CBA;
        overflow: hidden;
        width: 100%;
        height: 0;
        transition: .7s ease;
    }

    .php.container:hover .overlay {
        bottom: 0;
        height: 100%;
    }

    .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    .image{
        display: block;
        width: 100%;
        height: auto;
    }
</style>

<!--PHP Container-->
<a href="./topics/java servlet.php">
    <div class="php container">
        <img src="/modules/courses/images/java.png" class="image">
        <div class="overlay">
            <div class="text">Hello World</div>
        </div>
    </div>
</a>