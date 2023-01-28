<header class="header">
    <a href="#" class="logo"><i class="fa-solid fa-leaf"></i>&nbsp;HugoVesta</a>

    <!-- menu links -->
    <nav class="navbar box-header">
        <a href="#home" class="nav-link">trang chủ</a>
        <a href="#features" class="nav-link">Ưu điểm</a>
        <a href="#products" class="nav-link">sản phẩm</a>
        <a href="#categories" class="nav-link">danh mục</a>
        <a href="#review" class="nav-link">đánh giá</a>
        <a href="#blogs" class="nav-link">blogs</a>
    </nav>

    <!-- icon hiển thị các hộp thoại -->
    <div class="icons">
        <div class="fas fa-bars mr" id="navbar"></div>
        <div class="fas fa-search mr" id="search-form"></div>
        <div class="fas fa-shopping-cart mr" id="shopping-cart"></div>
        <div class="fas fa-user" id="login-form"></div>
    </div>

    <!-- hộp thoại tìm kiếm -->
    <form action="#" class="search-form box-header">
        <input type="search" name="search" id="search-box" placeholder="Tìm kiếm.." />
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <!-- hộp thoại giỏ hàng -->
    <div class="shopping-cart box-header">
        <div class="box">
            <div class="fa-solid fa-trash-can"></div>
            <img src="<?= base_url(); ?>/public/FRONT-END/image/cart-img-1.png" alt="cart-img-1" />
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">giá: <b>40.000đ</b></span>
                <span class="qty">
                    số lượng:
                    <input type="number" class="js-select input-number" name="qty_1" value="1" min="0" max="10" />
                </span>
            </div>
        </div>

        <div class="box">
            <div class="fa-solid fa-trash-can"></div>
            <img src="<?= base_url(); ?>/public/FRONT-END/image/cart-img-2.png" alt="cart-img-1" />
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">giá: <b>30.000đ</b></span>
                <span class="qty">
                    số lượng:
                    <input type="number" class="js-select input-number" name="first" value="1" min="0" max="10" />
                </span>
            </div>
        </div>

        <div class="box">
            <div class="fa-solid fa-trash-can"></div>
            <img src="<?= base_url(); ?>/public/FRONT-END/image/cart-img-3.png" alt="cart-img-1" />
            <div class="content">
                <h3>gà nướng nguyên</h3>
                <span class="price">giá: <b>20.000đ</b></span>
                <span class="qty">
                    số lượng:
                    <input type="number" class="js-select input-number" name="first" value="1" min="0" max="10" />
                </span>
            </div>
        </div>

        <!-- tổng giá -->
        <div class="total">tổng giá: <span>90.000đ</span></div>
        <a href="#" class="btn btn-checkout">Thanh toán</a>
    </div>

    <!-- hộp thoại đăng nhập -->
    <div class="login-form box-header">
        <h3>Đăng nhập</h3>
        <div class="form-group">
            <label class="fa-solid fa-envelope"></label>
            <input type="email" name="email" class="form-control" placeholder="nhập email.." />
        </div>
        <div class="form-group">
            <label class="fa-solid fa-key"></label>
            <input type="password" name="password" class="form-control" id="password" placeholder="mật khẩu.." />
        </div>
        <div class="form-group">
            <input class="show-pass" type="checkbox" onclick="toggleShowPassword()" />
            Hiện mật khẩu
        </div>
        <p>Bạn không nhớ mật khẩu ? <a href="#">vào đây.</a></p>
        <p>Bạn chưa có tài khoản, <a href="#">tạo ngay.</a></p>

        <input type="submit" class="btn btn-login" value="đăng nhập" />
    </div>
</header>
