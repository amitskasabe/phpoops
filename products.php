<?php

include 'common/header.php';

?>


<div class="container">
    <h1 class="text-center mt-3"> Products </h1>
    <div class="row">
        <div class="col-lg-3 ">
            <div class="card">
                <img src="https://th.bing.com/th/id/R.e6102cc9fa4e192822f0f7e8765c7c1a?rik=TZRDzG5yYWPw3w&riu=http%3a%2f%2fwww.clipartbest.com%2fcliparts%2fjTx%2f6Mo%2fjTx6MoyLc.jpg&ehk=eMSwoFKhRkrho0%2fVw4T2zdNUIGFOBn019pjjlQd5g68%3d&risl=&pid=ImgRaw&r=0"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">T-Shirt</h5>
                    <a target="_blank" href="product-single.php?product_id=1234" class="btn btn-primary">View Product</a>
                    <a target="_blank" href="products.php?category=kids" class="btn btn-primary">Go Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 ">
            <div class="card">
                <img src="https://i.pinimg.com/originals/34/a7/73/34a7730155c6f673ac3f85137c471df3.jpg"
                    class="card-img-top img-fluid" alt="..." style="width:260px;height:173px">
                <div class="card-body">
                    <h5 class="card-title">MEN</h5>
                    <a href="#" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 ">
            <div class="card">
                <img src="https://img.freepik.com/free-vector/group-strong-women-vector_53876-61637.jpg?w=2000"
                    class="card-img-top img-fluid" alt="..." style="width:260px;height:173px">
                <div class="card-body">
                    <h5 class="card-title">WOMEN</h5>
                    <a href="#" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 ">
            <div class="card">
                <img src="https://cdn4.vectorstock.com/i/1000x1000/22/03/kitchen-appliances-vector-10502203.jpg"
                    class="card-img-top img-fluid" alt="..." style="width:260px;height:173px">
                <div class="card-body">
                    <h5 class="card-title">HOME</h5>
                    <a href="#" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php

include 'common/footer.php';
?>