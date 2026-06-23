<?php include 'includes/header.php'; ?>
<style>
.header-top{
    background: #0E0E0E;
}    
</style>
<!-- Section 1 Start -->
    <Section class="dash_s1">
        <div class="dash_c1">
            <div class="dash_s1left">
                <div class="dash_leftmain">
                    <div class="dash_s1titlebar">
                        <h3 class="dash_s1title">Welcome Back John Smith</h3>
                        <p class="dash_s1subtitle">Hello <b>John Smith</b> (not John Smith? <a href="#" class="dash_s1logout">Log out</a>)</p>
                    </div>
                    <p class="dash_s1subtitle">From your dashboard, update account info, password, billing and view past orders.</p>
                    <div class="dash_tabbtnbar">
                        <!-- Mobile Dropdown Button -->
                        <div class="mobile-tabs desktop_none position-relative">
                            <button class="tab-toggle-btn" id="tabToggle">
                                <span class="d-flex align-items-center gap-2">
                                    <img src="./img/dash_1.png" width="20" id="activeTabImg">
                                    <span id="activeTabName">Account Details</span>
                                </span>

                                <img src="./img/dropdown.png" class="tabdrop-arrow" id="dropdownArrow">
                            </button>
                            <div class="mobile-tab-menu">
                                <button class="mobile-tab-item active" data-bs-toggle="tab" data-bs-target="#account">
                                    <img src="./img/dash_1.png" width="18"> Account Details
                                </button>
                                <button class="mobile-tab-item" data-bs-toggle="tab" data-bs-target="#billing">
                                    <img src="./img/dash_2.png" width="18"> Billing Details
                                </button>
                                <button class="mobile-tab-item" data-bs-toggle="tab" data-bs-target="#orders">
                                    <img src="./img/dash_3.png" width="18"> Order History
                                </button>
                                <button class="mobile-tab-item" data-bs-toggle="tab" data-bs-target="#logout">
                                    <img src="./img/dash_4.png" width="18"> Sign Out
                                </button>
                            </div>
                        </div>

                        <!-- Desktop Tabs -->
                         <div class="mobile_none">
                            <div class="nav desk_tabbtnmain">
                                <button class="nav-link active desk_tabbtn" data-bs-toggle="tab" data-bs-target="#account">
                                    Account Details
                                    <img class="normal_icon icon" src="./img/dash_1.png">
                                    <img class="active_icon icon" src="./img/dash_1a.png">
                                </button>

                                <button class="nav-link desk_tabbtn" data-bs-toggle="tab" data-bs-target="#billing">
                                    Billing Details
                                    <img class="normal_icon icon" src="./img/dash_2.png">
                                    <img class="active_icon icon" src="./img/dash_2a.png">
                                </button>

                                <button class="nav-link desk_tabbtn" data-bs-toggle="tab" data-bs-target="#orders">
                                    Order History
                                    <img class="normal_icon icon" src="./img/dash_3.png">
                                    <img class="active_icon icon" src="./img/dash_3a.png">
                                </button>

                                <button class="nav-link desk_tabbtn" data-bs-toggle="tab" data-bs-target="#logout">
                                    Sign Out
                                    <img class="normal_icon icon" src="./img/dash_4.png">
                                    <img class="active_icon icon" src="./img/dash_4.png">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Overlay -->
            <div class="menu-overlay"></div>

            <div class="dash_s1right">
                <!-- Tab Contents -->
                <div class="tab-content tab_contentmain">
                    <!-- ACOUNT CONTENT -->
                    <div class="tab-pane fade show active" id="account">
                        <div class="ac_tab">
                            <div class="ac_tabinner">
                                <div class="ac_tabinnertop">
                                    <div class="tabfirst_last">
                                        <input type="text" class="form-control tab_textbox" id="" placeholder="John">
                                        <input type="text" class="form-control tab_textbox" id="" placeholder="Jsmith@email.com">
                                        <div class="password-wrapper">
                                            <input type="password" class="form-control tab_textbox" placeholder="Password">
                                            <img src="./img/eye-close.png" class="toggle-eye" alt="toggle eye">
                                        </div>
                                    </div>
                                    <div class="tabfirst_last">
                                        <input type="text" class="form-control tab_textbox" id="" placeholder="Smith">
                                        <input type="text" class="form-control tab_textbox" id="" placeholder="+44 123 456 789">
                                        <div class="password-wrapper">
                                            <input type="password" class="form-control tab_textbox" placeholder="Confirm Password">
                                            <img src="./img/eye-close.png" class="toggle-eye" alt="toggle eye">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab_conbtnbar">
                                    <button class="tab_conbtn">Update Account Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BILLING CONTENT -->
                    <div class="tab-pane fade" id="billing">
                        <div class="ac_tab">
                            <div class="ac_tabinner bc_tabinner">
                                <div class="ac_tabinnertop">
                                    <div class="tabfirst_last">
                                        <input type="text" class="form-control tab_textbox" id="" placeholder="100 Edenbridge Road">
                                        <input type="text" class="form-control tab_textbox" id="" placeholder="London">
                                        <input type="text" class="form-control tab_textbox" id="" placeholder="United Kingdom">
                                    </div>
                                    <div class="tabfirst_last">
                                        <input type="text" class="form-control tab_textbox" id="" placeholder="Lincone Place">
                                        <input type="text" class="form-control tab_textbox" id="" placeholder="London">
                                        <div class="password-wrapper">
                                            <input type="password" class="form-control tab_textbox" placeholder="B28 8PR">
                                            <img src="./img/eye-close.png" class="toggle-eye" alt="toggle eye">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab_conbtnbar">
                                    <button class="tab_conbtn">Update Account Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ORDER HISTORY -->
                    <div class="tab-pane fade" id="orders">
                        <div class="oh_tab">
                            <div class="desktop_none">
                                <p class="table_swipetext"><img src="./img/swipedot.png">Swipe to view table</p>
                            </div>
                            <div class="oh_tabinner">
                                <div class="table-responsive order-table-wrapper">
                                    <table class="table mb-0 align-middle table-striped oder_tablemain">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Date</th>
                                                <th class="text-center">QTY</th>
                                                <th class="text-center">Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12345</td>
                                                <td>01.12.2023</td>
                                                <td class="text-center">x3</td>
                                                <td class="text-center">£199.75</td>
                                                <td class="text-center"><a href="#" data-bs-toggle="modal" data-bs-target="#orderModal">Order Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>12345</td>
                                                <td>01.12.2023</td>
                                                <td class="text-center">x3</td>
                                                <td class="text-center">£199.75</td>
                                                <td class="text-center"><a href="./orderdetails.php">Order Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>12345</td>
                                                <td>01.12.2023</td>
                                                <td class="text-center">x3</td>
                                                <td class="text-center">£199.75</td>
                                                <td class="text-center"><a href="#">Order Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>12345</td>
                                                <td>01.12.2023</td>
                                                <td class="text-center">x3</td>
                                                <td class="text-center">£199.75</td>
                                                <td class="text-center"><a href="#">Order Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>12345</td>
                                                <td>01.12.2023</td>
                                                <td class="text-center">x3</td>
                                                <td class="text-center">£199.75</td>
                                                <td class="text-center"><a href="#">Order Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>12345</td>
                                                <td>01.12.2023</td>
                                                <td class="text-center">x3</td>
                                                <td class="text-center">£199.75</td>
                                                <td class="text-center"><a href="#">Order Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>12345</td>
                                                <td>01.12.2023</td>
                                                <td class="text-center">x3</td>
                                                <td class="text-center">£199.75</td>
                                                <td class="text-center"><a href="#">Order Details</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- LOGOUT -->
                    <div class="tab-pane fade" id="logout">
                        Logout Content
                    </div>
                </div>
            </div>
        </div>
    </Section>
