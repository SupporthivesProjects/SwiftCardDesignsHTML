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
                        Order History Content
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