<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "modules/head.php"; ?>
    <title>Document</title>
</head>

<body>
<?php include "modules/block_bubbles.php"; ?>
    <div class="container-fluid">
        <div class="row flex-row flex-nowrap">
            <div class="row col-5">
                <div class="col-6 border">.col-6</div>
                <div class="col-6 border">.col-6</div>
                <div class="col-6 border">.col-6</div>
                <div class="col-6 border">.col-6</div>
            </div>
            <div class="row col-6">
                <div class="col-6 border">.col-6</div>
                <div class="col-6 border">.col-6</div>
                <div class="w-100"></div>
                <div class="col-3 border">.col-6
                    <br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.
                </div>
                <div class="col-3 border">.col-3
                    <br>Subsequent columns continue along the new line.
                </div>
                <div class="col-3 border">.col-3</div>
                <div class="col-3 border">.col-3
                    <br>Subsequent columns continue along the new line.
                </div>
            </div>
            <div class="row col-6">
                <div class="col-6 border">.col-6</div>
                <div class="col-6 border">.col-6</div>
                <div class="w-100"></div>
                <div class="col-3 border">.col-6
                    <br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.
                </div>
                <div class="col-3 border">.col-3
                    <br>Subsequent columns continue along the new line.
                </div>
                <div class="col-3 border">.col-3</div>
                <div class="col-3 border">.col-3
                    <br>Subsequent columns continue along the new line.
                </div>
            </div>

        </div>

    </div>
   
        


</body>

</html>