<!-- Section 1 Start -->

<!-- Order Modal -->
 <div class="modal fade" id="orderModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered order-modal">
        <img src="./img/modal_topimg.svg">
        <div class="modal-content order-modal-content">
            <!-- Header -->
            <div class="modal-header order_modalheader">
                <h2 class="order_modalid">Order: #1234567</h2>
                <div class="order_titleleft">
                    <!-- Order Status -->
                    <div class="d-flex justify-content-end order-status">
                        <div class="status_card">
                            <img src="./img/status1.png">
                            <p>Order Placed</p>
                        </div>
                        <div class="status_card">
                            <img src="./img/status2.png">
                            <p>On Review</p>
                        </div>
                        <div class="status_card">
                            <img src="./img/status3.png">
                            <p>Pending</p>
                        </div>
                        <div class="status_card active">
                            <img src="./img/status4.png">
                            <p>Delivered</p>
                        </div>
                    </div>
                    <button type="button" class="btn-close modal_closebtn" data-bs-dismiss="modal"><img src="./img/modal_cross.svg"></button>
                </div>
            </div>
            <!-- Body -->
            <div class="modal-body order_modalbody">
                <div class="modal_tablemain">
                    <!-- Purchase Overview -->
                    <div class="modal_table1">
                        <div class="card order-card">
                            <div class="card-header">
                                Purchase Overview
                            </div>
                            <div class="card-body p-0">
                                <table class="table mb-0 modal_table1inner">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product</th>
                                            <th class="text-center">Type</th>
                                            <th class="text-center">Qty</th>
                                            <th class="text-end">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Learning Gutenberg</td>
                                            <td class="text-center">Video</td>
                                            <td class="text-center">1</td>
                                            <td class="text-end">$100.00</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Learning Gutenberg - Video</td>
                                            <td class="text-center">Video</td>
                                            <td class="text-center">2</td>
                                            <td class="text-end">$100.00</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Learning Gutenberg - Video</td>
                                            <td class="text-center">Video</td>
                                            <td class="text-center">3</td>
                                            <td class="text-end">$100.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Order Amount -->
                    <div class="modal_table2">
                        <div class="card order-card">
                            <div class="card-header">
                                Order Amount
                            </div>
                            <div class="card-body">
                                <div class="modal_table2innerbody">
                                    <p class="modal_table2title">Subtotal</p>
                                    <p class="modal_table2subtitle">$10.00</p>
                                </div>
                                <div class="modal_table2innerbody">
                                    <p class="modal_table2title">VAT</p>
                                    <p class="modal_table2subtitle">0.00</p>
                                </div>
                                <div class="modal_table2innerbody">
                                    <p class="modal_table2title">Discount</p>
                                    <p class="modal_table2subtitle">0.00</p>
                                </div>
                                <div class="modal_table2innerbody">
                                    <p class="modal_table2title">Total Paid</p>
                                    <p class="modal_table2subtitle">$10.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Order Information -->
                    <div class="modal_table3">
                        <div class="card order-card">
                            <div class="card-header">
                                Order Information
                            </div>
                            <div class="card-body">
                                <div class="modal_table2innerbody">
                                    <p class="modal_table2title">Order #:</p>
                                    <p class="modal_table2subtitle">0000000</p>
                                </div>
                                <div class="modal_table2innerbody">
                                    <p class="modal_table2title">Order Date:</p>
                                    <p class="modal_table2subtitle">01-01-2025 00:00 AM</p>
                                </div>
                                <div class="modal_table2innerbody">
                                    <p class="modal_table2title">Payment Status:</p>
                                    <p class="modal_table2subtitle">Paid</p>
                                </div>
                                <div class="modal_table2innerbody">
                                    <p class="modal_table2title">Total Paid:</p>
                                    <p class="modal_table2subtitle">$400.00</p>
                                </div>
                                <div class="modal_table2innerbody">
                                    <p class="modal_table2title">Payment Method:</p>
                                    <p class="modal_table2subtitle">Debit/Credit Card</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Billing Information -->
                    <div class="modal_table4">
                        <div class="card order-card">
                            <div class="card-header">
                                Billing Information
                            </div>
                            <div class="card-body">
                                <div class="modal_table2innerbody">
                                    <p class="modal_table2title">Name:</p>
                                    <p class="modal_table2subtitle">John Smith</p>
                                </div>
                                <div class="modal_table2innerbody">
                                    <p class="modal_table2title">Email:</p>
                                    <p class="modal_table2subtitle">Johnsmith@gmail.com</p>
                                </div>
                                <div class="modal_table2innerbody">
                                    <p class="modal_table2title">Phone:</p>
                                    <p class="modal_table2subtitle">+00 123 456 789</p>
                                </div>
                                <div class="modal_table2innerbody">
                                    <p class="modal_table2title">Address</p>
                                    <p class="modal_table2subtitle">
                                        123 Street,<br>
                                        Address line 1<br>
                                        USA, 123 ABC
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
<script>
    const toggleBtn = document.querySelector("#tabToggle");
    const menu = document.querySelector(".mobile-tab-menu");
    const overlay = document.querySelector(".menu-overlay");
    const activeName = document.querySelector("#activeTabName");
    const activeImg = document.querySelector("#activeTabImg");
    const dropdownArrow = document.querySelector("#dropdownArrow");

    toggleBtn.addEventListener("click", () => {
        menu.classList.toggle("show");
        overlay.classList.toggle("show");
        dropdownArrow.classList.toggle("rotate");
    });

    overlay.addEventListener("click", () => {
        menu.classList.remove("show");
        overlay.classList.remove("show");
        dropdownArrow.classList.remove("rotate");
    });

    document.querySelectorAll(".mobile-tab-item").forEach(item => {
        item.addEventListener("click", function () {
            // Update text
            activeName.innerText = this.innerText.trim();
            // Update image
            activeImg.src = this.querySelector("img").src;
            // Close menu
            menu.classList.remove("show");
            overlay.classList.remove("show");
            // Reset arrow
            dropdownArrow.classList.remove("rotate");
            // Trigger Bootstrap tab
            const target = this.getAttribute("data-bs-target");
            const tabTrigger = document.querySelector(
                `.nav-link[data-bs-target="${target}"]`
            );
            if (tabTrigger) {
                const tab = new bootstrap.Tab(tabTrigger);
                tab.show();
            }
        });
    });
</script>
<script>
document.querySelectorAll(".toggle-eye").forEach((eye) => {
    eye.addEventListener("click", function () {

        const wrapper = this.parentElement;
        const input = wrapper.querySelector(".tab_textbox");

        if (input.type === "password") {
            input.type = "text";
            this.src = "./img/eye-open.png";
        } else {
            input.type = "password";
            this.src = "./img/eye-close.png";
        }
    });
});
</script>