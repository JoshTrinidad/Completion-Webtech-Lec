<style>
.bubbles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    transform: translateZ(0);
}
       
.bubbles li {
    position: absolute;
    list-style: none;
    display: block;
    background-color: rgba(255, 255, 255, 0.15);
    bottom: 100%;
    animation: square 20s infinite;
    transition-timing-function: linear;
}
       
.bubbles li:nth-child(1) {
    width: 40px;
    height: 40px;
    left: 20%;
}

.bubbles li:nth-child(2) {
    width: 60px;
    height: 60px;
    left: 40%;
    animation-delay: 2s;
    animation-duration: 17s;
}

.bubbles li:nth-child(3) {
    width: 10px;
    height: 10px;
    left: 60%;
    animation-delay: 4s;
    animation-duration: 13s;
}

.bubbles li:nth-child(4){
    width: 80px;
    height: 80px;
    left: 80%;
    animation-delay: 1s;
    animation-duration: 22s;
}

.bubbles li:nth-child(5){
    width: 50px;
    height: 50px;
    left: 50%;
    animation-delay: 7s;
    animation-duration: 12s;
}
       
@keyframes square{
    0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    }

    100%{
    -webkit-transform: translateY(800px) rotate(630deg);
    }
}

body {
    overflow-y: hidden;
	width: 100wh;
	height: 90vh;
	color: #fff;
	background: linear-gradient(150deg, #005b96, #03396c, #6497b1, #b3cde0);
	background-size: 400% 400%;
	-webkit-animation: Gradient 200s ease;
	-moz-animation: Gradient 200s ease;
	
}

@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}
</style>
    <ul class="bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>